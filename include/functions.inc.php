<?php
//require_once ("../database.php");
function getQuestionText($question)
{
    $conn = mysql_connect('localhost', 'mysql', 'mysql') or die("<p>Невозможно подключиться к СУБД: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    $db = mysql_select_db('project', $conn) or die("<p>Невозможно подключиться к базе данных: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    
    $getQuestionText = mysql_query("SELECT q_text FROM questions WHERE q_id='$question'", $conn);
    $row = mysql_fetch_array($getQuestionText);
    //$questionText = $row[0];
    return $row[0];
}

//echo getQuestionText("1");

function getAnswers($question)
{
    $conn = mysql_connect('localhost', 'mysql', 'mysql') or die("<p>Невозможно подключиться к СУБД: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    $db = mysql_select_db('project', $conn) or die("<p>Невозможно подключиться к базе данных: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    
    $getAnswersText = mysql_query("SELECT a_text FROM answers WHERE curr_q_id='$question'", $conn);
    $row = mysql_fetch_array($getAnswersText);
    //var_dump($row);
    //$answersText = $row[0];
    while ($row = mysql_fetch_array($getAnswersText, MYSQL_NUM)) {
    $array = $row[0]; }
    //var_dump($array);
    //return $array;
}
//getAnswers("2");
?>