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
  <h2>Shin & Susan Ohtake Tips</h2>
  
  <p>These High-Intensity Interval Workouts, Circuit Workouts & Strength Workouts Get You Lean & Ripped So Fast, Your Friends Will Beg You to Tell Them Your Secret</p>
  
  <p>Here are the 6 WORST things you can do if you want to ignite your body's own fat-burning furnace and get lean, strong & totally ripped in less time:<br><br>

<img src="images/mistake1.png" width="213" height="200" alt=""/> 

Doing isolated exercises like bicep curls and tricep kick-backs will NOT get you any significant results. These one-muscle-at-a-time moves simply don't stimulate enough muscle fibers to build lean muscle or expend enough energy to maximize your calorie burn.<br><br>

If you want to build lean muscle while burning fat so you can get serious definition, you need to perform exercises that stimulate as many muscles and expend as much energy as possible at the same time. Using these types of exercises (which I'll reveal on the next page) will dramatically accelerate your results.<br><br>

<img src="images/mistake2.png" width="157" height="200" alt=""/>

Doing isolated exercises like bicep curls and tricep kick-backs will NOT get you any significant results. These one-muscle-at-a-time moves simply don't stimulate enough muscle fibers to build lean muscle or expend enough energy to maximize your calorie burn. <br><br></p>

If you want to build lean muscle while burning fat so you can get serious definition, you need to perform exercises that stimulate as many muscles and expend as much energy as possible at the same time. Using these types of exercises (which I'll reveal on the next page) will dramatically accelerate your results.<br><br>

<img src="images/mistake3.png" width="130" height="200" alt=""/>

<br><br>
<h2> Doing long Bouts of Cardio </h2>
<p>If you want washboard abs, doing traditional ab exercises like crunches and sit-ups WILL NOT get you a six pack. In fact, doing any exercises that target your abs won't get you a six pack either! These so-called "ab" exercises are a complete waste of time. They don't make your abs get any more defined and they definitely don't burn any fat.<br><br>

In this article, I'm going to reveal the most effective way to pump up your cardio routine that will get you insane results in half the time of your regular cardio workout -- without causing unnecessary stress on your joints. Seriously, don't skip this article because once you learn this simple trick, you'll kick yourself for not doing it all along.<br><br>

<img src="images/mistake4.png" width="130" height="200" alt=""/>

If you want washboard abs, doing traditional ab exercises like crunches and sit-ups WILL NOT get you a six pack. In fact, doing any exercises that target your abs won't get you a six pack either! These so-called "ab" exercises are a complete waste of time. They don't make your abs get any more defined and they definitely don't burn any fat. <br><br></p>

<p>The key to getting sculpted abs is to burn off that stubborn layer of belly fat that's hiding them! In the next few minutes, I'll show you how to burn away the "ab flab" while stimulating all 6 of your abdominal muscles at the same time so you can finally carve out your six pack abs.<br><br></p>

<img src="images/mistake5.png" width="130" height="200" alt=""/>

<p>Repeating the same workouts over and over is a surefire way to STOP getting results. We're creatures of habit and we tend to stick to things we're familiar with and good at. But when it comes to your workouts, if you want to keep making progress and keep seeing changes in your body, you've got to start switching things up.<br><br>

You see, your body has an amazingly ability to adapt quickly and when it does, that's when you hit the dreaded plateau and you stop making progress. On the next page, I'm going to tell you exactly how often you need to change up your workout routine so you can keep your body guessing to accelerate the results process.<br><br>

<img src="images/mistake6.png" width="130" height="200" alt=""/>

Longer workouts do NOT equal better or faster results. If you've been slaving away at the gym and your body isn't visibly changing, you can't do more of the same thing and expect a different result.

When it comes to getting lean and fit, your body responds to quality over quantity. I'm going to tell you the #1 way to super-charge your workouts -- this simple, yet overlooked method is the single fastest way to getting lean and ripped while cutting your workout time almost in half. No joke - this technique will open up a can of whoop-ass on your workout!

</p>

</div>
  
  
</div>
</body>
</html>