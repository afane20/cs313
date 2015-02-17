<?php
	session_start();
	if ($_SESSION["onlyOne"] == "survey")
	{
	header("Location: http://php-afane.rhcloud.com/survey/survey1.php");
	exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../index.css" />
   <meta charset="UTF-8">
   <title>Survey</title>
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
    <br/>
    <br/>
 </div>
        
<form id="form1" name="form1" method="post" action="survey1.php"">

  <table width="688" height="400" border="1" align="center" cellpadding="6" tbcolor: bgcolor="#61E6B9">
    <tbody>
      <tr>
      
        <td width="365" style="text-align: right"><p>
          <label for="Name">What operating system do you like more? </label>
        </p></td>
        
        <td width="351" style="text-align: left">      
       		<label>
            <input type="radio" name="RadioGroup1" value="Windows" id="RadioGroup1_0">
            Windows</label>
            
            <br>
            <input type="radio" name="RadioGroup1" value="Apple" id="RadioGroup1_1" checked = "true">
            OS X Yosemite (Apple)</label>
            
            <br>
            <input type="radio" name="RadioGroup1" value="Linux" id="RadioGroup1_2">
            Linux</label>
            
           
        
        
        </td>
      </tr>
      <tr>
        <td style="text-align: right"><p>
          <label for="phone">What is your favorite video game?</label>
        </p></td>
        <td style="text-align: left"> <select name="game" id="bestGame">
            <option value="League of Legends">League of Legends</option>
            <option value="Legend of Zelda">Legend of Zelda</option>
            <option value="Final Fantasy">Final Fantasy</option>
            <option value="World of WarCraft">World of warCraft</option>
          </select></td>
      </tr>
      
      <tr>
        <td style="text-align: right"><p>Who is your favorite teacher?</p></td>
        <td style="text-align: left"><p>
          <label>
            <input type="radio" name="RadioGroup2" value="Ercanbrack" id="RadioGroup2_0" checked = "true">
            Ercanbrack</label>
          <br>
          <label>
            <input type="radio" name="RadioGroup2" value="Twitchell" id="RadioGroup2_1">
            Twitchell</label>
          <br>
          <label>
            <input type="radio" name="RadioGroup2" value="Helfrich" id="RadioGroup2_2">
            Helfrich</label>
          <br>
    
        </p></td>
      </tr>
      <tr>
        <td style="text-align: right"><label for="food">What is your favorite food?</label></td>
        <td style="text-align: left">
          
          <select name="food" id="favorite food">
            <option value="Chinese">Chinese</option>
            <option value="American">American</option>
            <option value="Mexican">Mexican</option>
            <option value="Italian">Italian</option>
          
          </select>
        </td>
      </tr>
     
      
      
      <tr>
         <td style="text-align: right">
           <input class="myButton" type="reset" name="reset" id="reset" value="Reset form">
         </td>
         <td><input class="myButton" type="submit" name="submit" value="Submit" >
         </td>
    </tbody>
  </table>

</form>
    <br/>
    <hr />
    
    <footer>
      <p>&copy; Salvador Ernesto Afane</p> 
      <h3><a href="#top">click here to Go to the Top</a></h3>

   <p><a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0; width:88px; height:31px"
         src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
         alt="Valid CSS!" /></a>
</p>
    </footer>
    
</div>
</body>
</html>
