<?php
session_start();
session_unset();
session_destroy();

header('Location: auth.php?success=' . urlencode('Вы вышли из аккаунта.'));
exit;