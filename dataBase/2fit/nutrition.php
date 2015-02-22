<?php
session_start();
if (!isset($_SESSION["username"])){
	echo '<script>alert("Pleasing sing up/login");</script>';	
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../index.css" />

</head>
<body>
  <div id="login">
   
   		<ul id = "loginUl" >
        	
    		<li id="styleLi"><a id="fora" href="login.php">Login </a></li>
        	<li id="styleLi"><a id="fora" href="register.php">Sign up</a></li>
            <li id="styleLi"><a id="fora" href='logout.php/?action=logout'>Logout</a></li>

             <li id="styleLi" class="left"><form action="index2.php" method="POST" accept-charset="utf-8">
                         <input type="text" name="search" placeholder="Products" value="<?php echo $searchName;?>"/></li>
			<li id="styleLi"> <input type="submit" id="submit" name="action" value="Search"></li>
		</form>
   		</ul>
        
	</div>

   <div id="topColor">
					<?php
   					if (isset($_SESSION['username'])){
						include 'login.php';
					
						}
						else {
						echo "Hello! Welcome to Sports Nutrition";
						}
						//echo $text;
  					 ?>
  				
   </div>

    <header id="top">
    <a href="view.php" ><img src="../logo.jpg" width="195" height="117" alt=""/></a>

      <nav id="mainnav" style="">
            <ul style="list-style-type:none; margin:0px;padding:0px">
                <li><a href="view.php"  >Home CS313</a></li>
                <li><a href="nutrition.php" >Sports Nutrition</a></li>           
                <li><a href="tips.php" >Tips</a></li>
                <li><a href="cart.php" >Cart</a></li>
                <li><a href="assignments.html" >Assignments</a></li>

            </ul>
      </nav>
     
   </header>
   
   <?php  include 'slider.html'; ?>
<div id="wrapper">
               
        <?php
		//echo "Favorite sport product is " . $_SESSION["productName"] . ".<br>";
		$product = $_SESSION["productName"];
		echo $_SESSION["username"]; // display the username of the of the person login
		?>
    <br />
    <br />
   
	<?php echo $output; ?>
    
  <div></div>
<?php
$servername = "127.7.209.2";
$username = "afane";
$password = "rareriroru";
$dbname = "Fitness";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
// ---------
// * first request
// -----------
$sql = "SELECT name, price, servings, description, image FROM products Where products_id='$product'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
     
	 // output data of each row
     while($row = $result->fetch_assoc()) {
		  echo '<table><tr><td><img src="'. $row["image"].'" height="200" width="250" ></td>';
         echo "<td><h3>Product Name: " . $row["name"]. "</h3><b>Price: " . $row["price"]. "</b><br><b>Servings: " 
		 . $row["servings"]. "</b><br><b>Description: </b>" . $row["description"]. "</td>";
     }
     echo "</table>";
	}	 else {
     echo "0 results";
	}

// -----------------------------------------------------------------------------------------------
// * second request, for some reason PHP likes in SOME cases to have the varaibles inside a SQL statement 
//   be inside single quotes
// -----------------------------------------------------------------------------------------------
if (isset($_POST['button'])) {

	$username = $_SESSION["username"];
	$sql = "SELECT user_id FROM users WHERE username='$username'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $user = $row["user_id"];
		 $insert = "INSERT INTO user_products(user_id, product) VALUES($user, $product)";
		 $result = $conn->query($insert);
     }
	}	 else {
     echo "bleh results";
	}
		
	
}
/*	$username = $_SESSION["username"];
	$join = "SELECT p.name, p.price, p.servings, p.description, u.username FROM user_products up 
		JOIN users u ON up.user_id = u.user_id 
		JOIN products p ON up.product = p.products_id
        WHERE u.username='$username'";

	$send = $conn->query($join);
	
	if ($send->num_rows > 0) {
		while ($row = $send->fetch_assoc()){
			echo $row["name"];	
		}
		
	}
	*/
	
	
$conn->close();
?>  
<br><br>
 <form method="post" action="" >
<input type="submit" name="button" value="Add to Cart">

</form>

<br>
</body>
</html>
