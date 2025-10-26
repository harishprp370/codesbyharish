<?php
session_start();
include 'includes/config.php';

// Redirect if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: admin/dashboard.php');
    exit();
}

$loginError = '';
$loginStatus = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if this is a login form submission
    $isLoginForm = isset($_POST['login']) || 
                   (isset($_POST['username']) && isset($_POST['password']));
    
    if ($isLoginForm) {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $remember = isset($_POST['remember']) ? true : false;
        
        // Basic validation
        if (empty($username) || empty($password)) {
            $loginError = 'Please enter both username and password.';
        } else {
            try {
                // Check database connection
                if (!$pdo) {
                    throw new Exception("Database connection not available");
                }
                
                // Create admin_users table if it doesn't exist
                $createUserTable = "CREATE TABLE IF NOT EXISTS admin_users (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(100) UNIQUE NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    email VARCHAR(255) UNIQUE NOT NULL,
                    status ENUM('active', 'inactive') DEFAULT 'active',
                    last_login DATETIME NULL,
                    login_attempts INT DEFAULT 0,
                    locked_until DATETIME NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
                $pdo->exec($createUserTable);
                
                // Create other required tables
                $createRememberTable = "CREATE TABLE IF NOT EXISTS remember_tokens (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT NOT NULL,
                    token VARCHAR(255) NOT NULL,
                    expires_at DATETIME NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
                $pdo->exec($createRememberTable);
                
                $createLoginLogTable = "CREATE TABLE IF NOT EXISTS login_logs (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT NULL,
                    ip_address VARCHAR(45),
                    user_agent TEXT,
                    status ENUM('success', 'failed') NOT NULL,
                    attempted_username VARCHAR(100) NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
                $pdo->exec($createLoginLogTable);
                
                // Check if there are any admin users, if not create a default one
                $userCount = $pdo->query("SELECT COUNT(*) FROM admin_users")->fetchColumn();
                if ($userCount == 0) {
                    $defaultUsername = 'admin';
                    $defaultPassword = password_hash('admin123', PASSWORD_DEFAULT);
                    $defaultEmail = 'admin@codebyharish.com';
                    
                    $insertAdmin = "INSERT INTO admin_users (username, password, email, status) VALUES (?, ?, ?, ?)";
                    $stmt = $pdo->prepare($insertAdmin);
                    $stmt->execute([$defaultUsername, $defaultPassword, $defaultEmail, 'active']);
                }
                
                // Check if user exists
                $sql = "SELECT id, username, password, email, status, last_login, login_attempts, locked_until 
                        FROM admin_users WHERE username = ? OR email = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$username, $username]);
                $user = $stmt->fetch();
                
                if ($user) {
                    // Check if account is locked
                    if ($user['locked_until'] && new DateTime() < new DateTime($user['locked_until'])) {
                        $lockTime = new DateTime($user['locked_until']);
                        $loginError = 'Account is temporarily locked. Try again after ' . 
                                    $lockTime->format('Y-m-d H:i:s');
                    } 
                    // Check if account is active
                    elseif ($user['status'] !== 'active') {
                        $loginError = 'Your account is inactive. Please contact administrator.';
                    } 
                    // Verify password
                    elseif (password_verify($password, $user['password'])) {
                        // Reset login attempts
                        $resetSql = "UPDATE admin_users SET 
                                    login_attempts = 0, 
                                    locked_until = NULL, 
                                    last_login = ? 
                                    WHERE id = ?";
                        $resetStmt = $pdo->prepare($resetSql);
                        $resetStmt->execute([
                            date('Y-m-d H:i:s'),
                            $user['id']
                        ]);
                        
                        // Set session variables
                        $_SESSION['admin_logged_in'] = true;
                        $_SESSION['admin_id'] = $user['id'];
                        $_SESSION['admin_username'] = $user['username'];
                        $_SESSION['admin_email'] = $user['email'];
                        
                        // Set remember me cookie if checked
                        if ($remember) {
                            $token = bin2hex(random_bytes(32));
                            $expires = time() + (30 * 24 * 60 * 60); // 30 days
                            
                            setcookie('remember_token', $token, $expires, '/', '', true, true);
                            
                            // Store token in database
                            $tokenSql = "INSERT INTO remember_tokens (user_id, token, expires_at) 
                                        VALUES (?, ?, ?)";
                            $tokenStmt = $pdo->prepare($tokenSql);
                            $tokenStmt->execute([
                                $user['id'],
                                password_hash($token, PASSWORD_DEFAULT),
                                date('Y-m-d H:i:s', $expires)
                            ]);
                        }
                        
                        // Log successful login
                        $logSql = "INSERT INTO login_logs (user_id, ip_address, user_agent, status, created_at) 
                                  VALUES (?, ?, ?, 'success', ?)";
                        $logStmt = $pdo->prepare($logSql);
                        $logStmt->execute([
                            $user['id'],
                            $_SERVER['REMOTE_ADDR'] ?? 'unknown',
                            $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
                            date('Y-m-d H:i:s')
                        ]);
                        
                        // Redirect to dashboard
                        header('Location: admin/dashboard.php');
                        exit();
                        
                    } else {
                        // Invalid password - increment login attempts
                        $attempts = $user['login_attempts'] + 1;
                        $lockedUntil = null;
                        
                        // Lock account after 5 failed attempts
                        if ($attempts >= 5) {
                            $lockedUntil = date('Y-m-d H:i:s', time() + (15 * 60)); // 15 minutes
                            $loginError = 'Too many failed attempts. Account locked for 15 minutes.';
                        } else {
                            $remaining = 5 - $attempts;
                            $loginError = "Invalid credentials. $remaining attempts remaining.";
                        }
                        
                        // Update login attempts
                        $attemptSql = "UPDATE admin_users SET 
                                      login_attempts = ?, 
                                      locked_until = ? 
                                      WHERE id = ?";
                        $attemptStmt = $pdo->prepare($attemptSql);
                        $attemptStmt->execute([
                            $attempts,
                            $lockedUntil,
                            $user['id']
                        ]);
                        
                        // Log failed login
                        $failLogSql = "INSERT INTO login_logs (user_id, ip_address, user_agent, status, created_at) 
                                      VALUES (?, ?, ?, 'failed', ?)";
                        $failLogStmt = $pdo->prepare($failLogSql);
                        $failLogStmt->execute([
                            $user['id'],
                            $_SERVER['REMOTE_ADDR'] ?? 'unknown',
                            $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
                            date('Y-m-d H:i:s')
                        ]);
                    }
                } else {
                    $loginError = 'Invalid username or password.';
                    
                    // Log failed login attempt
                    $logSql = "INSERT INTO login_logs (ip_address, user_agent, status, attempted_username, created_at) 
                              VALUES (?, ?, 'failed', ?, ?)";
                    $logStmt = $pdo->prepare($logSql);
                    $logStmt->execute([
                        $_SERVER['REMOTE_ADDR'] ?? 'unknown',
                        $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
                        $username,
                        date('Y-m-d H:i:s')
                    ]);
                }
                
            } catch (PDOException $e) {
                $loginError = 'Database error occurred. Please try again later.';
                error_log("Login error: " . $e->getMessage());
            } catch (Exception $e) {
                $loginError = 'System error occurred. Please try again later.';
                error_log("Login system error: " . $e->getMessage());
            }
        }
    }
}

