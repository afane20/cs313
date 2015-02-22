<?php
	require('connect.php');
	
	// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["username"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["username"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
     
   if (empty($_POST["password"])) {
     $website = "";
   } else {
     $website = test_input($_POST["password"]);
   }

   if (empty($_POST["firstName"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["firstName"]);
   }

   if (empty($_POST["lastName"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["lastName"]);
   }
   
   if (empty($_POST["phone"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["phone"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
	
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstName']) &&
	    isset($_POST['lastName']) && isset($_POST['email'])    && isset($_POST['phone']))   {
        
		$username = test_input($_POST['username']);
		$password = test_input($_POST['password']);
		$firstName = test_input($_POST['firstName']);
		$lastName = test_input($_POST['lastName']);
		$email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);

 
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
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
 <a href="view.php" ><img src="../logo.jpg" width="195" height="117" alt=""/></a>
<div id="wrapper">

    <!-- Form for logging in the users -->
<div class="register-form"><span style="text-align: left"></span>
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
 
 <div id="registerHead" >
 <div id="register">
<h1>Register</h1></div>
<form action="" method="POST">

    <p>
      <label>User Name &nbsp; &nbsp; &nbsp;: </label>
      <input id="username" type="text" name="username" placeholder="username" /></p>
    
     <p>
       <label>First Name &nbsp; &nbsp; &nbsp; : </label>
       <input id="username" type="text" name="firstName" placeholder="First Name" /></p>
	
    
     <p>
       <label>Last Name &nbsp; &nbsp; &nbsp; : </label>
       <input id="lastName" type="text" name="lastName" placeholder="Last Name" /></p>
     
     <p><label>Phone Number : </label>
	 <input id="phoneNumber" type="text" name="phone" placeholder="321-345-9987" /></p>
	
	
	
	<p>
	  <label>E-Mail &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </label>
	  <input id="password" type="email" name="email" required placeholder="vivek@email.com" /></p>
 
     <p><label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
 <div id="register">
    <a id="move" class="button" href="login.php">Login</a>
    
    <input id="moveRight" class="button" type="submit" name="submit" value="Register" /></div>
  </form>
  </div>
</div>

</div>
</body>
</html>