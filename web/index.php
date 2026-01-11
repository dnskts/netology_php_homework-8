<?php
session_start();

$username = '';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

$isLoggedIn = false;
if ($username != '') {
    $isLoggedIn = true;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Моё приложение</title>
</head>
<body>

    <h1>Об авторе</h1>
    <p>Имя: Денис Курицын</p>
    <p>Курс: Основы PHP</p><hr>

    <?php if ($isLoggedIn): ?>
        <?php include 'templates/greeting.php'; ?>
    <?php else: ?>
        <?php include 'templates/form.php'; ?>
    <?php endif; ?>

</body>
</html>
