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
                                <a href="index.html"><img style="width: 30%;" src="assets/img/logo/logogo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                        <li><a style="color: #6A5E5E" href="/"> Home</a></li>
                                        <li class="active"><a style="color: #6A5E5E" href="#">Katalog</a></li>
                                      
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

    <!-- Slider Area Start-->
<!--     <div class="services-area"> -->
        <div style="margin-top: 10%;" class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <h2>Katalog Studio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-paddingr">
        <div class="container">
            <div class="row">

              <!--   <div class="col-lg-8 mb-5 mb-lg-0"> -->
                    <div style="height: 50%; width: 50%; align-items: center;margin-left: auto;margin-right: auto;">
                        {% for datas in data %}
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/studio/{{ datas.image }}" alt="">
                                <a style="pointer-events: none; background-color: #C78989;" class="blog_item_date">
                                    <h3>{{ datas.nama }}</h3>
                                    <!-- <p>Jan</p> -->
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block">
                                    <h2>{{ datas.harga }}</h2>
                                </a>
                                <p>{{ datas.deskripsi }}</p>
                                <ul class="blog-info-link">
                                    <a href="tambahreservasi" class="genric-btn primary">Sewa</a>
                                </ul>
                            </div>
                        </article>
                        {% endfor %}

            

                    
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

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