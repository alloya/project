<?php
//function connect()
//{
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_USER', 'mysql');
    DEFINE('DB_PASS', 'mysql');
    DEFINE('DB_name', 'project');

    $conn = mysql_connect($db_host, $db_user, $db_password) or die("<p>Невозможно подключиться к СУБД: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    $db = mysql_select_db($db_name, $conn) or die("<p>Невозможно подключиться к базе данных: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    $query = mysql_query("SET NAMES utf8 COLLATE utf8_general_ci", $conn) or die("<p>Невозможно выполнить запрос к базе данных: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
    
    //$charset = mysql_client_encoding($conn);

    //echo "Текущая кодировка: $charset\n";
   // var_dump($query);
  //  }
//connect();
?>