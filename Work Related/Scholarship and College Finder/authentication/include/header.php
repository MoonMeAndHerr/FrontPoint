<?php

    session_start();
    require_once('../../global/main_configuration.php');

?>

<style>

    .logo-adjustment{
        height: 50px;
    }

</style>


<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--================= Meta tag =================-->
        <meta charset="utf-8">
        <title><?php echo WEB_NAME; ?> - <?php echo WEB_DESC; ?></title>
        <meta name="description" content="">
        <!--================= Responsive Tag =================-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="../../siteidentity/favicon/<?php echo WEB_FAVICON; ?>">
        <link rel="shortcut icon" type="image/x-icon" href="../../siteidentity/favicon/<?php echo WEB_FAVICON; ?>">        
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!--================= Menus css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/menus.css">               
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!--================= Elegant icon css  =================-->
        <link rel="stylesheet" type="text/css" href="assets/fonts/elegant-icon.css">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!--================= Animations css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/animations.css">  
        <!--================= style css =================-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--================= Custom Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/custom-spacing.css">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    </head>
    <body> 
        <!--================= Preloader Section Start Here =================-->        
        <div id="react__preloader">
            <div id="react__circle_loader"></div>
            <div class="react__loader_logo"><img src="../../siteidentity/logo/<?php echo WEB_LOGO; ?>" alt="Preload"></div>
        </div>        
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        <header id="react-header" class="react-header react-header-three">
            <div class="menu-part">
                <div class="container">
                    <!--================= Menu Start Here =================-->
                    <div class="react-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                            <div class="menu-toggle">
                                <div class="logo"><a href="index" class="logo-text"> <img class="logo-adjustment" src="../../siteidentity/logo/<?php echo WEB_LOGO; ?>" alt="logo"> </a></div>
                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================--> 
                            <div class="react-inner-menus">
                                <div class="searchbar-part">                                                                      
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Search...">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--=================  Back Menu End Here  =================-->
                </div>
            </div>
        </header>
        <!--================= Header Section End Here =================-->