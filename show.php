<!-- henerate andshow password using password hash in php -->
<?php
$password = "123456789";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo "Original Password: " . htmlspecialchars($password) . "<br>";
echo "Hashed Password: " . htmlspecialchars($hashedPassword) . "<br>";
?>