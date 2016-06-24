<?php
header("Content-type: text/html; charset=utf8");
session_start();
$error = false;
if (!empty($_POST["login"]) && !empty($_POST['password']))
{ 
    $login = $_POST['login'];
    $password=$_POST['password'];
}
else
{
    $newPage = 'Ooops...';
    $message = "Вы ввели не всю информацию, вернитесь назад и заполните все поля!";
    $link = 'login.php';
    $nextPage = 'Back';
    $error = true;
}
if ($error == false)
{
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    require_once ("../../database.php");
 
    $result = mysql_query("SELECT * FROM users WHERE u_login='$login'", $conn); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['u_password']))
    {
        $newPage = 'Ooops...';
        $message = "Извините, введённый вами логин или пароль неверный.";
        $link = 'login.php';
        $nextPage = 'Back';
        $error = true;
    }
    else
    {
        if ($myrow['u_password'] == $password) 
        {
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['id']=$myrow['id'];
            $newPage = "Welcome!";;
            $message = "Вы успешно авторизированны! <br/>Теперь вам доступен личный кабинет.";
            $link = '../quiz/quiz.php';
            $nextPage = 'Let\'s start a quiz!';
        }
        else 
        {
            $newPage = 'Ooops...';
            $message = "Извините, введённый вами логин или пароль неверный.";
            $link = 'login.php';
            $nextPage = 'Back';
        }
    }
}
require_once '../registration/finish.php';
?>