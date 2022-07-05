<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Basic Page -->
    <meta charset="UTF-8">
    <title>UzFilm Eng So'ngi va Qiziqarli Filmlar </title>
    <!-- Mobile Specific -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!-- <meta content="width=device-width,  initial-scale=1.0" name="viewport"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Favicon -->
    <link href="Assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="Assets/images/favicon.png" rel="icon" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome Styles -->
    <link href="Assets/css/fontawesome.min.css" rel="stylesheet">
    <!-- Iconfonts Styles -->
    <link href="Assets/css/icofont.css" rel="stylesheet">
    <!-- Owl Carousel Styles -->
    <link href="Assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="Assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Slick Slider Styles -->
    <link href="Assets/css/slick.css" rel="stylesheet">
    <link href="Assets/css/slick-theme.css" rel="stylesheet">
    <!-- Swiper Slider Styles -->
    <link href="Assets/css/swiper.min.css" rel="stylesheet">
    <!-- Animate Styles -->
    <link href="Assets/css/animate.css" rel="stylesheet">
    <!-- Hover Styles -->
    <link href="Assets/css/hover-min.css" rel="stylesheet">
    <!-- Magnific Styles -->
    <link href="Assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Bootstrap Datepicker Styles -->
    <link href="Assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Main Styles -->
    <link href="Assets/css/style.css" rel="stylesheet">
    <!-- Responsive Styles -->
    <link href="Assets/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="Assets/css/My.css">
    <style>
        .img-tab {
            cursor: pointer;
            min-height: 15rem !important;
        }
      
    </style>
</head>

