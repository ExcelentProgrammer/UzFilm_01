<!-- Start Video Player -->
<?php

$url = $FilmAbout['FilmUrl'];
$S = "";
if (!empty($Serials)) {
    foreach ($Serials as $Serial) {
        $Language = str_replace("'", "\'", $FilmAbout['FilmLanguage']);
        $Url = str_replace("'", "\'", $Serial['FilmUrl']);
        $S .= '{"title":"' . $Serial['FilmSection'] . " - Qism || " . $Language . '","file":"' . $Url . '"}';
        if (end($Serials)['FilmSection'] != $Serial['FilmSection']) {
            $S .= ",";
        }
    }
    $S = "[" . $S . "]";
} else {
    $S = $FilmAbout['FilmUrl'];
}


?>
<?php if (!empty($Serials)) { ?>
    <script>
        var S = decodeURIComponent('<?php echo $S ?>');
    </script>
<?php } else { ?>
    <script>
        var S = decodeURIComponent("<?php echo $S ?>");
    </script>
<?php } ?>
<style>
    .margin-top {
        margin-top: 10px;
    }

    #download-link a h5 {
        color: whitesmoke;
        border: 1px solid white;


    }

    #download-link a h5:hover {
        background-color: #958d8d;
    }

    #DownloadModel {
        width: 20rem !important;
        display: block;
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

    #playerjs1 {
        margin: 0 auto;
        min-width: 70%;
        max-width: 80%;

    }
</style>
<div class="row">

    <div class="tabs-b video-box col-12">
        <script src="Assets/js/player.js" type="text/javascript"></script>
        <div id="playerjs1"></div>
        <script>
            var playerjs1 = new Playerjs({
                id: "playerjs1",
                file: S,
                poster: "https://images.hdqwalls.com/download/scrat-iron-man-dinosaur-i2-3840x2160.jpg",
                vast: 1
            });
        </script>
    </div>

</div>



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
                                                if (!empty($Serials)) {
                                                    foreach ($Serials as $Serial) {
                                                ?>
                                                        <a id="MyList" style="background-color: #5f665f;" class="btn d-block hvr-sweep-to-right" href=<?= $Serial['FilmUrl'] ?> tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true"></i><?= $Serial['FilmSection'] ?>
                                                            - Qism</a>
                                                        <br>
                                                    <?php }
                                                } else { ?>
                                                    <a id="MyList" style="background-color: #5f665f;" class="btn d-block hvr-sweep-to-right" href=<?= $FilmAbout['FilmUrl'] ?> tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true"></i><?= $FilmAbout['FilmHeight'] ?></a>
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
                                <div class="col-6 col-xl mb-xl-0 mb-3">
                                    <?php if ($MyList) { ?>
                                        <a id="MyList" style="background-color: green;" class="btn d-block hvr-sweep-to-right" onclick="PlayList()" tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true"></i>MY List</a>
                                    <?php } else { ?>
                                        <a id="MyList" class="btn d-block hvr-sweep-to-right" onclick="PlayList()" tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true"></i>MY List</a>
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
    <section class="pupular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Yangi Filmlar</h2>
                    <div class="owl-carousel owl-theme" id="pupular-slider">
                        <?php /** @var array $AllFilms */
                        foreach (array_slice($TopFilms, 0, 30) as $AllFilm) { ?>

                            <div class="item">
                                <div class="video-block">
                                    <div class="video-thumb position-relative thumb-overlay">
                                        <a href="#"><img alt="" class="img-fluid img-tab" src=<?= "Assets/images/FilmImg/" . $AllFilm['FilmImg'] ?>></a>
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
                                    </div>
                                    <div class="video-content">
                                        <h2 class="video-title"><a href=<?= FilmToWatch($AllFilm['ID']) ?>><?= __Short($AllFilm['FilmName'], 10) ?></a>
                                        </h2>
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
    <!-- Related Movies Section End -->
</div>
<script>
    function PlayList() {
        var Button = document.querySelector("#MyList").style.background = "green";
        var req = new XMLHttpRequest();
        var Data = new FormData();
        var Type = decodeURIComponent("<?php echo $_GET['type'] ?>");
        if (Type == "multfilm") {
            Type = "Multfilm";
        } else if (Type == "video") {
            Type = "Video";
        } else {
            console.log(Type);
            Type = "Film";
        }
        var VideoID = decodeURIComponent("<?php echo $_GET['video_id'] ?>");
        var UserID = decodeURIComponent("<?php echo $_SESSION['ID'] ?>");
        Data.append("VideoID", VideoID);
        Data.append("UserID", UserID);
        Data.append("Type", Type);
        req.open("POST", "Config/Confirm.php?menu=PlayList");
        req.send(Data);
        req.onload = () => {
            console.log(req.response);
        }
    }
</script>