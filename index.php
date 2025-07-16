<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Work Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>📚 Daftar Tugas</h1>
    <a href="add.php">+ Tambah Tugas</a>
    <ul>
        <?php foreach ($_SESSION['tasks'] as $id => $task): ?>
            <li>
                <strong><?= htmlspecialchars($task['name']) ?></strong>
                (<?= htmlspecialchars($task['duration']) ?> jam)
                - <a href="view.php?id=<?= $id ?>">📝 Lihat</a>
                - <a href="edit.php?id=<?= $id ?>">🖍 Edit</a>
                - <a href="delete.php?id=<?= $id ?>" onclick="return confirm('Hapus tugas ini?')">🗑 Hapus</a>
            </li>
        <?php endforeach; ?>
        <?php if (empty($_SESSION['tasks'])): ?>
            <li><em>Belum ada tugas.</em></li>
        <?php endif; ?>
    </ul>
</div>
</body>
</html>
