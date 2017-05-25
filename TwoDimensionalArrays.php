<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Two-dimensional Arrays</title>
</head>

<body>
<h1>Two-Dimensional Arrays</h1>
<?php
$rockBands = array(
	array('Beatles','Love Me Do', 'Hey Jude','Helter Skelter'),
	array('Rolling Stones','Waiting on a Friend','Angie','Yesterday\'s Papers'),
	array('Eagles','Life in the Fast Lane','Hotel California','Best of My Love')
);
?>
<table border="1">
<tr>
	<th>Rockband</th>
	<th>Song 1</th>
	<th>Song 2</th>
	<th>Song 3</th>
</tr>
<?php
foreach($rockBands as $rockBand)
{
	echo '<tr>';
	foreach($rockBand as $item)
	{
		echo "<td>$item</td>";
	}
	echo '</tr>';
}
?>
</table>
</body>
</html>

