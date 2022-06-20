<?php if (!empty($MyLists['Film'])) { ?>
    <section class="variety-shows">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Filmlar</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <?php /** @var array $MyLists */
                foreach ($MyLists['Film'] as $Film) { ?>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">

                        <div class="video-block">
                            <div class="video-thumb position-relative thumb-overlay">
                                <a href="#"><img class="img-fluid img-tab"
                                                 src=<?= "Assets/images/FilmImg/" . $Film['FilmImg'] ?> alt=""></a>
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a href=<?= menu(MenuWatch) . "&video_id=" . $Film['ID'] ?>><i
                                                        class="fas fa-play"></i></a></li>
                                        <li><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                     style="background-color: white" height="8"
                                                     fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                                </svg>
                                            </a></li>
                                        <li><a href="shows-single.html"><i class="fas fa-info"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Box Content End -->
                            </div>
                            <!-- Video Thumb End -->
                            <div class="video-content">
                                <h2 class="video-title"><a
                                            href=<?= menu(MenuWatch) . "&video_id=" . $Film['ID'] ?>><?= __Short($Film['FilmName'],10) ?></a>
                                </h2>
                                <div class="video-info d-flex align-items-center">
                                    <span class="video-year"><?= $Film['FilmYear'] ?></span>
                                    <span class="video-seasons"><?= $Film['FilmYoung'] ?></span>
                                    <span class="video-seasons"><?= $Film['FilmJanr'] ?></span>
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
    </section>
<?php } ?>
<?php if (!empty($MyLists['Multfilm'])) { ?>
    <section class="variety-shows">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Multfilmlar</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <?php /** @var array $MyLists */
                foreach ($MyLists['Multfilm'] as $Film) { ?>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">

                        <div class="video-block">
                            <div class="video-thumb position-relative thumb-overlay">
                                <a href="#"><img class="img-fluid img-tab"
                                                 src=<?= "Assets/images/FilmImg/" . $Film['FilmImg'] ?> alt=""></a>
                                <div class="box-content">
                                    <ul class="icon">
                                        <li>
                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $Film['ID'] . "&type=multfilm" ?>><i
                                                        class="fas fa-play"></i></a></li>
                                        <li><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                     style="background-color: white" height="8"
                                                     fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                                </svg>
                                            </a></li>
                                        <li><a href="shows-single.html"><i class="fas fa-info"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Box Content End -->
                            </div>
                            <!-- Video Thumb End -->
                            <div class="video-content">
                                <h2 class="video-title"><a
                                            href=<?= MultfilmToWatch($Film['ID']) ?>><?= __Short($Film['FilmName'],10) ?></a>
                                </h2>
                                <div class="video-info d-flex align-items-center">
                                    <span class="video-year"><?= $Film['FilmYear'] ?></span>
                                    <span class="video-seasons"><?= $Film['FilmYoung'] ?></span>
                                    <span class="video-seasons"><?= $Film['FilmJanr'] ?></span>
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
    </section>
<?php } ?>
<?php if (!empty($MyLists['Video'])) { ?>
    <section class="variety-shows">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Videolar</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <?php /** @var array $MyLists */
                foreach ($MyLists['Video'] as $Film) { ?>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">

                        <div class="video-block">
                            <div class="video-thumb position-relative thumb-overlay">
                                <a href="#"><img class="img-fluid img-tab"
                                                 src=<?= "Assets/images/FilmImg/" . $Film['FilmImg'] ?> alt=""></a>
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a href=<?= menu(MenuWatch) . "&video_id=" . $Film['ID'] . "&type=video" ?>><i
                                                        class="fas fa-play"></i></a></li>
                                        <li><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                     style="background-color: white" height="8"
                                                     fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                                </svg>
                                            </a></li>
                                        <li><a href="shows-single.html"><i class="fas fa-info"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Box Content End -->
                            </div>
                            <!-- Video Thumb End -->
                            <div class="video-content">
                                <h2 class="video-title"><a
                                            href=<?= menu(MenuWatch) . "&video_id=" . $Film['ID'] ?>><?= __Short($Film['FilmName'],10) ?></a>
                                </h2>
                                <div class="video-info d-flex align-items-center">
                                    <span class="video-year"><?= $Film['FilmYear'] ?></span>
                                    <span class="video-seasons"><?= $Film['FilmYoung'] ?></span>
                                    <span class="video-seasons"><?= $Film['FilmJanr'] ?></span>
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
    </section>
<?php } ?>
</div>
