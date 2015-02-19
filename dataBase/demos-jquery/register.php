<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstName']) &&
	    isset($_POST['lastName']) && isset($_POST['email'])    && isset($_POST['phone']))   {
        
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
        $phone = $_POST['phone'];

 
        $query = "INSERT INTO `users` (username, password, email, phone, first_name, last_name) VALUES ('$username', '$password', '$email' , '$phone', '$firstName', '$lastName')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
		
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<title>CodingCyber.com - Simple user registration Script</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<a href="view.php" >Home</a>
    <!-- Form for logging in the users -->
<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Register</h1>
<form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
    
     <p><label>First Name : </label>
     <input id="username" type="text" name="firstName" placeholder="First Name" /></p>
	
    
     <p><label>Last Name : </label>
     <input id="lastName" type="text" name="lastName" placeholder="Last Name" /></p>
     
     <p><label>Phone Number : </label>
	 <input id="phoneNumber" type="text" name="phone" placeholder="321-345-9987" /></p>
	
	
	
	<p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
    <input id="password" type="email" name="email" required placeholder="vivek@email.com" /></p>
 
     <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
    <a class="btn" href="login.php">Login</a>
    <input class="btn register" type="submit" name="submit" value="Register" />
  </form>
</div>
</body>
</html>
