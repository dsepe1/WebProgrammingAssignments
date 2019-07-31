//	Assignment 6 JS
var	inputRows = prompt("How many rows do you want?");
	inputColumns = prompt("How many columns do you want?");
	rowNumber = 1;
	columnNumber = 1;
table();

function table() {
	document.write('<style type="text/css">');
		document.write('td {border: thin solid black;}');
	document.write('</style>');
	document.write('<table>',);
	while (rowNumber <= inputRows) {
		document.write('<tr>',);
			while (columnNumber <= inputColumns) {	
				document.write(
				'<td>',
					//'[ ',
					' Row ',
					rowNumber,
					',',
					' Column ',
					columnNumber,
					//' ]',
			 	'</td>',
			 	);
			 	columnNumber++;
	 		}
	document.write('</tr>',);
	rowNumber++;
	columnNumber = 1;	
	}
	document.write('</table>', '<br />');
}

reset();

function reset() {
	rowNumber = 1;
	columnNumber = 1;
	writeOptions();
}

function writeOptions() {
	document.write('<button	type="button"	onclick="increaseR()"> Add Another Row </button>', '<br />');
	document.write('<button	type="button"	onclick="decreaseR()"> Remove Latest Row </button>', '<br />');
	document.write('<button	type="button"	onclick="increaseC()"> Add Another Column </button>', '<br />');
	document.write('<button	type="button"	onclick="decreaseC()"> Remove Latest Column </button>', '<br />');
}

function increaseR() {
	inputRows++;
	document.body.innerHTML = "";
	table();
	reset();
}

function decreaseR() {
	inputRows--;
	document.body.innerHTML = "";
	table();
	reset();
}

function increaseC() {
	inputColumns++;
	document.body.innerHTML = "";
	table();
	reset();
}

function decreaseC() {
	inputColumns--;
	document.body.innerHTML = "";
	table();
	reset();
}