<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'CHEMOCARE')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('healthcouch/assets/css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('healthcouch/assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <h1>Chemo<b style="color:#59AF4E">Care</b></h1>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('') }}">Home</a></li>
                                            <li><a href="{{ url('edukasi') }}">Edukasi Kemoterapi</a></li>
                                            {{-- <li><a href="{{ url('') }}">Penaganan dan Efek Samping</a></li> --}}
                                            <li><a href="{{ url('terapi') }}">Terapi</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="#" class="btn header-btn" data-toggle="modal"
                                        data-target="#iframeModal">Isi Formulir Biodata</a>
                                </div>
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

        <!--? Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10">
                                <div class="hero-wrapper">
                                    <!-- Video icon -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn"
                                            data-delay=".4s">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">
                                            Health is wealth keep it healthy
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                            Almost before we knew it, we<br />
                                            had left the ground
                                        </p>

                                        {{-- <a href="#" class="btn header-btn" data-toggle="modal"
                                            data-target="#iframeModal">Isi Formulir Biodata</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10">
                                <div class="hero-wrapper">
                                    <!-- Video icon -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn"
                                            data-delay=".4s">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">
                                            Health is wealth keep it healthy
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                            Almost before we knew it, we<br />
                                            had left the ground
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->



        {{--  --}}

        @yield('content')

        {{--  --}}


        <!--? About Law Start-->
        <section class="about-low-area mt-30">
            <div class="container">
                <div class="about-cap-wrapper">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <h2>100% satisfaction guaranteed.</h2>
                                </div>
                                <p>Almost before we knew it, we had left the ground</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img">
                                <div class="about-font-img">
                                    <img src="{{ url('healthcouch/assets/img/gallery/about2.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Law End-->

    </main>
    <footer>
        <div class="footer-wrappr section-bg3"
            data-background="{{ url('healthcouch/assets/img/gallery/footer-bg.png') }}">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img
                                            src="{{ url('healthcouch/assets/img/logo/logo2_footer.png') }}"
                                            alt=""></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-10 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    {{-- MODAL --}}

    <!-- Modal -->
    <div class="modal fade custom-modal" id="iframeModal" tabindex="-1" role="dialog"
        aria-labelledby="iframeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="iframeModalLabel">Iframe Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{ url('submit') }}" frameborder="0" allowfullscreen></iframe>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- JS here -->

    <script src="{{ url('healthcouch/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ url('healthcouch/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ url('healthcouch/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ url('healthcouch/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ url('healthcouch/assets/js/wow.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/animated.headline.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ url('healthcouch/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ url('healthcouch/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/jquery.sticky.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ url('healthcouch/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ url('healthcouch/assets/js/contact.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/jquery.form.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/mail-script.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ url('healthcouch/assets/js/plugins.js') }}"></script>
    <script src="{{ url('healthcouch/assets/js/main.js') }}"></script>

    <script>
        window.addEventListener('message', function(event) {
            if (event.data === 'closeModal') {
                $('#iframeModal').modal('hide'); // Ganti "modalId" dengan ID modal Anda
            }
        }, false);
    </script>

    <style>
        body.modal-open {
            overflow: hidden !important;
        }

        .sticky-bar {
            z-index: 999 !important;
        }

        .custom-modal .modal-dialog {
            max-width: 90%;
            /* Atur lebar modal maksimal ke 90% dari viewport */
        }

        .custom-modal .modal-body {
            padding: 0;
            /* Menghilangkan padding dari body modal */
        }

        .custom-modal iframe {
            width: 100%;
            height: 90vh;
            /* Tinggi iframe adalah 60% dari tinggi viewport */
            border: none;
            /* Menghilangkan border standar dari iframe */
        }
    </style>

</body>

</html>
