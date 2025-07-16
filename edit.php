<?php
include 'session.php';
$id = $_GET['id'];
if (!isset($_SESSION['tasks'][$id])) {
    echo "Tugas tidak ditemukan.";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['tasks'][$id]['name'] = $_POST['name'];
    $_SESSION['tasks'][$id]['duration'] = $_POST['duration'];
    header('Location: index.php');
    exit;
}
$task = $_SESSION['tasks'][$id];
?>
<!DOCTYPE html>
<html>
<head><title>Edit Tugas</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h1>Edit Tugas</h1>
    <form method="post">
        <input type="text" name="name" value="<?= htmlspecialchars($task['name']) ?>" required>
        <input type="number" name="duration" value="<?= htmlspecialchars($task['duration']) ?>" required>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">← Kembali</a>
</div>
</body>
</html>
