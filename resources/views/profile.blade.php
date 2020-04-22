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
		.maps .container-map {
			height: 400px;
			margin: 0%;
			padding: 0%;
			width: 100%;
		}

		#map {
			margin: 0%;
			padding: 0%;
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
			<li><a href="/home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#newsletter">Subscribe</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#venue">Venue</a></li>
            
		</nav>
	</header>


	<section class="banner-area">
		<div class="img-area"></div>
		<div class="banner-text">
			<h1>Futsal Srikandi</h1>
			<h3>Make it Easy...</h3>
			<a href="/home" class="btn">Get Started</a>
        </div>
        <div class="stat" id="stat">
        <div class="content-box">
            <br><br>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="stat-items">
                        <i class="fas fa-users"></i>
                            <h2><span class="counter text-counter">800</span><span>+</span>
                            </h2>
                            <p>Pengguna</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-items">
                        <i class="fas fa-futbol"></i>
                            <h2><span class="counter text-counter">3</span>
                            </h2>
                            <p>Lapangan</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-items">
                        <i class="fas fa-tshirt"></i>
                            <h2><span class="counter text-counter">40</span>
                            </h2>
                            <p>Items</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-items">
                        <i class="fas fa-clock"></i>
                            <h2><span class="counter text-counter">48</span><span>+</span>
                            </h2>
                            <p>Jadwal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<section class="services-area" id="services">
		<h3 class="header-text">Layanan Kami</h3>
		<p>Kami Menyediakan Layanan & Venue Olahraga Terbaik Untuk Anda </p>
		<div class="content-area">
			<div class="single-service">
				<div class="icon-area">
                <i class="fas fa-map"></i>
				</div>
				<h2>Lapangan</h2>
				<p>Menyediakan layanan booking lapangan futsal untuk kegiatan berolahraga anda</p>
			</div>
			<div class="single-service">
				<div class="icon-area">
                <i class="fas fa-calendar-alt"></i>
				</div>
				<h2>Event Turnamen</h2>
				<p>Memberikan layanan dan harga terbaik untuk anda yang akan mengadakan acara serta turnamen olahraga</p>
			</div>
			<div class="single-service">
				<div class="icon-area">
                <i class="fas fa-dumbbell"></i>
				</div>
				<h2>Perlengkapan Olahraga</h2>
				<p>Menyediakan perlengakapan olahraga dengan kualitas terbaik demi kenyamanan anda</p>
			</div>
		</div>
    </section>

	<section class="maps" id="maps">
	<h3 class="header-text">Srikandi Venue</h3>
		<p>Lokasi Futsal Srikandi tersebar pada beberapa lokasi </p>	
	<div class="container-map">
			<?php
			$dump = json_encode($dump, true);
			echo '<div id="data">' . $dump . '</div>';

			$lapangan = json_encode($lapangan, true);
			echo '<div id="allData">' . $lapangan . '</div>';
			?>
			<div id="map"></div>
		</div>
	</section>

	<section class="newsletter" id="newsletter">
        <h3 class="header-text">Subscribe</h3>
		<p>Dapatkan info menarik dan event dari kami dengan melakukan subscribe </p>
        <div class="single-newsletter">
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
        </div>
		</form>
	</section>

	<section class="contact" id="contact">
		<h3 class="header-text">Hubungi Kami</h3>
		<p>Untuk info booking dan pemesanan silahkan hubungi kami</p>
		<div class="content-area">
			<div class="single-contact">
                <i class="fa fa-map-marker"></i>
				<p>Jl. Pelita I, Labuhan Ratu <br> Bandar Lampung, Lampung</p>
				<i class="fa fa-envelope"></i>
				<p>futsal@srikandi.com</p>
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
		<p>All Right reserved by &copy; <a href="#">Team Basing Aja 2020</a></p>
	</footer>

	<script src="/js/profile.js"></script>
	<script src="https://kit.fontawesome.com/3f4aa1c6f5.js" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdg3NKQlbc9sVcuo8aRzLZQLtPoLrPZsw&callback=loadMap" async defer></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            $('.counter').counterUp({
                delay: 50,
                time: 1000
            });
        });
    </script>
</body>

</html>