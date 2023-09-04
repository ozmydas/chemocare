<!DOCTYPE html>
<!-- Metreex - SEO & Digital Marketing Agency Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jthemes" />
    <meta name="description" content="Metreex - SEO & Digital Marketing Agency Landing Page Template" />
    <meta name="keywords"
        content="Responsive, HTML5 template, Jthemes, SEO, Strategy, Digital Marketing Agency, Online Marketing">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>CHEMOCARE</title>

    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="images/icon/2.png" type="image/x-icon">
    <link rel="icon" href="images/icon/2.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icon/2.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icon/2.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icon/2.png">
    <link rel="apple-touch-icon" href="images/icon/2.png">
    <link rel="icon" href="images/icon/2.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ url('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url('template/css/flaticon.css') }}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{ url('template/css/menu.css') }}" rel="stylesheet">
    <link id="effect" href="{{ url('template/css/dropdown-effects/fade-down.css') }}" media="all"
        rel="stylesheet">
    <link href="{{ url('template/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('template/css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ url('template/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="{{ url('template/css/animate.css') }}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <!-- <link href="{{ url('template/css/carrot.css') }}" rel="stylesheet">      -->
    <link href="{{ url('template/css/dodgerblue.css') }}" rel="stylesheet">
    <!-- <link href="{{ url('template/css/green.css') }}" rel="stylesheet">      -->
    <!-- <link href="{{ url('template/css/magneta.css') }}" rel="stylesheet">     -->
    <!-- <link href="{{ url('template/css/olive.css') }}" rel="stylesheet">      -->
    <!-- <link href="{{ url('template/css/orange.css') }}" rel="stylesheet">     -->
    <!-- <link href="{{ url('template/css/purple.css') }}" rel="stylesheet">     -->
    <!-- <link href="{{ url('template/css/red.css') }}" rel="stylesheet">        -->
    <!-- <link href="{{ url('template/css/skyblue.css') }}" rel="stylesheet">    -->
    <!-- <link href="{{ url('template/css/teal.css') }}" rel="stylesheet">       -->

    <!-- RESPONSIVE CSS -->
    <link href="{{ url('template/css/responsive.css') }}" rel="stylesheet">

    <style>
        /* Styles for the modal overlay */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            opacity: 0;
            /* Initial opacity for animation */
            transition: opacity 0.3s ease;
            /* Animation duration and easing */
        }

        /* Styles for the modal content */
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 1200px;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            /* Hide content overflow */
        }
    </style>
</head>


