<!--
	Assignment7TableCode.php
-->

<?php

	$inputRows = $_POST["inputRows"];
	$inputColumns = $_POST["inputColumns"];
	$rowNumber = $columnNumber = 1;
	$border = $_POST["style"];
	//echo "The following table will be dimensioned with " . $inputRows . " rows and " . $inputColumns . " columns.";
	# example of another comment using a pound
	echo $border;
	echo '<table>';
	while ($rowNumber <= $inputRows) {
		echo '<tr>';
		while ($columnNumber <= $inputColumns) {
			echo '<td>','[test Row ' . $rowNumber . ', ' . 'Column ' . $columnNumber . ' ]','</td>';
			$columnNumber++;
		}
		echo '</tr>';
		$rowNumber++;
		$columnNumber = 1;
	}
	echo '</table>';

	#$separationSymbol = "*|*";
	#echo "testing to see if this still works ", $separationSymbol, " this is separated by a symbol";

?>

<a href="Assignment7TableHTML.php" />
Click here to return to the submission form for rows and columns
<br />
<a href="index.html" />
Click here to return to dsepe1's homepage