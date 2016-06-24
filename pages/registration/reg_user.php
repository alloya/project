<?php
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
    $link = 'registration.php';
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
    
    $checkLogin = mysql_query("SELECT u_id FROM users WHERE u_login='$login'", $conn);
    $myrow = mysql_fetch_array($checkLogin);
    if (!empty($myrow['u_id'])) 
    {
        $newPage = 'Ooops...';
        $message = "Извините, введённый вами логин уже зарегистрирован. Введите другой логин.";
        $link = 'registration.php';
        $nextPage = 'Back';
        $error = true;
    }
    if ($error == false) 
    {
        $result = mysql_query ("INSERT INTO users (u_login, u_password) VALUES('$login', '$password')");
        if ($result == 'TRUE')
        {
            $newPage = "Congrats!";;
            $message = "Вы успешно зарегистрированы! <br/>Теперь вы можете зайти на сайт.";
            $link = '../login/login.php';
            $nextPage = 'Login';
        }
        else 
        {
            $newPage = 'Ooops...';
            $message = "Ошибка! Вы не зарегистрированы. Попробуйте еще раз.";
            $link = 'registration.php';
            $nextPage = 'Back';
        }
    }
}
require_once 'finish.php';
?>