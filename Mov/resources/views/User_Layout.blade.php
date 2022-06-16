<?php

session_start();

if(!session()-> has('User_Name'))
{
    Session::forget('User_Name');
}



?>



<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from themebeyond.com/html/movflx/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2022 09:11:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Movflx - Online Movies & TV Shows Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="../public/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../public/assets/css/main.css">
		<!-- CSS here -->
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/animate.min.css">
        <link rel="stylesheet" href="../public/css/magnific-popup.css">
        <link rel="stylesheet" href="../public/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../public/css/flaticon.css">
        <link rel="stylesheet" href="../public/css/odometer.css">
        <link rel="stylesheet" href="../public/css/aos.css">

        <link rel="stylesheet" href="../public/css/slick.css">

        <link rel="stylesheet" href="../public/css/default.css">

        <link rel="stylesheet" href="../public/css/style.css">

        <link rel="stylesheet" href="../public/css/responsive.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />







    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="../public/img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->



        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">

                            @if (session('alert'))
                            <div class="alert alert-success alert-dismissable custom-success-box" style="margin:15px;text-align:center">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                               <strong> {{ session('alert') }} </strong>
                            </div>
                          @endif






                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{url('Index')}}">
                                            <img src="../public/img/logo/logo.png" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="{{url('Index')}}">Home</a></li>
                                            <li><a href="{{url('Movie')}}">Movie</a>
                                                <li><a href="{{url('Game')}}">Game</a>

                                            </li>
                                            <li><a href="{{url('Celebrity')}}">Celebrity</a></li>

                                            </li>
                                            @if (session()-> has('User_Name'))
                                            <li><a href="{{url('Contact')}}">contact us</a></li>
                                            <li><a href="{{url('Logout')}}">Logout</a></li>
                                            <li><a href="{{url('EditProfile')}}">Edit Profile</a></li>
                                            @else

                                            <li><a href="{{url('Contact')}}">contact us</a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>

                                            <li class="header-search"><a href="{{url('View')}}"><i class="fas fa-shopping-cart" style="font-size: 20px;" ></i></a></li>


                                            @if (session()-> has('User_Name'))

                                            <li class="header-btn"><a href="#" class="btn">Welcome  {{session('User_Name')}} </a></li>
                                            @else

                                            <li class="header-lang">
                                                <li class="header-btn"><a href="{{url('Login')}}" class="btn">Sign In</a></li>
                                            </li>
                                            <li class="header-btn"><a href="{{url('Registration')}}" class="btn">Sign Up </a></li>
                                            @endif


                                        </ul>
                                    </div>
                                </nav>
                            </div>




                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="{{url('Index')}}"><img src="public/img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">

                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search-end -->

                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('UserBody')



        <!-- footer-area -->
      <footer>
        <div class="footer-top-wrap">
            <div class="container">
                <div class="footer-menu-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="footer-logo">
                                <a href="{{url('Index')}}"><img src="../public/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="footer-menu">
                                <nav>
                                    <ul class="navigation">
                                        <li><a href="{{url('Index')}}">Home</a></li>
                                        <li><a href="{{url('Movie')}}">Movie</a></li>
                                        <li><a href="{{url('Celebrity')}}">Celebrity</a></li>
                                        <li><a href="{{url('Contact')}}">Contact</a></li>

                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-quick-link-wrap">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="quick-link-list">
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021. All Rights Reserved By <a href="{{url('Index')}}">Movflx</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-method-img text-center text-md-right">
                            <img src="../public/img/images/card_img.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->




    <script src="{{ asset('js/app.js') }}" type="text/js"></script>

		<!-- JS here -->
        <script src="../public/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="../public/js/popper.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/isotope.pkgd.min.js"></script>
        <script src="../public/js/imagesloaded.pkgd.min.js"></script>
        <script src="../public/js/jquery.magnific-popup.min.js"></script>
        <script src="../public/js/owl.carousel.min.js"></script>
        <script src="../public/js/jquery.odometer.min.js"></script>
        <script src="../public/js/jquery.appear.js"></script>
        <script src="../public/js/slick.min.js"></script>
        <script src="../public/js/ajax-form.js"></script>
        <script src="../public/js/wow.min.js"></script>
        <script src="../public/js/aos.js"></script>
        <script src="../public/js/plugins.js"></script>
        <script src="../public/js/main.js"></script>









        <script src="../public/assets/js/jquery-3.3.1.min.js"></script>
        <script src="../public/assets/js/modernizr-3.6.0.min.js"></script>
        <script src="../public/assets/js/plugins.js"></script>
        <script src="../public/assets/js/bootstrap.min.js"></script>
        <script src="../public/assets/js/isotope.pkgd.min.js"></script>
        <script src="../public/assets/js/magnific-popup.min.js"></script>
        <script src="../public/assets/js/owl.carousel.min.js"></script>
        <script src="../public/assets/js/wow.min.js"></script>
        <script src="../public/assets/js/countdown.min.js"></script>
        <script src="../public/assets/js/odometer.min.js"></script>
        <script src="../public/assets/js/viewport.jquery.js"></script>
        <script src="../public/assets/js/nice-select.js"></script>
        <script src="../public/assets/js/main.js"></script>






    </body>

</html>
