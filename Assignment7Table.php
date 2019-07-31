<?php

	$inputRows = $_POST["inputRows"];
	$inputColumns = $_POST["inputColumns"];
	$rowNumber = $columnNumber = 1;
	//echo "The following table will be dimensioned with " . $inputRows . " rows and " . $inputColumns . " columns.";
	# example of another comment using a pound
	echo '<table>';
	while ($rowNumber <= $inputRows) {
		echo '<tr>';
		while ($columnNumber <= $inputColumns) {
			echo '<td>','[Row ' . $rowNumber . ', ' . 'Column ' . $columnNumber . ']','</td>';
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