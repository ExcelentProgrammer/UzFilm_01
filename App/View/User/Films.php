

<style>
    .title{
        font-size: 1.3rem !important;
    }
</style>

<!-- Start Swiper Slider -->
<div class="swiper-container loading">
    <div class="swiper-wrapper">
<?php 
$TopFilms = array_slice($TopFilms,0,10);
foreach($TopFilms as $TopFilm){
    
?>
        <div class="swiper-slide swiper-bg" style=<?= "background-image:url(Assets/images/FilmImg/".$TopFilm['FilmImg'].")" ?>>
            <img src=<?= "Assets/images/FilmImg/".$TopFilm['FilmImg'] ?> class="entity-img" alt="">
            <div class="top-badge">
                <div class="video-badge">
                    <img class="img-fluid" src="Assets/images/top-movies.png" alt="">
                </div>
            </div>
            <div class="content">
                <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmName"]), 0, 10)) ?></p>
                <span class="caption mb-4" data-swiper-parallax="-20%"><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmCaption"]), 0, 60)) ?></span>
                <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                    <a href=<?= menu(MenuWatch)."&video_id=".$TopFilm['ID'] ?> class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                    <a href="#" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
    <!-- Swiper Wrapper -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
    <!-- navigation buttons -->
</div>




<!-- End Swiper Slider -->
<!-- Start Main Content -->
<div class="main-content">
    <!-- Start Recently Added Section -->
    <section class="recently-added">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Recently Added</h2>
                    <!-- Start Pupular Slider -->
                    <div id="pupular-slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/01.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">A dam wind</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 1 End -->
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/02.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">the message</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 2 End -->
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/03.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">Verbal messages</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 3 End -->
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/04.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">hard life</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 4 End -->
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/05.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">Destiny</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 5 End -->
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/06.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">Paper hero</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 6 End -->
                        <div class="item">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="images/latest-movies/07.jpg" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                            <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.html">The gang</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">2021</span>
                                        <span class="video-age">+18</span>
                                        <span class="video-type">Action</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Item 7 End -->
                        <!-- Owl Slider End -->
                    </div>
                    <!-- Pupular Slider End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Recently Added Section End -->
    <!-- Start Hollywood Movies Section -->
    <section class="hollywood-movies">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Hollywood Movies</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                            <a href="#"><img class="img-fluid" src="images/suggested/01.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">The Colors</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/suggested/02.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">The Devastation</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/suggested/03.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">The Beauty</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/suggested/04.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">The Silence</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/suggested/05.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">the door is open</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/suggested/06.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">The Great Journey</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
        <!-- Container End -->
    </section>
    <!-- Hollywood Movies Section End -->
    <!-- Start Award-Winning Movies Section -->
    <section class="award-winning">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Award-Winning Movies</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                            <a href="#"><img class="img-fluid" src="images/trending/01.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">Freedom</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/trending/02.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">the world</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/trending/03.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">The gang</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/trending/04.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">World of war</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/trending/05.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">Happy holiday</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
                            <a href="#"><img class="img-fluid" src="images/trending/06.jpg" alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="watch-movie.html"><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="movie-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href="movie-single.html">weekend</a></h2>
                            <div class="video-info d-flex align-items-center">
                                <span class="video-year">2021</span>
                                <span class="video-age">+18</span>
                                <span class="video-type">Action</span>
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
        <!-- Container End -->
    </section>
    <!-- Award-Winning Movies Section End -->
</div>
<!-- Main Content End -->
<!-- Start Footer Section -->