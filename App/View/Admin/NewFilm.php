<!-- Form Start -->
<div class="container-fluid pt-4 px-4">


    <!-- form -->
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div id="ErrorContainer" style="display: none;width:100%;"
                 class="alert alert-primary alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>
                <p id="ErrorText" style="display: inline;"></p>
            </div>


            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic Navs & Tabs</h6>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Yangi Film
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Serial Davomi
                        </button>
                    </div>
                </nav>
                <div class="tab-content pt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                        <div class="row">
                            <!-- select  -->
                            <div class="col-6">
                                <select id="FilmHeight" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Film Sifati</option>
                                    <option value="240p">240p</option>
                                    <option value="320p">320p</option>
                                    <option value="480p">480p</option>
                                    <option value="720p">720p</option>
                                    <option value="1080p">1080p</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="FilmLanguage" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Film Tili</option>
                                    <option value="O'zbek Tilida">O'zbek Tilida</option>
                                    <option value="Ingliz Tilida">Ingliz Tilida</option>
                                    <option value="Rus Tilida">Rus Tilida</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <!-- select  -->

                            <div class="col-sm-12 col-xl-12">
                                <select id="FilmType" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Video Turi</option>
                                    <option value="Film">Film</option>
                                    <option value="Video">Video || Korsert</option>
                                    <option value="MultFilm">MultFilm</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <!-- select  -->
                            <div class="col-6">
                                <select id="FilmRating" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Film Rating darajasini tanlang</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="FilmJanr" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Film Janrini Tanlang</option>
                                    <option value="Fantastik">Fantastik</option>
                                    <option value="Kamedia">Kamedia</option>
                                    <option value="Qo'rqinchli">Qo'rqinchli</option>
                                    <option value="Nomalum">Nomalum</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <select id="FilmState" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Film Olingan davlatni tanlang</option>
                                    <option value="Amerika">Amerika</option>
                                    <option value="Yevropa">Yevropa</option>
                                    <option value="Rossiya">Rossiya</option>
                                    <option value="O'zbekiston">O'zbekiston</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="FilmYoung" class="form-select form-select-sm mb-3"
                                        aria-label=".form-select-sm example">
                                    <option selected>Film Yosh chagarasini tanlang</option>
                                    <option value="0+">0+</option>
                                    <option value="7+">7+</option>
                                    <option value="12+">12+</option>
                                    <option value="16+">16+</option>
                                    <option value="18+">18+</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-xl-12">
                                <div class="form-floating mb-3 h-25">
                                    <input type="text" class="form-control" name="FilmImg" id="floatingInput"
                                           placeholder="">
                                    <label for="floatingInput">Film Rasmi || Url || https.example.com/image.jpg</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="FilmDate" id="floatingInput"
                                           placeholder="">
                                    <label for="floatingInput">Film Davomiyligi</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="FilmYear" id="floatingInput"
                                           placeholder="Flesh | O'zbek Tilida">
                                    <label for="floatingInput">Film Chiqarilgan</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="FilmName" id="floatingInput"
                                   placeholder="Flesh | O'zbek Tilida">
                            <label for="floatingInput">Film Nomi</label>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="FilmUrl" id="floatingInput"
                                   placeholder="Flesh | O'zbek Tilida">
                            <label for="floatingInput">Film || Url || https://example.com/video.mp4</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="FilmCaption" id="floatingTextarea"
                                      style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Film Haqida Malumot</label>
                        </div>


                        <div class="row">
                            <div class="col-4">
                                <button type="button" class="btn btn-outline-primary m-2">Bekor Qilish</button>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button style="float: right;" onclick="NewFilm()" type="button"
                                        class="btn btn-outline-success m-2">Saqlash
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- new serial -->

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


                        <!-- inputs -->
                        <div class="row">

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="SerialID" id="floatingInput"
                                           placeholder="Flesh | O'zbek Tilida">
                                    <label for="floatingInput">Film ID (12 || 23 || 44)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="SerialUrl" id="floatingInput"
                                           placeholder="Flesh | O'zbek Tilida">
                                    <label for="floatingInput">Serial Url || http://example.com/video.mp4 || https://example.com/flash.txt</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="SerialSection" id="floatingInput"
                                           placeholder="Flesh | O'zbek Tilida">
                                    <label for="floatingInput">Serial Qism (1 || 2 || 10)</label>
                                </div>
                            </div>
                        </div>

                        <!-- button -->
                        <div class="row">
                            <div class="col-4">
                                <button type="button" class="btn btn-outline-primary m-2">Bekor Qilish</button>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button style="float: right;" onclick="NewSerial()" type="button"
                                        class="btn btn-outline-success m-2">Saqlash
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function NewFilmClear(){
        document.querySelector("input[name='FilmUrl']").value = "";
        document.querySelector("input[name='FilmImg']").value = "";
        document.querySelector("#FilmHeight").value = "Film Sifati";
        document.querySelector("input[name='FilmName']").value = "";
        document.querySelector("textarea[name='FilmCaption']").value = '';
        document.querySelector("#FilmYoung").value = "Film Yosh chagarasini tanlang";
        document.querySelector("#FilmState").value = "Film Olingan davlatni tanlang";
        document.querySelector("#FilmJanr").value = "Film Janrini Tanlang";
        document.querySelector("#FilmRating").value = "Film Rating darajasini tanlang";
        document.querySelector("input[name='FilmDate']").value = "";
        document.querySelector("#FilmLanguage").value = "Film Tili";
        document.querySelector("#FilmType").value = "Video Turi";
        document.querySelector("input[name='FilmYear']").value = "";
    }
    function NewSerial() {
        var ErrorContainer = document.querySelector("#ErrorContainer");
        var ErrorText = document.querySelector("#ErrorText");
        var SerialUrl = document.querySelector("input[name='SerialUrl']").value;
        var SerialID = document.querySelector("input[name='SerialID']").value;
        var SerialSection = document.querySelector("input[name='SerialSection']").value;
        var Data = new FormData();
        Data.append("SerialUrl", SerialUrl);
        Data.append("SerialID", SerialID);
        Data.append("SerialSection", SerialSection);
        var req = new XMLHttpRequest();
        req.open("POST", "Config/Confirm.php?menu=NewSerial");
        req.send(Data);
        req.onload = () => {
            if (req.response != "ok") {
                ErrorContainer.style.display = "flex";
                ErrorText.innerHTML = req.response;
                ErrorContainer.style.background = "pink";
                ErrorContainer.style.color = "red";
            } else {
                var SerialUrl = document.querySelector("input[name='SerialUrl']").value = "";

                ErrorContainer.style.display = "flex";
                ErrorContainer.style.background = "green";
                ErrorContainer.style.color = "white";
                ErrorText.innerHTML = "Serial Muvofaqiyatli yuklandi";

            }
        }


    }

    function NewFilm() {
        var FilmUrl = document.querySelector("input[name='FilmUrl']").value;
        var FilmImg = document.querySelector("input[name='FilmImg']").value;
        var FilmHeight = document.querySelector("#FilmHeight").value;
        var FilmYear = document.querySelector("input[name='FilmYear']").value;
        var FilmName = document.querySelector("input[name='FilmName']").value;
        var FilmCaption = document.querySelector("textarea[name='FilmCaption']").value;
        var FilmYoung = document.querySelector("#FilmYoung").value;
        var FilmState = document.querySelector("#FilmState").value;
        var FilmJanr = document.querySelector("#FilmJanr").value;
        var FilmRating = document.querySelector("#FilmRating").value;
        var FilmDate = document.querySelector("input[name='FilmDate']").value;
        var FilmLanguage = document.querySelector("#FilmLanguage").value;
        var FilmType = document.querySelector("#FilmType").value;


        let req = new XMLHttpRequest();
        let formData = new FormData();
        var ErrorContainer = document.querySelector("#ErrorContainer");
        var ErrorText = document.querySelector("#ErrorText");

        formData.append("FilmUrl", FilmUrl);
        formData.append("FilmImg", FilmImg);
        formData.append("FilmHeight", FilmHeight);
        formData.append("FilmYear", FilmYear);
        formData.append("FilmName", FilmName);
        formData.append("FilmCaption", FilmCaption);
        formData.append("FilmYoung", FilmYoung);
        formData.append("FilmState", FilmState);
        formData.append("FilmJanr", FilmJanr);
        formData.append("FilmRating", FilmRating);
        formData.append("FilmDate", FilmDate);
        formData.append("FilmLanguage", FilmLanguage);
        formData.append("FilmType", FilmType);
        req.open("POST", 'Config/Confirm.php?menu=NewFilm');
        req.send(formData);
        req.onload = () => {
            if (req.response != "ok") {
                ErrorContainer.style.display = "inline-block";
                ErrorText.innerHTML = req.response;
                ErrorContainer.style.background = "pink";
                ErrorContainer.style.color = "red";
            } else {
                NewFilmClear();


                ErrorContainer.style.display = "inline-block";
                ErrorContainer.style.background = "green";
                ErrorContainer.style.color = "white";
                ErrorText.innerHTML = "Film Muvofaqiyatli Yulandi";
            }
        }


    }
</script>