<!DOCTYPE html>   
<html lang="en">     
<head> 
	<meta charset="UTF-8">
	<title>Tours & Pricing</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/font-awesome-4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="landing">
		<nav class="flex flex-j-between flex-a-center">
			<div class="logo flex flex-a-center">
				<img src="assets/img/logo.png" alt="image">
				<div>
					<h3><span>F</span>LY TO THE <span>L</span>IMIT<span></span></h3>
					<p>QUEENSTOWN - NEW ZEALAND</p>
				</div>
			</div>
			<ul class="flex">
				<li><a href="index.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="tours.html">TOURS</a></li>
				<li><a href="gallery.html">GALLERY</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li><a href="book-now.html" class="button">BOOK NOW</a></li>
			</ul>
		</nav> 
		<h1>BOOK NOW</h1>
		<h2>Fly To The Limit - Find Your Adventure</h2>
	</header>
	<main class="book">
		<nav class="flex flex-column">
			<label for="scenic"><h3>Scenic Flight</h3></label>
			<label for="aero"><h3>Aerobatic Flight</h3></label>
			<label for="exped"><h3>Expedition</h3></label>
		</nav>
		<section class="flex flex-a-start">
			<div class="flex-1 column flex flex-column">
				<input type="radio" id="scenic" name="slide" checked>
				<div class="info-section">
					<h1>Scenic Flight</h1>
					<h2>Start your booking below</h2>
					<div class="form-row select hours flex flex-a-center">
						<p>Flight Length</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>1 hour</li>
								<li>2 hours</li>
								<li>3 hours</li>
								<li>4 hours</li>
							</ul>
						</div>
					</div>
					<div class="form-row select aircraft flex flex-a-center">
						<p>Aircraft</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>Fixed Wing</li>
								<li>Helicopter</li>
								<li>Glider</li>
								<li>Amphibian</li>
							</ul>
						</div>
					</div>
					<div class="form-row select passengers flex flex-a-center">
						<p>Passengers</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>1 Passengers</li>
								<li>2 Passengers</li>
								<li>3 Passengers</li>
								<li>4 Passengers</li>
								<li>5 Passengers</li>
								<li>6 Passengers</li>
								<li>7 Passengers</li>
							</ul>
						</div>
					</div>
					<div class="form-row select flex flex-a-center">
						<p>Location</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>Queenstown</li>
								<li>Wanaka</li>
							</ul>
						</div>
					</div>
					<div class="form-row last flex flex-a-center">
						<input id="scenic-date" type="text" name="scenic-date" placeholder="Date dd/mm/yyyy">
						<div class="message"></div>
					</div>
					<h1 class="price">Total Price:</h1>		
					<div class="form-row flex flex-a-center">
						<button>Continue Booking</button>
					</div>	
				</div>
				<!-- end of scenic section -->
				<input type="radio" id="aero" name="slide">
				<div class="info-section">
					<h1>Aerobatic Flight</h1>
					<h2>Start your booking below</h2>
					<div class="form-row select hours flex flex-a-center">
						<p>Flight Length </p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>1 hour</li>
								<li>2 hours</li>
							</ul>
						</div>
					</div>
					<div class="form-row select aircraft flex flex-a-center">
						<p>Aircraft</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>Fixed Wing</li>
								<li>Helicopter</li>
							</ul>
						</div>
					</div>
					<div class="form-row select passengers flex flex-a-center">
						<p>Passengers</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>1 Passenger</li>
								<li>2 Passengers</li>
								<li>3 Passengers</li>
								<li>4 Passengers</li>
							</ul>
						</div>
					</div>
					<div class="form-row select flex flex-a-center">
						<p>Location</p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>Queenstown</li>
								<li>Wanaka</li>
							</ul>
						</div>
					</div>
					<div class="form-row last flex flex-a-center flex-j-start">
						<input id="aero-date" type="text" name="aero-date" placeholder="Date dd/mm/yyyy">
						<div class="message"></div>
					</div>
					<h1 class="price">Total Price:</h1>
					<div class="form-row flex flex-a-center">
						<button>Continue Booking</button>
					</div>
				</div>
				<!-- end of aero section -->
				<input type="radio" id="exped" name="slide">
				<div class="info-section">
					<h1>Expedition</h1>
					<h2>Start your booking below</h2>
					<div class="form-row select passengers flex flex-a-center">
						<p>Passengers </p>
						<i class="fa fa-arrow-down"></i>
						<div>
							<ul>
								<li>1 Passenger</li>
								<li>2 Passengers</li>
								<li>3 Passengers</li>
								<li>4 Passengers</li>
								<li>5 Passengers</li>
								<li>6 Passengers</li>
								<li>7 Passengers</li>
							</ul>
						</div>
					</div>
					<div class="container">
						<div class="form-row flex flex-j-between flex-a-center">
							<h3>Drop Off</h3>
							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="form-row flex flex-a-center flex-j-start">
							<input id="drop-location" type="text" name="drop-location" placeholder="Location">
							<div class="message"></div>
						</div>
						<div class="form-row flex flex-a-center">
							<input id="drop-date" type="text" name="drop-time" placeholder="Date dd/mm/yyyy">
							<div class="message"></div>
						</div>
						<div class="form-row flex flex-a-center">
							<input id="drop-time" type="text" name="drop-time" placeholder="Time hh:mm">
							<div class="message"></div>
						</div>
					</div>
				<div class="container">
					<div class="form-row flex flex-j-between flex-a-center">
						<h3>Pick Up</h3>
						<i class="fa fa-chevron-down"></i>
					</div>
					<div class="form-row flex flex-a-center">
						<input id="pick-location" type="text" name="pick-location" placeholder="Location">
						<div class="message"></div>
					</div>		
					<div class="form-row flex flex-a-center">
						<input id="pick-date" type="text" name="pick-date" placeholder="Date dd/mm/yyyy">
						<div class="message"></div>
					</div>
					<div class="form-row flex flex-a-center">
						<input id="pick-time" type="text" name="pick-time" placeholder="Time hh:mm">
						<div class="message"></div>
					</div>
				</div>
				<h1 class="price">Total Price:</h1>
					
				<div class="form-row flex flex-a-center">
					<button>Continue Booking</button>
				</div>
					
				</div>
				<!-- end of exped section -->
			</div>
			<!-- end of first column -->
			<div class="flex-1 column flex flex-column flex-j-between left-line">	
				<h3>Your Contacts</h3>
				<form action="">
					<div class="form-row flex flex-a-center">
						<input id="name" type="text" name="name" placeholder="Name (Required)">
						<div class="message"></div>
					</div>
					<div class="form-row flex flex-a-center">
						<input id="email" type="text" name="email" placeholder="Email (Required)">
						<div class="message"></div>
					</div>
					<div class="form-row flex flex-a-center">
						<input id="phone" type="text" name="phone" placeholder="Phone (Required)">
						<div class="message"></div>
					</div>
					<div class="form-row flex flex-a-center">
						<input id="TnC" type="checkbox" name="TnC">
						<label for="TnC"><p>Sign Up To Our Newsletter</p></label>
					</div>
					<div class="form-row flex flex-a-center">
						<textarea name="message" id="userMessage" placeholder="Message (Optional)"></textarea>
					</div>
					<div class="form-row flex flex-a-center">
						<input id="submit" type="submit" value="Send Booking">
						<div class="message"></div>
					</div>
				</form>
			</div>
		</section>
	</main>
	<div class="social-media">
		<h1>Stay in touch with us</h1>
		<div class="wrapper">
			<div class="icon-holder">
				<i class="fa fa-facebook-square fa-4x"></i>
				<i class="fa fa-twitter-square fa-4x"></i>
				<i class="fa fa-pinterest-square fa-4x"></i>
				<i class="fa fa-linkedin-square fa-4x"></i>
				<i class="fa fa-google-plus-square fa-4x"></i>
			</div>
		</div>
	</div><!--Social Media-->
	<footer>
		<ul class="flex flex-j-center">
			<li><a href="index.html">HOME</a></li>
			<li><a href="about.html">ABOUT US</a></li>
			<li><a href="tours.html">TOURS & PRICES</a></li>
			<li><a href="gallery.html">GALLERY</a></li>
			<li><a href="book-now.html" class="button">BOOK NOW</a></li>
		</ul>
		<p>Fly to the Limit Ltd, 21 King Street, Grey Lynn, 1021, Auckland, New Zealand.<br/>(021 2166566) www.flytothelimit.co.nz </p>
	</footer>
	<script src="assets/js/side-navs.js"></script>
	<script src="assets/js/booking-form.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/validate-script.js"></script>
</body>
</html>