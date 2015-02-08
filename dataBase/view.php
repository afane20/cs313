<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Hello world</title>
  <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
    <div id="login">
    	<p id="loginS">
    	<a href="setUser.php#">Login </a>   |   <a href="setUser.php#">Sign up</a></p>
    
    </div>

<div id="wrapper">
    <header id="top">
    <a href="index.html" ><img src="logo.jpg" width="195" height="117" alt=""/></a>
<h1></h1>

  <blockquote><strong><em>"Behold, God is my salvation; I will trust, and not be afraid; for the Lord Jehovah 
  is my strength and my song; he also has become my salvation".(2 Nephi 22:2)</em></strong>
  </blockquote>
        
        <br />
        
      <nav id="mainnav">
            <ul style="list-style-type:none; margin:0px;padding:0px">
                <li><a href="index.html"  >Home</a></li>
                <li><a href="nutrition" >Sports Nutrition</a></li>           
                <li><a href="assignments.html" >Assignments</a></li>
                <li><a href="tips.html" >Tips</a></li>
                <li><a href="https://pod51034.outlook.com/" >BYU-I email</a></li>

            </ul>
      </nav>
      <br />
        <form action="index1.php" method="POST" accept-charset="utf-8">
		  <input type="submit" id="submit" name="action" value="Search">
			  <input type="text" name="search" placeholder="Book Name" value="<?php echo $searchName;?>"/>
		</form>
    </header>
    <br />
    <br />
   
	<?php echo $output; ?>
</div>
</body>
</html>


	
