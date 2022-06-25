<!-- Start Sub Header Section -->
<script>
    var ShowsStop = decodeURIComponent("<?php echo $Shows ?>");
    var FilmsStop = decodeURIComponent("<?php echo $NumberOfFilms ?>");
    var UsersStop = decodeURIComponent("<?php echo $NumberOfUsers ?>");
    var SerialsStop = decodeURIComponent("<?php echo $NumberOfSerial ?>");
</script>
<div class="sub-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center breadcrumb-nav">
                    <h2 class="Page-title">Biz Haqimizda</h2>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href=<?= menu(MenuHome) ?>>Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li><a href=<?= menu(MenuAbout) ?>>Biz haqimizda</a></li>
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
<!-- Start Main Content -->
<div class="main-content">
    <!-- Start Our Statistics Section -->
    <section class="statistics">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Statistica</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="icon-box text-center">
                        <div class="icon"><i class="fas fa-video"></i></div>
                        <div class="number count1" data-from="10" data-to="9300" data-time="1000">0</div>
                        <p>Filmlar</p>
                    </div>
                    <!-- Icon Box End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="icon-box text-center">
                        <div class="icon"><i class="fas fa-eye"></i></div>
                        <div class="number count2" data-from="10" data-to="7400" data-time="1000">0</div>
                        <p>Ko'rishlar</p>
                    </div>
                    <!-- Icon Box End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="icon-box text-center">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <div class="number count3" data-from="10" data-to="1500" data-time="1000">0</div>
                        <p>Foydalanuvchilar</p>
                    </div>
                    <!-- Icon Box End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="icon-box text-center">
                        <div class="icon"><i class="fas fa-video"></i></div>
                        <div class="number count4" data-from="10" data-to="860" data-time="1000">0</div>
                        <p>Seriallar</p>
                    </div>
                    <!-- Icon Box End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </section>
    <!-- Our Statistics Section End -->
    <div class="gap-50"></div>
    <!-- Start Subscribe Section -->
    <section class="subscribe section-parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid mb-4" src="images/about/05.png" alt="">
                </div>
                <!-- Col End -->
                <div class="col-md-6">
                    <h2 class="mb-4">Men Haqimda</h2>
                    <p class="mb-4">Azamov Samandar <br>
                    <address> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> Beshariq - O'zbekistonning Farg'ona viloyatidagi shahar</address><br> Salom, mening ismim Samandar. Men veb sahifalar tuzish bilan shug'ullanaman, dasturlash sohasida tajribaga egaman.Dasturlarni tuzish haqida men shaxsiy blogimda yozib boraman. Sizga qanday yordam bera olishimni bilmoqchi bo'lsangiz portfolio va onlayn resume bilan tanishib chiqing</p>
                    <a class="btn hvr-sweep-to-right">Subscribe Now</a>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </section>
    <!-- Subscribe Section End -->
    <div class="gap-50"></div>
    <!-- Start Our Team Section -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="block-title">Mening Loyihalarim</h2>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row end -->
            <div class="row">
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="card team-box">
                        <div class="team-box-img">
                            <img src="images/about/01.jpg" class="img-fluid img-zoom" alt="">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title team-box-name">Tonny Smith</h2>
                            <span>ceo</span>
                        </div>
                    </div>
                    <!-- Team Box End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="card team-box">
                        <div class="team-box-img">
                            <img src="images/about/02.jpg" class="img-fluid img-zoom" alt="">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title team-box-name">Barry Tech</h2>
                            <span>Designer</span>
                        </div>
                    </div>
                    <!-- Team Box End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="card team-box">
                        <div class="team-box-img">
                            <img src="images/about/03.jpg" class="img-fluid img-zoom" alt="">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title team-box-name">kep John</h2>
                            <span>Developer</span>
                        </div>
                    </div>
                    <!-- Team Box End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-xl mb-5 mb-xl-0">
                    <div class="card team-box">
                        <div class="team-box-img">
                            <img src="images/about/04.jpg" class="img-fluid img-zoom" alt="">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title team-box-name">Monty Rock</h2>
                            <span>Designer</span>
                        </div>
                    </div>
                    <!-- Team Box End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </section>
    <!-- Our Team Section End -->
</div>
<!-- Main Content End -->