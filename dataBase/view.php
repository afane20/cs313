<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>DataBase</title>
  <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
   

   <div id="login">
   		<ul id = "loginUl" >
    		<li id="styleLi"><a id="fora" href="login.html">Login </a></li>
        	<li id="styleLi"><a id="fora" href="register.html">Sign up</a></li>
   		</ul>
        
	</div>

   <div id="topColor"></div>

<div id="wrapper">
    <header id="top">
    <a href="../index.html" ><img src="logo.jpg" width="195" height="117" alt=""/></a>

      <nav id="mainnav">
            <ul style="list-style-type:none; margin:0px;padding:0px">
                <li><a href="../index.html"  >Home</a></li>
                <li><a href="nutrition" >Sports Nutrition</a></li>           
                <li><a href="tips.html" >Tips</a></li>
                <li><a href="https://pod51034.outlook.com/" >Cart</a></li>
                <li><a href="assignments.html" >Assignments</a></li>

            </ul>
      </nav>
     
   </header>

<?php  include 'demos-jquery/content-slider.source.html' ?>
      <br />
        <form action="index1.php" method="POST" accept-charset="utf-8">
		  <input type="submit" id="submit" name="action" value="Search">
			  <input type="text" name="search" placeholder="Products" value="<?php echo $searchName;?>"/>
		</form>
		
        <p>If the search is empty all the items in the database shall be displayed!. The Items are displayed according to name, price and how many items are store in the database</p> 
    <br />
    <br />
   
	<?php echo $output; ?>
    
  <div></div>
</div>
  
  
</div>
</body>
</html>



	
