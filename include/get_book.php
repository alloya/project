<?php
    require_once("setup.inc.php");

    function getBook($bookID)
    {
        return dbQueryGetAssoc("SELECT * FROM books WHERE b_id='$bookID'");
    }

    $bookID = $_GET["bookID"];
    $bookData = getBook($bookID);
    //echo (json_encode($answerArray));