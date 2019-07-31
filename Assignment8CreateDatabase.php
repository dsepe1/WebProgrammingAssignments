<!--Assignment8CreateDatabase.php-->
<xml version = "1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Daniel Sepe</title>
	<h3>Assignment 8</h3>
</head>
<body>

<?php

$lnk = mysqli_connect("localhost", "dsepe1", "dsepe1");
if (!$lnk) {
	die("Not Connected: " . mysqli_connect_error($lnk)) . '<br /';
}

if (mysqli_query($lnk,"CREATE DATABASE playerBase")) {
	echo "Database created successfully!" . '<br />';
} else echo "Error: " . mysqli_error($lnk) . '<br />';

mysqli_select_db($lnk,"playerBase");

$sql = "CREATE TABLE playerInfoTable (
firstName varchar(20),
lastName varchar(20),
Team varchar(30),
jerseyNumber int
)";

if (mysqli_query($lnk,$sql)) {
	echo "Table created succesfully!" . '<br />';
} else echo "Error: " . mysqli_error($lnk) . '<br />';

if (mysqli_error($lnk)) echo "Error: Player information has already been made." . '<br />';
else {
	$info = "INSERT INTO playerInfoTable (firstName,lastName,Team,jerseyNumber)
			VALUES ('Dwyane','Wade','Cleveland Cavaliers','9'),
					('LeBron','James','Cleveland Cavaliers','23'),
					('Kyrie','Irving','Boston Celtics','11'),
					('Devin','Booker','Phoenix Suns','1'),
					('Steph','Curry','Golden State Warriors','30'),
					('Paul','George','Oklahoma City Thunder','13'),
					('Russell','Westbrook','Oklahoma City Thunder','0'),
					('Kevin','Durant','Golden State Warriors','35'),
					('Chris','Paul','Houston Rockets','3'),
					('Karl-Anthony','Towns','Minnesota Timberwolves','32'),
					('Andrew','Wiggins','Minnesota Timberwolves','22')
			";
}

if (mysqli_query($lnk,$info)) {
	echo "Player info added successfully!" . '<br />';
}


mysqli_close($lnk);

?>

</body>
</html>