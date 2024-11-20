<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <h1>Change Your Password</h1>
    <form action="change_password.php" method="POST">
        <label for="password">New Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>
