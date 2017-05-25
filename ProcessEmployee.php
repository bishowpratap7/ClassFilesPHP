<?php
	$errors = false;
	if ($_POST['FirstName'] == '')
	{
		$firstName = '<span style="color:red;">First name omitted.</span>';
		$errors = true;
	}
	else
	{
		$firstName = $_POST['FirstName'];
	}

	if ($_POST['LastName'] == '')
	{
		$lastName = '<span style="color:red;">Last name omitted.</span>';
		$errors = true;
	}
	else
	{
		$lastName = $_POST['LastName'];
	}

	if ($_POST['Title'] == '')
	{
		$title = '<span style="color:red;">Title omitted.</span>';
		$errors = true;
	}
	else
	{
		$title = $_POST['Title'];
	}

	if ( array_key_exists('TitleOfCourtesy',$_POST) )
	{
		$titleOfCourtesy = $_POST['TitleOfCourtesy'];
	}
	else
	{
		$titleOfCourtesy = '<span style="color:red;">Title of Courtesy not selected.</span>';
		$errors = true;
	}

	if ($_POST['Address'] == '')
	{
		$address = '<span style="color:red;">Address omitted.</span>';
		$errors = true;
	}
	else
	{
		$address = $_POST['Address'];
	}

	if ($_POST['City'] == '')
	{
		$city = '<span style="color:red;">City omitted.</span>';
		$errors = true;
	}
	else
	{
		$city = $_POST['City'];
	}

	if ($_POST['Region'] == '')
	{
		$region = '<span style="color:red;">Region omitted.</span>';
		$errors = true;
	}
	else
	{
		$region = $_POST['Region'];
	}

	if ($_POST['PostalCode'] == '')
	{
		$postalCode = '<span style="color:red;">Postal code omitted.</span>';
		$errors = true;
	}
	else
	{
		$postalCode = $_POST['PostalCode'];
	}

	if ($_POST['Country'] == '')
	{
		$country = '<span style="color:red;">Country omitted.</span>';
		$errors = true;
	}
	else
	{
		$country = $_POST['Country'];
	}

	if ($_POST['HomePhone'] == '')
	{
		$homePhone = '<span style="color:red;">Home phone omitted.</span>';
		$errors = true;
	}
	else
	{
		$homePhone = $_POST['HomePhone'];
	}

	if ($_POST['Extension'] == '')
	{
		$extension = '<span style="color:red;">Extension omitted.</span>';
		$errors = true;
	}
	else
	{
		$extension = $_POST['Extension'];
	}

	if ($_POST['Notes'] == '')
	{
		$notes = 'none';
	}
	else
	{
		$notes = $_POST['Notes'];
	}

	if ($_POST['ReportsTo'] == 0)
	{
		$reportsTo = '<span style="color:red;">Manager not selected.</span>';
		$errors = true;
	}
	else
	{
		$reportsTo = $_POST['ReportsTo'];
	}

	if ($_POST['Password1'] == $_POST['Password2'])
	{
		$password = $_POST['Password1'];
	}
	else
	{
		$password = '<span style="color:red;">Passwords don\'t match.</span>';
		$errors = true;
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Process Employee</title>
</head>
<body>
	<h1>Process Employee</h1>
	<ul>
	<?php
		echo "<li><b>Name:</b> $titleOfCourtesy $firstName $lastName</li>";
		echo "<li><b>Title:</b> $title</li>";
		echo "<li><b>Address:</b> $address</li>";
		echo "<li><b>City, Region Zip:</b> $city, $region $postalCode</li>";
		echo "<li><b>Country:</b> $country</li>";
		echo "<li><b>Home phone:</b> $homePhone</li>";
		echo "<li><b>Extension:</b> $extension</li>";
		echo "<li><b>Notes:</b> $notes</li>";
		echo "<li><b>Manager:</b> $reportsTo</li>";
		echo "<li><b>Password:</b> $password</li>";
	?>
	</ul>
	<?php
	if ($errors)
	{
		echo "<a href='javascript:history.go(-1)'>Please go back to the form and try again.</a>";
	}
	else
	{
	?>
		<form method="post" action="CompleteProcessForm.php">
			<input type="hidden" name="FirstName" value="<?php echo $firstName ?>">
			<input type="hidden" name="LastName" value="<?php echo $lastName ?>">
			<input type="hidden" name="Title" value="<?php echo $title ?>">
			<input type="hidden" name="TitleOfCourtesy" value="<?php echo $titleOfCourtesy ?>">
			<input type="hidden" name="Address" value="<?php echo $address ?>">
			<input type="hidden" name="City" value="<?php echo $city ?>">
			<input type="hidden" name="Region" value="<?php echo $region ?>">
			<input type="hidden" name="PostalCode" value="<?php echo $postalCode ?>">
			<input type="hidden" name="Country" value="<?php echo $country ?>">
			<input type="hidden" name="HomePhone" value="<?php echo $homePhone ?>">
			<input type="hidden" name="Extension" value="<?php echo $extension ?>">
			<input type="hidden" name="Notes" value="<?php echo $notes ?>">
			<input type="hidden" name="ReportsTo" value="<?php echo $reportsTo ?>">
			<input type="hidden" name="Password" value="<?php echo $password ?>">
			<input type="submit" value="Confirm">
		</form>
	<?php
	}
	?>
</body>
</html>

