<?php
header("Content-type: text/html; charset=utf8");
require_once ("../../database.php");
//require_once ("../../include/functions.new.inc.php");
//$question = '2';

function getQuestionText1($question)
{
    $array = array();
    $query = "SELECT q_text FROM questions WHERE q_id='$question'";
    $result = mysql_query($query);
    while ($row = mysql_fetch_assoc($result)) 
    {
        $array[] = $row; 
    }

    //print_r($array[0]['q_text']);
    return $array[0]['q_text'];
    mysql_free_result($result);
}
//print_r (getQuestionText1("1"));


$question = $_GET["questionID"];
//var_dump($question);
$questionText = getQuestionText1($question);
echo json_encode($questionText);


?>