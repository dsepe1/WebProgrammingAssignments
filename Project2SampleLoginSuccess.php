<!-- This is the sample database for the valid user database. -->
<?php

$lnk = mysqli_connect("localhost", "dsepe1", "dsepe1", "dsepe1");
if (!$lnk) die("Not Connected: " . mysqli_connect_error($lnk));

mysqli_select_db($lnk,"dsepe1");

$inputEmail = $_POST["inputEmail"];
$inputPassword = $_POST["inputPassword"];
$inputCombo = $inputEmail . $inputPassword;

if ($inputEmail == "" or $inputPassword == "") {
	echo "Please make sure email address and/or password fields are not empty." . '<br />';
} else {
	$selectData = "SELECT * FROM Project2Table";
	$myData = mysqli_query($lnk,$selectData);
	$noMatch = 0;
	while ($record = mysqli_fetch_array($myData)) {
			$retrievedCombo = $record['email'] . $record['password'];
			// echo $retrievedCombo . '<br />';
			if ($retrievedCombo == $inputCombo) {
				echo "Welcome back, " . $record['username'] . '! <br />';
				$noMatch = 0;
				break;
			}
			else {
				$noMatch++;
			}
	}
	if ($noMatch > 0) {
		echo "Your email and password do not match.";
	}
}

?>