<?php
$connection = mysql_connect('127.3.147.2', 'afane', 'rareriroru');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('2fitness');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
