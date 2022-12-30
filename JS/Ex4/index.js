function apply() {
  var par = document.getElementById("myPar");
  var r1 = document.getElementById("red1").value;
  var g1 = document.getElementById("green1").value;
  var b1 = document.getElementById("blue1").value;
  var width = document.getElementById("width").value;
  var r2 = document.getElementById("red2").value;
  var g2 = document.getElementById("green2").value;
  var b2 = document.getElementById("blue2").value;

  par.style.borderColor = "rgb(" + r1 +", " + g1 + ", " + g1 + ")";
  par.style.borderWidth = width;
  par.style.backgroundColor = "rgb(" + r2 +", " + g2 + ", " + b2 + ")";
}
