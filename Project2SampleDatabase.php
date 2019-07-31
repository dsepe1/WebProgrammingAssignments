<!-- This creates the database, table, and enters in the table information. -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="Project2SampleLoginSuccess.php" method="post">
		Please login with email and password.
		<br />
		<input type="text" name="inputEmail"> email
		<br />
		<input type="password" name="inputPassword"> password
		<br />
		<input type="submit" name="submit">
		<br />
		<br />
		Try any of the following combinations for email and password to log in successfully
		<br />
		or type anything else (or leave either fields blank) to get the correct error message.
		<br />
		<br />
		first@gmail.com, password1
		<br />
		second@yahoo.com, password2
		<br />
		third@student.gsu.edu, password3
		<br />
	</form>

<?php

$lnk = mysqli_connect("localhost", "dsepe1", "dsepe1", "dsepe1");
if (!$lnk) {
	die("Not Connected: " . mysqli_connect_error($lnk));
}

// if (mysqli_query($lnk,"CREATE DATABASE Project2Base")) {
// 	echo "Database created successfully!" . '<br />';
// } 
// else echo "Error: " . mysqli_error($lnk) . '<br />';

mysqli_select_db($lnk,"dsepe1");

$sql = "CREATE TABLE Project2Table (
email varchar(35),
password varchar(35),
username varchar(35)
)";

if (mysqli_query($lnk,$sql)) {
	echo "Table created succesfully!" . '<br />';
} 
// else echo "Error: " . mysqli_error($lnk) . '<br />';

// This part is for putting some sample values into the valid user database. The correct values
// should be based on what values are in the valid user database (registration page
// should add users to the valid user database).
if (!mysqli_error($lnk)) {
	$info = "INSERT INTO Project2Table (email,password,username)
			VALUES ('first@gmail.com','password1','Person1'),
					('second@yahoo.com','password2','Person2'),
					('third@student.gsu.edu','password3','Person3')
			";
}

if (mysqli_query($lnk,$info)) {
	echo "Emails, passwords, and Persons added successfully!" . '<br />' . '<br />';
}

mysqli_close($lnk);

?>

</body>
</html>