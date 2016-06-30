<?php
    require_once("include/setup.inc.php");
    require_once("include/get_question.php");
    require_once("include/get_answer.php");
    require_once("libs/Smarty.class.php");
    $smarty = new Smarty();

    $isLogged = $_SESSION["is_logged"]; 

    $smarty->assign("isLogged", $isLogged);
    $smarty->display("quiz.tpl");