<?php
session_start();
include 'db.php';

if ($_SESSION['role'] !== 'admin') {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO plugins (name, description, version_from, version_to, java_version, download_url, logo_url, created_by)
                           VALUES (:name, :description, :version_from, :version_to, :java_version, :download_url, :logo_url, :created_by)");
    $stmt->execute([
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'version_from' => $_POST['version_from'],
        'version_to' => $_POST['version_to'],
        'java_version' => $_POST['java_version'],
        'download_url' => $_POST['download_url'],
        'logo_url' => $_POST['logo_url'],
        'created_by' => $_SESSION['user_id']
    ]);

    echo json_encode(['status' => 'success', 'message' => 'Plugin added successfully']);
}
?>
