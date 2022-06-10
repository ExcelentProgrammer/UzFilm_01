<!-- Start Main Content -->
<div class="main-content">
    <!-- Start SignUp Section -->
    <section class="signup">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Ro'yhtdan O'tish</h2>
                    <p class="text-max-800">Siz ro'yhatdan o'tganinggizdan so'ng ko'plab imkoniyatlarga ega bo'lasiz</p>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Form -->
                    <form id="signup-form" method="post">
                        <div class="error-container" style=" text-align: center;">

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control form-control-name" name="UserName" id="username" placeholder="" type="text" required="">
                                </div>
                            </div>
                            <!-- Col End -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Elakton pochta</label>
                                    <input type="email" class="form-control" placeholder="Email" name="Email" required="required">
                                </div>
                            </div>
                            <!-- Col End -->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ism</label>
                                    <input class="form-control form-control-name" name="FirstName" id="first-name" placeholder="" type="text" required="">
                                </div>
                            </div>
                            <!-- Col End -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Familya</label>
                                    <input class="form-control form-control-name" name="LastName" id="last-name" placeholder="" type="text" required="">
                                </div>
                            </div>
                            <!-- Col End -->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>parol</label>
                                    <input type="password" class="form-control" name="Password" id="password" required="required">
                                </div>
                            </div>
                            <!-- Col End -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>parolni Takrorlang</label>
                                    <input type="password" class="form-control" name="ConfirmPassword" id="confirm-password" required="required">
                                </div>
                            </div>
                            <!-- Col End -->
                        </div>
                       
                        <div class="form-group">
                            <a class="btn hvr-sweep-to-right" type="button" onclick="signup()">Ro'yhatdan o'tish</a>
                        </div>
                    </form>
                    <!-- Form End -->
                    <div class="text-center">Avval ro'yhatdan o'tganmisiz ? <a href=<?= menu(MenuLogin) ?>>Login</a></div>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- SignUp Section End -->
</div>
<!-- Main Content End -->
<script>
    // ,"","","","",""
    function signup() {
        var ErrorContainer = document.querySelector(".error-container");
        var data = new FormData(document.querySelector("#signup-form"));
        var FirstName = data.get("FirstName");
        var LastName = data.get("LastName");
        var Password = data.get("Password");
        var ConfirmPassword = data.get("ConfirmPassword");
        var Email = data.get("Email");
        var UserName = data.get("UserName");
        if (Password != ConfirmPassword) {
            ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">Parol birxil emas</h3>';
        } else {
            if (Password.length < 8) {
                ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">Parol 8 ta Belgidan kam bo\'lmasligi kerak</h3>';
            } else {
                ErrorContainer.innerHTML = "";
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "Config/Confirm.php?menu=signup&FirstName=" + FirstName + "&LastName=" + LastName + "&Password=" + Password + "&Email=" + Email+"&UserName="+UserName);
                xhr.send();
                xhr.onload = () => {
                    var res = xhr.response;
                    if (res.includes("signup_ok_")) {
                        id = res.split("_");
                        id = id[id.length-1];
                        location.href = "Config/Confirm.php?menu=session&id="+id;
                    } else {
                        ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">' + res + '</h3>';
                    }
                }
            }
        }
    }
</script>