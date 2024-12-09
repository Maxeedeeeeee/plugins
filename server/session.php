<?php
session_start();

if (isset($_SESSION['role'])) {
    echo json_encode(['status' => 'success', 'role' => $_SESSION['role']]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Not logged in']);
}
?>

