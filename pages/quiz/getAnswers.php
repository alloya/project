<?php
header("Content-type: text/html; charset=utf8");
require_once ("../../database.php");
//require_once ("../../include/functions.new.inc.php");
//$question = '2';



function getAnswers1($question)
{
    $query = "SELECT a_text, next_q, next_b FROM answers WHERE curr_q_id='$question'";
    $array = array();
    if ($result = mysql_query($query)) 
    {
        while ($row = mysql_fetch_assoc($result)) 
        {
            $array[] = $row;
        }
        //print_r($array);
        return $array;
        
        mysql_free_result($result);
    }

    //mysqli_close($link);

}
//print_r (getAnswers1("1"));

$question = $_GET["questionID"];
//var_dump($question);
$answerArray = getAnswers1($question);
echo (json_encode($answerArray));


?>