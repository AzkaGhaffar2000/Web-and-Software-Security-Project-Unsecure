<?php 
	session_start();
    
    include("ConnectNatureDB.php");

	if (isset($_SESSION['AccID']))
	{
        $AccountID = $_SESSION['AccID'];
	}
	else
	{
		header("Location:logout.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NATUTRE- Life Blog HTML Template</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="header-area">
        <div class="top-header-area bg-img bg-overlay" style="background-image: url(img/gif29.gif);">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-12 col-sm-6">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="searchB.php" method="post">
                                <input type="search" name="Name" id="Name" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="bueno-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="buenoNav">

                        <!-- Toggler -->
                        <div id="toggler"></div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                           <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="user.php">Home</a></li>
                                    <li><a href="video.php">Videos</a> </li>
                                    <li><a href="photos.php">Photos</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contactus.php">Contact</a></li>
                                </ul>

                                <div class="logout-area">
                                    <a href="logout.php">Log Out</a>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
    <div class="instagram-feed-area d-flex flex-wrap">
        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif22.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif22.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif23.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif23.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif24.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif24.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif25.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif25.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif26.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif26.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif27.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif27.gif" class="img-zoom" >+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif5.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif5.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif29.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif29.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif13.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif13.gif" class="img-zoom">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="img/gif6.gif" alt="">
            <!-- Image Zoom -->
            <a href="img/gif6.gif" class="img-zoom">+</a>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->
    

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>