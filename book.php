<?php
    require_once("include/get_book.php");
    require_once("include/setup.inc.php");
    require_once("libs/Smarty.class.php");
    $smarty = new Smarty();

    $bookID = $_GET["bookID"];
    $answerArray = getBook($bookID);
    $title = $answerArray[0]['b_title'];
    $author = $answerArray[0]['b_author'];
    $descr = $answerArray[0]['b_description'];
    $image = $answerArray[0]['b_image'];
    $link = $answerArray[0]['b_link'];
    $genre = $answerArray[0]['genre'];

    $isLogged = $_SESSION["is_logged"];
    $smarty->assign("title", $title);
    $smarty->assign("author", $author);
    $smarty->assign("descr", $descr);
    $smarty->assign("image", $image);
    $smarty->assign("link", $link);
    $smarty->assign("genre", $genre);
    $smarty->assign("isLogged", $isLogged);
    $smarty->display("book.tpl");