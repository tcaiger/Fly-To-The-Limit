// This is draft code for the side navigation menus 

// Get the labels into variable arrays
var labels = document.querySelectorAll('nav label');

labels[0].style.borderRight = "1px solid #2980b9";
labels[0].firstElementChild.style.color="#2980b9";

for (var i = 0; i < labels.length; i++) {
	
	(function(_i){

		labels[i].addEventListener('click', function(){

			// loop through all the labels
			for (var j = 0; j < labels.length; j++) {

				// If this is not the one that was clicked, no color
				if(j!=_i){

					labels[j].style.borderRight = "";
					labels[j].firstElementChild.style.color="";				

				// If this is the one that was clicked, make it blue
				} else {

					labels[j].style.borderRight = "1px solid #2980b9";
					labels[j].firstElementChild.style.color="#2980b9";	

				}				
			};					
		})
	})(i);
};


