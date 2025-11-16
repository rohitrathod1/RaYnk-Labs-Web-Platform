<?php
declare(strict_types=1);

session_start();
session_unset();
session_destroy();

header('Location: /RaYnk-Labs-Web-Platform/admin/index.php');
exit;
?>