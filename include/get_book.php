<?php
header("Content-type: text/html; charset=utf8");
require_once("setup.inc.php");

function getBook($bookID)
{
    return dbQueryGetAssoc("SELECT * FROM books WHERE b_id='$bookID'");
}

$bookID = $_GET["bookID"];
$bookData = getBook($bookID);
//echo (json_encode($answerArray));
//require_once "../book/book.html";
//print_r ($bookData);