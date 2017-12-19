<?php

$host = $_SERVER['SERVER_NAME'];
if (strstr($host, 'admin')) {
    header('Location:backend/web/index.php');
    exit();
}
header('Location:frontend/web/index.php');
exit();
