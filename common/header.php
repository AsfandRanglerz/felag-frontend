<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leieadmin</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/header/presis-logo-white.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-4.5.3.min.css">
        <link rel="stylesheet" href="css/poppins.css">
        <link  rel="stylesheet" href="css/inter.css">
        <link rel="stylesheet" href="css/lightgallery.css" />
        <link rel="stylesheet" href="plugins/WOW-master/css/animate.css">
        <link rel="stylesheet" type="text/css" href="dist/style.css">
    </head>
    <!--paste this code under the head tag-->
    <div id="loader">
        <span id="loaderGif"></span>
    </div>
    <!--paste this code under the head tag-->
    <body>
        <nav class="navbar navbar-expand-lg header-navbar wow fadeInUp" data-wow-duration="2s">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between navbar-brand-toggle-outer main-nav-bar">
                    <a class="mr-0 navbar-brand" href="./">
<!--                        <img src="images/header/presis-logo-white.svg" class="feelag-logo">-->
                        <span class="felag-logo-text">Logo</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#felagNavBar" aria-controls="felagNavBar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-around navbar-links" id="felagNavBar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="dropdownNavOne" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Precise Management System<span class="ml-2 fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu animated-dropdown slideIn" aria-labelledby="dropdownNavOne">
                                <div class="row">
                                    <div class="col-md-4 dropdown-menu-section">
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item d-inline-block" href="./management-system.php">Management System</a>
                                            <a class="dropdown-item d-inline-block" href="./precise-rent-contract.php">Digital Lease</a>
                                            <a class="dropdown-item d-inline-block" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 dropdown-menu-section">
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item d-inline-block" href="./deposit-account.php">Deposit Account</a>
                                            <a class="dropdown-item d-inline-block" href="#">Another action</a>
                                            <a class="dropdown-item d-inline-block" href="./occupancy-protocol.php">Occupancy Protocol</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 dropdown-menu-section">
                                        <a class="dropdown-item d-inline-block" href="#">Action</a>
                                        <a class="dropdown-item d-inline-block" href="#">Another action</a>
                                        <a class="dropdown-item d-inline-block" href="./prices.php">Prices</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./precise-rent-contract.php">Precise Rent Contract</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./prices.php">Prices</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="dropdownNavTwo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact Support<span class="ml-2 fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu animated-dropdown slideIn" aria-labelledby="dropdownNavTwo">
                                <a class="dropdown-item" href="./contact-us.php">Contact Us</a>
                            </div>
                        </li>
                    </ul>
                    <div class="d-lg-none d-block mt-4 mb-2" align="center">
                        <a href="./sign-in.php" class="mr-2 btn sign-in-btn">Sign in</a>
                        <a href="#" class="btn btn-bg">Start now</a>
                    </div>
                </div>
                <div class="d-lg-inline-block d-none">
                    <a href="./sign-in.php" class="mr-2 btn sign-in-btn">Sign in</a>
                    <a href="#" class="btn btn-bg">Start now</a>
                </div>
            </div>
        </nav>
