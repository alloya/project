<?php
session_start();
require_once "database.php";
echo mysql_error();

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    require_once "pages/main/not_logged.html";
    exit;
}
else
{
    require_once "pages/main/logged.html";
}
?>