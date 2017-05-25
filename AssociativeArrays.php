<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Associative Arrays</title>
</head>

<body>
<h1>Associative Arrays</h1>
<?php
	$beatles = array('singer1' => 'John',
					'singer2' => 'Paul',
					'guitarist' => 'George',
					'drummer' => 'Ringo');

	echo $beatles['drummer']; //outputs Ringo to the browser
?>
<hr>
<?php
	foreach ($beatles as $key => $beatle)
	{
		echo "<b>$key:</b> $beatle<br>";
	}
?>
</body>
</html>

