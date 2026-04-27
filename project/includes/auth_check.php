<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=' . urlencode('Сначала войдите в аккаунт.'));
    exit;
}