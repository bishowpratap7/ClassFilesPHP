<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Indexed Arrays</title>
</head>

<body>
<h1>Indexed Arrays</h1>
<?php
	$beatles = array();
	$beatles[0] = 'John';
	$beatles[1] = 'Paul';
	$beatles[2] = 'George';
	$beatles[3] = 'Ringo';
	
	echo $beatles[2]; //outputs George to the browser
	
	$beatles[] = 'Nat';
?>
<hr>
<?php
	foreach ($beatles as $beatle)
	{
		echo "$beatle<br>";
	}
?>
</body>
</html>

