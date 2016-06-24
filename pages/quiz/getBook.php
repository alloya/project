<?php
header("Content-type: text/html; charset=utf8");
require_once ("../../database.php");
//require_once ("../../include/functions.new.inc.php");
//$question = '2';



function getBook($bookID)
{
    $query = "SELECT * FROM books WHERE b_id='$bookID'";
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

$bookID = $_GET["bookID"];
//var_dump($question);
$answerArray = getBook($bookID);
//echo (json_encode($answerArray));
//require_once "../book/book.html";

?>