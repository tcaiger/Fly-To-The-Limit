// This checks the inputs and validates them

//Set all the inputs to variables
 
var nameInput = document.querySelector('#name');
var emailInput = document.querySelector('#email');
var phoneInput = document.querySelector('#phone');

var scenicDateInput = document.querySelector('#scenic-date');
var aeroDateInput = document.querySelector('#aero-date');

var dropLocationInput = document.querySelector('#drop-location');
var dropDateInput = document.querySelector('#drop-date');
var dropTimeInput = document.querySelector('#drop-time');
var pickLocationInput = document.querySelector('#pick-location');
var pickDateInput = document.querySelector('#pick-date');
var pickTimeInput = document.querySelector('#pick-time');

var continueBook = document.querySelectorAll('.form-row button');
var contactSection = document.querySelector('.book .column:last-of-type');
var submit = document.querySelector('input[type=submit]');


	
//When you unfocus on the name input...
nameInput.addEventListener('blur', nameInputCheck);

function nameInputCheck () {

	//Define the rules that this input needs to pass to be valid...
	var rules = [
	//(name refers to a function in the validate object)
	//(message is the text that appears when the rule invalid)
		{name: 'required', message: 'This field is required'},
		{name: 'name', message: 'Must be a valid name'}
	];
	// and check the input with those rules.
	return checkInput(nameInput, rules);
};

emailInput.addEventListener('blur', emailInputCheck);

function emailInputCheck() {

	var rules = [
		{name: 'required', message: 'This field is required'},
		{name: 'email', message: 'Must be a valid email'}
	];

	return checkInput(emailInput, rules);
};

phoneInput.addEventListener('blur', phoneInputCheck);

function phoneInputCheck() {

	var rules = [
		{name: 'required', message: 'This field is required'},
		{name: 'numeric', message: 'Must be a valid phone number'},
		{name: 'minLength',secondParam: 9, //this is the minimum length. It is the second parameter for the validate.minLength function.
			message: 'Too short'
		}
	];

	return checkInput(phoneInput, rules);
};

scenicDateInput.addEventListener('blur', scenicDateInputCheck);

function scenicDateInputCheck () {

	var rules = [
		{name: 'required', message: 'This field is required'},
		{name: 'afterToday', message: 'Must be a valid date'}
	];

	return checkInput(scenicDateInput, rules);
};

aeroDateInput.addEventListener('blur', aeroDateInputCheck);

function aeroDateInputCheck () {

	var rules = [
		{name: 'required', message: 'This field is required'},
		{name: 'afterToday', message: 'Must be a valid date'}
	];

	return checkInput(aeroDateInput, rules);
};

dropLocationInput.addEventListener('blur', dropLocationCheck);

function dropLocationCheck () {

	var rules = [

		{name: 'required', message: 'This field is required'},
		{name: 'name', message: 'Must be a valid location'}
	];

	return checkInput(dropLocationInput, rules);
};

pickLocationInput.addEventListener('blur', pickLocationCheck);

function pickLocationCheck () {

	var rules = [

		{name: 'required', message: 'This field is required'},
		{name: 'name', message: 'Must be a valid location'}
	];

	return checkInput(pickLocationInput, rules);
};

dropDateInput.addEventListener('blur', dropDateCheck);

function dropDateCheck (event) {

	var rules = [

		{name: 'required', message: 'This field is required'},
		{name: 'afterToday', message: 'Must be a valid date'}
	];

	if (drops[0].open == true && drops[1].open == true && pickDateInput.value!=""){
		
		rules[2] = {name: 'beforeDate', secondParam: pickDateInput.value, message: 'Must be before the end'};

		if(event != undefined) {
			 pickDateCheck();
		}

	}

	return checkInput(dropDateInput, rules);
};

pickDateInput.addEventListener('blur', pickDateCheck);

function pickDateCheck (event) {

	var rules = [

		{name: 'required', message: 'This field is required'},
		{name: 'afterToday', message: 'Must be a valid date'}
	];

	if (drops[0].open == true && drops[1].open == true && dropDateInput.value!=""){
		
		rules[2] = {name: 'afterDate', secondParam: dropDateInput.value, message: 'Must be after start'};

		if(event != undefined) {
			dropDateCheck();
		}
	}

	return checkInput(pickDateInput, rules);
};

dropTimeInput.addEventListener('blur', dropTimeCheck);

function dropTimeCheck() {

	var rules = [
		{name: 'required', message: 'This field is required'},
		{name: 'time', message: 'Must be a valid time'}
	];

	// check both drop menus are open and do extra validation

	return checkInput(dropTimeInput, rules);
};

