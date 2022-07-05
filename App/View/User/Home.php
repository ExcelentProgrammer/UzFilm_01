<!-- data-toggle="modal" data-target="#PlayListOk" -->


<div class="main-slider" id="main-slider">
    <div class="slider big-slider slider-wrap">

        <?php /** @var array $TopFilms */
        foreach (array_slice($WatchFilms, 0, 10) as $TopFilm) {
            $ID = $TopFilm['ID'] ?>

            <div class="slide slick-bg bg-1" style="background-image: url(<?= $TopFilm['FilmImg'] ?>);">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-content h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <h3 data-animation-in="fadeInUp" data-delay-in="1"><?= __Short($TopFilm['FilmName'], 10) ?></h3>
                                <div class="slide-info" data-animation-in="fadeInUp" data-delay-in="1">
                                    <span><?= $TopFilm['FilmYear'] ?></span> <span class="radius"><?= $TopFilm['FilmYoung'] ?></span><span><?= $TopFilm['FilmJanr'] ?></span>
                                </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1"><?= __Short($TopFilm['FilmCaption'], 10) ?></p>
                                <div class="slider-buttons d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                                    <a class="btn hvr-sweep-to-right" href=<?= FilmToWatch($TopFilm['ID']) ?> tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play
                                        Now</a>
                                    <?= __PlayList($TopFilm['ID'], "b") ?>
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
                                                <a href="#"><img alt="" class="img-fluid img-tab" src=<?=  $FantasticFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= FilmToWatch($FantasticFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <?= __PlayList($FantasticFilm['ID']) ?>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= FilmToWatch($FantasticFilm["ID"]) ?>><?= __Short($FantasticFilm['FilmName'], 10) ?></a>
                                                </h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $FantasticFilm['FilmYear'] ?></span>
                                                    <span class="video-age"><?= $FantasticFilm['FilmYoung'] ?></span>
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
                                                <a href="#"><img alt="" class="img-fluid img-tab" src=<?=  $ScaryFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= FilmToWatch($ScaryFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <?= __PlayList($ScaryFilm['ID']) ?>

                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= FilmToWatch($ScaryFilm['ID']) ?>><?= __Short($ScaryFilm['FilmName'], 10) ?></a>
                                                </h2>
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
                                                <a href="#"><img alt="" class="img-fluid img-tab" src=<?= $FunnyFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= FilmToWatch($FunnyFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <?= __PlayList($FunnyFilm['ID']) ?>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= FilmToWatch($FunnyFilm['ID']) ?>><?= __Short($FunnyFilm['FilmName'], 10) ?></a>
                                                </h2>
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
                                <div class="swiper-slide swiper-bg" style=<?= "background-image:url(" . $TopFilm['FilmImg'] . ")" ?>>
                                    <img alt="" class="entity-img" src=<?= $TopFilm['FilmImg'] ?>>
                                    <div class="top-badge">
                                        <div class="video-badge"><img alt="" class="img-fluid" src="Assets/images/top-movies.png">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                                        <p style="font-size: 20px;"><?= __Short($TopFilm['FilmName'], 10) ?></p>
                                        </p><span class="caption mb-4" data-swiper-parallax="-20%"><?= __Short($TopFilm['FilmCaption'], 20) ?></span>
                                        <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                                            <a class="btn hvr-sweep-to-right" href=<?= FilmToWatch($TopFilm['ID']) ?> tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                                            <?= __PlayList($id = $TopFilm['ID'], $p = "b"); ?>

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
                                        <a href=<?= FilmToWatch($WatchFilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $WatchFilm['FilmImg'] ?>></a>
                                        <div class="box-content">
                                            <ul class="icon">
                                                <li>
                                                    <a href=<?= FilmToWatch($WatchFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                </li>
                                                <li>
                                                    <?= __PlayList($WatchFilm['ID']) ?>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- Box Content End -->
                                    </div>
                                    <!-- Video Thumb End -->
                                    <div class="video-content">
                                        <h2 class="video-title"><a href=<?= FilmToWatch($WatchFilm['ID']) ?>><?= __Short($WatchFilm['FilmName'], 10) ?></a>
                                        </h2>
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
                        <?php if(!empty($UzFilms)){ ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="pill" href="#pills-drama" role="tab" aria-selected="true">O'zbek Tilida</a>
                        </li>
                        <?php }if(!empty($EnFilms)){ ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#pills-action" role="tab" aria-selected="false">Ingliz Tilida</a>
                        </li>
                        <?php }if(!empty($RuFilms)){ ?>
                            <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="pill" href="#pills-romance" role="tab" aria-selected="false">Rus Tilida</a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div id="pills-drama" class="tab-pane animated fadeInRight show active">
                            <div class="row">
                                <?php /** @var array $UzbekFilms */
                                foreach (array_slice($UzFilms,0,30) as $UzbekFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $UzbekFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <?= __PlayList($UzbekFilm['ID']) ?>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><?= __Short($UzbekFilm['FilmName'], 10) ?></a>
                                                </h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $UzbekFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $UzbekFilm['FilmYoung'] ?></span>
                                                    <span><?= $UzbekFilm['FilmJanr'] ?></span>
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
                        <!-- Tab Pane 1 End -->
                        <div id="pills-action" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <?php /** @var array $UzbekFilms */
                                foreach (array_slice($EnFilms,0,30) as $UzbekFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $UzbekFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <?= __PlayList($UzbekFilm['ID']) ?>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><?= __Short($UzbekFilm['FilmName'], 10) ?></a>
                                                </h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $UzbekFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $UzbekFilm['FilmYoung'] ?></span>
                                                    <span><?= $UzbekFilm['FilmJanr'] ?></span>
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
                        <!-- Tab Pane 2 End -->
                        <div id="pills-romance" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <?php /** @var array $UzbekFilms */
                                foreach (array_slice($RuFilms,0,30) as $UzbekFilm) { ?>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                        <div class="video-block">
                                            <div class="video-thumb position-relative thumb-overlay">
                                                <a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $UzbekFilm['FilmImg'] ?>></a>
                                                <div class="box-content">
                                                    <ul class="icon">
                                                        <li>
                                                            <a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <?= __PlayList($UzbekFilm['ID']) ?>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Box Content End -->
                                            </div>
                                            <!-- Video Thumb End -->
                                            <div class="video-content">
                                                <h2 class="video-title"><a href=<?= FilmToWatch($UzbekFilm['ID']) ?>><?= __Short($UzbekFilm['FilmName'], 10) ?></a>
                                                </h2>
                                                <div class="video-info d-flex align-items-center">
                                                    <span class="video-year"><?= $UzbekFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $UzbekFilm['FilmYoung'] ?></span>
                                                    <span><?= $UzbekFilm['FilmJanr'] ?></span>
                                                </div>
                                            </div>
                                            <!-- video Content End -->
                                        </div>
                                        <!-- video Block End -->
                                    </div>

                                <?php } ?>



                            </div>
                            <!-- Col End -->
                        </div>
                        <a class="hvr-sweep-to-right y-center btn" href=<?= __AllGo("Film",1) ?> tabindex="0">Barchasi</a>

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
    <div class="last-season" style="background-size: 100% 100%; background-image: linear-gradient(to top, #202020, rgba(2,2,2,0.8)), url('Assets/images/parallax/multfilm.jpg');">
        <div class="container-fluid">
            <div class="season-header text-center">
                <h2 class="mb-4">MultFilmlar</h2>
            </div>
            <!-- Season Header End -->
            <div class="season-tabs">
                <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                <?php if(!empty($UzMultfilms)){ ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="pill" href="#mult-uz" role="tab" aria-selected="true">O'zbek
                            Tilida</a>
                    </li>
                    <?php }if(!empty($EnMultfilms)){ ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#mult-en" role="tab" aria-selected="false">Ingliz
                            Tilida</a>
                    </li>
                    <?php }if(!empty($RuMultfilms)){ ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#mult-ru" role="tab" aria-selected="false">Rus
                            Tilida</a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="tab-content" id="pills-tab-Content">
                    <div id="mult-uz" class="tab-pane animated fadeInRight show active">
                        <div class="row">
                            <?php /** @var array $Multfilms */
                            foreach (array_slice($UzMultfilms,0,30) as $Multfilm) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $Multfilm['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($Multfilm['ID'], "", "Multfilm") ?>

                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><?= __Short($Multfilm['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $Multfilm['FilmYear'] ?></span> <span class="video-seasons"><?= $Multfilm['FilmYoung'] ?></span>
                                                <span><?= $Multfilm['FilmJanr'] ?></span>
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
                            <?php /** @var array $Multfilms */
                            foreach (array_slice($EnMultfilms,0,30) as $Multfilm) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $Multfilm['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($Multfilm['ID'], "", "Multfilm") ?>

                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><?= __Short($Multfilm['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $Multfilm['FilmYear'] ?></span> <span class="video-seasons"><?= $Multfilm['FilmYoung'] ?></span>
                                                <span><?= $Multfilm['FilmJanr'] ?></span>
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
                    <!-- Tab Pane 2 End -->
                    <div id="mult-ru" class="tab-pane animated fadeInRight">
                        <div class="row">
                            <?php /** @var array $Multfilms */
                            foreach (array_slice($RuMultfilms,0,30) as $Multfilm) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $Multfilm['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($Multfilm['ID'], "", "Multfilm") ?>

                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= MultfilmToWatch($Multfilm['ID']) ?>><?= __Short($Multfilm['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $Multfilm['FilmYear'] ?></span> <span class="video-seasons"><?= $Multfilm['FilmYoung'] ?></span>
                                                <span><?= $Multfilm['FilmJanr'] ?></span>
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
                    <a class="hvr-sweep-to-right y-center btn" href=<?= __AllGo("Multfilm",1) ?> tabindex="0">Barchasi</a>

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
    <div class="last-season" style="background-size: 100% 100%;background-image: linear-gradient(to top, #202020, rgba(2,2,2,0.8)), url(Assets/images/parallax/video.jpg);">
        <div class="container-fluid">
            <div class="season-header text-center">
                <h2 class="mb-4">Videolar || Konsertlar</h2>
            </div>
            <!-- Season Header End -->
            <div class="season-tabs">
                <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                    <?php if(!empty($UzVideos)){ ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="pill" href="#video-uz" role="tab" aria-selected="true">O'zbek
                            Tilida</a>
                    </li>
                    <?php }if(!empty($EnVideos)){ ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#video-en" role="tab" aria-selected="false">Ingliz
                            Tilida</a>
                    </li>
                    <?php }if(!empty($RuVideos)){ ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#video-ru" role="tab" aria-selected="false">Rus
                            Tilida</a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="tab-content" id="pills-tab-Content">
                    <div id="video-uz" class="tab-pane animated fadeInRight show active">
                        <div class="row">
                            <?php /** @var array $Videos */
                            foreach (array_slice($UzVideos,0,30) as $Video) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= VideoToWatch($Video['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $Video['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= VideoToWatch($Video['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($Video['ID'], "", "Video") ?>

                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= VideoToWatch($Video['ID']) ?>><?= __Short($Video['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $Video['FilmYear'] ?></span> <span class="video-seasons"><?= $Video['FilmYoung'] ?></span>
                                                <span><?= $Video['FilmJanr'] ?></span>
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
                            <?php /** @var array $Videos */
                            foreach (array_slice($EnVideos,0,30) as $Video) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= VideoToWatch($Video['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $Video['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= VideoToWatch($Video['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($Video['ID'], "", "Video") ?>

                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= VideoToWatch($Video['ID']) ?>><?= __Short($Video['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $Video['FilmYear'] ?></span> <span class="video-seasons"><?= $Video['FilmYoung'] ?></span>
                                                <span><?= $Video['FilmJanr'] ?></span>
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
                    <!-- Tab Pane 2 End -->
                    <div id="video-ru" class="tab-pane animated fadeInRight">
                        <div class="row">
                            <?php /** @var array $Videos */
                            foreach (array_slice($RuVideos,0,30) as $Video) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= VideoToWatch($Video['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?=  $Video['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= VideoToWatch($Video['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($Video['ID'], "", "Video") ?>

                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= VideoToWatch($Video['ID']) ?>><?= __Short($Video['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $Video['FilmYear'] ?></span> <span class="video-seasons"><?= $Video['FilmYoung'] ?></span>
                                                <span><?= $Video['FilmJanr'] ?></span>
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
                    <a class="hvr-sweep-to-right y-center btn" href=<?= __AllGo("Video",1) ?> tabindex="0">Barchasi</a>

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