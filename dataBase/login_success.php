<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login succesfully </title>
</head>

<body>
<p>login succesfully</p>
</body>
</html>