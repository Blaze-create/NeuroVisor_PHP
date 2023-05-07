<?php
session_start();
session_destroy();
setcookie("cookie_user", FALSE, time() - 3600, '/');
header("Location: index.php");
?>