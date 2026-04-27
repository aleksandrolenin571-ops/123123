<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$currentPage = basename($_SERVER['PHP_SELF']);
$isLoggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureNet — цифровая безопасность</title>
    <meta name="description" content="Современный сайт о цифровой безопасности: защита устройств, безопасность в интернете, советы для семьи и личный кабинет пользователя.">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-container">
        <a href="index.php" class="logo">
            <span class="logo-icon"></span>
            <span class="logo-text">SecureNet</span>
        </a>

        <button class="burger" id="burgerBtn" aria-label="Открыть меню">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="nav" id="mainNav">
            <ul class="nav-list">
                <li><a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Главная</a></li>
                <li><a class="<?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">О платформе</a></li>
                <li><a class="<?= $currentPage === 'devices.php' ? 'active' : '' ?>" href="devices.php">Защита устройств</a></li>
                <li><a class="<?= $currentPage === 'internet-safety.php' ? 'active' : '' ?>" href="internet-safety.php">Безопасность в сети</a></li>
                <li><a class="<?= $currentPage === 'family.php' ? 'active' : '' ?>" href="family.php">Для семьи</a></li>
                <li><a class="<?= $currentPage === 'blog.php' ? 'active' : '' ?>" href="blog.php">Советы</a></li>
            </ul>

            <div class="nav-actions">
                <?php if ($isLoggedIn): ?>
                    <a href="dashboard.php" class="btn btn-secondary">Кабинет</a>
                    <a href="logout.php" class="btn btn-primary">Выйти</a>
                <?php else: ?>
                    <a href="auth.php" class="btn btn-secondary">Вход</a>
                    <a href="auth.php?tab=register" class="btn btn-primary">Регистрация</a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</header>
<main>