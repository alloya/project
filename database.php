<?php

    $db_host = 'localhost';
    $db_user = 'mysql';
    $db_password = 'mysql';
    $db_name = 'project';

    $conn = mysql_connect($db_host, $db_user, $db_password) or die("<p>���������� ������������ � ����: " . mysql_error() . ". ������ ��������� � ������ " . __LINE__ . "</p>");
    $db = mysql_select_db($db_name, $conn) or die("<p>���������� ������������ � ���� ������: " . mysql_error() . ". ������ ��������� � ������ " . __LINE__ . "</p>");
    $query = mysql_query("SET NAMES utf8 COLLATE utf8_general_ci", $conn) or die("<p>���������� ��������� ������ � ���� ������: " . mysql_error() . ". ������ ��������� � ������ " . __LINE__ . "</p>");
    
?>