<style>
    .img-tab {
        height: 230px !important;
    }

    .bg-black {
        background-color: #202020;
    }

    .border-radius-10 {
        border-radius: 10px;
    }

    .MyPlayList {
        border-radius: 20px;
        background-color: greenyellow;
    }

    .MyPlayList:hover {
        border-radius: 20px !important;
        background-color: green !important;
    }
</style>

<!-- data-toggle="modal" data-target="#PlayListOk" -->
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

<div class="main-slider" id="main-slider">
    <div class="slider big-slider slider-wrap">

        <?php /** @var array $TopFilms */
        foreach (array_slice($TopFilms, 0, 10) as $TopFilm) {
            $ID = $TopFilm['ID'] ?>

            <div class="slide slick-bg bg-1" style="background-image: url(Assets/images/FilmImg/<?= $TopFilm['FilmImg'] ?>);">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-content h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <h3 data-animation-in="fadeInUp" data-delay-in="1"><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmName"]), 0, 10)) ?></h3>
                                <div class="slide-info" data-animation-in="fadeInUp" data-delay-in="1">
                                    <span><?= $TopFilm['FilmYear'] ?></span> <span class="radius"><?= $TopFilm['FilmYoung'] . "+" ?></span><span><?= $TopFilm['FilmJanr'] ?></span>
                                </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1"><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmCaption"]), 0, 10)) ?></p>
                                <div class="slider-buttons d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                                    <a class="btn hvr-sweep-to-right" href=<?= menu(MenuWatch) . "&video_id=" . $TopFilm['ID'] ?> tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                                    <a data-toggle="modal" data-target="#PlayListOk" onclick="List(decodeURIComponent('<?= $ID ?>'))" class="btn hvr-sweep-to-right ml-3" href="#" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
                                    
                                </div>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Slider Content End -->
                </div>
                <!-- Container End -->
            </div>

        <?php } ?>

    </div>
    <!-- Slide Wrap End -->
</div>

