<?php
if(!$_SESSION){
    session_start();
 }
require $_SERVER['DOCUMENT_ROOT'].'/cs313/dataBase/demos-jquery/practice2.php';
if ($_POST['action'] == "Search" && !empty($_POST['search'])){
	$searchVariable = $_POST['search'];
	$product = searchItems($searchVariable);
	$output = "<h1>Item(s) avaliable</h1>";
	foreach ($product as $value) {
		$output .= "<b>Name: $value[1], Price: $value[2], avaliable items: $value[3]</b><br /><br />";
	}
	include "view.php";
	exit;
}
else {
	$items = getItems();
	$output = "<h1>Items found</h1>";
	foreach ($items as $value) {
		$output .= "<b>Name: $value[1], Price:  $value[2], items avaliable: $value[3]</b><br /><br />";
	}
	include "view.php";
	exit;
}
