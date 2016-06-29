<?php
require_once("setup.inc.php");
require_once("../libs/Smarty.class.php");

$error = false;
if (!empty($_POST["login"]) && !empty($_POST['password']))
{ 
    $login = dbQuote($_POST['login']);
    $password = dbQuote($_POST['password']);
}
else
{
    header("Location: ../userlogin.php?login=fail");
}

if ($error == false)
{
    if (checkPass($login, $password))
    {
        authorize($login, $password);
        header("Location: ../userlogin.php?login=success");
    }
    else
    {
        header("Location: ../userlogin.php?login=fail");
    }
}