<body>




    <!-- PRELOADER SPINNER
  ============================================= -->
    <div id="loader-wrapper">
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_one"></div>
                </div>
            </div>
        </div>
    </div>




    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">




        <!-- HEADER
   ============================================= -->
        <header id="header" class="header tra-menu navbar-light">
            <div class="header-wrapper">


                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                    <span class="smllogo smllogo-black"><img src="{{ url('template/images/logo.png') }}"
                            width="162" height="40" alt="mobile-logo" /></span>
                    <span class="smllogo smllogo-white"><img src="{{ url('template/images/logo.png') }}"
                            width="162" height="40" alt="mobile-logo" /></span>
                    <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
                </div>


                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 334 x 80 pixels) -->
                        <div class="desktoplogo"><a href="#hero-8" class="logo-black"><img
                                    src="{{ url('template/images/logo.png') }}" width="182" height="40"
                                    alt="header-logo"></a></div>
                        <div class="desktoplogo"><a href="#hero-8" class="logo-white"><img
                                    src="{{ url('template/images/logo.png') }}" width="182" height="40"
                                    alt="header-logo"></a></div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix blue-header">
                            <ul class="wsmenu-list">


                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="{{url('definisi')}}">Definisi Kemoterapi</a></li>

                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="{{url('efek-samping')}}">Efek Samping Kemoterapi</a></li>

                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="{{url('penanganan')}}">Penanganan Efek Samping</a></li>

                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="{{url('terapi')}}">Terapi</a></li>


                                <!-- MEGAMENU -->
                                


                                <!-- SIMPLE NAVIGATION LINK -->
                                {{-- <li class="nl-simple" aria-haspopup="true"><a href="about-us.html">Tentang Kami</a>
                                </li> --}}


                                <!-- HEADER PHONE NUMBER -->
                                <!-- <li class="nl-simple primary-scroll" aria-haspopup="true" style="font-weight: 100 !important;">
        <a href="tel:+6289630259169" class="last-link last-link-number">
        <i class="fas fa-phone-square-alt"></i> +62 89630259169
        </a>
        </li> -->


                                <!-- HEADER BUTTON
        <li class="nl-simple" aria-haspopup="true">
        <a href="#" class="btn btn-primary tra-white-hover last-link">Get In Touch</a>
        </li> -->


                            </ul>
                        </nav> <!-- END MAIN MENU -->

                    </div>
                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End header-wrapper -->
        </header> <!-- END HEADER -->



        {{--  --}}

        @yield('content')

        {{--  --}}




        <!-- FOOTER-1
   ============================================= -->
        <footer id="footer-1" class="pt-100 footer division"
            style="background-color: #2980b9!important; color: white !important;">
            <div class="container">


                <!-- FOOTER CONTENT -->
                <div class="row">


                    <!-- FOOTER INFO -->
                    <div class="col-md-5 col-lg-4">
                        <div class="footer-info mb-40">

                            <!-- Footer Logo -->
                            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 364 x 90 pixels) -->
                            <img src="{{ url('template/images/logo.png') }}" width="182" height="45"
                                alt="footer-logo">

                            <!-- Text -->
                            <p>Aliquam orci a nullam tempor sapien gravida donec enim ipsum porta justo velna an auctor
                                undo congue magna laoreet augue sapien
                            </p>

                        </div>
                    </div>


                </div> <!-- END FOOTER CONTENT -->


                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row">


                        <!-- FOOTER COPYRIGHT -->
                        <div class="col-lg-8">
                            <ul class="bottom-footer-list">
                                <li>
                                    <p>&copy; Copyright ChemoCare 2023</p>
                                </li>
                                
                            </ul>
                        </div>


                        <!-- FOOTER SOCIALS LINKS -->
                        <div class="col-lg-4 text-right">
                            <ul class="foo-socials text-center clearfix">
{{-- 
                                <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="ico-google-plus"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li> --}}

                                <!--
         <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>
         <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
         <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
         <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
         <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
         <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
         <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
         <li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
         <li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
        -->

                            </ul>
                        </div>


                    </div>
                </div> <!-- END BOTTOM FOOTER -->


            </div> <!-- End container -->
        </footer> <!-- END FOOTER-1 -->




    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
  ============================================= -->
    <script src="{{ url('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('template/js/modernizr.custom.js') }}"></script>
    <script src="{{ url('template/js/jquery.easing.js') }}"></script>
    <script src="{{ url('template/js/jquery.appear.js') }}"></script>
    <script src="{{ url('template/js/menu.js') }}"></script>
    {{-- <script src="{{ url('template/js/materialize.js') }}"></script> --}}
    <script src="{{ url('template/js/jquery.scrollto.js') }}"></script>
    <script src="{{ url('template/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('template/js/jquery.flexslider.js') }}"></script>
    <script src="{{ url('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('template/js/seo-form.js') }}"></script>
    <script src="{{ url('template/js/contact-form.js') }}"></script>
    <script src="{{ url('template/js/comment-form.js') }}"></script>
    <script src="{{ url('template/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('template/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('template/js/wow.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ url('template/js/custom.js') }}"></script>

    <script>
        new WOW().init();

       window.addEventListener('message', function(event) {
           if (event.data === 'closeModal') {
               $('#iframeModal').modal('hide'); // Ganti "modalId" dengan ID modal Anda
           }
       }, false);
    </script>

    <script>
        var openModalLink = document.getElementById("openModalLink");
        var modalOverlay = document.getElementById("modalOverlay");
        var closeModalButton = document.getElementById("closeModalButton");

        openModalLink.addEventListener("click", function(event) {
            event.preventDefault();
            modalOverlay.style.display = "block";
            modalOverlay.style.opacity = "1"; // Fade-in animation
        });

        closeModalButton.addEventListener("click", function() {
            modalOverlay.style.opacity = "0"; // Fade-out animation
            setTimeout(function() {
                modalOverlay.style.display = "none"; // Hide the modal overlay after animation
            }, 300); // Wait for animation duration
        });
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
   <script src="{{ url('template/js/html5shiv.js') }}" type="text/javascript"></script>
   <script src="{{ url('template/js/respond.min.js') }}" type="text/javascript"></script>
  <![endif] -->

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
  <script>
      window.ga = window.ga || function() {
          (ga.q = ga.q || []).push(arguments)
      };
      ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto');
      ga('send', 'pageview');
  </script>
  <script async src='https://www.google-analytics.com/analytics.js' )}}'></script>
  -->
    <!-- End Google Analytics -->



</body>



</html>