<body>
    <!-- Start Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preloader End -->
    <div class="main" id="main">
        <!-- Start Mobile Header -->
        <header class="mobile-header">
            <div class="mobile-header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-logo text-center">
                                <a href=<?= menu(MenuHome) ?>><img alt="" class="img-fluid" src="Assets/images/header-logo.png"></a>
                            </div>
                        </div>
                        <!-- Logo Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Content End -->
        </header>
        <!-- Mobile Header End -->
        <!-- Start Header -->
        <header class="main-nav clearfix is-sticky">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-lg-9 pl-0">
                        <!-- Start Navigation -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href=<?= menu(MenuHome) ?>><img alt="" class="img-fluid" src="Assets/images/header-logo.png"></a>
                            <!-- Logo End -->
                            <div class="site-nav-inner float-left">
                                <button aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="fa fa-bars"></span></button> <!-- Navbar Toggler End -->
                                <div class="navbar-collapse navbar-responsive-collapse collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href=<?= menu(MenuHome) ?>>Bosh Sahifa</a>
                                        </li>
                                        <!-- Nav Item 1 End -->
                                        <li class="nav-item">
                                            <a class="nav-link active" href=<?= menu(MenuContcts) ?>>Xabar Qoldirish</a>
                                        </li>
                                        <!-- Nav Item 1 End -->
                                        <li class="nav-item">
                                            <a class="nav-link active" href=<?= menu(MenuAbout) ?>>Biz Haqimizda</a>
                                        </li>
                                        <!-- Nav Item 1 End -->
                                        <li class="nav-item">
                                            <a class="nav-link active" href=<?= menu(MenuHelp) ?>>Yordam</a>
                                        </li>
                                        <!-- Nav Item 1 End -->

                                    </ul>
                                    <!-- Nav UL End -->
                                </div>
                                <!-- Navbar Collapse End -->
                            </div>
                            <!-- Site Nav Inner End -->
                        </nav>
                        <!-- Navigation End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-lg-3 text-right right-menu-wrap">
                        <ul class="nav d-flex align-items-center list-inline m-0 float-right">
                            <li class="nav-item">
                                <div class="nav-search">
                                    <a class="nav-link modal-popup" href="#search-popup"><i class="icofont-ui-search"></i></a>
                                </div>
                                <!-- Search Icon End -->
                            </li>

                            <?php
                            if (empty($_SESSION['ID'])) {
                            ?>


                                <li class="nav-item">
                                    <div class="nav-filter">
                                        <a class="btn hvr-sweep-to-right" href=<?= menu(MenuLogin) ?>>Kirish</a>


                                    </div>

                                </li>
                                <?php } else {
                                if ($_SESSION["UserRole"] == RoleAdmin) { ?>
                                    <a class="btn hvr-sweep-to-right ml-5" href=<?= AdminMenu(Dashboard) ?>>Admin</a>
                                <?php } ?>
                                <!-- Nav Item 2 End -->
                                <li class="nav-item">
                                    <div class="nav-account ml-2">
                                        <div class="dropdown">
                                            <div aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" id="dropdown-account" role="button"><img alt="" class="img-fluid user-icon rounded-circle" src="<?php echo 'Assets/images/avatar/' . User::UserData()->Avatar ?>">
                                            </div>
                                            <ul class="dropdown-menu dropdown-menu-right fade-up">
                                                <li>
                                                    <a class="dropdown-item" href=<?= menu(MenuAccount) ?>>Sozlamalar</a>
                                                </li>
                                                <!-- Li 1 end -->
                                                <li>
                                                    <a class="dropdown-item" href=<?= menu(MenuPlayList) ?>>Play List</a>
                                                </li>
                                                <!-- Li 2 end -->
                                                <li>
                                                    <a style="cursor:pointer;" id="trailer" class="dropdown-item" tabindex="0" data-toggle="modal" data-target="#logout-tab" aria-hidden="true">Chiqish</a>

                                                </li>
                                                <!-- Li 3 end -->
                                            </ul>
                                            <!-- Account List End -->
                                        </div>
                                        <!-- Account Drop Down End -->
                                    </div>
                                    <!-- Account Menu End -->
                                </li>

                            <?php } ?>
                            <!-- Nav Item 3 End -->
                        </ul>
                        <!-- Nav UL End -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </header>
        <!-- Header End -->
        <div class="col-6 col-xl mb-xl-0 mb-3 ">
            <div class="modal fade" id="PlayListOk" tabindex="0" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document" id="trailerModal">
                    <div class="modal-content border-radius-10">
                        <div class="modal-header bg-black border-radius-10">
                            <div class="col-8">
                                <h4 style="color:white;">Film Shaxsiy Play listginggiga qo'shildi</h4>
                            </div>
                            <div class="col-3">
                                <a class="btn  MyPlayList" href=<?= menu(MenuPlayList) ?> tabindex="0"><i aria-hidden="true" class="fa fa-play mr-1"></i></a>
                            </div>
                            <div class="col-1">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        (new Rout())->route();
        ?>

        <!-- Modal Trailer -->
        <div class="modal fade" id="logout-tab" tabindex="0" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" id="trailerModal">
                <!-- Modal Content -->
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Chiqish</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>

                    </div>
                    <!-- Modal Body -->
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times">Accountdan chiqish</i></span>
                </button> -->
                    <div class="row">
                        <div class="col-6">
                            <a class="btn hvr-sweep-to-right ok-btn" href=<?= menu(MenuLogout) ?> tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Chiqish</a>
                        </div>
                        <div class="col-6">
                            <a data-dismiss="modal" aria-label="Close" class="btn close-btn hvr-sweep-to-right" tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Bekor Qilish</a>
                        </div>
                    </div>


                    <!-- Modal Body -->
                </div>
                <!-- Modal Content -->
            </div>
            <!-- Modal Dialog -->
        </div>


        <!-- Start Footer Section -->
        <div class="main-footer">
            <div class="container-fluid">
                <div class="row justify-content-lg-between justify-content-center">
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="widget-content">
                                <div class="footer-logo"><img alt="" class="img-fluid" src="Assets/images/footer-logo.png">
                                </div>
                                <div class="footer-about-text">
                                    <p class="text-muted">Eng sifatli Filmlarni Bizning saytda tomosha qiling </p>
                                </div>
                                <div class="footer-social-icons">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" title="twitter"><i class="fab fa-2x fa-twitter"></i></a>
                                        </li>
                                        <!-- Social Icons Item 1 End -->
                                        <li class="list-inline-item">
                                            <a href="#" title="facebook"><i class="fab fa-2x fa-facebook-f"></i></a>
                                        </li>
                                        <!-- Social Icons Item 2 End -->
                                        <li class="list-inline-item">
                                            <a href="#" title="instagram"><i class="fab fa-2x fa-instagram"></i></a>
                                        </li>
                                        <!-- Social Icons Item 3 End -->
                                        <li class="list-inline-item">
                                            <a href="#" title="youtube"><i class="fab fa-2x fa-youtube"></i></a>
                                        </li>
                                        <!-- Social Icons Item 4 End -->
                                    </ul>
                                </div>
                                <!-- Social Icons End -->
                            </div>
                            <!-- Footer Widget Content End -->
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="widget">
                                <div class="widget-header">
                                    <h2 class="widget-title">Filmlar</h2>
                                </div>
                                <div class="widget-content footer-menu">
                                    <ul class="f-link list-unstyled mb-0">
                                        <li>
                                            <a href="<?= __AllGo("Film", 1) ?>">Kino</a>
                                        </li>
                                        <li>
                                            <a href="<?= __AllGo("Multfilm", 1) ?>">Multfilm</a>
                                        </li>
                                        <li>
                                            <a href="<?= __AllGo("Video", 1) ?>">Video</a>
                                        </li>
                                        <li>
                                            <a href="<?= __AllGo("Video", 1) ?>">Komedia</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Widget Content End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="widget">
                                <div class="widget-header">
                                    <h2 class="widget-title">Sahifalar</h2>
                                </div>
                                <div class="widget-content footer-menu">
                                    <ul class="f-link list-unstyled mb-0">
                                        <li>
                                            <a href="<?= menu(MenuHome) ?>">Bosh Sahifa</a>
                                        </li>
                                        <li>
                                            <a href="<?= menu(MenuContcts) ?>">Xabar Qoldirish</a>
                                        </li>
                                        <li>
                                            <a href="<?= menu(MenuAbout) ?>">Biz Xaqimizda</a>
                                        </li>
                                        <li>
                                            <a href="<?= menu(MenuHelp) ?>">Yordam</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Widget Content End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="widget">
                                <div class="widget-header">
                                    <h2 class="widget-title">Account</h2>
                                </div>
                                <div class="widget-content footer-menu">
                                    <ul class="f-link list-unstyled mb-0">
                                        <li>
                                            <a href="<?= menu(MenuAccount) ?>">Hisob Sozlamalari</a>
                                        </li>
                                        <li>
                                            <a href="<?= menu(MenuPlayList) ?>">Play List</a>
                                        </li>
                                        <li>
                                            <a href="<?= menu(MenuAccount) ?>">Parolni o'zgartirish</a>
                                        </li>
                                        <li>
                                            <a href="<?= menu(MenuLogout) ?>">Chiqish</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Widget Content End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Footer Section End -->
        <!-- Start Copyrights Section -->
        <div class="copyright">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <p>© UzFilm 2022</p>
                    </div>

                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Copyrights Section End -->
        <!-- To Top Button Start-->
        <div class="back-to-top-btn">
            <div class="back-to-top" style="display: block;">
                <a aria-hidden="true" class="fas fa-angle-up" href="#"></a>
            </div>
        </div>
        <!-- To Top Button End -->
    </div>
    <!-- Main Class End -->
    <!-- Start Search Modal -->
    <div class="zoom-anim-dialog mfp-hide modal-searchPanel search-form" id="search-popup">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="search-panel">
                    <form method="GET" action="<?= menu(MenuSearch) ?>" class="search-group">
                        <div class="input-group">
                            <input class="form-control" name="s" placeholder="Search" type="search" value="">
                            <button class="input-group-btn search-button"><i cMenuSerachlass="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->
    <!-- Start Filter Sidebar -->
    <div class="filter-sidebar" id="f-Sidebar">
        <a class="closebtn" href="javascript:void(0)" onclick="closeNav()"><i class="fas fa-times"></i></a>
        <div class="filter-accordion" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button aria-controls="type" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#type" data-toggle="collapse">Film Turlari<span class="icofont-circled-down"></span></button>
                    </h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingOne" class="collapse" data-parent="#accordion" id="type">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Drama</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="">Kino</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Romantic</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Crime</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Excitement</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="">Multfilm</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Ambiguity</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Adventures</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Fantasia</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Horror</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Fiction</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Type Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button aria-controls="production" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#production" data-toggle="collapse">Year of Production <span class="icofont-circled-down"></span></button>
                    </h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="production">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2000</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2001</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2002</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2003</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2004</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2005</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2006</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2007</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2008</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2009</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2010</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2011</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2012</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2013</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2014</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2015</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2016</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2017</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2018</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2019</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2020</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2021</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2022</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Production Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button aria-controls="quality" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#quality" data-toggle="collapse">Display Quality <span class="icofont-circled-down"></span></button>
                    </h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="quality">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p HDTV</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">1080p BluRay</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p BluRay</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">1080p WEB-DL</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p WEBRip</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p HD</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">1080p HD</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">HDTV</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p WEB-Dl</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Quality Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button aria-controls="country" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#country" data-toggle="collapse">Country of Production <span class="icofont-circled-down"></span></button>
                    </h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="country">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">France</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Canada</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">China</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Argentina</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Australia</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">United States</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Germany</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Japan</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Italy</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Country Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button aria-controls="language" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#language" data-toggle="collapse">The Language <span class="icofont-circled-down"></span></button>
                    </h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="language">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Arabic</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">English</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">German</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Spanish</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">French</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Italian</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Russian</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Japanese</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Chinese</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Language Collapse End -->
            </div>
            <!-- Card End -->
        </div>
        <!-- Filter Accordion End -->
    </div>
    <!-- Filter Sidebar End -->

    <!-- Javascript Files