// Check remember me token
if (!isset($_SESSION['admin_logged_in']) && isset($_COOKIE['remember_token'])) {
    try {
        $token = $_COOKIE['remember_token'];
        
        $sql = "SELECT rt.user_id, u.username, u.email, u.status 
                FROM remember_tokens rt 
                JOIN admin_users u ON rt.user_id = u.id 
                WHERE rt.expires_at > NOW() AND u.status = 'active'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        while ($row = $stmt->fetch()) {
            $tokenSql = "SELECT token FROM remember_tokens WHERE user_id = ? AND expires_at > NOW()";
            $tokenStmt = $pdo->prepare($tokenSql);
            $tokenStmt->execute([$row['user_id']]);
            
            while ($tokenRow = $tokenStmt->fetch()) {
                if (password_verify($token, $tokenRow['token'])) {
                    // Auto login
                    $_SESSION['admin_logged_in'] = true;
                    $_SESSION['admin_id'] = $row['user_id'];
                    $_SESSION['admin_username'] = $row['username'];
                    $_SESSION['admin_email'] = $row['email'];
                    
                    header('Location: admin/dashboard.php');
                    exit();
                }
            }
        }
    } catch (PDOException $e) {
        // Clear invalid cookie
        setcookie('remember_token', '', time() - 3600, '/');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - CodeByHarish</title>
    <meta name="description" content="Secure admin login portal for CodeByHarish portfolio management">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --bg-primary: #ffffff;
            --bg-secondary: #f9fafb;
            --border-color: #e5e7eb;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --error-color: #dc2626;
            --success-color: #16a34a;
        }

        [data-theme="dark"] {
            --text-primary: #f9fafb;
            --text-secondary: #d1d5db;
            --bg-primary: #111827;
            --bg-secondary: #1f2937;
            --border-color: #374151;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            pointer-events: none;
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 450px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .login-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .login-subtitle {
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        .alert {
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.9rem;
            animation: slideDown 0.3s ease-out;
        }

        .alert-error {
            background: rgba(220, 38, 38, 0.1);
            border: 1px solid rgba(220, 38, 38, 0.2);
            color: var(--error-color);
        }

        .alert-success {
            background: rgba(22, 163, 74, 0.1);
            border: 1px solid rgba(22, 163, 74, 0.2);
            color: var(--success-color);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-weight: 500;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: var(--bg-primary);
            color: var(--text-primary);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .form-input.error {
            border-color: var(--error-color);
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            font-size: 1rem;
            pointer-events: none;
        }

        .form-label + .input-icon {
            top: calc(50% + 0.75rem);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            cursor: pointer;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-label + .form-input + .input-icon + .password-toggle {
            top: calc(50% + 0.75rem);
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checkbox-input {
            width: 16px;
            height: 16px;
            accent-color: var(--primary-color);
        }

        .checkbox-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            cursor: pointer;
        }

        .forgot-link {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .forgot-link:hover {
            color: var(--secondary-color);
        }

        .login-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .btn-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-loading {
            display: none;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .spinner {
            width: 16px;
            height: 16px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .login-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .back-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--primary-color);
        }

        .theme-toggle {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .security-info {
            background: rgba(37, 99, 235, 0.1);
            border: 1px solid rgba(37, 99, 235, 0.2);
            border-radius: 12px;
            padding: 1rem;
            margin-top: 1.5rem;
        }

        .security-info h4 {
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .security-info ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .security-info li {
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-bottom: 0.25rem;
            padding-left: 1rem;
            position: relative;
        }

        .security-info li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--primary-color);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .login-card {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }

            .login-title {
                font-size: 1.5rem;
            }

            .form-row {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }
        }

        /* Dark mode styles */
        [data-theme="dark"] .login-card {
            background: rgba(17, 24, 39, 0.95);
            border: 1px solid rgba(55, 65, 81, 0.3);
        }

        [data-theme="dark"] .form-input {
            background: var(--bg-secondary);
        }
    </style>
</head>

<body>
    <!-- Theme Toggle -->
    <button class="theme-toggle" id="themeToggle" title="Toggle theme">
        <i class="fas fa-moon"></i>
    </button>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-code"></i>
                </div>
                <h1 class="login-title">Admin Portal</h1>
                <p class="login-subtitle">Secure access to CodeByHarish dashboard</p>
            </div>

            <?php if (!empty($loginError)): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span><?php echo htmlspecialchars($loginError); ?></span>
                </div>
            <?php endif; ?>

            <form class="login-form" method="POST" action="" id="loginForm" novalidate>
                <div class="form-group">
                    <label for="username" class="form-label">Username or Email</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="form-input" 
                        required
                        autocomplete="username"
                        placeholder="Enter your username or email"
                        value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
                    >
                    <i class="fas fa-user input-icon"></i>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-input" 
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    >
                    <i class="fas fa-lock input-icon"></i>
                    <i class="fas fa-eye password-toggle" id="passwordToggle" title="Show password"></i>
                </div>

                <div class="form-row">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="remember" name="remember" class="checkbox-input" value="1">
                        <label for="remember" class="checkbox-label">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" name="login" value="Sign In" class="login-btn" id="loginBtn">
                    <span class="btn-content">
                        <i class="fas fa-sign-in-alt"></i>
                        Sign In
                    </span>
                    <span class="btn-loading">
                        <div class="spinner"></div>
                        Signing in...
                    </span>
                </button>
            </form>

            <div class="security-info">
                <h4>
                    <i class="fas fa-shield-alt"></i>
                    Security Features
                </h4>
                <ul>
                    <li>Account locks after 5 failed attempts</li>
                    <li>Session timeout for security</li>
                    <li>Encrypted password storage</li>
                    <li>Login activity monitoring</li>
                </ul>
            </div>

            <div class="login-footer">
                <a href="index.php" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    Back to Website
                </a>
            </div>
        </div>
    </div>

    <script>
        // Enhanced form submission handling
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            // Add the login button value explicitly
            const loginBtn = document.createElement('input');
            loginBtn.type = 'hidden';
            loginBtn.name = 'login';
            loginBtn.value = 'Sign In';
            this.appendChild(loginBtn);
        });

        // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;

        themeToggle.addEventListener('click', () => {
            const currentTheme = body.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            const icon = themeToggle.querySelector('i');
            icon.className = newTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        });

        // Load saved theme
        const savedTheme = localStorage.getItem('theme') || 'light';
        body.setAttribute('data-theme', savedTheme);
        const icon = themeToggle.querySelector('i');
        icon.className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';

        // Password toggle
        const passwordToggle = document.getElementById('passwordToggle');
        const passwordInput = document.getElementById('password');

        passwordToggle.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            passwordToggle.className = type === 'password' ? 'fas fa-eye password-toggle' : 'fas fa-eye-slash password-toggle';
        });

        // Form submission with loading state
        const loginForm = document.getElementById('loginForm');
        const loginBtn = document.getElementById('loginBtn');
        const btnContent = loginBtn.querySelector('.btn-content');
        const btnLoading = loginBtn.querySelector('.btn-loading');

        loginForm.addEventListener('submit', function(e) {
            // Show loading state
            btnContent.style.display = 'none';
            btnLoading.style.display = 'flex';
            loginBtn.disabled = true;
            
            // Remove error styling
            document.querySelectorAll('.form-input.error').forEach(input => {
                input.classList.remove('error');
            });
        });

        // Real-time validation
        const inputs = document.querySelectorAll('.form-input[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', validateField);
            input.addEventListener('input', clearFieldError);
        });

        function validateField(e) {
            const field = e.target;
            const value = field.value.trim();
            
            if (!value) {
                showFieldError(field, 'This field is required');
                return false;
            }
            
            if (field.type === 'email' && value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    showFieldError(field, 'Please enter a valid email address');
                    return false;
                }
            }
            
            clearFieldError(e);
            return true;
        }

        function showFieldError(field, message) {
            field.classList.add('error');
        }

        function clearFieldError(e) {
            const field = e.target;
            field.classList.remove('error');
        }

        // Auto-focus on first input
        document.getElementById('username').focus();

        // Clear form on page refresh (security)
        window.addEventListener('beforeunload', () => {
            loginForm.reset();
        });

        // Prevent form resubmission on page refresh
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>
