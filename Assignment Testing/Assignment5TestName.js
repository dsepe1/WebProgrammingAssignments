function testLength() {
	var name = document.getElementById('username').value;
		nLength = name.length;
		if (nLength < 6 || nLength > 23) {
			reset();
			alert("Username must be between 6 and 23 characters!");
			return false;
		} else return pattern();
			function pattern() {
				var name = document.getElementById('username').value;
					pattern = name.match(/\d\w+/);	// if pattern does not match allowed regex pattern, value returns null
				if (pattern != null) return true;
				else {
					reset();
					alert("The first character must be a digit!");
					return false;
				}
			}
}

function reset() {
	document.Form1.reset();
}