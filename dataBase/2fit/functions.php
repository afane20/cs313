<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
function setConnection(){
	
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitness";
	echo 'here';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
	return $conn;
}

function displayData(){
$conn = setConnection();
$sql = "SELECT user_id, first_name, last_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
}

$conn->close();

?>  

</body>
</html>