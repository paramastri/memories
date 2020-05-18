<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Memories Studio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/logogo.png">

        <!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
<!--     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logogo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="/"><img style="width: 30%;" src="assets/img/logo/logogo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                        <li class="active"><a style="color: #6A5E5E" href="/"> Home</a></li>
                                        <li><a style="color: #6A5E5E" href="katalog">Katalog</a></li>
                                        <li><a style="color: #6A5E5E" href="tambahreservasi">Buat Reservasi</a></li>
                                        <li><a style="color: #6A5E5E" href="listreservasisaya">Reservasi Saya</a></li>
                                        {% if (session.get('user')['username']) %}
                                        <li><a href="#">Hai, {{ session.get('user')['username'] }}!</a>
                                            <ul class="submenu">
                                                {% endif %}
                                                <li><a href="akunsaya">Akun Saya</a></li>
                                                <li><a href="logoutuser">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

   <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">selamat datang di</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Memories Studio</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Abadikan momenmu, percayakan pada kami!</p>
                                    <!-- Slider btn -->
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a style="color: #FFF1F1" data-animation="fadeInLeft" data-delay="1.0s" href="tambahreservasi" class="btn radius-btn">Sewa Sekarang</a>
                                        <!-- Video Btn -->
                                        <!-- <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a> -->
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img style="height: 90%; width: 100%;" src="assets/img/hero/illus.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
             
            </div>
        </div>
        <!-- Slider Area End -->
        <!-- Best Features Start -->
        <section class="best-features-area section-padd4">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8 col-lg-10">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-10 col-md-10">
                                <div class="section-tittle">
                                    <h2>Kenapa Harus Kami?</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class=""></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Harga terjangkau</h3>
                                        <p>Tidak perlu repot-repot patungan dalam jumlah besar! Memories Studio menyediakan harga yang paling bisa dijangkau semua kalangan.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class=""></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Studio terbaik</h3>
                                        <p>Memories Studio terus mengembangkanagar selalu up-to-date dan menghadirkan nuansa yang fresh di setiap moment anda.</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class=""></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Fasilitas lengkap</h3>
                                        <p>Takut bosan saat menunggu giliran pemotretan? Tidak masalah! Kami menyediakan layanan lengkap dan tentunya menarik untuk mengisi waktu. Dijamin menunggu bukan hal membosankan lagi!</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class=""></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Sewa mudah</h3>
                                        <p>Tidak perlu pusing SMS/WA lagi! Cukup dengan registrasi akun, anda langsung dapat melakukan sewa studio dalam satu kali klik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shpe -->
            <div class="features-shpae d-none d-lg-block">
                <img src="assets/img/hero/illus2.png" alt="">
            </div>
        </section>
        <!-- Best Features End -->
        <!-- Services Area Start -->
        <!-- Services Area End -->
        <!-- Applic App Start -->
        <!-- Applic App End -->
        <!-- Best Pricing Start -->
        <!-- Pricing Card End -->
        <!-- Our Customer Start -->
        <div class="our-customer section-padd-top30  sky-blue">
            <div class="container-fluid">
            <div class="our-customer-wrapper">
                    <!-- Section Tittle -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-8">
                            <div class="section-tittle text-center">
                                <h2>Kata Mereka</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="customar-active dot-style d-flex dot-style">
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/man1.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Mantap!</a></h4>
                                        <p>Pertama kali coba, udah langsung nyaman parah! Asli ga bohong. Foto-foto sambil cekikikan nonton youtube dan dengerin lagu. Seru bro!</p>
                                    </div>
                                </div>
                            
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/man2.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Keren Banget, Memories!</a></h4>
                                        <p>Gila ga nyangka ada studio selengkap ini! Rasanya ke sini kaya ga cuman buat foto doang. Keren nih, fix mau re-book kapan-kapan.</p>
                                    </div>
                                </div>
                            
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/man3.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Thanks, Memories!</a></h4>
                                        <p>Memories bikin momen-momen berhargaku semakin indah. Terima kasih, Memories!</p>
                                    </div>
                                </div>
                            
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/man2.png" alt="">
                                    </div>
                                    
                                    <div class="what-cap">
                                        <h4><a href="#">Highly Recommended</a></h4>
                                        <p>Udah berkali-kali aku sewa Memories, tiap sewa fasilitas ga pernah ada yang menurun. Semuanya terawat dan selalu tampak baru. Yuk, pada booking sekarang!</p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>           
        <!-- Our Customer End -->
        <!-- Available App  Start-->
       
        <!-- Available App End-->
        <!-- Say Something Start -->
        <!-- Say Something End -->
     
    </main>
    <footer>
        <!-- Footer Start-->
       <div class="footer-main">
         <div class="footer-area footer-padding2">
             <div class="container">
                 <div class="row  justify-content-between">
                     <div class="col-lg-3 col-md-4 col-sm-8">
                          <div class="single-footer-caption mb-30">
                               <!-- logo -->
                              <div class="footer-logo">
                                 <a href="/"><img style="width:30%;" src="../assets/img/logo/logogo.png" alt=""></a>
                             </div>
                              <div class="footer-tittle">
                                  <div class="footer-pera">
                                      <p class="info1">Photograph: a picture painted by the sun without instruction in art</p><p style="font-weight: bold;">—Ambrose Bierce</p>
                                 </div>
                              </div>
                          </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-5">
                         <div class="single-footer-caption mb-50">
                             <div class="footer-tittle">
                                 <h4>Quick Links</h4>
                                 <ul>
                                     <li><a href="artikel">Katalog</a></li>
                                     <li><a href="pasien">Daftar</a></li>
                                     <li><a href="psikolog">Masuk</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-7">
                         <div class="single-footer-caption mb-50">
                             <div class="footer-tittle">
                                 <h4>Support</h4>
                                 <ul>
                                     <li><a href="#">Report a bug</a></li>
                                     <li><a href="#">Privacy Policy</a></li>
                                     <li><a href="#">Terms & Conditions</a></li>
                                     <li><a href="#">Sitemap</a></li>
                                     <li><a href="#">FAQs</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-8">
                         <div class="single-footer-caption mb-50">
                             <div class="footer-tittle">
                                 <h4>Kontak</h4>
                                 <div class="footer-pera footer-pera2">
                                  <p>Surabaya, Indonesia</p>
                                  <p>+62 81572 9372</p>
                              </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Copy-Right -->
                
             </div>
         </div>
       </div>
        <!-- Footer End-->
 
    </footer>
   
    <!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
    </body>
</html>