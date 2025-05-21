<?php
// Start session to manage user login state
session_start();

// Database configuration
// $host = 'localhost';
// $dbname = 'user_auth';
// $username = 'root'; // Change to your MySQL username
// $password = '';     // Change to your MySQL password

try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Set character encoding to UTF-8
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    // Display error message and stop execution if connection fails
    die("Connection failed: " . $e->getMessage());
}
?>