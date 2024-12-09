<?php
include 'db.php';

$query = "SELECT * FROM plugins ORDER BY created_at DESC";
$stmt = $pdo->query($query);
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
