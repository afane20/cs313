<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scriptures</title>
	<link href="style.css" rel="stylesheet"  type="text/css">
</head>
<body>
	<form action="index1.php" method="POST" accept-charset="utf-8">
		<input type="submit" id="submit" name="action" value="Search">
		<input type="text" name="search" placeholder="Book Name" value="<?php echo $searchName;?>"/>
	</form>
	<?php echo $output; ?>
</body>
</html>