<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Mysql Authentication</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="container">
        <?php if ($_SESSION['user']): ?>
            <p>Hola, <?= $_SESSION['user']['first_name'] ?> <?= $_SESSION['user']['last_name'] ?> </p>
        <?php endif; ?>
    </div>
</body>
</html>