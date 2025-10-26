<?php
// --- Visitor Tracking Code ---

// --- Database Configuration ---
$dbHost = 'localhost'; // Or your database host
$dbName = 'u829661811_code';
$dbUser = 'u829661811_codes';
$dbPass = 'd2Z~!7H|k';
$dbCharset = 'utf8mb4';

// Data Source Name (DSN)
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use native prepared statements
];
// --- End Database Configuration ---

// Gather data
$timestamp = date('Y-m-d H:i:s');
$ipAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
$userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'N/A';
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A'; // The page they came from
$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/'; // The page they visited on your site

// No need for CSV-specific sanitization here, prepared statements will handle it.

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, $options);

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
    // Handle database errors. 
    // In a production environment, you might log this error to a file instead of displaying it.
    // For development, you can uncomment the line below to see the error.
    // error_log("Database error: " . $e->getMessage());
    // Optionally, you could die("Error connecting to database or inserting data."); 
    // but it's generally better to log and continue rendering the page if possible.
}

// --- End Visitor Tracking Code ---
?>