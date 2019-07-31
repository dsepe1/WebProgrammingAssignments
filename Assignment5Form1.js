// Assignment5JSValidate.js
//	Validates the conditions of Assignment 5

function testNameLength() {
	var name = document.getElementById('username').value;
		nLength = name.length;
		if (nLength < 6 || nLength > 23) {
			name = "";
			alert("Username must be between 6 and 23 characters!");
			return false;
		} else return checkNamePattern();
			function checkNamePattern() {
				var name = document.getElementById('username').value;
					pattern = name.match(/\d\w+/);	// if pattern does not match allowed regex pattern, value returns null
				if (pattern != null) return testPasswordLength();
				else {
					name = "";
					alert("The first character of the username must be a digit!");
					return false;
				}
			}
}

function testPasswordLength() {
	var password = document.getElementById('password').value;
		pwLength = password.length;
		if (pwLength < 6 || pwLength > 23) {
			password = "";
			alert("Password must be between 6 and 23 characters!");
			return false;
		} else return checkPasswordPattern();
			function checkPasswordPattern() {
				var password = document.getElementById('password').value;
					pattern = password.match(/\d\w+/);	// if pattern does not match allowed regex pattern, value returns null
				if (pattern != null) return true;
				else {
					password = "";
					alert("The first character of the password must be a digit!");
					return false;
				}
			}
}