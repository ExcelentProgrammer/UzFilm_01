<style>
    /*Profile Pic Start*/
    .picture-container {
        position: relative;
        cursor: pointer;
        text-align: center;
    }

    .picture {
        width: 106px;
        height: 106px;
        background-color: #999999;
        border: 4px solid #CCCCCC;
        color: #FFFFFF;
        border-radius: 50%;
        margin: 0px auto;
        overflow: hidden;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
    }

    .picture:hover {
        border-color: #2ca8ff;
    }

    .content.ct-wizard-green .picture:hover {
        border-color: #05ae0e;
    }

    .content.ct-wizard-blue .picture:hover {
        border-color: #3472f7;
    }

    .content.ct-wizard-orange .picture:hover {
        border-color: #ff9500;
    }

    .content.ct-wizard-red .picture:hover {
        border-color: #ff3b30;
    }

    .picture input[type="file"] {
        cursor: pointer;
        display: block;
        height: 100%;
        left: 0;
        opacity: 0 !important;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .picture-src {
        width: 100%;

    }

    /*Profile Pic End*/
</style>




<!-- Start Main Content -->
<div class="main-content">
    <!-- Start Account Settings Section -->
    <section class="account-settings">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="settings-avatar">
                            <div class="row">
                                <div class="container">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src=<?= "Assets/images/avatar/user.jpg" ?> class="picture-src" id="wizardPicturePreview" title="">
                                            <input type="file" name="avatar" id="wizard-picture" class="">
                                        </div>
                                        <h6 class="mt-2">Avatar</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Col End -->
                <div class="col-md -10">
                    <h2><?= $UserData['FirstName'] ?></h2>
                </div>
                <!-- Col End -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-settings">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-toggle="pill" href="#pills-profile" role="tab" aria-selected="true">Hisob Sozlamalari</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="pill" href="#pills-1" role="tab" aria-selected="true">Foydalanuvchi Malumotlari</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="pill" href="#pills-2" role="tab" aria-selected="true">Parolni o'zgartirish</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">










                            <div id="pills-profile" class="tab-pane animated fadeInRight show active">
                                <!-- Start Form -->
                                <form id="profile-settings-form" action="#" method="post">
                                    <div class="error-container"></div>




                                    <!-- Row End -->
                                    <h5 class="mb-3 mt-3 pb-3 section-border">Hisob malumotlari</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control form-control-name" name="username" id="username" type="text" placeholder="UserName" value=<?= $UserData['UserName'] ?>>
                                            </div>
                                        </div>
                                        <!-- Col End -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Elaktron pochta" value=<?= $UserData['Email'] ?>>
                                            </div>
                                        </div>
                                        <!-- Col End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ism</label>
                                                <input class="form-control form-control-name" name="first-name" id="first-name" type="text" placeholder="Ism" value=<?= $UserData['FirstName'] ?>>
                                            </div>
                                        </div>
                                        <!-- Col End -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Familya</label>
                                                <input class="form-control form-control-name" name="last-name" id="last-name" type="text" placeholder="Familya" value=<?= $UserData['LastName'] ?>>
                                            </div>
                                        </div>
                                        <!-- Col End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="form-group d-flex align-items-center mt-3">
                                        <a href="#" class="hvr-sweep-to-right btn btn-primary">Saqlash</a>
                                        <a href="#" class="hvr-sweep-to-right btn btn-primary ml-3">Bekor Qilish</a>
                                    </div>
                                </form>
                                <!-- Form End -->
                            </div>



                            <div id="pills-1" class="tab-pane animated fadeInRight">
                                <!-- Start Form -->
                                <form id="profile-settings-form" action="#" method="post">
                                    <div class="error-container"></div>




                                    <h5 class="mb-3 mt-3 pb-3 section-border">foydalanuvchi Malumotlari</h5>
                                    <div id="sandbox-container" class="form-group">
                                        <label>Tug'ulgan Kun</label>
                                        <input type="text" class="form-control" name="date-of-birth" id="date-of-birth" placeholder="Tug'ulgan yilingizni tanlang" value="01/01/2022">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jins</label>
                                                <select class="form-control" name="select-plan" aria-label="Default select example" id="select-gender">
                                                    <option value="1" selected="selected">O'g'il bola</option>
                                                    <option value="2">Qiz bola</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Till</label>
                                                <select class="form-control" name="select-plan" aria-label="Default select example" id="select-language">
                                                    <option value="1">English</option>
                                                    <option value="2" selected="selected">O'zbek</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Row End -->
                                    <div class="form-group d-flex align-items-center mt-3">
                                        <a href="#" class="hvr-sweep-to-right btn btn-primary">Saqlash</a>
                                        <a href="#" class="hvr-sweep-to-right btn btn-primary ml-3">Bekor Qilish</a>
                                    </div>
                                </form>
                                <!-- Form End -->
                            </div>







                            <div id="pills-2" class="tab-pane animated fadeInRight">
                                <!-- Start Form -->
                                <form id="profile-settings-form" action="#" method="post">
                                    <div class="error-container"></div>


                                    <h5 class="mb-3 mt-3 pb-3 section-border">Parolni o'zgartirish</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Joriy Parol</label>
                                                <input type="password" class="form-control" name="current-password" id="current-password" placeholder="Joriy parol" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Yangi Parol</label>
                                                <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Yangi Parol" value="">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Row End -->
                                    <div class="form-group d-flex align-items-center mt-3">
                                        <a href="#" class="hvr-sweep-to-right btn btn-primary">Saqlash</a>
                                        <a href="#" class="hvr-sweep-to-right btn btn-primary ml-3">Bekor Qilish</a>
                                    </div>
                                </form>
                                <!-- Form End -->
                            </div>










                        </div>
                    </div>
                    <!-- Content Settings End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Account Settings Section End -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        // Prepare the preview for profile picture
        $("#wizard-picture").change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>