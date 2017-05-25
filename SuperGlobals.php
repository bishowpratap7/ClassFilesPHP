<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Superglobal Arrays</title>
</head>

<body>
<h1>Superglobal Arrays</h1>
<h2>$_COOKIE</h2>
<ol>
<?php
	foreach ($_COOKIE as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_ENV</h2>
<ol>
<?php
	foreach ($_ENV as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_FILES</h2>
<ol>
<?php
	foreach ($_FILES as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_GET</h2>
<ol>
<?php
	foreach ($_GET as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_POST</h2>
<ol>
<?php
	foreach ($_POST as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_REQUEST</h2>
<ol>
<?php
	foreach ($_REQUEST as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_SESSION</h2>
<ol>
<?php
	foreach ($_SESSION as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
<hr>
<h2>$_SERVER</h2>
<ol>
<?php
	foreach ($_SERVER as $key => $item)
	{
		echo "<li><b>$key:</b> $item<br></li>";
	}
?>
</ol>
</body>
</html>

