// JavaScriptTables.js
var inputRows = prompt("How many rows do you want?");
	inputColumns = prompt("How many columns do you want?");
	rowNumber = 1;
	columnNumber = 1;
document.write('<table>',)
while (rowNumber <= inputRows) {
document.write('<tr>',)
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
document.write('</tr>',)
rowNumber++;
columnNumber=1;
}
document.write('</table>',)
