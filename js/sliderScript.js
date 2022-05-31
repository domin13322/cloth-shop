var slideIndex = 0;
displaySlide(slideIndex);
function activeSlide(n) {
	displaySlide(slideIndex = n);
}
function displaySlide(n) {
    var i;
    var totalSlides=document.getElementsByClassName("sliderImg");
	var totalDots=document.getElementsByClassName("footerdot");
    console.log("totalslides"+totalSlides.length);
    console.log("totaldots"+totalDots.length);
	slideIndex = n;
	for (i = 0; i < totalSlides.length; i++) {
		totalSlides[i].style.display = "none";
	}
	for (i = 0; i < totalDots.length; i++) {
		totalDots[i].className =
		totalDots[i].className.replace(" active", "")
	}
	for(i=slideIndex*3;i<(slideIndex*3+3); i++){
        totalSlides[i].style.display="inline-block"
    }
	totalDots[slideIndex].className += " active";
}
function changeSlide(){
	var totalDots=document.getElementsByClassName("footerdot");
	if(slideIndex<(totalDots.length-1)){
		slideIndex+=1;
	}
	else {
		slideIndex=0;
	}
	displaySlide(slideIndex)
	setTimeout(changeSlide,5000);
}