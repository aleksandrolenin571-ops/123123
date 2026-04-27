<?php
require_once '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../auth.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$passwordConfirm = $_POST['password_confirm'] ?? '';

if (empty($name) || empty($email) || empty($password) || empty($passwordConfirm)) {
    header('Location: ../auth.php?tab=register&error=' . urlencode('Пожалуйста, заполните все поля.'));
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../auth.php?tab=register&error=' . urlencode('Введите корректный email.'));
    exit;
}

if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    header('Location: ../auth.php?tab=register&error=' . urlencode('Имя должно содержать от 2 до 50 символов.'));
    exit;
}

if (strlen($password) < 6) {
    header('Location: ../auth.php?tab=register&error=' . urlencode('Пароль должен содержать минимум 6 символов.'));
    exit;
}

if ($password !== $passwordConfirm) {
    header('Location: ../auth.php?tab=register&error=' . urlencode('Пароли не совпадают.'));
    exit;
}

$stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->fetch()) {
    header('Location: ../auth.php?tab=register&error=' . urlencode('Пользователь с таким email уже существует.'));
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, NOW())");
$stmt->execute([$name, $email, $hashedPassword]);

header('Location: ../auth.php?success=' . urlencode('Регистрация прошла успешно. Теперь войдите в аккаунт.'));
exit;