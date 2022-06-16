<section class="variety-shows">


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="block-title">Saqlangan Filmlar</h2>
            </div>
            <!-- Col End -->
        </div>
        <!-- Row End -->
        <div class="row">

            <?php foreach ($MyLists as $Film) { ?>
                <!-- Col End -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">

                    <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                            <a href="#"><img class="img-fluid" src=<?= "Assets/images/FilmImg/".$Film['FilmImg'] ?> alt=""></a>
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href=<?= menu(MenuWatch)."&video_id=".$Film['ID'] ?>><i class="fas fa-play"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="shows-single.html"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                            <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                            <h2 class="video-title"><a href=<?= menu(MenuWatch)."&video_id=".$Film['ID'] ?>><?= implode(" ", array_slice(explode(" ", $Film["FilmName"]), 0, 10)) ?></a></h2>
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
    <!-- Container End -->
</section>
<!-- Variety Shows Section End -->
</div>
<!-- Main Content End -->