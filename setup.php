<?php
// setup.php

// Define the database path
$dbPath = 'db/database.sqlite';

// Check if the database file already exists. If not, create it.
if (!file_exists($dbPath)) {
    // Create SQLite database file and connect to it
    $db = new PDO('sqlite:' . $dbPath);
    
    // Create users table if it doesn't exist
    $query = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        password TEXT NOT NULL
    )";
    $db->exec($query);
    
    // Insert a dummy user with a password
    $query = "INSERT INTO users (password) VALUES ('oldpassword123')";
    $db->exec($query);

    echo "Database setup complete!";
} else {
    echo "Database already exists!";
}
?>
