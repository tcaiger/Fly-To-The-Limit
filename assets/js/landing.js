// This code is for the homepage landing.

var i=0;

var landings = document.querySelectorAll('header');

var leftArrow = document.querySelector('.left-arrow');
var rightArrow = document.querySelector('.right-arrow');

leftArrow.addEventListener('click', function(){
	
	landings[i].classList.remove("visible");

	if(i==0){
		i=2;
	} else {
		i--;
	}
	
	landings[i].classList.add("visible");
	
})

rightArrow.addEventListener('click', function(){

	landings[i].classList.remove("visible");

	if(i==2){
		i=0;
	} else {
		i++;
	}

	landings[i].classList.add("visible");
	
})