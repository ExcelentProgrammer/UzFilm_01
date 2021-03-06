<!-- Start Main Content -->
<div class="main-content">
    <!-- Start SignUp Section -->
    <section class="signup">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Login" role="tab" aria-controls="home" aria-selected="true">Kirish</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Signup" role="tab" aria-controls="profile" aria-selected="false">Ro'yhatdan o'tish</a>
                        </li>

                    </ul>
                </div>
                <!-- Col End -->
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="Signup" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Form -->
                            <form id="signup-form" method="post">
                                <div class="error-container" id="signup-error" style=" text-align: center;">

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
                        </div>
                        <!-- Col End -->
                    </div>
                </div>

                <div class="tab-pane fade active show" id="Login" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Start Form -->
                            <form id="login-form" action="" method="post" class="mb-4">
                                <div class="error-container" id="login-error" style=" text-align: center;">

                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-4">Username</label>
                                    <input type="text" class="form-control" name="UserName" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-4">Password</label>
                                    <input type="password" class="form-control" name="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline mb-3"><input type="checkbox" name="SavePassword" required="required"> Save Password</label>
                                    <a type="button" class="btn btn-block hvr-sweep-to-right btn-primary btn-lg" onclick="login()">Kirish</a>
                                </div>
                                <a href="reset-password.html">Lost your Password?</a>
                            </form>
                            <!-- Form End -->
                            <div class="row d-flex align-items-center mb-4">

                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Col End -->
                        <div class="col-lg-6">
                            <img class="img-fluid" src="https://www.afya-pharmacy.bg/files/160977037720412.jpg" alt="">
                        </div>
                        <!-- Col End -->
                    </div>
                </div>
            </div>
            <!-- Row End -->

            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- SignUp Section End -->
</div>
<!-- Main Content End -->
<script>
    function SignUpError(msg) {
        var ErrorContainer = document.querySelector("#signup-error");
        ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">' + msg + '</h3>';

    }
    // ,"","","","",""
    function signup() {
        var data = new FormData(document.querySelector("#signup-form"));
        var FirstName = data.get("FirstName");
        var LastName = data.get("LastName");
        var Password = data.get("Password");
        var ConfirmPassword = data.get("ConfirmPassword");
        var Email = data.get("Email");
        var UserName = data.get("UserName");

        if (Password.length < 8) {
            SignUpError("Parol Eng kamida 8 ta belgidan iborat bo'lishi Kerak");
        } else {
            if (Password != ConfirmPassword) {
                SignUpError("Parol birxil emas");
            } else {
                if (UserName == "") {
                    SignUpError("UserName kiritmadinggiz")
                } else {
                    if (FirstName == "") {
                        SignUpError("Ismingizni kiritmadinggiz");
                    } else {
                        if (LastName == "") {
                            SignUpError("Familyangizni kiritmadinggiz");
                        } else {
                            if (Email == "") {
                                SignUpError("Elektron Pochta manzilinggizni kiritmadinggiz");
                            } else {
                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "Config/Confirm.php?menu=signup&FirstName=" + FirstName + "&LastName=" + LastName + "&Password=" + Password + "&Email=" + Email + "&UserName=" + UserName);
                                xhr.send();
                                xhr.onload = () => {
                                    var res = xhr.response;
                                    if (res == "signup_ok") {
                                        location.href = "?menu=home";
                                    } else {
                                        SignUpError(res);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    function login() {
        var ErrorContainer = document.querySelector("#login-error");
        var Form = document.querySelector("#login-form");

        var data = new FormData(Form);
        var UserName = data.get("UserName");
        var Password = data.get("Password");
        var SavePassword = data.get("SavePassword");
        if (UserName.length == 0) {
            ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">Username kiritmadinggiz</h3>';
        } else {
            if (Password.length < 8) {
                ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">Parol 8 ta belgidan kam bo\'lmasligi kerak</h3>';
            } else {
                var x = new XMLHttpRequest();
                x.open("POST", "Config/Confirm.php?menu=login");
                x.onload = () => {
                    var res = x.response;
                    if (res == "login_ok") {
                        location.href = "?menu=home";
                    } else {
                        ErrorContainer.innerHTML = '<h3 style="padding:10px;color: white;background-color: red;border-radius: 10px;">' + res + '</h3>';

                    }
                }
                x.send(data);
            }
        }
    }
</script>