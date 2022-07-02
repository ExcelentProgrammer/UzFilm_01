<!-- Start Sub Header Section -->
<div class="sub-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center breadcrumb-nav">
                    <h2 class="Page-title">Xabar Qoldirish</h2>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href=<?= menu(MenuHome) ?>>Bosh sahifa</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li><a href=<?= menu(MenuContcts) ?>>Xabar Yuborish</a></li>
                    </ol>
                </nav>
                <!-- Breadcrumb End -->
            </div>
            <!-- Col End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container end -->
</div>
<!-- Sub Header Section End -->
<style>
    .d-center {
        margin: 0 auto;
    }
</style>
<!-- Start Main Content -->
<div class="main-content">
    <!-- Start Contact Us Section -->
    <section class="contact-us">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Sizga Qanday yordam bera olaman?</h2>
                    <p class="text-max-800">Saytdan foydalanishda muammoga duch kalsanggiz yoki saytni rivojlantish
                        haqida biror taklifinggiz bo'lsa xabar qoldiring tez orada admin sizga javob yozadi.</p>
                </div>
                <div class="row d-center">
                    <div class="col-lg-12">
                        <form class="contact__form" method="post" action="">

                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" id="Msg" style="display: none"
                                         role="alert">
                                        <p id="MsgText">null</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end message -->

                            <!-- form element -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="Title" type="text" class="form-control"
                                           placeholder="Xabar Xaqida Qisqacha" required>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="Message" class="form-control" rows="3"
                                              placeholder="To'liq Xabar matni" required></textarea>
                                </div>
                                <div class="col-12">
                                    <input name="Submit" onclick="MsgSend()" type="button" class="btn btn-success"
                                           value="Yuborish">
                                </div>
                            </div>
                            <!-- end form element -->
                        </form>

                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
    </section>
    <!-- Contact Us Section End -->
</div>

<script>
    function MsgContainer(MsgBody) {
        var Msg = document.querySelector("#Msg");
        var MsgText = document.querySelector("#MsgText");
        Msg.style.display = "block";
        MsgText.innerHTML = MsgBody;
    }

    function MsgSend() {

        var Msg = document.querySelector("#Msg");
        var MsgTitle = document.querySelector("input[name='Title']");
        var MsgBody = document.querySelector("textarea[name='Message']");
        var MsgBodyValue = MsgBody.value;
        var MsgTitleValue = MsgTitle.value;
        if (MsgBodyValue.length == 0) {
            MsgContainer("Xabar Matnini kiritmadinggiz");
        } else if (MsgTitleValue.length == 0) {
            MsgContainer("Xabar Xaqida Qisqacha malumot Bermadinggiz");
        } else {
            var Req = new XMLHttpRequest();
            var Data = new FormData();
            Data.append("Title", MsgTitleValue);
            Data.append("Message", MsgBodyValue);
            Req.open("POST", "Config/Confirm.php?menu=SendMsg");
            Req.send(Data);
            Req.onload = () => {
                res = Req.response;
                if (res == "ok") {
                    MsgContainer("Xabar Adminga yuborildi tez orada -- Aloqaga chiqamiz!");
                    MsgBody.value="";
                    MsgTitle.value="";
                } else {
                    MsgContainer(res);
                }
            }


        }
    }


</script>

<!-- Main Content End -->