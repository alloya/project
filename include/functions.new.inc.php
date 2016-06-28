<?php
//require_once ("../database.php");
function getQuestionText1($question)
{
    $mysqli = new mysqli("localhost", "mysql", "mysql", "project");
    if ($mysqli->connect_errno) {
        printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
        exit();
    }
    $query = "SELECT q_text FROM questions WHERE q_id='$question'";
    $result = $mysqli->query($query);
    $row = $result->fetch_array(MYSQLI_NUM);
    return $row[0];
    //var_dump($row);
}
//getQuestionText("1");

function getAnswers1($question)
{
    $link = mysqli_connect("localhost", "mysql", "mysql", "project");

    if (mysqli_connect_errno()) 
    {
        printf("Соединение не удалось: %s\n", mysqli_connect_error());
        exit();
    }

    $query = "SELECT a_text, next_q FROM answers WHERE curr_q_id='$question'";
    $array = array();
    if ($result = mysqli_query($link, $query)) 
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $array[] = $row;
        }
        //print_r($array);
        return $array;
        
        mysqli_free_result($result);
    }

    mysqli_close($link);

}

function getHtml($array)
{
    for( $i=0; $i<count($array); $i++)
    {
        $answerArray =  $answerArray . "<label class=\"element-animation3 btn btn-lg btn-primary btn-block\"><span class=\"btn-label\"><i class=\"glyphicon glyphicon-chevron-right\"></i></span> <input type=\"radio\" name=\"q_answer\" data-next-q=".$array[$i][next_q].">".$array[$i][a_text]."</label>";
    }
    return $answerArray;
}
//getAnswers1("1");
?>