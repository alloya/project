<?php
    require_once("include/setup.inc.php");
    require_once("libs/Smarty.class.php");
    $smarty = new Smarty();

    $result = getFromGet("result");
    if ($result == "loginfail")
    {
        $newPage = 'Ooops...';
        $message = "Извините, введённыe вами данные неверны.";
        $link = 'login.php';
        $nextPage = 'Back';
    }
    elseif ($result == "loginsuccess") 
    {
        $newPage = "Welcome!";
        $message = "Вы успешно авторизированы! <br/>Теперь вы можете пройти опрос.";
        $link = 'quiz.php';
        $nextPage = 'Let\'s start a quiz!';
    }
    elseif ($result == "regfail")
    {
        $newPage = 'Ooops...';
        $message = "Вы ввели не всю информацию. <br/>Вернитесь назад и заполните все поля!";
        $link = 'registration.php';
        $nextPage = 'Back';
    }
    elseif ($result == "regsuccess") 
    {
        $newPage = "Congrats!";;
        $message = "Вы успешно зарегистрированы! <br/>Теперь вы можете зайти на сайт.";
        $link = 'login.php';
        $nextPage = 'Login';
    }
    elseif ($result == "logintaken") 
    {
        $newPage = 'Ooops...';
        $message = "Извините, введённый вами логин уже зарегистрирован. <br/>Введите другой логин.";
        $link = 'registration.php';
        $nextPage = 'Back';
    }
    elseif ($result == "error") 
    {
        $newPage = 'Ooops...';
        $message = "Что-то пошло не так. Попробуйте ещё раз.";
        $link = 'registration.php';
        $nextPage = 'Back';
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
    $smarty->display("user_action.tpl");