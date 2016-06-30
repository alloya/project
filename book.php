<?php
require_once("include/get_book.php");

    $bookID = $_GET["bookID"];
    $answerArray = getBook($bookID);
    $title = $answerArray[0]['b_title'];
    $author = $answerArray[0]['b_author'];
    $descr = $answerArray[0]['b_description'];
    $image = $answerArray[0]['b_image'];

    // echo "$title </br>";
    // echo $author;
    // echo $descr;
    // echo $image;
    $isLogged = $_SESSION["is_logged"];
    $smarty->assign("title", $title);
    $smarty->assign("author", $author);
    $smarty->assign("descr", $descr);
    $smarty->assign("image", $image);
    $smarty->assign("isLogged", $isLogged);
    $smarty->display("book.tpl");