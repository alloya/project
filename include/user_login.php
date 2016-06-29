<?php
    require_once("setup.inc.php");

    if (!empty($_POST["login"]) && !empty($_POST['password']))
    { 
    	$login = dbQuote($_POST['login']);
        $password = dbQuote($_POST['password']);
        if (checkPass($login, $password))
        {
        	authorize($login, $password);
            header("Location: ../user_action.php?result=loginsuccess");
        }
        else
        {
            header("Location: ../user_action.php?result=loginfail");
        }
    }
    else
    {
     	header("Location: ../user_action.php?result=loginfail");
    }