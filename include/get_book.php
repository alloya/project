<?php
    require_once("setup.inc.php");

    $bookID = $_GET["bookID"];
    function getBook($bookID)
    {
        return dbQueryGetAssoc("SELECT * FROM books WHERE b_id='$bookID'");
    }    