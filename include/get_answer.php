<?php
    require_once("setup.inc.php");
    $question = $_GET["questionID"];
    
    function getAnswers($question)
    {
        return dbQueryGetAssoc("SELECT a_text, next_q, next_b FROM answers WHERE curr_q_id='$question'");
    }
    
    echo json_encode(getAnswers($question));