<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aloha Millworks</title>
    <meta name="description" content="Metalworking and Woodworking"/>
    <meta name="keywords" content="metal wood stairs rails gates fences custom"/>
    <meta name="author" content="Jared Wines"/>

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <!-- Materialdesign icon Css-->
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css"/>
    <!-- Pe 7 icon Css-->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css"/>

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="css/hamburgers.css" rel="stylesheet">

</head>

<body>

<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-default navbar-custom navbar-light">
    <div class="container">
        <a class="navbar-brand logo" href="index.html"><i class="fa-solid fa-hammer"></i></a>
        <div class="navbar-header">
            <button class="navbar-toggler hamburger hamburger--slider" type="button" data-toggle="collapse"
                    data-target="#navbar-collapse-1"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
                <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                <span class="hamburger-label">Menu</span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="stairs.php">Stairs</a></li>
                <li class="nav-item"><a class="nav-link" href="rails.php">Rails</a></li>
                <li class="nav-item"><a class="nav-link" href="gates.html">Gates</a></li>
                <li class="nav-item"><a class="nav-link" href="custom.html">Custom</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>

    </div>
</nav>
<!-- End Navbar -->


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <h2>Rails Portfolio</span></h2>

                            <p class="text-muted">Specialize in high-end wood and metal rails.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <!-- SECTION FILTER
            ================================================== -->
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter text-center">
                    <a href="#" data-filter="*" class="current waves-effect waves-success">All</a>
                    <a href="#" data-filter=".wood" class="waves-effect waves-success">Wood</a>
                    <a href="#" data-filter=".metal" class="waves-effect waves-success">Metal</a>
                </div>
            </div>
        </div>

        <div class="port portfolio-masonry m-b-30">
            <div class="portfolioContainer row">

                <?php
                include("photo-gallery.php");
                ?>

    </div> <!-- end container -->
</section>


<!-- FOOTER -->
<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a class="pb-2 display-4 mb-0 d-inline-block text-dark" href="index.html">
                        <i class="fa-solid fa-hammer"></i>
                    </a>
                    <h4 class="font-weight-bold">Aloha Millworks</h4>

                    <p class="text-muted m-b-0 copyright-txt"> © Aloha Millworks</p>

                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
</footer>
<!-- END FOOTER -->

<!-- JAVASCRIPTS -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- isotope filter plugin -->
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/portfolio-filter.js"></script>
<script src="js/app.js"></script>
<script src="js/hamburger.js"></script>

</body>

</html>