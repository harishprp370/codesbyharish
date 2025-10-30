<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodesByHarish - Portfolio | Web Developer & Designer</title>
    <meta name="description" content="CodesByHarish - Professional web developer and designer portfolio showcasing innovative projects, skills, and creative solutions.">
    <meta name="keywords" content="web developer, portfolio, web design, frontend, backend, full stack developer, harish">
    <meta name="author" content="Harish">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://codesbyharish.in">
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="assets/favicon.png">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="CodesByHarish - Portfolio">
    <meta property="og:description" content="Professional web developer and designer portfolio">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://codesbyharish.in">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,kn,te,ta,ar,en-US,en-GB',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-theme="dark"] {
            --text-primary: #f9fafb;
            --text-secondary: #d1d5db;
            --bg-primary: #111827;
            --bg-secondary: #1f2937;
            --border-color: #374151;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: var(--transition);
            cursor: none;
        }

        /* Enhanced Cursor for Better Sync */
        .cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.05s ease-out; /* Faster transition for sync */
            mix-blend-mode: difference; /* For better visibility */
        }

        .cursor-follower {
            position: fixed;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--primary-color);
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out; /* Smooth lag for follower */
            opacity: 0.6;
        }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            z-index: 1000;
            transition: var(--transition);
        }

        [data-theme="dark"] .header {
            background: rgba(17, 24, 39, 0.95);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem 0; /* Added 1rem padding-top for space */
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px; /* Increased height for better spacing */
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        /* Enhanced Nav Links for Attractiveness */
        .nav-link {
            text-decoration: none;
            color: var(--text-primary);
            font-weight: 500;
            position: relative;
            transition: var(--transition);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            color: var(--primary-color);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.2);
        }

        .nav-link.active {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);
        }

        .nav-link.active::after {
            display: none; /* Remove underline for active state */
        }

        /* Controls */
        .nav-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .theme-toggle, .lang-toggle {
            background: linear-gradient(45deg, var(--bg-secondary), var(--border-color));
            border: none;
            color: var(--text-primary);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .theme-toggle::before, .lang-toggle::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(37, 99, 235, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .theme-toggle:hover::before, .lang-toggle:hover::before {
            width: 100%;
            height: 100%;
        }

        .theme-toggle:hover, .lang-toggle:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3);
        }

        .language-dropdown {
            position: relative;
        }

        /* Enhanced Language Menu */
        .lang-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: linear-gradient(135deg, var(--bg-primary), var(--bg-secondary));
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 0.5rem 0;
            min-width: 160px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            opacity: 0;
            transform: translateY(-10px) scale(0.95);
            visibility: hidden;
            transition: var(--transition);
            margin-top: 0.5rem;
            backdrop-filter: blur(10px);
        }

        .lang-menu.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            visibility: visible;
        }

        .lang-option {
            display: block;
            padding: 0.75rem 1.5rem;
            color: var(--text-primary);
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.95rem;
            position: relative;
        }

        .lang-option:hover {
            background: linear-gradient(90deg, rgba(37, 99, 235, 0.1), transparent);
            color: var(--primary-color);
            transform: translateX(5px);
        }

        /* Mobile Menu */
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 70px;
                left: 0;
                right: 0;
                background: linear-gradient(135deg, var(--bg-primary), var(--bg-secondary));
                flex-direction: column;
                padding: 2rem;
                transform: translateY(-120%);
                opacity: 0;
                visibility: hidden;
                transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.4s ease;
                border-bottom: 1px solid var(--border-color);
                backdrop-filter: blur(15px);
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
                border-radius: 0 0 20px 20px;
            }

            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .nav-link {
                margin: 0.5rem 0;
                padding: 1rem;
                text-align: center;
                border-radius: 12px;
                font-size: 1.1rem;
            }

            .nav-link:hover {
                transform: translateY(-2px) scale(1.02);
            }

            .mobile-toggle {
                display: block;
                background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
                border: none;
                color: white;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: var(--transition);
                box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
            }

            .mobile-toggle:hover {
                transform: scale(1.1) rotate(90deg);
            }

            .cursor, .cursor-follower {
                display: none;
            }
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            animation: fadeInDown 0.6s ease-out;
        }

        /* Hide Google Translate Element */
        #google_translate_element {
            display: none !important;
            visibility: hidden !important;
            position: absolute !important;
            left: -9999px !important;
        }
    </style>
