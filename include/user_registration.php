<?php
    require_once("setup.inc.php");

    $error = false;
    if (!empty($_POST["login"]) && !empty($_POST['password']))
    { 
        $login = trim(dbQuote($_POST['login']));
        $password = md5(md5(dbQuote($_POST['password'])));
        $checkLogin = dbQueryGetAssoc("SELECT id FROM user WHERE login = '$login'");
        
        if (!empty($checkLogin[0]['id'])) 
        {
            header("Location: ../user_action.php?result=logintaken");
        }
        else
        {
            $result = dbQuery ("INSERT INTO user (login, password) VALUES('$login', '$password')");
            if ($result == 'TRUE')
            {
                header("Location: ../user_action.php?result=regsuccess");
            }
            else 
            {
                header("Location: ../user_action.php?result=error");
            }
        }
    }
    else
    {
        header("Location: ../user_action.php?result=regfail");
    }