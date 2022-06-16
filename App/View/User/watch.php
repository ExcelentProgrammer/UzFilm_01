<!-- Start Video Player -->
<?php

$url = $FilmAbout['FilmUrl'];

?>

<style>
    .margin-top {
        margin-top: 10px;
    }

    #download-link a h5 {
        color: whitesmoke;
        margin: 2px 2px;
        border: 0.5 solid skyblue;
        box-shadow: 0px 1px 3px skyblue;
    }

    #download-link a h5:hover {
        box-shadow: 0px 4px 10px green;
        border: 0.5 solid green;
    }

    #DownloadModel {
        width: 20rem !important;
        display: block;
        margin: 0 auto;
    }

    .modal-content {
        box-sizing: border-box;
        background-color: #202020 !important;
    }

    .modal-title {
        color: white !important;
    }

    .download-button {
        background-color: green;
        width: 12rem;
    }
</style>



<iframe style="padding-top: 20px; display:block;margin:0 auto;" src=<?= VideoPlayer . $url ?> id="videoPlayer" frameborder="0" allowfullscreen="allowfullscreen" width="80%" height="500"></iframe>
<?php
if (!empty($Serials)) {

?>
    <div class="row margin-top">

        <select onchange="document.getElementById('videoPlayer').src=this.options[this.selectedIndex].value;" style="
    height: 50px;
    max-width: 200px;
    color: white;
    background-color: #272829;
    border-width: 1px;
    border-color: skyblue;
    border-radius: 10px;
    cursor: pointer;
    padding: 10px;
    display: block;
    margin:0 auto;
    box-shadow: 2px 4px 10px skyblue;
    font-family: inherit;
    font-size: 110%;
    
    ">
            <?php
            foreach ($Serials as $Serial) {
            ?>
                <option value=<?= VideoPlayer . $Serial['FilmUrl'] ?>> <?= $Serial['FilmSection']."-Qism || ".$FilmAbout['FilmLanguage']?></option>
            <?php } ?>
        </select>
    </div>
<?php } ?>

