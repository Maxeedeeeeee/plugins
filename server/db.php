<?php
$host = 'sql205.infinityfree.com'; // MySQL hostname
$db = 'if0_37877650_mysql';       // MySQL database name
$user = 'if0_37877650';           // MySQL username
$pass = 'dudestopnow';     // Replace with the actual MySQL password
$port = 3306;                     // MySQL port (optional, default is 3306)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
