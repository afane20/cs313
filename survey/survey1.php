<?php
	session_start();
	$_SESSION["onlyOne"] = "survey";
?>

<!doctype html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../index.css" />
   <meta charset="UTF-8">
   <title>Ernesto Afane's Home Page</title>
</head>

<body>

<div id="wrapper">
    <header id="top">
        <h1>Survey</h1>
        
        <blockquote><p><b><i>
        "Behold, God is my salvation; I will trust, and not be afraid; for the Lord Jehovah is my strength and my song;
         he also has become my salvation".(2 Nephi 22:2)</i></b></p></blockquote>

        
      <nav id="mainnav">
            <ul style="list-style-type:none; margin:0px;padding:0px">
                <li><a href="../index.html">Home</a></li>
                
                <li><a href="http://www.byui.edu/">BYU-I</a></li>
                
                <li><a href="../assignments.html">CS213 Assignments</a></li> 
                
                <li><a href="https://byui.brainhoney.com/" >I-Learn</a></li>  
                              
                <li><a href="https://pod51034.outlook.com/">BYU-I email</a></li>
            </ul>
      </nav>
    </header>
    
  <div>
       <br>
        <?php 
       
        //Example array.
	//Retrieve the data from our text file.
	$fileContents = file_get_contents('json_array.txt');

	//Convert the JSON string back into an array.
	$decoded = json_decode($fileContents, true);

	//The end result.
	//var_dump($decoded);
    
        
        $OS = $_POST["RadioGroup1"];
    	$game = $_POST["game"];
    	$teacher = $_POST["RadioGroup2"];
    	$food = $_POST["food"];
    	
    	$OS1 = 0;
    	$OS2 = 0;
    	$OS3 = 0;
    	
    	$game1 = 0;
    	$game2 = 0;
    	$game3 = 0;
    	$game4 = 0;

    	$teacher1 = 0;
    	$teacher2 = 0;
    	$teacher3 = 0;
    	
    	$food1 = 0;
    	$food2 = 0;
    	$food3 = 0;
    	$food4 = 0;
    	
    	$OS1 = $decoded[4];
		$OS2 = $decoded[5];
		$OS3 = $decoded[6];
		
		$game1 = $decoded[7];
		$game2 = $decoded[8];
		$game3 = $decoded[9];
		$game4 = $decoded[10];
		
		$teacher1 = $decoded[11];  
    	$teacher2 = $decoded[12];  
    	$teacher3 = $decoded[13];
    	
    	$food1 = $decoded[14]; 
    	$food2 = $decoded[15];
    	$food3 = $decoded[16];
    	$food4 = $decoded[17];
    	
    	if ($OS == "Windows"){$OS1++;}
    	if ($OS == "Apple"){$OS2++;}
    	if ($OS == "Linux"){$OS3++;}
    	if ($game == "League of Legends"){$game1++;}
    	if ($game == "Legend of Zelda"){$game2++;}
    	if ($game == "Final Fantasy"){$game3++;}
    	if ($game == "World of WarCraft"){$game4++;}
    	if ($teacher == "Ercanbrack"){$teacher1++;}
    	if ($teacher == "Twitchell"){$teacher2++;}
    	if ($teacher == "Helfrich"){$teacher3++;}
    	if ($food == "Chinese"){$food1++;}
    	if ($food == "American"){$food2++;}
    	if ($food == "Mexican"){$food3++;}
    	if ($food == "Italian"){$food4++;}
    	
    	//starts with 4 OS, game at 7, teacher at 11, food at 14
    	$info = array($OS, $game, $teacher, $food, $OS1, 
        			  $OS2 , $OS3 , $game1, $game2, $game3, $game4, $teacher1, $teacher2, $teacher3, 
        			  $food1, $food2, $food3, $food4);
        			  
    //Encode the array into a JSON string.
    $encodedString = json_encode($info);

	//Save the JSON string to a text file.
	file_put_contents('json_array.txt', $encodedString);
    ?>
       
  </div>
 <div id = "survey">
 <?php
 	
 	echo '<h2>'."Favorite Operating System".'</h2><h3>';
 	
 	$html = 'Windows '.$info[4].'<br>'.'Apple '.$info[5].'<br>'.'Linux '.$info[6].'<br></h3>';
 	echo "$html";
 	
 		echo '<h2>'."Favorite Video Game".'</h2><h3>';
 	
 	$html = 'League of Legends '.$info[7].'<br>'.'Legend of Zelda '.$info[8].'<br>'.'Final Fantasy '.$info[9].'<br>'.
 	'World of WarCraft '.$info[10].'<br></h3>';
 	echo "$html";
 	
 		echo '<h2>'."Favorite teacher".'</h2><h3>';
 	
 	$html = 'Ercanbrack '.$info[11].'<br>'.'Twitchell '.$info[12].'<br>'.'Helfrich '.$info[13].'<br></h3>';
 	 echo "$html";

 	
 	echo '<h2>'."Favorite Food".'</h2><h3>';
 	
 	$html = 'Chinese '.$info[14].'<br>'.'American '.$info[15].'<br>'.'Mexican '.$info[16].'<br>'.'Italian '.$info[17].'<br></h3>';
 	 echo "$html";

 ?>
 </div>
 </div>
 </body>
 </html>
 
 
