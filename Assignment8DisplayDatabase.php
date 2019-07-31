<!--Assignment8DisplayDatabase.php-->
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

$lnk = mysqli_connect("localhost", "dsepe1", "dsepe1","dsepe1");
if (!$lnk) {
	die("Not Connected: " . mysqli_connect_error($lnk)) . '<br /';
}

mysqli_select_db($lnk,"dsepe1");

$sql = "CREATE TABLE playerInfoTable (
firstName varchar(20),
lastName varchar(20),
Team varchar(30),
jerseyNumber int
)";

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

echo '<table border = 1>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Team</th>
		<th>Jersey Number</th>
	</tr>';

mysqli_select_db($lnk,"dsepe1");

$selectData = "SELECT * FROM playerInfoTable";
$myData = mysqli_query($lnk,$selectData);
while ($record = mysqli_fetch_array($myData)) {
	echo '<tr>';
	echo '<td>' . $record['firstName'] . '</td>';
	echo '<td>' . $record['lastName'] . '</td>';
	echo '<td>' . $record['Team'] . '</td>';
	echo '<td align=right>' . $record['jerseyNumber'] . '</td>';
	echo '</tr>';
}
echo '</table>';

mysqli_close($lnk);

?>

<br />

<a href="http://codd.cs.gsu.edu/~dsepe1/">
	Click here to return to dsepe1's homepage.
</a>

</body>
</html>