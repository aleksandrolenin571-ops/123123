<?php
require_once 'includes/auth_check.php';
include 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-box">
            <div class="eyebrow">Личный кабинет</div>
            <h1 class="section-title" style="color: #ffffff;">Здравствуйте, <?= htmlspecialchars($_SESSION['user_name']) ?>!</h1>
            <p>
                Вы вошли в личный кабинет SecureNet. Эта страница доступна только авторизованным пользователям
                и служит персональной зоной внутри проекта.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container dashboard-grid">
        <div class="dashboard-main">
            <div class="card dashboard-welcome">
                <div class="eyebrow">Ваш профиль</div>
                <h2 style="font-size: 2rem; margin-bottom: 12px;">Персональная информация</h2>
                <p style="margin-bottom: 22px;">
                    Ниже отображаются основные данные учетной записи, с которой вы вошли в систему.
                </p>

                <div class="profile-info">
                    <div class="profile-row">
                        <span>Имя</span>
                        <strong><?= htmlspecialchars($_SESSION['user_name']) ?></strong>
                    </div>
                    <div class="profile-row">
                        <span>Email</span>
                        <strong><?= htmlspecialchars($_SESSION['user_email']) ?></strong>
                    </div>
                    <div class="profile-row">
                        <span>Статус</span>
                        <strong class="status-badge">Аккаунт активен</strong>
                    </div>
                </div>
            </div>

            <div class="grid-3" style="margin-top: 24px;">
                <div class="card dashboard-mini-card">
                    <h3>Безопасный вход</h3>
                    <p>Авторизация выполнена успешно, а страница защищена проверкой сессии пользователя.</p>
                </div>

                <div class="card dashboard-mini-card">
                    <h3>Личный доступ</h3>
                    <p>Данные этой страницы доступны только после входа через рабочую форму авторизации.</p>
                </div>

                <div class="card dashboard-mini-card">
                    <h3>Готово к расширению</h3>
                    <p>При необходимости этот кабинет можно развивать дальше, добавляя новые блоки и функции.</p>
                </div>
            </div>
        </div>

        <aside class="dashboard-sidebar">
            <div class="card dashboard-side-card">
                <div class="eyebrow">Аккаунт</div>
                <h3 style="margin-bottom: 12px;">Управление сессией</h3>
                <p style="margin-bottom: 20px;">
                    Вы можете завершить текущий сеанс и безопасно выйти из системы.
                </p>
                <a href="logout.php" class="btn btn-primary">Выйти из аккаунта</a>
            </div>

            <div class="card dashboard-side-card">
                <div class="eyebrow">Навигация</div>
                <h3 style="margin-bottom: 12px;">Полезные разделы</h3>
                <ul class="dashboard-links">
                    <li><a href="devices.php">Защита устройств</a></li>
                    <li><a href="internet-safety.php">Безопасность в сети</a></li>
                    <li><a href="family.php">Для семьи</a></li>
                    <li><a href="blog.php">Советы</a></li>
                </ul>
            </div>
        </aside>
    </div>
</section>

<?php include 'includes/footer.php'; ?>