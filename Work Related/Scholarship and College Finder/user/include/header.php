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

        <!--================= Header Section Start Here =================-->
        <header id="react-header" class="react-header">
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
                                <ul id="backmenu" class="react-menus home react-sub-shadow">
                                    <li><a href="index">Home</a>
                                    <li><a href="college">College</a>
                                    <li><a href="scholarship">Scholarship</a>
                                    <li><a href="saved-items">Saved Items</a>
                                    <li><a href="contact">Contact</a>
                                </ul>                                
                                <div class="searchbar-part"> 
                                    <div class="react-login">
                                    <a href="../private/logout">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Log Out</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--=================  Menu End Here  =================-->
                </div>
            </div>
        </header>
        <!--================= Header Section End Here =================-->