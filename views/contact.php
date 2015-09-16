<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Fly to the limit</title>
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
		<h1>CONTACT</h1>
		<h2>Fly To The Limit - Find Your Adventure</h2>
	</header>
	<main>
		<h1>Get In Touch With Us</h1>
		<h2>Give US a Call, Send Us a Message Or Come Visit.</h2>
		<section class="flex flex-a-start flex-j-between contact">
			<div class="contact-column flex-1">
				<h3>Leave a message</h3>
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Email">
				<input type="text" placeholder="Subject">
				<textarea name="message" placeholder="Type your message here"></textarea>
				<input type="submit">

			</div>
			<div class="contact-column flex-1 left-line">
				<h3>Queenstown Office</h3>
				<p> <i class="fa fa-map-marker"></i> 12 City Street, Wanaka 1011</p>
				<p> <i class="fa fa-mobile"></i> +00(123)4567890</p>
				<p> <i class="fa fa-envelope-o"></i> info@flytothelimit.com</p>
				<h3>Wanaka Office</h3>
				<p> <i class="fa fa-map-marker"></i> 12 City Street, Queenstown 1022</p>
				<p> <i class="fa fa-mobile"></i> +00(123)4567890</p>
				<p> <i class="fa fa-envelope-o"></i> info@flytothelimit.com</p>
				<h3>Social</h3>
				<div class="icon-holder">
					<i class="fa fa-facebook-square fa-2x"></i>
					<i class="fa fa-twitter-square fa-2x"></i>
					<i class="fa fa-pinterest-square fa-2x"></i>
					<i class="fa fa-linkedin-square fa-2x"></i>
					<i class="fa fa-google-plus-square fa-2x"></i>
				</div>

			</div>
		</section>
	</main>
	<!-- Google Maps -->
	<div class="map-canvas" id="map-canvas"></div>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMcsnrV2OnvwFOnD88-i857seGm59TSyY"></script>
	<script src="assets/js/map.js"></script>
</body>
</html>