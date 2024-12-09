<?php
$host = 'sql205.infinityfree.com';
$db = 'if0_37877650_mysql';
$user = 'if0_37877650';
$pass = 'dudestopnow'; // Replace with your actual password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
