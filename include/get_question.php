<?php
    require_once("setup.inc.php");
    $question = $_GET["questionID"];
    
    function getQuestionText($question)
    {
        $question = dbQueryGetAssoc("SELECT q_text FROM questions WHERE q_id='$question'");
        return $question[0]['q_text'];
    }
    
    echo json_encode(getQuestionText($question));