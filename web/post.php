<?php
session_start();

$username = '';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

$username = trim($username);

if ($username != '') {
    $_SESSION['username'] = $username;
}

header('Location: index.php');
exit;
