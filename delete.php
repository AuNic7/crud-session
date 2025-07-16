<?php
include 'session.php';
$id = $_GET['id'];
if (isset($_SESSION['tasks'][$id])) {
    unset($_SESSION['tasks'][$id]);
}
header('Location: index.php');
exit;
