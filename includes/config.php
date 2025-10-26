<?php
// --- Database Configuration ---
$dbHost = '127.0.0.1';
$dbName = 'codesbyharish';
$dbUser = 'root';
$dbPass = 'root';
$dbCharset = 'utf8mb4';

// Data Source Name (DSN)
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Initialize PDO connection globally
$pdo = null;

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, $options);
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage());
}

// --- Visitor Tracking Code ---
if ($pdo) {
    $timestamp = date('Y-m-d H:i:s');
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'N/A';
    $referrer = $_SERVER['HTTP_REFERER'] ?? 'N/A';
    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';

    try {
        // Create visitor_logs table if it doesn't exist
        $createVisitorTable = "CREATE TABLE IF NOT EXISTS visitor_logs (
            id INT AUTO_INCREMENT PRIMARY KEY,
            visit_timestamp DATETIME NOT NULL,
            ip_address VARCHAR(45),
            user_agent TEXT,
            referrer_url TEXT,
            visited_page VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        $pdo->exec($createVisitorTable);
        
        $sql = "INSERT INTO visitor_logs (visit_timestamp, ip_address, user_agent, referrer_url, visited_page) 
                VALUES (:visit_timestamp, :ip_address, :user_agent, :referrer_url, :visited_page)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':visit_timestamp' => $timestamp,
            ':ip_address'      => $ipAddress,
            ':user_agent'      => $userAgent,
            ':referrer_url'    => $referrer,
            ':visited_page'    => $requestUri
        ]);

    } catch (PDOException $e) {
        error_log("Visitor tracking error: " . $e->getMessage());
    }
}
?>