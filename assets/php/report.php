<!DOCTYPE html>
<html>
<head>
	<title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
	<h2>Aliens Abducted Me - Report an Abduction</h2>
	<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	 $dbc = mysqli_connect('localhost', 'root', '', 'kyrylo0605')

	or die('Error connecting to MySQL server.');


	$query = "INSERT INTO my_mail (name, email, message) VALUES ('$name', '$email', '$message')";

	$result = mysqli_query($dbc, $query)
		or die('Error querying database. ');

		mysqli_close($dbc);


	 echo 'Thanks for submitting the form.<br />';
	 echo 'Your email address is: ' . $email;
	 ?>
</body>
</html>