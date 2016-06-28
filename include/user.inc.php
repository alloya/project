<?php
    require_once("setup.inc.php");

    function isLoginTaken($login)
    {
        global $g_dbLink;
        $query = "SELECT login FROM user WHERE login = '" . $login . "'";
        $result = mysqli_query($g_dbLink, $query);
        if(($row = mysqli_fetch_array($result)))
        {
            return $row;
        }
    }
    function checkPass($login, $password)
    {
        global $g_dbLink;
        $login = dbQuote($login);
        $password = dbQuote($password);
        //$password = md5($password);
        $query = "SELECT login, password FROM user WHERE login = '{$login}' AND password = '{$password}'";
        $result = mysqli_query($g_dbLink, $query);
        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);
            return $row;
        }
        return false;
    }
    function getUserID($login, $password)
    {
        global $g_dbLink;
        $password = md5($password);
        $query = "SELECT id FROM user WHERE login = '{$login}' AND password = '{$password}'";
        $result = dbQueryGetAssoc($query);
        $userID = $result[0]["id"];
        $userID = intval($userID);
        return($userID);
    }

    //checkPass("alloya", "alloya");