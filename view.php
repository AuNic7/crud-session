<?php
include 'session.php';
$id = $_GET['id'];
if (!isset($_SESSION['tasks'][$id])) {
    echo "Tugas tidak ditemukan.";
    exit;
}
$task = $_SESSION['tasks'][$id];
?>
<!DOCTYPE html>
<html>
<head><title>Detail Tugas</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h1>Detail Tugas</h1>
    <p><strong>🖍 Nama Tugas:</strong> <?= htmlspecialchars($task['name']) ?></p>
    <p><strong>⏱ Lama Waktu:</strong> <?= htmlspecialchars($task['duration']) ?> jam</p>
    <a href="index.php">← Kembali</a>
</div>
</body>
</html>
