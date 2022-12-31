function formCheck() {
	var username = document.form.username.value;
	if (username.substring(username.length-4, username.length-1).includes(".") == false) {
		alert("Invalid username");
		return false;

	}
	if (document.form.crab.value < 0 || document.form.centipede.value < 0 || document.form.shark.value < 0) {
		alert("Invalid number of items");
		return false;
	}

	return true;

}

s
