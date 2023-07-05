<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=" Real Estate Application">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
    <link rel="shortcut icon" href="images/log1.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Title -->
    <title>Real Estate Application</title>

    <style>
        /* Center the form container */
        .form-container {
            display: flex;
            justify-content: center;
            padding: 0 400px;
            margin-top: 60px;
            margin-bottom: 60px;
            /* Add spacing on the right and left */
        }
    </style>





</head>

<body>
    <!-- Page Loader -->
    <!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
        <div class="d-flex justify-content-center y-middle position-relative">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div> -->

    <div id="page-wrapper">
        <div class="row">
            <!-- Header start -->
            <?php include("include/header.php"); ?>
            <!-- Header end -->


            <!-- Banner -->
            <div class="banner-full-row page-banner"
                style="background-image:url('images/breadcromb.jpg'); height: 100px;">
                <!-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Send Request</b></h2>
            </div>
            <div class="col-md-6">
                <nav aria-label="breadcrumb" class="float-left float-md-right">
                    <ol class="breadcrumb bg-transparent m-0 p-0">   
                    </ol>
                </nav>
            </div>
        </div>
    </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <h2 class="page-name text-white text-uppercase mt-1 mb-0"><b>Our Services</b></h2>
                        </div>
                    </div>
                </div>

            </div>

            <div class="full-row bg-gray">
            <div class="container">
                
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                                <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling Service</a></h5>
                                <p>We offer comprehensive selling services to streamline the process. 
                                    Our experienced real estate agents will guide you through every step, 
                                    from determining the optimal listing price to marketing your property effectively. 
                                    </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                                <i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental Service</a></h5>
                                <p>For landlords and property owners, 
                                    our rental services provide a hassle-free approach to finding tenants. 
                                    We assist in marketing your rental property, screening potential tenants, and handling lease agreements.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                                <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property Listing</a></h5>
                                <p>Our platform allows property owners, agents, and agencies to list their properties 
                                    and reach a wide audience of potential buyers or tenants. 
                            </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                                <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Invest | Advertise With Us</a></h5>
                                <p>Explore investment properties, such as income-generating properties, commercial spaces, or development projects, that align with your investment goals. Additionally, we provide advertising options for businesses in the real estate industry to promote their services or products to our engaged user base.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Footer start -->
            <?php include("include/footer.php"); ?>
            <!-- Footer end -->

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i
                    class="fas fa-angle-up"></i></a>
            <!-- Scroll to top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!-- Js Link -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>