pickTimeInput.addEventListener('blur', pickTimeCheck);

function pickTimeCheck() {

	var rules = [ 
		{name: 'required', message: 'This field is required'},
		{name: 'time', message: 'Must be a valid time'}
	];

	return checkInput(pickTimeInput, rules);
};




// this function is used to test if an input is valid. 
// if it isn't, then we add an error message.
function checkInput(element, rules){

	//Get the next element after the input we are checking. This is going to be the message div. This is where we put our errors.
	var messageDiv = element.nextElementSibling;

	var validOverall = true;

	//loop through each rule
	for(var i=0; i<rules.length; i++){
		
		//store the current rule
		var r = rules[i];

		//isValid will be true of false based on if the input passes this rule.
		//r.name is the method on the validate object to run, we are passing it 2 parameters, the first is the value of this input, and the second is an optional extra piece of dada, because some functions need 2 parameters.
		var isValid = true;

		//if the rule name is "required", or the input value is not an empty string
		if(r.name == "required" || !!element.value){
			isValid = validate[r.name](element.value, r.secondParam);
		}

		//if the rule failed
		if(isValid == false){
			//set the content of the message div to the rule's message value
			messageDiv.innerHTML = '<i class="fa fa-times"></i> '+r.message;

			
			//make it red
			messageDiv.classList.add('error');
			messageDiv.classList.remove('success');
			//Set validOverall to false to block the submit button
			validOverall = false;

			//bread ends the loop early, so that we don't check any more rules after this one.
			break;

		} else {
			messageDiv.innerHTML = '<i class="fa fa-check"></i>';
			//hide the message
			messageDiv.classList.remove('error');
			messageDiv.classList.add('success');

		}
	}
	return validOverall;
}

//Event for continue booking button for the scenic page
continueBook[0].addEventListener('click', function (event) {
	
	var scenicIsValid = scenicDateInputCheck();

	//if fields are valid
	if(scenicIsValid && pages[0].hours!=undefined && pages[0].aircraft!=undefined && pages[0].passengers!=undefined){
		//reveal the next form
		contactSection.style.opacity = "1";
		contactSection.style.right = "0";
	}

});

//Event for continue booking button for the aerobatic booking
continueBook[1].addEventListener('click', function (event) {
	
	var aeroIsValid = aeroDateInputCheck();

	//if fields are valid
	if(aeroIsValid && pages[1].hours!=undefined && pages[1].aircraft!=undefined && pages[1].passengers!=undefined){
		//reveal the next form
		contactSection.style.opacity = "1";
		contactSection.style.right = "0";
	}

});

//Event for the continue booking button for the expedition booking
continueBook[2].addEventListener('click', function (event) {
	
	//run through all our fields and check each one
	var dropLocationIsValid = dropLocationCheck();
	var dropDateIsValid = dropDateCheck();
	var dropTimeIsValid = dropTimeCheck();
	var pickLocationIsValid = pickLocationCheck();
	var pickDateIsValid = pickDateCheck();
	var pickTimeIsValid = pickTimeCheck();


	// When both menus are open
	if (drops[0].menuOpen == true && drops[1].menuOpen == true){

		//check if all the fields are valid
		if(pickLocationIsValid && pickDateIsValid && pickTimeIsValid && dropLocationIsValid && dropDateIsValid && dropTimeIsValid){
			//then display the final booking section
			contactSection.style.opacity = "1";
			contactSection.style.right = "0";
		}
	
	// When just the drop off menu is open
	} else if(drops[0].menuOpen == true && drops[1].menuOpen == false){

		
		if(dropLocationIsValid && dropDateIsValid && dropTimeIsValid){
			
			contactSection.style.opacity = "1";
			contactSection.style.right = "0";
		}

	// When just the pick up menu is open
	} else if (drops[0].menuOpen == false && drops[1].menuOpen == true){

		if(pickLocationIsValid && pickDateIsValid && pickTimeIsValid){

			contactSection.style.opacity = "1";
			contactSection.style.right = "0";
		}
	}
});

//Event for the submit button
submit.addEventListener('click', function (event) {
	//run through all our fields and check each one
	var nameIsValid = nameInputCheck();
	var emailIsValid = emailInputCheck();
	var phoneIsValid = phoneInputCheck();

	//if any of the fields are not valid
	if(!nameIsValid || !emailIsValid || !phoneIsValid){

		//then don't submit the form
		event.preventDefault();
	}

});

