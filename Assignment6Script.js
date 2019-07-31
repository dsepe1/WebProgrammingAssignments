//	Assignment 6 JS
var inputRows = prompt("How many rows do you want?");
	inputColumns = prompt("How many columns do you want?");
	rowNumber = 1;
	columnNumber = 1;
document.write('<table>',);
while (rowNumber <= inputRows) {
	document.write('<tr>',);
			while (columnNumber <= inputColumns) {	
				document.write(
				'<td>',
					'[ Row ',
					rowNumber,
					',',
					' Column ',
					columnNumber,
					' ]',
			 	'</td>',
			 	);
			 	columnNumber++;
	 		}
document.write('</tr>',);
rowNumber++;
columnNumber=1;	
}
document.write('</table>', '<br />');

rowNumber = 1;
columnNumber = 1;

document.write('<button	type="button"	onclick="increase_R()"> Add Another Row </button>', '<br />');
document.write('<button	type="button"	onclick="decrease_R()"> Remove Latest Row </button>', '<br />');
document.write('<button	type="button"	onclick="increase_C()"> Add Another Column </button>', '<br />');
document.write('<button	type="button"	onclick="decrease_C()"> Remove Latest Column </button>', '<br />');

function increase_R() {
	inputRows++;
	document.write('<table>',);
		while (rowNumber <= inputRows) {
			document.write('<tr>',);
					while (columnNumber <= inputColumns) {	
						document.write(
						'<td>',
							'[ Row ',
							rowNumber,
							',',
							' Column ',
							columnNumber,
							' ]',
					 	'</td>',
					 	);
					 	columnNumber++;
			 		}
		document.write('</tr>',);
		rowNumber++;
		columnNumber=1;	
		}
	document.write('</table>', '<br />');
}

function decrease_R() {
	inputRows--;
	document.write('<table>',);
		while (rowNumber <= inputRows) {
			document.write('<tr>',);
					while (columnNumber <= inputColumns) {	
						document.write(
						'<td>',
							'[ Row ',
							rowNumber,
							',',
							' Column ',
							columnNumber,
							' ]',
					 	'</td>',
					 	);
					 	columnNumber++;
			 		}
		document.write('</tr>',);
		rowNumber++;
		columnNumber=1;	
		}
	document.write('</table>', '<br />');
}

function increase_C() {
	inputColumns++;
	document.write('<table>',);
		while (rowNumber <= inputRows) {
			document.write('<tr>',);
					while (columnNumber <= inputColumns) {	
						document.write(
						'<td>',
							'[ Row ',
							rowNumber,
							',',
							' Column ',
							columnNumber,
							' ]',
					 	'</td>',
					 	);
					 	columnNumber++;
			 		}
		document.write('</tr>',);
		rowNumber++;
		columnNumber=1;	
		}
	document.write('</table>', '<br />');
}

function decrease_C() {
	inputColumns--;
	document.write('<table>',);
		while (rowNumber <= inputRows) {
			document.write('<tr>',);
					while (columnNumber <= inputColumns) {	
						document.write(
						'<td>',
							'[ Row ',
							rowNumber,
							',',
							' Column ',
							columnNumber,
							' ]',
					 	'</td>',
					 	);
					 	columnNumber++;
			 		}
		document.write('</tr>',);
		rowNumber++;
		columnNumber=1;	
		}
	document.write('</table>', '<br />');
}
