// Assignment5Form2.js
// validatest the requirements for Assignment5Form2.html

function checkBoxes() {	// checks to see if at least one checkbox is selected but no more than two
	var boxesChecked = 0;
	if (document.getElementById('check1').checked == true) boxesChecked++;
	if (document.getElementById('check2').checked == true) boxesChecked++;
	if (document.getElementById('check3').checked == true) boxesChecked++;
	if (boxesChecked < 1 || boxesChecked > 2) {
		alert("At least one of the Days must be checked but no more than two!");
		return false;
	}
	else return checkRadio();
}

function checkRadio() {	// checks to see if one radio is selected
	var radiosChecked = 0;
	if (document.getElementById('radio1').checked == true) radiosChecked++;
	if (document.getElementById('radio2').checked == true) radiosChecked++;
	if (document.getElementById('radio3').checked == true) radiosChecked++;
	if (radiosChecked < 1) {
		reset();
		alert("You must select at least one choice from Available Times!");
		return false;
	} else return checkSelected();
}

function checkSelected() { // checks to see if at least one item from list is selected
	var itemsSelected = 0;
	if (document.getElementById('select1').selected == true) itemsSelected++;
	if (document.getElementById('select2').selected == true) itemsSelected++;
	if (document.getElementById('select3').selected == true) itemsSelected++;
	if (itemsSelected < 1) {
		reset();
		alert("At least one of the classes must be selected!");
		return false;
	}
	else submit();
}

function reset() {
	document.Form2.reset();
}

function submit() {
	document.Form2.submit();
}