<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>DataBase</title>
  <link rel="stylesheet" type="text/css" href="../index.css" />
</head>

<body>
   <div id="login">
   
   		<ul id = "loginUl" >
        	
    		<li id="styleLi"><a id="fora" href="login.php">Login </a></li>
        	<li id="styleLi"><a id="fora" href="register.php">Sign up</a></li>
            <li id="styleLi"><a id="fora" href='logout.php/?action=logout'>Logout</a></li>

             <li id="styleLi" class="left"><form action="index1.php" method="POST" accept-charset="utf-8">
		 				
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

      <nav id="mainnav">
            <ul style="list-style-type:none; margin:0px;padding:0px">
                <li><a href="view.php"  >Home CS313</a></li>
                <li><a href="nutrition.php" >Sports Nutrition</a></li>           
                <li><a href="tips.php" >Tips</a></li>
                <li><a href="cart.php" >Cart</a></li>
                <li><a href="assignments.html" >Assignments</a></li>

            </ul>
      </nav>
     
</header>

<?php  include 'slider.html' ?>
<div id="wrapper">

	<?php 
	echo $output; 
	?>
    <hr />
  <div>
  	

  </div>
  
  <div>
  <h2>JESSIE HILGENBERG'S MUSCLE-BUILDING TIPS</h2>
  
  <blockquote>Lean mass isn't easy to build, but with the right tips in your arsenal and a sound plan of attack, you'll be on your way to making gains. </blockquote>
  
  <p>Looking to build some lean mass and get geared up for the beach season ahead? Contrary to what many women believe, putting on muscle will only improve how you look when you head out in your swimsuit. That's right, I'm talking about gains.<br><br>

Building lean mass will not only help add curves in all the right places, it will also skyrocket your metabolism so that you burn more calories every hour of the day—even when you're at rest.1 This means that even two hours after your lifting session is over—when you're slumped over on the couch and binge-watching Netflix—your body is actually burning fat. The end result: You look leaner overall.<br><br>

If you're worried that lifting heavy will make you manly, feel free to put those fears to rest. Given our hormonal profile, and the fact that we produce one-tenth the amount of muscle-building testosterone of a man, getting huge by lifting weights isn't even an option for women.2 And if you're just worried about putting on mass and being greeted by a high number when you step on the scale, don't be. In fact, women who build muscle mass typically look smaller than they did before. How? Well, a pound of muscle takes up less room than fat on the body, and building that added muscle often means burning up some fat.<br><br>

Now that your worries have been address and dismissed, you're ready to start on the muscle-building path. First things first—you need a good plan of attack and a great mentor to help get your started. IFBB Figure pro Jessie Hilgenberg is here to show you the way, using concepts she incorporates herself into her very own Jessie's Girls Muscle Building program, which can be found at Jessiefitness.com. <br><br></p>

   <img src="../../../images/jessie.jpg" width="560" height="305" alt=""/>
<br><br>
<h2>1.  Put A Plan In Place </h2>
<p>You wouldn't head out on a road trip without a map, so don't try to achieve your goals without a guide either. "You can't build your physique by mindlessly wandering around in the gym, choosing machines that are empty, or by simply showing up whenever you feel like it," Jessie explains. "You must have a schedule and plan for your workouts and make them a priority." <br><br>

Check out your schedule and see if you can carve out 45-60 minutes 4-5 times a week to train. Do your best to keep this at the same time daily. Having a set schedule will help you build consistency and stick to the program! <br><br></p>

<h2>2. INCORPORATE PROGRESSIVE OVERLOAD</h2>
<p>One important element that Jessie swears by is progressive overload. It's the foundation of her Jessie's Girls Muscle Building training program. "I like to use a progression period of 14 weeks where each week increases the demands being placed on the muscles," she explains. In order to prevent plateaus in your strength-training program, progressive overload is necessary for maximal muscle recruitment, and consequently muscle hypertrophy and strength increases.3 To achieve progressive overload, Jessie uses different techniques—increasing the overall volume with added sets and reps, adding more weight, or changing up the frequency or duration of rest periods.<br><br></p>

<h2>3.  Track Your Progress</h2>

<p>"You won't know how to progress and build upon what you've already done if you can't look back at past notes and see how you're progressing," Jessie explains. She recommends charting your progress on your Bodybuilding.com tracker or using your own personal journal. Seeing what you lifted last week, last month, or even last year can be extremely helpful, especially when you feel like you're hitting a plateau. "During times you feel stuck, you can look back over your training journal for a boost in confidence and see how much strength you've gained," she adds.<br><br>

Jessie also recommends taking starting and progress photos. While you might be reluctant to photograph yourself at the start, having a physical reminder of where you began can be a powerful catalyst for change. Taking photos on a biweekly basis will allow you to see changes that might be hard to spot in the mirror. "Doing this will help you see the transformations in your physique when you don't really feel like you're progressing," Jessie adds.<br><br>
</p>

   <img src="../../../images/jessie1.jpg" width="239" height="294" alt=""/>
<div>
<h2>Sample products</h2><h3>
    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitness";
$counter = 1;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, price, description, products_id, image FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if ($counter < 3){
		?>
        <table><tr><td><br/>
      <img src="<?php echo $row["image"]; ?>" alt="No image" width="128" height="128"></td><td>
		<?php
        echo "Name: " . $row["name"]. "<br>price: " . $row["price"]. " " . "<br>product Id: "
		.$row["products_id"]. " " . "<br>description:" . $row["description"] . "<br>";
    
	$counter++;
	echo "</td>";
	echo "</table><br><hr/>";
		}
	}
} else {
    echo "0 results";
}
?>
</h3>
</div>

</div>
  
  
</div>
</body>
</html>



	
