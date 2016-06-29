<?php
    require_once("setup.inc.php"); 

    function isLogged() 
    {
        if (isset($_SESSION["is_logged"])) 
        {
            return $_SESSION["is_logged"];
        }
        else 
        {
            return false;
        }
    }

    function logOut()
    {
        $_SESSION = array();
        $_SESSION["is_logged"] = false;
        session_destroy();
    }
    
    function authorize($login, $password) 
    {
        $_SESSION["is_logged"] = true;
        $_SESSION["login"] = $login; 
        $_SESSION["password"] = $password; 
        return true;
    }