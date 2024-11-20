<?php
// change_password.php

// Connect to the SQLite database
$db = new PDO('sqlite:db/database.sqlite');

// Get the new password from the form submission
$newPassword = $_POST['password'];

// Update the password in the database
$query = "UPDATE users SET password = :password WHERE id = 1";
$stmt = $db->prepare($query);
$stmt->bindParam(':password', $newPassword);
$stmt->execute();

echo "Password changed to: " . htmlspecialchars($newPassword);
?>