</head>
<body>
    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <a href="#home" class="logo">CodesByHarish</a>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link active">Home</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="projects.php" class="nav-link">Projects</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>

            <div class="nav-controls">
                <div class="language-dropdown">
                    <button class="lang-toggle" id="langToggle">
                        <i class="fas fa-globe"></i>
                    </button>
                    <div class="lang-menu" id="langMenu">
                        <a href="#" class="lang-option" data-lang="en">English</a>
                        <a href="#" class="lang-option" data-lang="hi">हिंदी</a>
                        <a href="#" class="lang-option" data-lang="kn">ಕನ್ನಡ</a>
                        <a href="#" class="lang-option" data-lang="te">తెలుగు</a>
                        <a href="#" class="lang-option" data-lang="ta">தமிழ்</a>
                        <a href="#" class="lang-option" data-lang="ar">العربية</a>
                    </div>
                </div>
                
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
                
                <button class="mobile-toggle" id="mobileToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        
        <!-- Hidden Google Translate Element -->
        <div id="google_translate_element"></div>
    </header>

    <script>
        // Enhanced Custom Cursor with Better Sync
        const cursor = document.querySelector('.cursor');
        const cursorFollower = document.querySelector('.cursor-follower');

        document.addEventListener('mousemove', (e) => {
            cursor.style.transform = `translate(${e.clientX - 10}px, ${e.clientY - 10}px)`; // Direct transform for instant sync
            cursorFollower.style.transform = `translate(${e.clientX - 20}px, ${e.clientY - 20}px)`; // Slight lag via CSS transition
        });

        // Theme Toggle
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

        // Language Toggle
        const langToggle = document.getElementById('langToggle');
        const langMenu = document.getElementById('langMenu');

        langToggle.addEventListener('click', () => {
            langMenu.classList.toggle('active');
        });

        // Enhanced Active Link Management
        function setActiveLink() {
            const currentPath = window.location.pathname.split('/').pop() || 'index.php'; // Get current page
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        }

        // Call on load
        setActiveLink();

        // Enhanced Click Handler
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                e.target.classList.add('active');
                
                // Close mobile menu if open
                navMenu.classList.remove('active');
                mobileToggle.querySelector('i').className = 'fas fa-bars';
            });
        });

        // Enhanced Language Selection with Better Merging
        document.querySelectorAll('.lang-option').forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                const lang = e.target.getAttribute('data-lang');
                
                // Attempt to trigger Google Translate
                const checkTranslate = setInterval(() => {
                    const select = document.querySelector('select.goog-te-combo');
                    if (select) {
                        select.value = lang;
                        select.dispatchEvent(new Event('change', { bubbles: true }));
                        // Fallback: Reload page to apply translation if event doesn't work
                        setTimeout(() => {
                            if (!document.body.classList.contains('translated')) { // Check if translated (rough check)
                                window.location.reload();
                            }
                        }, 1000);
                        clearInterval(checkTranslate);
                    }
                }, 100);
                
                // Set a flag for translation check
                document.body.classList.add('translating');
                
                langMenu.classList.remove('active');
            });
        });

        // Listen for translation completion (rough check)
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.classList.remove('translating');
                document.body.classList.add('translated');
            }, 2000);
        });

        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            icon.className = navMenu.classList.contains('active') ? 'fas fa-times' : 'fas fa-bars';
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!langToggle.contains(e.target) && !langMenu.contains(e.target)) {
                langMenu.classList.remove('active');
            }
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = body.getAttribute('data-theme') === 'dark' 
                    ? 'rgba(17, 24, 39, 0.98)' 
                    : 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.background = body.getAttribute('data-theme') === 'dark' 
                    ? 'rgba(17, 24, 39, 0.95)' 
                    : 'rgba(255, 255, 255, 0.95)';
            }
        });
    </script>
</body>
</html>
