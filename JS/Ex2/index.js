let slides = ["num1.jpg", "num2.jpg", "num3.jpg", "num4.jpg", "num5.png"];
function prev() {
  var slide = document.getElementById("img");

  if (slide.name != 0) {
    slide.name = parseInt(slide.name) - 1;
    slide.src = slides[slide.name];
  }
  else {
    slide.name = parseInt(slides.length) - 1;
    slide.src = slides[slide.name];
  }
}

function next() {
  var slide = document.getElementById("img");

  if (slide.name != slides.length - 1) {
    slide.name = parseInt(slide.name) + 1;
    slide.src = slides[slide.name];
  }
  else {
    slide.name = "0";
    slide.src = slides[slide.name];
  }
}
