<!-- henerate andshow password using password hash in php -->
<?php
$password = "1234";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo "Original Password: " . htmlspecialchars($password) . "<br>";
echo "Hashed Password: " . htmlspecialchars($hashedPassword) . "<br>";
?>