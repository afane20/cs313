<?php
if(!$_SESSION){
    session_start();
 }
require $_SERVER['DOCUMENT_ROOT'].'/dataBase/practice2.php';
if ($_POST['action'] == "Search" && !empty($_POST['search'])){
	$searchVariable = $_POST['search'];
	$product = getItems($searchVariable);
	$output = "<h1>Item(s) avaliable</h1>";
	foreach ($product as $value) {
		$output .= "<b>$value[1] $value[2]:$value[3]</b> - <br /><br />";
	}
	include "view.php";
	exit;
}
else {
	$scriptures = getScriptures();
	$output = "<h1>Scripture Resources</h1>";
	foreach ($scriptures as $value) {
		$output .= "<b>Name: $value[1], Price:  $value[2], items avaliable: $value[3]</b> - <br /><br />";
	}
	include "view.php";
	exit;
}
