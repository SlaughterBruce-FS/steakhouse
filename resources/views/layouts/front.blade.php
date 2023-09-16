<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ds eejs</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="icon" href="/stakehouse_logo" type="image/png">

    <!-- icofont-css-link -->
    <link rel="stylesheet" href="/front_assets/css/icofont.min.css">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="/front_assets/css/animate.min.css">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="/front_assets/css/owl.carousel.min.css">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="/front_assets/css/bootstrap.min.css">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="/front_assets/css/aos.css">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="/front_assets/css/style.css">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="/front_assets/css/responsive.css">


    <script src="front_assets/js/jquery.js"></script>

    <!-- Scripts -->
    {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
</head>

<body>

    <!-- Page-wrapper-Start -->
    <div class="index_wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- Header Start -->
        <header class="fixed">
            <!-- container start -->
            <div class="container-fluid">
                <!-- navigation bar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('steakehouse_logo.png') }}" style="width: 80px;" alt="image">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                            <span class="toggle-wrap">
                                <span class="toggle-bar"></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="/">Home </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">MENU </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reservations') }}">RESERVATIONS</a>
                            </li>

                            <!-- secondery menu end -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="nav-item contact_number">
                                <a class="nav-link" href="tel:+18001234578"><span>book a tale :</span> +1 800 123 45
                                    78</a>
                            </li>
                            <li class="d-lg-none">
                                <a href="{{ route('reservations') }}" class="btn btn_primary">FIND A TABLE</a>
                            </li>
                        </ul>
                    </div>

                    <div class="action_bar">
                        <a href="{{ route('reservations') }}" class="btn btn_primary">FIND A TABLE</a>
                        <div class="bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </nav>
                <!-- navigation end -->
            </div>
            <!-- container end -->
        </header>
        <!-- Header End -->


        <!-- Right Side Fix Menu Start-->
        <div class="right_sidemenu">
            <span class="close_rightmenu"><i class="icofont-close-circled"></i></span>
            <div class="menu_inner_content">
                <a href="#" class="side_logo">
                    <img src="{{ asset('steakehouse_logo.png') }}" style="width: 80px;" alt="image">
                </a>
                <ul class="contact_listing">
                    <li>
                        <p class="sub_title">Call us</p>
                        <div class="cnt_block">
                            <a href="tel:+11234567890">+1 123 456 7890</a>
                            <span><i class="icofont-ui-call"></i></span>
                        </div>
                        <div class="cnt_block">
                            <a href="tel:+10987654321">+1 098 765 4321</a>
                            <span><i class="icofont-whatsapp"></i></span>
                        </div>
                    </li>
                    <li>
                        <p class="sub_title">Email us</p>
                        <div class="cnt_block">
                            <a href="mailto:">example@gmail.com</a>
                            <span><i class="icofont-envelope-open"></i></span>
                        </div>
                    </li>
                    <li>
                        <p class="sub_title">Find us</p>
                        <div class="cnt_block">
                            <p>Restaurant St, Delicious City, London 9578, UK</p>
                            <span><i class="icofont-location-pin"></i></span>
                        </div>
                    </li>
                </ul>
                <a href="reservation-v2.html" class="btn btn_primary">book a table</a>
                <figure class="tab_img">
                    <img src="{{ asset('steakehouse_logo.png') }}" style="width: 80px;" alt="image">
                </figure>
            </div>
        </div>
        <!-- Right Side Fix Menu End-->
        @yield('content')

        <!-- Footer Start -->
        <footer>
            <div class="container">

                <div class="foote_widget newsletter_block">
                    <div class="row py_50">
                        <div class="col-md-7 offer_block">
                            <h2>Get News & Offers</h2>
                            <p>Subscribe us & Get <span>25% Off.</span></p>
                            <form class="row" method="POST" action="{{ route('front.storeEmail') }}">
                                @csrf
                                <div class="form-group">
                                    <span class="icon position-absolute"><i class="icofont-envelope-open"></i></span>
                                    <input type="text" name="email" placeholder="Your email"
                                        class="form-control" required>
                                    <button class="btn btn_primary">subscribe now</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            <ul class="social_media">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 copy_right text-center">
                        <p>© 2023 Restaurant. All Rights Reserved | Steakhouse</p>
                    </div>
                </div>
            </div>

            <!-- go top button -->
            <div class="go_top" id="Gotop">
                <span><i class="icofont-rounded-up"></i></span>
            </div>
        </footer>
        <!-- Footer End -->

    </div>
    <!-- Page-wrapper-End -->

    <!-- Booking Table Model Start -->
    <!-- Modal -->
    <div class="modal fade booking_model show" id="bookingForm_model" tabindex="-1" role="dialog"
        aria-labelledby="bookingForm_modelTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center border-0 d-block p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icofont-close-line"></i></span>
                    </button>
                    <h2 class="mb-2">Online Reservation</h2>
                    <p>Booking request <a href="tel:+88123123456">+88-123-123456</a> or fill out the order form</p>
                </div>
                <div class="modal-body">
                    <div class="booking_form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="icon"><i class="icofont-user-alt-7"></i></span>
                                        <input type="text" class="form-control has_icon" placeholder="1 Person">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="icon"><i class="icofont-calendar"></i></span>
                                        <input type="date" class="form-control  flex-row-reverse">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="icon"><i class="icofont-clock-time"></i></span>
                                        <input type="time" class="form-control has_icon  flex-row-reverse pl-0">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn_primary w-100 ">book a table</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Table Model End -->

    <!-- Video Model Start -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button id="close-video" type="button" class="button btn btn-default text-right"
                    data-dismiss="modal">
                    <i class="icofont-close-line-circled"></i>
                </button>
                <div class="modal-body">
                    <div id="video-container" class="video-container">
                        <iframe id="youtubevideo" width="640" height="360" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- Video Model End -->

    <!-- bootstrap-js-Link -->
    <script src="/front_assets/js/bootstrap.min.js"></script>
    <!-- owl-js-Link -->
    <script src="/front_assets/js/owl.carousel.min.js"></script>
    <!-- aos-js-Link -->
    <script src="/front_assets/js/aos.js"></script>
    <!-- Gsap Scroll Js -->
    <script src="/front_assets/js/ScrollTrigger.min.js"></script>
    <!-- Skrollr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    <!-- main-js-Link -->
    <script src="/front_assets/js/main.js"></script>


    <!-- Home Page Animation Js -->
    <script>
        // Image Moving Animation
        function animateOnMouseMove(element) {
            const mouseMoveElems = document.querySelectorAll(element);
            mouseMoveElems.forEach(function(mouseMoveElem) {
                var speed = mouseMoveElem.getAttribute('data-speed');
                window.addEventListener('mousemove', (evt) => {
                    const x = -(window.innerWidth / 2 - evt.pageX) / parseInt(speed);
                    const y = -(window.innerHeight / 2 - evt.pageY) / parseInt(speed);
                    mouseMoveElem.style.transform = `translateY(${y}px) translateX(${x}px)`;
                });
            });
        }
        animateOnMouseMove(".banner_images .img");

        // Fixed Discount Dish JS
        $(document).ready(function() {
            if ($(window).width() > 767) {
                $(function() {
                    skrollr.init({
                        forceHeight: false,
                        skrollrBody: 'skrollr-body',
                        mobileDeceleration: 0.004,
                        easing: {
                            WTF: Math.random,
                            inverted: function(p) {
                                return 1 - p;
                            }
                        }
                    });
                });
                let cardBlock = document.querySelectorAll('.dishMain');
                let topStyle = 230;

                cardBlock.forEach((card) => {
                    card.style.top = `${topStyle}px`;
                    topStyle += 30;
                })

            }
        });
        $(document).ready(function() {
            if ($(window).width() < 767) {
                $('.discount_section div').removeAttr("data-30-top");
            }
        });
    </script>

</body>


</html>
