<?php
include 'db.php';

$version = $_GET['version'] ?? '';
$java_version = $_GET['java_version'] ?? '';

$query = "SELECT * FROM plugins WHERE version_from <= :version AND (version_to >= :version OR version_to IS NULL) AND java_version = :java_version";
$stmt = $pdo->prepare($query);
$stmt->execute([':version' => $version, ':java_version' => $java_version]);

echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>

