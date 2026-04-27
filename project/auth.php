<?php
include 'includes/header.php';

$tab = isset($_GET['tab']) && $_GET['tab'] === 'register' ? 'register' : 'login';
$error = $_GET['error'] ?? '';
$success = $_GET['success'] ?? '';
?>
<section class="auth-section">
    <div class="container">
        <div class="auth-layout">
            <div class="auth-info">
                <div class="eyebrow">Аккаунт SecureNet</div>
                <h1>Вход и регистрация в личный кабинет</h1>
                <p>
                    Создайте учетную запись, чтобы получить доступ к персональной странице пользователя.
                    В проекте реализуется только необходимый рабочий функционал: регистрация, вход и выход.
                </p>

                <div class="auth-benefits">
                    <div class="auth-benefit-card">
                        <strong>Безопасная авторизация</strong>
                        <span>Хранение паролей в хешированном виде через PHP.</span>
                    </div>
                    <div class="auth-benefit-card">
                        <strong>Личный кабинет</strong>
                        <span>Отдельная защищенная страница после успешного входа.</span>
                    </div>
                    <div class="auth-benefit-card">
                        <strong>MySQL / phpMyAdmin</strong>
                        <span>Подключение к базе данных пользователей.</span>
                    </div>
                </div>
            </div>

            <div class="auth-card">
                <div class="auth-tabs">
                    <a href="auth.php" class="auth-tab <?= $tab === 'login' ? 'active' : '' ?>">Вход</a>
                    <a href="auth.php?tab=register" class="auth-tab <?= $tab === 'register' ? 'active' : '' ?>">Регистрация</a>
                </div>

                <?php if ($error): ?>
                    <div class="form-message error">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <?php if ($success): ?>
                    <div class="form-message success">
                        <?= htmlspecialchars($success) ?>
                    </div>
                <?php endif; ?>

                <?php if ($tab === 'login'): ?>
                    <form action="handlers/login_handler.php" method="POST" class="auth-form">
                        <h2>Добро пожаловать</h2>
                        <p class="auth-form-text">Введите свои данные для входа в аккаунт.</p>

                        <div class="form-group">
                            <label for="login_email">Email</label>
                            <input type="email" id="login_email" name="email" placeholder="Введите email" required>
                        </div>

                        <div class="form-group">
                            <label for="login_password">Пароль</label>
                            <input type="password" id="login_password" name="password" placeholder="Введите пароль" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
                <?php else: ?>
                    <form action="handlers/register_handler.php" method="POST" class="auth-form">
                        <h2>Создание аккаунта</h2>
                        <p class="auth-form-text">Заполните форму регистрации для доступа к кабинету.</p>

                        <div class="form-group">
                            <label for="register_name">Имя</label>
                            <input type="text" id="register_name" name="name" placeholder="Введите имя" required>
                        </div>

                        <div class="form-group">
                            <label for="register_email">Email</label>
                            <input type="email" id="register_email" name="email" placeholder="Введите email" required>
                        </div>

                        <div class="form-group">
                            <label for="register_password">Пароль</label>
                            <input type="password" id="register_password" name="password" placeholder="Введите пароль" required>
                        </div>

                        <div class="form-group">
                            <label for="register_password_confirm">Подтвердите пароль</label>
                            <input type="password" id="register_password_confirm" name="password_confirm" placeholder="Повторите пароль" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>