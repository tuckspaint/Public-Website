function validate() {
  if (document.getElementById("password1").value != document.getElementById("password2").value) {
    alert("The entered passwords do not match");
  }
  if (document.getElementById("password1").value.length < 8 || document.getElementById("password2").value.length < 8) {
    alert("Passwords must be at least 8 characters long");
  }
}
