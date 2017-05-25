<?php
	//Assign the passed variable to a variable with
	//a more convenient name.
	$greeting = $_GET['greet'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?= $greeting ?> World!</title>
</head>
<body>
<?php
	echo "$greeting World!";
?>
</body>
</html>
