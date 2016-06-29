<?php
require_once("include/setup.inc.php");
require_once("libs/Smarty.class.php");
$smarty = new Smarty();

$result = getFromGet("login");
if ($result == "fail")
{
    $newPage = 'Ooops...';
    $message = "Извините, введённыe вами данные неверны.";
    $link = 'login.php';
    $nextPage = 'Back';
}
elseif ($result == "success") 
{
    $newPage = "Welcome!";
    $message = "Вы успешно авторизированны! Теперь вы можете пройти опрос.";
    $link = 'quiz.php';
    $nextPage = 'Let\'s start a quiz!';
}
else 
{
    $newPage = "Error!";
    $link = 'login.php';
    $nextPage = 'Back';
}

$isLogged = $_SESSION["is_logged"];
$smarty->assign("newPage", $newPage);
$smarty->assign("message", $message);
$smarty->assign("link", $link);
$smarty->assign("nextPage", $nextPage);
$smarty->assign("isLogged", $isLogged);
$smarty->display("loginSuccess.tpl");