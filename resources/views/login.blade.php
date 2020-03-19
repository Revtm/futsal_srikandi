<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
  </head>
  <body>
	<div class="circle-1 circle"></div>
	<div class="line-1 line"></div>
	<div class="line-2 line"></div>
	
	<div class="container">
		<div class="img">
			<!-- <img src="img/football-player2.svg" alt=""> -->
		</div>
		<div class="login-content">
			<form action="{{route('login')}}" method="POST">
			{{csrf_field()}}
                <!-- gambar logo -->
				<h2 class="title">Srikandi&nbsp; Futsal</h2>
           		<div class="input-div user">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           				<input type="text" class="input" name="nama">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Lupa Password?</a>
            	<input type="submit" class="btn" value="Masuk">
            </form>
        </div>
    </div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
	<script type="text/javascript" src="js/login-script.js"></script>
</body>
</html>