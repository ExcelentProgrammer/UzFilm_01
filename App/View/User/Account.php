<link rel="stylesheet" href="Assets/css/Seans.css">
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
    .close-edit{
        background-color: #202020;
    }

    /*Profile Pic End*/
</style>


<div class="col-6 col-xl mb-xl-0 mb-3 ">
    <div class="modal fade" id="EditUserData" tabindex="0" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document" id="trailerModal">
            <div class="modal-content border-radius-10">
                <div class="modal-header bg-black border-radius-10">
                    <h4 style="color:white;">Hisob malumotlari O'zgartirildi</h4>
                    <button type="button" class="close-edit" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- data-toggle="modal" data-target="#PlayListOk" -->

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
                                            <img src=<?= "Assets/images/avatar/" . user::UserData()->Avatar ?> class="picture-src" id="wizardPicturePreview" title="">
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
                    <h2><?=
                    
                        User::UserData()->FirstName ?></h2>
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
                                <a class="nav-link" data-toggle="pill" href="#pills-2" role="tab" aria-selected="true">Parolni o'zgartirish</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="pill" href="#pills-3" role="tab" aria-selected="true">Faol Seanslar</a>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control form-control-name" name="UserName" id="username" type="text" placeholder="UserName" value=<?= User::UserData()->UserName ?>>
                                            </div>
                                        </div>

                                        <!-- Col End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ism</label>
                                                <input class="form-control form-control-name" name="FirstName" id="first-name" type="text" placeholder="Ism" value=<?= User::UserData()->FirstName ?>>
                                            </div>
                                        </div>
                                        <!-- Col End -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Familya</label>
                                                <input class="form-control form-control-name" name="LastName" id="last-name" type="text" placeholder="Familya" value=<?= User::UserData()->LastName ?>>
                                            </div>
                                        </div>
                                        <!-- Col End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="form-group d-flex align-items-center mt-3">
                                        <a onclick="EditAccountData()" class="hvr-sweep-to-right btn btn-primary">Saqlash</a>
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

                            <div id="pills-3" class="tab-pane animated fadeInRight">
                                <!-- Start Form -->
                                <h5 class="mb-3 mt-3 pb-3 section-border">Faol Seanslar</h5>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>
                                                Qurilma
                                            </th>
                                            <th>
                                                Vaqt
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($Seanslar as $Seans) { ?>
                                            <tr>
                                                <td data-title='Qurilma'>
                                                    <?= $Seans['UserAgent'] ?>
                                                </td>
                                                <td data-title='Vaqt'>
                                                    <?= $Seans['Date'] ?>
                                                </td>
                                                <td class='select'>
                                                    <a class='button pointer' onclick=<?= "this.innerHTML='O\'chirildi';this.classList.add('remove-btn-click');RemoveSeans(" . $Seans['ID'] . ")" ?>>
                                                        O'chirish
                                                    </a>
                                                </td>
                                            <?php } ?>
                                    </tbody>
                                </table>
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
    function EditAccountData() {
        var req = new XMLHttpRequest();
        var Data = new FormData();

        var UserName = document.querySelector("input[name='UserName']").value;
        var LastName = document.querySelector("input[name='LastName']").value;
        var FirstName = document.querySelector("input[name='FirstName']").value;
        var avatar = document.querySelector("input[name='avatar']").files[0];
        var ID = decodeURIComponent("<?php echo User::ID() ?>");
        Data.append("ID", ID);
        Data.append("UserName", UserName);
        Data.append("LastName", LastName);
        Data.append("FirstName", FirstName);
        Data.append("avatar", avatar);
        req.open("POST", 'Config/Confirm.php?menu=EditAccountData');
        req.send(Data);
        req.onload = () => {
            res = req.response;
            if (res == "ok") {
                $("#EditUserData").modal("show");
            }else{
                console.log(res);
            }
        };
    }

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

    function RemoveSeans(ID) {
        var req = new XMLHttpRequest();
        req.open("GET", "Config/Confirm.php?menu=RemoveSeans&ID=" + ID + "");
        req.send();
    }
</script>