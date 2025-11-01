<!-- henerate andshow password using password hash in php -->
<?php
$password = "Harish@370";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo "Original Password: " . htmlspecialchars($password) . "<br>";
echo "Hashed Password: " . htmlspecialchars($hashedPassword) . "<br>";
?>