<?php
// db.php - Database connection

$host = "localhost";         // Database host (usually localhost)
$db_name = "nea_shoe_shop";     // Database name
$username = "root";         // MySQL username (default 'root' for local development)
$password = "";             // MySQL password (empty by default on some local setups)

// Create connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
