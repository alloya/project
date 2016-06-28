<?php
require_once("include/setup.inc.php");
require_once("libs/Smarty.class.php");
$smarty = new Smarty();

$error = false;
if (!empty($_POST["login"]) && !empty($_POST['password']))
{ 
    $login = dbQuote($_POST['login']);
    $password = dbQuote($_POST['password']);
}
else
{
    $newPage = 'Ooops...';
    $message = "Вы ввели не всю информацию.<br/> Вернитесь назад и заполните все поля.";
    $link = 'login.php';
    $nextPage = 'Back';
    $error = true;
}
if ($error == false)
{
    if (checkPass($login, $password))
    {
        authorize($login, $password);
        $newPage = "Welcome!";;
        $message = "Вы успешно авторизированны! Теперь вы можете пройти опрос.";
        $link = 'quiz.php';
        $nextPage = 'Let\'s start a quiz!';
    }
    else
    {
        $newPage = 'Ooops...';
        $message = "Извините, введённыe вами данные неверны.";
        $link = 'login.php';
        $nextPage = 'Back';
    }
}
$isLogged = $_SESSION["is_logged"];
$smarty->assign("newPage", $newPage);
$smarty->assign("message", $message);
$smarty->assign("link", $link);
$smarty->assign("nextPage", $nextPage);
$smarty->assign("isLogged", $isLogged);
$smarty->display("loginSuccess.tpl");