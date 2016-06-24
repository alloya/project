<?php
session_start();
echo mysql_error();

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    require_once "about.html";
    exit;
}
else
{
    require_once "about_logged.html";
}
?>