<?php
$connection = mysql_connect('127.7.209.2', 'afane', 'rareriroru');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('fitness');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
