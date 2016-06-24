<?php
session_start();
header("Content-type: text/html; charset=utf8");
require_once("../quiz/getBook.php");


$bookID = $_GET["bookID"];

$title = $answerArray[0]['b_title'];
$author = $answerArray[0]['b_author'];
$descr = $answerArray[0]['b_description'];
$image = $answerArray[0]['b_image'];

echo $title;
echo $author;
echo $descr;
require_once "book.html";
?>