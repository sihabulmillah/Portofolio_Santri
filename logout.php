<?php
session_start();

session_unset();
$_SESSION = [];
session_destroy();

setcookie('login', 'true', time() - 3600);
header('location:landingpage.php');
