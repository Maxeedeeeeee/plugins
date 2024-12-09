<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $version_from = $_POST['version_from'];
    $version_to = $_POST['version_to'];
    $java_version = $_POST['java_version'];
    $download_url = $_POST['download_url'];

    try {
        // Prepare and execute SQL statement
        $stmt = $pdo->prepare("
            INSERT INTO plugins (name, description, version_from, version_to, java_version, download_url)
            VALUES (:name, :description, :version_from, :version_to, :java_version, :download_url)
        ");
        $stmt->execute([
            ':name' => $name,
            ':description' => $description,
            ':version_from' => $version_from,
            ':version_to' => $version_to ?: null, // Null if empty
            ':java_version' => $java_version,
            ':download_url' => $download_url,
        ]);

        echo "Plugin added successfully!";
    } catch (PDOException $e) {
        echo "Error adding plugin: " . $e->getMessage();
    }
}
?>