<!-- Video Player End -->
<!-- Start Main Content -->
<div class="main-content">
    <!-- Start Play Details Section -->
    <section class="play-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="play-thumb mb-4">
                                <img style="width: 230px;height:300px;" class="img-fluid" src=<?= "Assets/images/FilmImg/" . $FilmAbout['FilmImg'] ?> alt="">
                                <div class="top-badge">
                                    <div class="video-badge">
                                        <img class="img-fluid" src="Assets/images/top-movies.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Play Thumb End -->
                            <div class="thumb-details text-center">
                                <span><?= $FilmAbout['FilmHeight'] ?></span>
                                <span><?= $FilmAbout['FilmSize'] ?></span>
                                <span>7.1</span>
                                <div class="col-6 col-xl mb-xl-0 mb-3">
                                    <a id="trailer" class="btn d-block hvr-sweep-to-right download-button" tabindex="0" data-toggle="modal" data-target="#download-modal" aria-hidden="true"><i class="icofont-ui-movie mr-2" aria-hidden="true"></i>Yuklab olish</a>
                                </div>

                                <div class="modal fade" id="download-modal" tabindex="0" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document" id="DownloadModel">
                                        <!-- Modal Content -->
                                        <div class="modal-content">
                                            <!-- modal header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title">yuklab olish</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                </button>
                                            </div>
                                            <!-- Modal Body -->

                                            <div id="download-link">
                                                <?php
                                                foreach ($Serials as $Serial) {
                                                ?>
                                                    <a href=<?= $Serial['FilmUrl'] ?>>
                                                        <h5><?= $Serial['FilmSection'] ?>-Qism</h5>
                                                    </a><br>
                                                <?php } ?>

                                            </div>

                                            <!-- Modal Body -->
                                        </div>
                                        <!-- Modal Content -->
                                    </div>
                                    <!-- Modal Dialog -->
                                </div>


                            </div>
                            <!-- Thumb Details End -->
                        </div>
                        <!-- Col End -->

                    </div>
                    <!-- Row End -->
                </div>
                <!-- Col End -->
                <div class="col-md-9">
                    <div class="play-details-content">
                        <div class="title-block d-flex align-items-center justify-content-between">
                            <h3 style="font-size: 20px;" class="play-title"><?= $FilmAbout['FilmName'] ?></h3>
                        </div>
                        <!-- Title Block -->
                        <div class="details-info mb-4">
                            <span><i class="icofont-user mr-2" aria-hidden="true"></i><?= $FilmAbout['FilmYoung'] ?></span>
                            <span><i class="icofont-simple-smile mr-2" aria-hidden="true"></i><?= $FilmAbout['FilmYear'] ?></span>
                            <span><i class="icofont-movie mr-2" aria-hidden="true"></i><?= $FilmAbout['FilmJanr'] ?></span>
                            <span><i class="icofont-world mr-2" aria-hidden="true"></i><?= $FilmAbout["FilmState"] ?></span>

                        </div>
                        <!-- Details Info -->
                        <div class="details-desc">
                            <h3>Film haqida qisqacha</h3>
                            <p><?= $FilmAbout['FilmCaption'] ?></p>
                        </div>
                        <!-- Details Desc -->

                        <!-- Movie Persons -->
                        <div class="details-buttons">
                            <div class="row d-flex align-items-center">
                                <div class="col-6 col-xl mb-xl-0 mb-3">
                                    <a href="watch-movie.html" class="btn d-block hvr-sweep-to-right" tabindex="0"><i class="icofont-ui-play mr-2" aria-hidden="true"></i>Play</a>
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-xl mb-xl-0 mb-3"  >
                                    <?php if ($MyList) { ?>
                                        <a id="MyList" style="background-color: green;" class="btn d-block hvr-sweep-to-right" onclick="PlayList()" tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true" ></i>MY List</a>
                                    <?php } else { ?>
                                        <a id="MyList" class="btn d-block hvr-sweep-to-right" onclick="PlayList()" tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true" ></i>MY List</a>
                                    <?php } ?>
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-xl mb-xl-0 mb-3">
                                    <a id="trailer" class="btn d-block hvr-sweep-to-right" tabindex="0" data-toggle="modal" data-target="#trailer-modal" aria-hidden="true"><i class="icofont-ui-movie mr-2" aria-hidden="true"></i>Trailer</a>
                                    <!-- Modal Trailer -->
                                    <div class="modal fade" id="trailer-modal" tabindex="0" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" id="trailerModal">
                                            <!-- Modal Content -->
                                            <div class="modal-content">
                                                <!-- modal header -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Trailer</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <!-- Modal Body -->
                                                <h1 style="color:red;">Trailer mavjud emas</h1>
                                                <!-- Modal Body -->
                                            </div>
                                            <!-- Modal Content -->
                                        </div>
                                        <!-- Modal Dialog -->
                                    </div>
                                    <!-- Modal Trailer -->
                                </div>
                                <!-- Col End -->
                                <div class="col-6 col-xl mb-xl-0">
                                    <a id="share" class="btn hvr-sweep-to-right d-block" tabindex="0" data-toggle="modal" data-target="#share-modal">
                                        <i class="icofont-share mr-2" aria-hidden="true"></i>Share</a>
                                    <!-- Modal Share -->
                                    <div class="modal fade" id="share-modal" tabindex="0" role="dialog" aria-labelledby="share-modal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" id="sharemodal">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Share</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <!-- modal header End -->
                                                <div class="modal-body">
                                                    <div class="icon-container d-flex">
                                                        <div class="icon-block"><i class="social-icon fab fa-twitter fa-2x"></i>
                                                            <p>Twitter</p>
                                                        </div>
                                                        <div class="icon-block"><i class="social-icon fab fa-facebook fa-2x"></i>
                                                            <p>Facebook</p>
                                                        </div>
                                                        <div class="icon-block"><i class="social-icon fab fa-instagram fa-2x"></i>
                                                            <p>Instagram</p>
                                                        </div>
                                                        <div class="icon-block"><i class="social-icon fab fa-telegram fa-2x"></i>
                                                            <p>Telegram</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal Body End -->
                                            </div>
                                            <!-- Modal Content End -->
                                        </div>
                                        <!-- Modal Dialog End -->
                                    </div>
                                    <!-- Modal Share End -->
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Details Buttons End -->
                    </div>
                    <!-- Details Content End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Play Details Section End -->
    <!-- Start Related Movies Section -->
    <section class="related-movies">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Yangi</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <!-- Start Pupular Slider -->
            <div class="owl-carousel owl-theme" id="pupular-slider">

                <?php
                foreach ($TopFilms as $TopFilm) {

                ?>

                    <div class="item">
                        <div class="video-block">
                            <div class="video-thumb position-relative thumb-overlay">
                                <a href="#"><img style="height:17rem;" alt="" class="img-fluid" src=<?= "Assets/images/FilmImg/" . $TopFilm['FilmImg'] ?>></a>
                                <div class="box-content">
                                    <ul class="icon">
                                        <li>
                                            <a href=<?= menu(MenuWatch) . "&video_id=" . $TopFilm['ID'] ?>><i class="fas fa-play"></i></a>
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
                                <h2 class="video-title"><a href=<?= menu(MenuWatch) . "&video_id=" . $TopFilm['ID'] ?>><?= implode(" ", array_slice(explode(" ", $TopFilm["FilmName"]), 0, 10)) ?></a></h2>
                                <div class="video-info d-flex align-items-center">
                                    <span class="video-year"><?= $TopFilm['FilmYear'] ?></span> <span class="video-age"><?= $TopFilm['FilmYoung'] . "+" ?></span> <span class="video-type"><?= $TopFilm['FilmJanr'] ?></span>
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
        <!-- Container End -->
    </section>
    <!-- Related Movies Section End -->
</div>
<script>
        function PlayList(VideoID = false) {
            var Button = document.querySelector("#MyList").style.background = "green";
            var req = new XMLHttpRequest();
            var Data = new FormData();
            if (!VideoID) {
                var VideoID = decodeURIComponent("<?php echo $_GET['video_id'] ?>");
            }
            var UserID = decodeURIComponent("<?php echo $_SESSION['ID'] ?>");
            Data.append("VideoID", VideoID);
            Data.append("UserID", UserID);
            req.open("POST", "Config/Confirm.php?menu=PlayList");
            req.send(Data);
            req.onload = () => {
                console.log(req.response);
            }
        }
    </script>