<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="#">Home </a>
                                <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                                <div class="sub_menu">
                                    <ul>
                                        <li><a href="index.html">Home Defoult</a></li>
                                        <li><a href="home-slider-hero.html">Home Slider Hero</a></li>
                                        <li><a href="home-dish-list.html">Home Dish List</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="#">MENU </a>
                                <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                                <div class="sub_menu">
                                    <ul>
                                        <li><a href="menu-list-1.html">Menu List 1</a></li>
                                        <li><a href="menu-list-2.html">Menu List 2</a></li>
                                        <li><a href="menu-list-3.html">Menu List 3</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about-us.html">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our-chef.html">OUR CHEFS</a>
                            </li>
                            <!-- secondery menu start -->
                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="#">Pages</a>
                                <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                                <div class="sub_menu">
                                    <ul>
                                        <li><a href="blog-list.html">Blog List </a></li>
                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                        <li><a href="reservation-v1.html">reservation 1</a></li>
                                        <li><a href="reservation-v2.html">reservation 2</a></li>
                                        <li><a href="reviews.html">reviews</a></li>
                                        <li><a href="gallery.html">gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- secondery menu end -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Contact</a>
                            </li>
                            <li class="nav-item contact_number">
                                <a class="nav-link" href="tel:+18001234578"><span>book a tale :</span> +1 800 123 45
                                    78</a>
                            </li>
                            <li class="d-lg-none">
                                <a href="reservation-v1.html" class="btn btn_primary">FIND A TABLE</a>
                            </li>
                        </ul>
                    </div>

                    <div class="action_bar">
                        <a href="reservation-v1.html" class="btn btn_primary">FIND A TABLE</a>
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
                    <img src="images/logo.png" alt="image">
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
                    <img src="images/right_menu_table.png" alt="img">
                </figure>
            </div>
        </div>
        <!-- Right Side Fix Menu End-->
        @yield('content')

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