================================================== -->
    <!-- Initialize jQuery Library -->
    <script src="Assets/js/jquery.js"></script>
    <!-- Popper jQuery -->
    <script src="Assets/js/popper.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="Assets/js/bootstrap.min.js"></script>
    <!-- jQuery Owl Carousel -->
    <script src="Assets/js/owl.carousel.min.js"></script>
    <!-- jQuery Slick Slider -->
    <script src="Assets/js/slick.min.js"></script>
    <!-- jQuery Slick Animation -->
    <script src="Assets/js/slick-animation.min.js"></script>
    <!-- jQuery Pop-up Search -->
    <script src="Assets/js/jquery.magnific-popup.min.js"></script>
    <!-- jQuery Swiper Slider -->
    <script src="Assets/js/swiper.min.js"></script>
    <script src="Assets/js/swiper-custom.js"></script>
    <!-- jQuery Datepicker -->
    <script src="Assets/js/bootstrap-datepicker.min.js"></script>
    <!-- JQuery Sidebar -->
    <script src="Assets/js/sidebar.js"></script>
    <!-- Template Custom -->
    <script src="Assets/js/main.js"></script>

    <script>
        function List(VideoID, Type) {
            var UserID = decodeURIComponent("<?php echo User::ID() ?>");
            var req = new XMLHttpRequest();
            var Data = new FormData();
            Data.append("VideoID", VideoID);
            Data.append("Type", Type);
            Data.append("UserID", UserID);
            req.open("POST", "Config/Confirm.php?menu=PlayList");
            req.send(Data);
        }
    </script>
</body>


<!-- Mirrored from excellencetheme.com/templates/avastream/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 17:08:36 GMT -->

</html>