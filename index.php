<?php
    require_once("include/setup.inc.php");
    require_once("libs/Smarty.class.php");
    $smarty = new Smarty();

    $isLogged = $_SESSION["is_logged"];
    $pass = md5("12");
    echo $pass;
    echo "md5 = c20ad4d76fe97759aa27a0c99bff67";
    $smarty->assign("isLogged", $isLogged);
    $smarty->display("index.tpl");
