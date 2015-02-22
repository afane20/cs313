<?php
if(!$_SESSION){
    session_start();
 }
require 'practice1.php';
if ($_POST['action'] == "Search" && !empty($_POST['search'])){
	$searchVariable = $_POST['search'];
	$product = searchItems($searchVariable);
	$output = "<h2>Item(s) found</h2>";
	foreach ($product as $value) {
		$_SESSION["productName"] = $value[0];
		$output .= '<table><tr><td><a href="nutrition.php"' 
		. "><img src=" . '"'. "$value[6]" . '" height="100" width="100" >'
		 . "</a></td><td>Name: $value[1] <br>Price:  $value[2] <br> items avaliable: $value[3] ". "<br /></tr><table>";
	}
	include "nutrition.php";
	//echo $output; it does not inherit the style the variable can be called
	exit;
}
else {
	//$items = getItems();
	$output = "<h1>Items found</h1>";
//	foreach ($items as $value) {
//		$output .= '<b>Name: <a href="nutrition.php"' . ">$value[1]</a>, Price:  $value[2], items avaliable: $value[3]</b><br /><br />";
//		
//	}
	 $output .= '<h3 id="nothing">"There was nothing found in your search. Maybe because the product was not found or the search bar was empty"</h3>';

	include "nutrition.php";
	
	exit;
}