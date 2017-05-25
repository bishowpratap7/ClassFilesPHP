<?php
	$beatle = $_GET['Beatle'];
	$greeting = $_GET['Greeting'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?= $greeting . ' ' . $beatle ?>!</title>
</head>
<body>
<?php
	echo "$greeting $beatle!";
?>
</body>
</html>

