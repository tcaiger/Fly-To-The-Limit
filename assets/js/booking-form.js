// This code is for openning and closing the selectors & drop down menus
// as well as updating the tour prices

// Set the booking forms (info-section) into an array called pages
var pages = document.querySelectorAll('.info-section'); 


for (var x = 0; x < pages.length; x++) {
	
	
	// Set the price emelent to a varable for each page
	pages[x].priceTag = document.querySelector('.info-section:nth-of-type('+(x+1)+')>.price');

	// Create variables to calculate the price of the tours (to be set in the update price function below)
	pages[x].hours;
	pages[x].aircraft;
	pages[x].passengers;
	

	// For each page, set all the form rows into an array
	pages[x].formRow = document.querySelectorAll('.info-section:nth-of-type('+(x+1)+')>.select');

	// Loop through the  form rows
	for (var i = 0; i < pages[x].formRow.length; i++) {

		
		// And create an object with the heading, menu and list for each row
		pages[x].formRow[i].heading = pages[x].formRow[i].firstElementChild;
		pages[x].formRow[i].menu = pages[x].formRow[i].lastElementChild;
		pages[x].formRow[i].list = pages[x].formRow[i].lastElementChild.lastElementChild.children;

		
		// Event to open menu when user clicks on heading
		(function(_x, _i){
			pages[_x].formRow[i].heading.addEventListener('click', function(){

				var row = pages[_x].formRow[_i];
				var menu = pages[_x].formRow[_i].menu;
				var list = pages[_x].formRow[_i].list;
				console.log(menu);

				openMenu(row, menu, list);
			})
		})(x, i);

		
		// Loop through the list items in the selectors
		for (var j = 0; j < pages[x].formRow[i].list.length; j++) {

			
			// Event to close menu and update heading
			(function(_x, _i, _j){
				pages[x].formRow[i].list[j].addEventListener('click', function(){

					var row = pages[_x].formRow[_i];
					var menu = pages[_x].formRow[_i].menu;
					var heading = pages[_x].formRow[_i].heading;
					var list = pages[_x].formRow[_i].list[_j];

					closeMenu(menu);

					// Update the list heading
					heading.innerHTML=list.innerHTML;

					updatePrice(row, menu, heading, list, _x);

				})
			})(x, i, j);
		};
	};
};

 
function openMenu (row, menu, list) {

	menu.classList.add("on");
	menu.classList.remove("off");

	// Dynamic list length
	var listLength =  (row.list.length)*33+3;
	menu.style.height=listLength+"px";
}


function closeMenu(menu){
	menu.classList.remove('on');
	menu.classList.add('off');
	menu.style.height="0px";
}


function updatePrice(row, menu, heading, list, x){

	// If the click is on tour length, update price
	if(row.classList.contains("hours")){

		var hours = list.innerHTML;
		pages[x].hours = hours.slice(0, 1);

		calculatePrice();

	// If the click is on aircraft, update price
	} else if(row.classList.contains("aircraft")){


		if (list.innerHTML == "Fixed Wing"){

			pages[x].aircraft = 200;

		} else if (list.innerHTML == "Helicopter") {

			pages[x].aircraft = 250;

		} else if (list.innerHTML == "Amphibian") {

			pages[x].aircraft = 200;

		} else if (list.innerHTML == "Glider") {

			pages[x].aircraft = 350;

		}

		calculatePrice();

	// If the click is on passengers, update price
	} else if(row.classList.contains("passengers")){

		var passengers = list.innerHTML;
		pages[x].passengers = passengers.slice(0, 1);

		calculatePrice();

		calculateExpedPrice();
	}

	// Calculates price and updates the price element for scenic and aero tours
	function calculatePrice(){

		if(pages[x].hours!=undefined && pages[x].aircraft!=undefined && pages[x].passengers!=undefined){

			var price = pages[x].hours*pages[x].aircraft*pages[x].passengers;
			pages[x].priceTag.innerHTML = 'Total Price: $'+price; 
		}

	}
}


// Expedition Section
// Set the drop down menus to an array called drops
var drops = document.querySelectorAll('.book .container');

for (var i = 0; i < drops.length; i++) {

	drops[i].menuOpen = false;

	// Event to open & close menu
	(function(_i){
		drops[i].firstElementChild.addEventListener('click', function(){

			// If menu closed, open it (use this)
			if(drops[_i].menuOpen == false){

				drops[_i].style.height = "200px";
				drops[_i].menuOpen = true;

				calculateExpedPrice();

			// If menu open, close it
			} else {
				drops[_i].style.height = "28px";
				drops[_i].menuOpen = false;

				calculateExpedPrice();
			}
		})
	})(i);	
};


// Calculates the price for the expedition tours
function calculateExpedPrice() {

	var pax = pages[2].passengers;

	// If one drop menu is open the price is $500 per passenger
	if(pax!=undefined && (drops[0].menuOpen == true && drops[1].menuOpen == false) || 
		pax!=undefined && (drops[0].menuOpen == false && drops[1].menuOpen == true)){

			var price = 500*pax;
			pages[2].priceTag.innerHTML = 'Total Price: $'+price; 

	// If two drops are open the price is $1000 per passenger
	} else if (pax!=undefined && (drops[0].menuOpen == true && drops[1].menuOpen == true)) {

			var price = 1000*pax;
			pages[2].priceTag.innerHTML = 'Total Price: $'+price; 

	} else {
			// if both are closed,reset price
			pages[2].priceTag.innerHTML = 'Total Price:';
	}
}





