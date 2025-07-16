<?php
include 'session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $id = uniqid();
    $_SESSION['tasks'][$id] = ['name' => $name, 'duration' => $duration];
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Tugas</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h1>Tambah Tugas</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Nama Tugas" required>
        <input type="number" name="duration" placeholder="Lama Waktu (jam)" required>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">← Kembali</a>
</div>
</body>
</html>
