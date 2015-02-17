<?php
$connect_error = 'Sorry, we\'re experiencing connection problems.';
mysql_connect('127.7.209.2', 'afane', 'rareriroru') or die($connect_error);
mysql_select_db('php') or die($connect_error);
?>