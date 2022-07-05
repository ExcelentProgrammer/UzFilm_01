<!-- Start Video Player -->
<?php

/** @var array $FilmAbout */
$url = $FilmAbout['FilmUrl'];
$S = "";
if (!empty($Serials)) {
    foreach ($Serials as $Serial) {
        $q = explode(".", $Serial['FilmUrl']);
        $q = end($q);
        if ($q == "txt") {
            $file = file_get_contents($Serial['FilmUrl']);
            $file = str_replace("\n", "", $file);
            $file = str_replace("\t", "", $file);
            $file = str_replace("\r", "", $file);
            $file = str_replace(" ", "%20", $file);
            $s = json_decode($file, true);
            $i = 0;
            foreach ($s as $Film) {
                $Serials[$i]["FilmSection"] = $Film['title'];
                $Serials[$i]["FilmUrl"] = $Film['file'];
                $i++;
            }
        }
    }
    foreach ($Serials as $Serial) {
        $Language = str_replace("'", "\'", $FilmAbout['FilmLanguage']);
        $Url = str_replace("'", "\'", $Serial['FilmUrl']);
        $S .= '{"title":"' . $Serial['FilmSection'] . " - Qism " . $Language . '","file":"' . $Url . '"}';
        if (end($Serials)['FilmSection'] != $Serial['FilmSection']) {
            $S .= ",";
        }
    }
    $S = "[" . $S . "]";
} else {
    $S = $FilmAbout['FilmUrl'];
}


?>
<?php if (isset($file)) { ?>

    <script>
        var S = decodeURIComponent('<?php echo $file ?>');
        console.log(S);
    </script>

<?php } elseif (!empty($Serials)) { ?>
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
<?php if(User::Role() == RoleAdmin){ ?>
<div class="row mt-3">
    <div class="col-sm-4 col-xl-3 ml-auto mr-auto">
        <a class="btn d-block hvr-sweep-to-right bg-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen mr-2" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
            </svg>O'zgartirish</a>
    </div>
    <div class="col-sm-4 col-xl-3 ml-auto mr-auto">
        <a class="btn d-block hvr-sweep-to-right bg-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg mr-2" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>O'chirish</a>
    </div>
    <div class="col-sm-4 col-xl-3 ml-auto mr-auto">
        <a class="btn d-block hvr-sweep-to-right bg-success"><i class="icofont-plus mr-2"></i>Serial Qo'shish</a>
    </div>
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
                                <img style="width: 230px;height:300px;" class="img-fluid" src=<?= $FilmAbout['FilmImg'] ?> alt="">
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
                                                <?php if (!empty($Serials)) {
                                                    foreach ($Serials as $Serial) {
                                                ?>
                                                        <a id="MyList" style="background-color: #5f665f;" class="btn d-block hvr-sweep-to-right" href=<?= $Serial['FilmUrl'] ?> tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true"></i><?= $Serial['FilmSection'] ?>
                                                            - Qism</a>
                                                        <br>
                                                    <?php }
                                                } else { ?>
                                                    <a id="MyList" style="background-color: #5f665f;" class="btn d-block hvr-sweep-to-right" href=<?= $FilmAbout['FilmUrl'] ?> tabindex="0"><i class="icofont-plus mr-2" aria-hidden="true"></i><?= $FilmAbout['FilmHeight'] ?>
                                                    </a>
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
                                        <a href="#"><img alt="" class="img-fluid img-tab" src=<?= $AllFilm['FilmImg'] ?>></a>
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
        var UserID = decodeURIComponent("<?php echo User::ID() ?>");
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