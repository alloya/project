<?php
    //header("Content-type: text/html; charset=utf8");
    require_once("setup.inc.php");
    $question = $_GET["questionID"];
    
    function getAnswers($question)
    {
        return dbQueryGetAssoc("SELECT a_text, next_q, next_b FROM answers WHERE curr_q_id='$question'");
    }
    
    $answerArray = getAnswers($question);
    echo (json_encode($answerArray));
   // print_r ($answerArray);
   // print_r ("</br>");