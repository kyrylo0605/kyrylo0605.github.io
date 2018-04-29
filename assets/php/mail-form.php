<?php

$dbc = mysqli_connect('localhost', 'root', '', 'kyrylo0605')

	or die('Error connecting to MySQL server.');

	$query = "INSERT INTO my_mail (name, email, message) VALUES ('Sally', 'kiril06051986@gmail.com', 'Hi, I'm a coder!)";

	$result = mysqli_query($dbc, $query)
		or die('Error querying database. ');

		mysqli_close($dbc);
