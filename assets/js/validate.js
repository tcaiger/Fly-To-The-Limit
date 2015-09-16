var validate = {
	
	name: function(value){
		var namePattern = /^[a-zA-Z\'\-\s]{2,}$/;

		return namePattern.test(value);
	},

	email: function(value){
		var emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		return emailPattern.test(value);
	},

	minLength: function(value, min){
		return value.length >= min;
	},

	maxLength: function(value, max){
		return value.length <= max;
	},

	required: function(value){
		return value.trim() !== '';
	},

	date: function(value){
		var datePattern = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

		return datePattern.test(value);
	},

	beforeDate: function(date1, date2){
		date1 = moment(date1, 'DD/MM/YYYY').valueOf();
		date2 = moment(date2, 'DD/MM/YYYY').valueOf();

		return date1 < date2;
	},

	afterDate: function(date1, date2){
		date1 = moment(date1, 'DD/MM/YYYY').valueOf();
		date2 = moment(date2, 'DD/MM/YYYY').valueOf();

		return date1 > date2;
	},

	beforeToday: function(date){
		var today = moment().startOf('day').valueOf();
		date = moment(date, 'DD/MM/YYYY').valueOf();

		console.log(today, date);

		return today > date;
	},

	afterToday: function(date){
		var today = moment().startOf('day').valueOf();
		date = moment(date, 'DD/MM/YYYY').valueOf();

		return today < date;
	},

	numeric: function(value){

		var numericPattern = /^[\d\+\s]{1,}$/;

		return numericPattern.test(value);
	},

	time: function(value){

		var numericPattern = /^\d{1,2}:\d{2}([ap]m)?$/;

		return numericPattern.test(value);
	}  

};