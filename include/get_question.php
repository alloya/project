<?php
    //header("Content-type: text/html; charset=utf8");
    require_once("setup.inc.php");
    $question = $_GET["questionID"];
    
    function getQuestionText($question)
    {
        $question = dbQueryGetAssoc("SELECT q_text FROM questions WHERE q_id='$question'");
        return $question[0]['q_text'];
    }
    
    $questionText = getQuestionText($question);
    echo json_encode($questionText);
    //print_r ($questionText);
    //print_r ("</br>");