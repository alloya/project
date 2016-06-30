<?php
    require_once("include/setup.inc.php");
    require_once("libs/Smarty.class.php");
    $smarty = new Smarty();

    $isLogged = $_SESSION["is_logged"];
    $question = 

    $smarty->assign("isLogged", $isLogged);
    $smarty->display("index.tpl");
