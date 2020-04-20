<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard Operator</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/dashboard-style.css">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="img/sidebar.png">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                    Futsal Srikandi
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/home">
                        <i class="fa fa-columns"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/daftarpenyewa">
                        <i class="fa fa-calendar-check-o"></i>
                        <p>Daftar Penyewaan</p>
                    </a>
                </li>
                <li>
                    <a href="/tambahsewa">
                        <i class="fa fa-calendar-plus-o"></i>
                        <p>Tambah Sewa</p>
                    </a>
                </li>
                <li>
                    <a href="/rekap">
                        <i class="fa fa-file-excel-o"></i>
                        <p>Rekap</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Selamat Datang, {{ $operator }}</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        {{ $operator }} &emsp;
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Log Out</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="rows">
                        <div class="column">
                            <a href="/" class="card credentialing">
                                <div class="overlay"></div>
                                <div class="circle">
                                    <img src="img/home-network.svg">
                                </div>
                                <p>Halaman Profil</p>
                            </a>
                        </div>
                        <div class="column">
                            <a href="/daftarpenyewa" class="card credentialing">
                                <div class="overlay"></div>
                                <div class="circle">
                                    <img src="img/schedule-check.svg">
                                </div>
                                <p>Daftar Penjadwalan</p>
                            </a>
                        </div>
                        <div class="column">
                            <a href="/tambahsewa" class="card credentialing">
                                <div class="overlay"></div>
                                <div class="circle">
                                    <img src="img/schedule-add.svg">
                                </div>
                                <p>Tambah Sewa</p>
                            </a>
                        </div>
                        <div class="column">
                            <a href="/rekap" class="card credentialing">
                                <div class="overlay"></div>
                                <div class="circle">
                                    <img src="img/recap.svg">
                                </div>
                                <p>Rekap</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Tim Basing Aja</a>, Teknik Informatika - ITERA
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<!-- <script src="assets/js/demo.js"></script> -->


</html>