<!-- Main Slider End -->
<!-- Start Main Content -->
<div class="main-content">
    <section class="pupular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Yangi Filmlar</h2>
                    <div class="owl-carousel owl-theme" id="pupular-slider">
                        <?php /** @var array $AllFilms */
                        foreach (array_slice($AllFilms, 0, 30) as $AllFilm) { ?>

                            <div class="item">
                                <div class="video-block">
                                    <div class="video-thumb position-relative thumb-overlay">
                                        <a href="#"><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $AllFilm['FilmImg'] ?>></a>
                                        <div class="box-content">
                                            <ul class="icon">
                                                <li>
                                                    <a href="watch-movie.html"><i class="fas fa-play"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="video-content">
                                        <h2 class="video-title"><a href="movie-single.html"><?= implode(" ", array_slice(explode(" ", $AllFilm["FilmName"]), 0, 10)) ?></a></h2>
                                        <div class="video-info d-flex align-items-center">
                                            <span class="video-year"><?= $AllFilm['FilmYear'] ?></span> <span class="video-age"><?= $AllFilm['FilmYoung'] ?></span> <span class="video-type"><?= $AllFilm['FilmJanr'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-tabs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="season-tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-toggle="pill" href="#pills-additions" role="tab" aria-selected="true">Fantastik</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="pill" href="#pills-movies" role="tab" aria-selected="false">Qo'rqinchli</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="pill" href="#pills-shows" role="tab" aria-selected="false">Kamedia</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Season Tabs End -->
                    <div class="tab-content" id="pills-tabContent">
                        <div id="pills-additions" class="tab-pane animated fadeInRight show active">
                            <div class="row">
                                <?php /** @var array $FantasticFilms */
                                foreach (array_slice($FantasticFilms, 0, 24) as $FantasticFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href="#"><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $FantasticFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $FantasticFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $FantasticFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $FantasticFilm["FilmName"]), 0, 10)) ?></a></h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $FantasticFilm['FilmYear'] ?></span> <span class="video-age"><?= $FantasticFilm['FilmYoung'] ?></span>
                                                    <span class="video-type"><?= $FantasticFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>
                                <?php } ?>

                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tap Pane 1 End -->
                        <div id="pills-movies" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <?php /** @var array $ScaryFilms */
                                foreach (array_slice($ScaryFilms, 0, 24) as $ScaryFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href="#"><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $ScaryFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $ScaryFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $ScaryFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $ScaryFilm["FilmName"]), 0, 10)) ?></a></h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $ScaryFilm['FilmYear'] ?></span> <span class="video-age"><?= $ScaryFilm['FilmYoung'] ?></span>
                                                    <span class="video-type"><?= $ScaryFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>
                                <?php } ?>

                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tap Pane 2 End -->
                        <div id="pills-shows" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <?php /** @var array $FunnyFilms */
                                foreach (array_slice($FunnyFilms, 0, 24) as $FunnyFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href="#"><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $FunnyFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $FunnyFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="movie-single.html"><i class="fas fa-info"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $FunnyFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $FunnyFilm["FilmName"]), 0, 10)) ?></a></h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $FunnyFilm['FilmYear'] ?></span> <span class="video-age"><?= $FunnyFilm['FilmYoung'] ?></span>
                                                    <span class="video-type"><?= $FunnyFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>
                                <?php } ?>

                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tap Pane 3 End -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>



    <!-- Pupular Section End -->
    <!-- Start Office Box Section -->
    <section class="office-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="block-title">TOP 10</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Swiper Slider -->
                    <div class="swiper-container loading pt-0">
                        <div class="swiper-wrapper">

                            <?php foreach (array_slice($TopFilms, 0, 10) as $TopFilm) { ?>
                                <div class="swiper-slide swiper-bg" style=<?= "background-image:url(Assets/images/FilmImg/" . $TopFilm['FilmImg'] . ")" ?>>
                                    <img alt="" class="entity-img" src=<?= "Assets/images/FilmImg/" . $TopFilm['FilmImg'] ?>>
                                    <div class="top-badge">
                                        <div class="video-badge"><img alt="" class="img-fluid" src="Assets/images/top-movies.png">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                                        <p style="font-size: 20px;"><?= implode(" ", array_slice(explode(" ", $TopFilm['FilmName']), 0, 10)) ?></p>
                                        </p><span class="caption mb-4" data-swiper-parallax="-20%"><?= implode(" ", array_slice(explode(" ", $TopFilm['FilmCaption']), 0, 20)) ?></span>
                                        <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                                            <a class="btn hvr-sweep-to-right" href=<?= menu(MenuWatch) . "&video_id=" . $TopFilm['ID'] ?> tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a> <a class="btn hvr-sweep-to-right ml-3" href="#" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>




                        </div>
                        <!-- Swiper Wrapper End -->
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                        <!-- Navigation Buttons End -->
                    </div>
                    <!-- End Swiper Slider -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Office Box Section End -->
    <!-- Start Trending Section -->
    <section class="trending">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Eng Ko'p Ko'rilgan</h2>
                    <div class="row">


                        <?php /** @var array $WatchFilms */
                        foreach (array_slice($WatchFilms, 0, 30) as $WatchFilm) { ?>

                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                <div class="video-block">
                                    <div class="video-thumb position-relative thumb-overlay">
                                        <a href=<?= menu(MenuWatch) . "&video_id=" . $WatchFilm['ID'] ?>><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $WatchFilm['FilmImg'] ?>></a>
                                        <div class="box-content">
                                            <ul class="icon">
                                                <li>
                                                    <a href=<?= menu(MenuWatch) . "&video_id=" . $WatchFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a href="movie-single.html"><i class="fas fa-info"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Box Content End -->
                                    </div>
                                    <!-- Video Thumb End -->
                                    <div class="video-content">
                                        <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $WatchFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $WatchFilm['FilmName']), 0, 10)) ?></a></h2>
                                        <div class="video-info d-flex align-items-center">
                                            <span class="video-year"><?= $WatchFilm['FilmYear'] ?></span> <span class="video-age"><?= $WatchFilm['FilmYoung'] ?></span> <span class="video-type"><?= $WatchFilm['FilmJanr'] ?></span>
                                        </div>
                                    </div>
                                    <!-- video Content End -->
                                </div>
                                <!-- video Block End -->
                            </div>
                        <?php } ?>


                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Trending Section End -->
    <!-- Start Last Seasons Section -->
    <section class="last-seasons pb-0">
        <div class="last-season" style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url(Assets/images/parallax/best-series.jpg);">
            <div class="container-fluid">
                <div class="season-header text-center">
                    <h2 class="mb-4">Kinolar</h2>
                </div>
                <!-- Season Header End -->
                <div class="season-tabs">
                    <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="pill" href="#pills-drama" role="tab" aria-selected="true">O'zbek Tilida</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#pills-action" role="tab" aria-selected="false">Ingliz Tilida</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#pills-romance" role="tab" aria-selected="false">Rus Tilida</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div id="pills-drama" class="tab-pane animated fadeInRight show active">
                            <div class="row">
                                <?php /** @var array $UzbekFilms */
                                foreach ($UzbekFilms as $UzbekFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $UzbekFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmName"]), 0, 10))  ?></a></h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $UzbekFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $UzbekFilm['FilmYoung'] ?></span> <span><?= $UzbekFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>

                                <?php } ?>
                                <!-- Col End -->

                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 1 End -->
                        <div id="pills-action" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/01.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The End</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/02.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">the beginning</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/03.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Search</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/04.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Treasures</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/05.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Problems</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/06.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">life is Beautiful</a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 2 End -->
                        <div id="pills-romance" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/01.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">End of Sorrows</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/02.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">the thief</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/03.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Millionaire</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/04.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Dreams</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/05.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Black Color</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/06.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Ocean</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 3 End -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- Season tabs End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Last Season End -->
    </section>

    <section class="last-seasons pb-0">
        <div class="last-season" style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url('Assets/images/parallax/multfilm.jpg');">
            <div class="container-fluid">
                <div class="season-header text-center">
                    <h2 class="mb-4">MultFilmlar</h2>
                </div>
                <!-- Season Header End -->
                <div class="season-tabs">
                    <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="pill" href="#mult-uz" role="tab" aria-selected="true">O'zbek Tilida</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#mult-en" role="tab" aria-selected="false">Ingliz Tilida</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#mult-ru" role="tab" aria-selected="false">Rus Tilida</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div id="mult-uz" class="tab-pane animated fadeInRight show active">
                            <div class="row">
                                <?php foreach ($UzbekFilms as $UzbekFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $UzbekFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmName"]), 0, 10))  ?></a></h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $UzbekFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $UzbekFilm['FilmYoung'] ?></span> <span><?= $UzbekFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>

                                <?php } ?>
                                <!-- Col End -->

                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 1 End -->
                        <div id="mult-en" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/01.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The End</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/02.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">the beginning</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/03.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Search</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/04.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Treasures</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/05.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Problems</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/06.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">life is Beautiful</a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 2 End -->
                        <div id="mult-ru" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/01.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">End of Sorrows</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/02.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">the thief</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/03.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Millionaire</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/04.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Dreams</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/05.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Black Color</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/06.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Ocean</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 3 End -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- Season tabs End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Last Season End -->
    </section>

    <section class="last-seasons pb-0">
        <div class="last-season" style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url(Assets/images/parallax/video.jpg);">
            <div class="container-fluid">
                <div class="season-header text-center">
                    <h2 class="mb-4">Videolar || Konsertlar</h2>
                </div>
                <!-- Season Header End -->
                <div class="season-tabs">
                    <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="pill" href="#video-uz" role="tab" aria-selected="true">O'zbek Tilida</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#video-en" role="tab" aria-selected="false">Ingliz Tilida</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#video-ru" role="tab" aria-selected="false">Rus Tilida</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div id="video-uz" class="tab-pane animated fadeInRight show active">
                            <div class="row">
                                <?php foreach ($UzbekFilms as $UzbekFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $UzbekFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $UzbekFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmName"]), 0, 10))  ?></a></h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $UzbekFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $UzbekFilm['FilmYoung'] ?></span> <span><?= $UzbekFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>

                                <?php } ?>
                                <!-- Col End -->

                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 1 End -->
                        <div id="video-en" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/01.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The End</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/02.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">the beginning</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/03.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Search</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/04.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Treasures</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/05.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Problems</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-action/06.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">life is Beautiful</a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 2 End -->
                        <div id="video-ru" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/01.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">End of Sorrows</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/02.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">the thief</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/03.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Millionaire</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/04.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Dreams</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/05.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">Black Color</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img alt="" class="img-fluid" src="Assets/images/best-romance/06.jpg"></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href="watch-show.html"><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-plus"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="shows-single.html"><i class="fas fa-info"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="shows-single.html">The Ocean</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year">2021</span> <span class="video-seasons">4
                                                    Season</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Tab Pane 3 End -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- Season tabs End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Last Season End -->
    </section>
    <!-- Last Seasons Section End -->

</div>
<script>
    function List(VideoID) {
        var UserID = decodeURIComponent("<?php echo $_SESSION['ID'] ?>");
        var req = new XMLHttpRequest();
        var Data = new FormData();
        Data.append("VideoID", VideoID);
        Data.append("UserID", UserID);
        req.open("POST", "Config/Confirm.php?menu=PlayList");
        req.send(Data);
    }
</script>