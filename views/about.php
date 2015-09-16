<!DOCTYPE html>   
<html lang="en">   
<head> 
	<meta charset="UTF-8">
	<title>About</title>
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/font-awesome-4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="landing">
		<nav class="flex flex-j-between flex-a-center">
			<div class="logo flex flex-a-center">
				<img src="../assets/img/logo.png" alt="image">
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
		<h1>ABOUT</h1>
		<h2>Fly To The Limit - Find Your Adventure</h2>
	</header>
	<main>
		<h1>Our Philosophy</h1>
		<h2>New Zealand's Southern Alps Are A Stunning But Serious Place.<br>We Will Take You To The Limit But Keep You Safe</h2>
		<section class="red flex flex-j-center flex-a-center">
			<div class="caption-holder flex-1">
				<h3>About Us</h3>
				<p>The company is owned by a husband and wife team, Olga and Bruce McKenzie. Both born in Southland, travelled extensively, both have a commercial pilots licenses with 19 and 9 years respectively flying for Middle eastern airlines.</p>
			</div>
			<div class="img-holder">
				<img src="../assets/img/people/couple.jpg" alt="image">
			</div>
		</section>
		<section class="red overline flex flex-j-center flex-a-center">
			<div class="img-holder">
				<img src="../assets/img/people/team.jpg" alt="image">
			</div>
			<div class="caption-holder flex-1">
				<h3>Our Team</h3>
				<p>Every plane is owner operated, with safety and maintenance the highest priority. Our operators are all trained in sustainable tourism and share a love of the mountains and our peaceful, natural scenery.</p> 
			</div>
		</section>
	</main>
	<div class="ribbon">
		<h1>Find Out More Here</h1>
		<a href="contact.html" class="button">Make an Enquiry</a>
	</div>
	<h1>Our Pilots</h1>
	<h2>Decades of experience in New Zealand and worldwide</h2>
	<section class="about">
		<nav class="flex flex-column">
			<label for="finn"><h3>Finn McCool</h3></label>
			<label for="wendy"><h3>Wendy Gillhallen</h3></label>
			<label for="john"><h3>John Holliday</h3></label>
			<label for="hans"><h3>Hans Gerhansen</h3></label>
		</nav>
		<input type="radio" id="finn" name="slide" checked>
		<div class="info-section flex flex-a-start flex-j-between">
			<div class="img-holder">
				<img src="../assets/img/people/fin.png" alt="image">
			</div>
			<div class="caption-holder flex-1">
				<h3>Finn McCool</h3>
				<p>Stunt pilot with the Red Arrows, has served in combat choppers in 3 recent wars, and fears nothing except small dogs and single women. Owns an Extra EA-200 for the ultimate full stunt flight experience, and flies all our other fixed wing craft much more sedately when required.</p>
			</div>
		</div>
		<input type="radio" id="wendy" name="slide">
		<div class="info-section flex flex-a-start flex-j-between">
			<div class="img-holder">
				<img src="../assets/img/people/wendy.png" alt="imgage">
			</div>
			<div class="caption-holder flex-1">
				<h3>Wendy 'Dropper' Gillhallen</h3>
				<p>13 years commercial pilot in Africa, Russia and South America, during which she survived 3 crashes (none her own fault, she maintains). Owns a Cessna-­‐ 172Skyhawk P that is ideal for low level sight seeing, rides a Harley and is a ski instructor during the season.</p>
			</div>
		</div>
		<input type="radio" id="john" name="slide">
		<div class="info-section flex flex-a-start flex-j-between">
			<div class="img-holder">
				<img src="../assets/img/people/john.jpg" alt="image">
			</div>
			<div class="caption-holder flex-1">
				<h3>John 'Doc' Holliday</h3>
				<p>Stunt pilot with the Red Arrows, has served in combat choppers in 3 recent wars, and fears nothing except small dogs and single women. Owns an Extra EA-200 for the ultimate full stunt flight experience, and flies all our other fixed wing craft much more sedately when required.</p>
			</div>
		</div>
		<input type="radio" id="hans" name="slide">
		<div class="info-section flex flex-a-start flex-j-between">
			<div class="img-holder">
				<img src="../assets/img/people/hans.jpg" alt="image">
			</div>
			<div class="caption-holder flex-1">
				<h3>Hans Gerhansen</h3>
				<p>Hans has flown almost everything there is to fly. He first took the controls of a small plane at 12 years old, and flew solo when he was 14. When he’s not skiing, tramping, climbing, hang gliding, or performing with his backup band at a local hotel.</p>
			</div>
		</div>
	</section>
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
	
<? include 'views/footer.php' ?>