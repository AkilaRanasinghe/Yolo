/*dropdown sidebar starts here*/
function dropdown () {
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}	
}

/*slider starts here*/
var slideIndexx = 0;
function showSlides2() {
  var ii;
  var slidess = document.getElementsByClassName("mySlides2");
  for (ii = 0; ii < slidess.length; ii++) {
    slidess[ii].style.display = "none";  
  }
  slideIndexx++;
  if (slideIndexx > slidess.length) {
	  slideIndexx = 1
	}    
  slidess[slideIndexx-1].style.display = "block";  
  setTimeout(showSlides, 10000);
}

var slideIndex = 0;
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {
	  slideIndex = 1
	}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides2, 6000);
}