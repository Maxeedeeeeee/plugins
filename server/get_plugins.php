<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM plugins ORDER BY created_at DESC");
$plugins = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($plugins);
?>
