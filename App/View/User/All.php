<section class="last-seasons pb-0">
    <div class="last-season" style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url(Assets/images/parallax/best-series.jpg);">
        <div class="container-fluid">

            <!-- Season Header End -->
            <div class="season-tabs">

                <div class="tab-content" id="pills-tab-Content">
                    <div id="pills-drama" class="tab-pane animated fadeInRight show active">
                        <div class="row">
                            <?php /** @var array $UzbekFilms */
                            foreach ($AllFilms as $AllFilm) { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href=<?= FilmToWatch($AllFilm['ID']) ?>><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $AllFilm['FilmImg'] ?>></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                    <li>
                                                        <a href=<?= FilmToWatch($AllFilm['ID']) ?>><i class="fas fa-play"></i></a>
                                                    </li>
                                                    <li>
                                                        <?= __PlayList($AllFilm['ID']) ?>
                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href=<?= FilmToWatch($AllFilm['ID']) ?>><?= __Short($AllFilm['FilmName'], 10) ?></a>
                                            </h2>
                                            <div class="video-info d-flex align-items-center">
                                                <span class="video-year"><?= $AllFilm['FilmYear'] ?></span> <span class="video-seasons"><?= $AllFilm['FilmYoung'] ?></span>
                                                <span><?= $AllFilm['FilmJanr'] ?></span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>

                            <?php } ?>



                        </div>

                        <!-- Row End -->
                        <ul class="nav nav-tabs" style="border: 0px;width: 1000px;">
                            <?php if ($start != 1) { ?>
                                <li class="nav-item mr-3 bg-info">
                                    <a class="nav-link" aria-current="page" href=<?= __AllGo("Film", "1") ?>><?= "1" ?></a>
                                </li>
                               
                                <?php }
                            foreach (range($start, $pages) as $i) {
                                if ($page == $i) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href=<?= __AllGo("Film", $i) ?>><?= $i ?></a>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href=<?= __AllGo("Film", $i) ?>><?= $i ?></a>
                                    </li>
                            <?php }
                            } if($page+2 >= $apages){}else{ ?>
                            <li class="nav-item ml-3 bg-info">
                                <a class="nav-link" aria-current="page" href=<?= __AllGo("Film", $apages) ?>><?= $apages ?></a>
                            </li>
                            <?php } ?>
                        </ul>

                    </div>
                    <!-- Tab Pane 1 End -->

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