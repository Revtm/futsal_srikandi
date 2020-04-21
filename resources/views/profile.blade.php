<!DOCTYPE html>
<html>

<head>
    <title>Profil | Futsal Srikandi</title>
    <script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="js/googlemap.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">
	<style type="text/css">
		.container {
			height: 450px;
			width: 100%;
		}

		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}

		#data,
		#allData {
			display: none;
		}
	</style>
</head>

<body>

	<header>
		<h2><a href="#">Futsal Srikandi</a></h2>
		<nav>
			<li><a href="#">Home</a></li>
			<li><a href="#services">Profile</a></li>
            <li><a href="#portofolio">Venue</a></li>
            <li><a href="#portofolio">Subscribe</a></li>
            
		</nav>
	</header>


	<section class="banner-area">
		<div class="img-area"></div>
		<div class="banner-text">
			<h1>Futsal Srikandi</h1>
			<h3>Make it Easy...</h3>
			<a href="/home" class="btn">Get Started</a>
		</div>
	</section>

	<section class="services-area" id="services">
		<h3 class="header-text">Our Services</h3>
		<p>We provide cool vehicle for you</p>
		<div class="content-area">
			<div class="single-service">
				<div class="icon-area">
					<i class="fas fa-car"></i>
				</div>
				<h2>Car</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, inventore.</p>
			</div>
			<div class="single-service">
				<div class="icon-area">
					<i class="fas fa-motorcycle"></i>
				</div>
				<h2>Motorcycle</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, inventore.</p>
			</div>
			<div class="single-service">
				<div class="icon-area">
					<i class="fas fa-bicycle"></i>
				</div>
				<h2>Bicycle</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, inventore.</p>
			</div>
		</div>
    </section>

	<section class="newsletter" id="newsletter">
		<h3 class="header-text">Subscribe</h3>
		<p>Get Our Latest Information quickly</p>
		<form action="">
			<div class="field-name">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Nama" required>
				<i class="fas fa-arrow-down"></i>
			</div>
			<div class="field-email innactive">
				<i class="fas fa-arrow-down"></i>
				<input type="email" placeholder="Email" required>
				<i class="fas fa-arrow-down"></i>
			</div>
			<div class="field-finish innactive">
				<i class="fas fa-heart"></i>
				Thank You !
				<i class="fas fa-heart"></i>
			</div>
		</form>
	</section>

    

	<section class="contact" id="contact">
		<h3 class="header-text">Contact Us</h3>
		<p>Lorem ipsum dolor sit amet.</p>
		<div class="content-area">
			<div class="single-contact">
				<i class="fa fa-map-marker"></i>
				<p>Ryacudu Street, 30B <br> South Lampung Regency, Lampung</p>
				<i class="fa fa-envelope"></i>
				<p>srikandirent@gmail.com</p>
				<i class="fa fa-phone"></i>
				<p>+628 1411 15543</p>
			</div>

			<div class="single-contact">
				<input type="text" placeholder="Enter Your Name....">
				<input type="email" placeholder="Enter Your Email....">
				<input type="submit" value="submit">
			</div>
		</div>
	</section>

	<footer>
		<p>All Right reserved by &copy; <a href="#">Rivaldo Fernandes</a></p>
	</footer>

	<script src="/js/profile.js"></script>
	<script src="https://kit.fontawesome.com/3f4aa1c6f5.js" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdg3NKQlbc9sVcuo8aRzLZQLtPoLrPZsw&callback=loadMap" async defer></script>
	</script>
</body>

</html>