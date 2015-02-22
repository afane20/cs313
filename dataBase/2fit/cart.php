<?php
session_start();
if (!isset($_SESSION["username"])){
	echo '<script>alert("You have nothing in your cart, please login/sing up!");</script>';	
}
?>
<!DOCTYPE html>
<html>
<head>
<?php
$servername = "127.7.209.2";
$username = "afane";
$password = "rareriroru";
$dbname = "Fitness";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

?>


<style>
table, th, td {
     border: 1px solid black;
}
</style>

  <link rel="stylesheet" type="text/css" href="../index.css" />

</head>
<body style=" ont: 15px arial, sans-serif;">
 <div id="login">
   
   		<ul id = "loginUl" >
        	<!--<li><a id="fora">
						
                     </a>
  			 </li>-->
    		<li id="styleLi"><a id="fora" href="login.php">Login </a></li>
        	<li id="styleLi"><a id="fora" href="register.php">Sign up</a></li>
            <li id="styleLi"><a id="fora" href='logout.php/?action=logout'>Logout</a></li>
            
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
  		 ?>
    </div>

<br>
<?php
if (isset($_POST['button'])){
	echo "name" . $username;
	$userId = "SELECT user_Id FROM users WHERE username='$username'";
	$getId = $conn->query($userId);
		if ($getId->num_rows > 0) {

	while ($ra2 = $getId->fetch_assoc()){
	echo $ra2["user_id"];
	echo "user" . $user;
	}
		}
	else {echo "error";}
	//$delete = "DELETE FROM user_products WHERE userId='$user'";
	//$emptyCart = $conn->query($delete);
	}



	$delete = $_POST["check"];
	
	echo $delete;
    
	foreach ($delete as $items){
	$deleteCommand = "DELETE FROM user_products WHERE cart='$items'";
	
	//echo $deleteCommand;
	$cartId = $conn->query($deleteCommand);
	//echo "This is the cart key = " . $cartId;
	}
?>


<br>
<br>
    <header id="top">
    <a href="view.php" ><img src="../logo.jpg" width="195" height="117" alt=""/></a>

      <nav id="mainnav" style="">
            <ul style="list-style-type:none; margin:0px;padding:0px">
                <li><a href="../../index.html"  >Home CS313</a></li>
                <li><a href="nutrition.php" >Sports Nutrition</a></li>           
                <li><a href="tips.html" >Tips</a></li>
                <li><a href="cart.php" >Cart</a></li>
                <li><a href="assignments.html" >Assignments</a></li>

            </ul>
      </nav>
     
   </header>
   <div id="wrapper">
		
        
        <?php
		$product = $_SESSION["productName"];
		echo $_SESSION["username"]; // display the username of the of the person login
		echo " These are the products in your cart";
		?>
    <br />
    <br />
   
	<?php echo $output; ?>
    
  <div>
  <form method="post" action ="cart.php">
  <table>
    	<tr>
        	<td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Servings</td>
            <td>Description</td>
            <td>Product</td>
        </tr>
 
<?php

	$username = $_SESSION["username"];
	$join = "SELECT cart, p.name, p.price, p.servings, p.products_id, p.image, p.description, u.username FROM user_products up 
		JOIN users u ON up.user_id = u.user_id 
		JOIN products p ON up.product = p.products_id
        WHERE u.username='$username'";
	
	$send = $conn->query($join);
	
	if ($send->num_rows > 0) {
		while ($row = $send->fetch_assoc()){
				
	?>		
    <tr>	
    	<td><input type="checkbox" name="check[]" value="<?php echo $row["cart"]; ?>"><?php echo $row["products_id"]; ?> </td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["price"]; ?></td>
        <td><?php echo $row["servings"]; ?></td>
        <td><?php echo '<h3>' . $row["description"] . '</h3>'; ?></td>
        <td><img src="<?php echo $row["image"]; ?>" width="100" height="100"></td>

    </tr>
	<?php  
		}
	
	}
	
?>  
</table>
</div>
<table>
	<tr><td><input class="myButton" type="submit" value ="delete"></td>
</form>

 <form method="post" action="" >
<td><input class="myButton" type="submit" name="button" value="Check out"></td></tr>
</form>

 </div>
 
</body>
</html>
