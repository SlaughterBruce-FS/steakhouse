@extends('layouts.front')


@section('content')
    <!-- Banner Start -->
    <section class="banner_section second_banner">
        <!-- Side Sticky Social Media Start -->
        <div class="social_media_side side_fixer">
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
            </ul>
        </div>
        <!-- Side Sticky Social Media End -->
        <!-- Side Sticky Timing Start -->
        <div class="timing_side side_fixer">
            <ul>
                <li><span>Mon - Fri : 8AM - 9PM </span></li>
                <li><span>Sat - Sun : 8AM - 11PM</span></li>
            </ul>
        </div>
        <!-- Side Sticky Timing End -->
        <!-- Main Banner Slider Start -->
        <div class="banner_slider" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="0">
            <div class="owl-carousel owl-theme" id="banner_slider">
                @foreach ($sliders as $slider)
                    <div class="item">
                        <div class="slider_block"
                            style="background-image: url({{ asset('storage/images/' . $slider->img_name) }});">
                            <div class="ban_text ">
                                <div class="inner_text">
                                    <span class="sub_text">{{ $slider->sub_title }}</span>
                                    <h1>{{ $slider->title }}</h1>
                                    <p class="lead">{{ $slider->description }}
                                    </p>
                                    <a href="{{ $slider->link }}" class="btn btn_primary">{{ $slider->button_text }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <!-- Main Banner Slider End -->
    </section>
    <!-- Banner End -->


    <!-- Menu List flow Section Start -->
    <div class="menu_list_section">
        <div class="owl-carousel owl-theme" id="menu_list_flow">
            <div class="item">
                <div class="text_block">
                    <span>Philly Steak </span>
                    <span class="mark_star">*</span>
                </div>
            </div>
            <div class="item">
                <div class="text_block">
                    <span>Louisiana Steak</span>
                    <span class="mark_star">*</span>
                </div>
            </div>
            <div class="item">
                <div class="text_block">
                    <span>Filet</span>
                    <span class="mark_star">*</span>
                </div>
            </div>
            <div class="item">
                <div class="text_block">
                    <span> Ribeye </span>
                    <span class="mark_star">*</span>
                </div>
            </div>
            <div class="item">
                <div class="text_block">
                    <span> Rump Steak </span>
                    <span class="mark_star">*</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu List flow Section End -->


    <!-- Video Section Start -->
    <div class="home_video_section bg_white_textcher row_inner_am">
        <!-- Side Shape -->
        <div class="side_shape">
            <img class="right_shape" src="images/banner_undershape.png" alt="img">
            <img class="left_shape" src="images/chiken_icon.png" alt="img">
        </div>
        <!-- Video Wraper Start -->
        <div class="container-fluid">
            <div class="video_wraper" data-aos="fade-in" data-aos-duration="1500">
                <div class="play_vtn d-flex justify-content-center align-items-center">
                    <div class="round_anim">
                        <img src="images/video_text.png" alt="img">
                    </div>
                    <div class="action_btn">
                        <a href="#" class="popup-youtube play-button"
                            data-url="https://www.youtube.com/embed/NC9KlaxtfLg?autoplay=1&mute=1" data-toggle="modal"
                            data-target="#myModal" title="XJj2PbenIsU"><img src="images/play.png" alt="img"></a>
                    </div>
                </div>
                <ul class="bottom_text" data-aos="fade-down" data-aos-duration="1500">
                    <li>
                        <span class="icon"><i class="icofont-location-pin"></i></span>
                        <div class="text">
                            <h3>Locate Us</h3>
                            <p>Delicious City, London 9578, UK</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="icofont-wall-clock"></i></span>
                        <div class="text">
                            <h3>Open Hours</h3>
                            <p>Mon To Fri 9:00 AM - 9:00 PM</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="icofont-calendar"></i></span>
                        <div class="text">
                            <h3>Reservation</h3>
                            <p><a href="mail:reservation@gmail.com">reservation@gmail.com</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Video Wraper End -->
        <!-- Counter Slider -->
        <div class="container">
            <ul class="count_block" id="counter">
                <li data-aos="fade-up" data-aos-duration="1000">
                    <div class="icon"><img src="images/smilly.png" alt="img"></div>
                    <p class="count_text"><span class="counter-value" data-count="8900">0</span><span>+</span>
                    </p>
                    <p>happy customers</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon"><img src="images/chef_icon.png" alt="img"></div>
                    <p class="count_text"><span class="counter-value" data-count="25">0</span><span>+</span>
                    </p>
                    <p>Passonate Chefs</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="2000">
                    <div class="icon"><img src="images/dish_fav.png" alt="img"></div>
                    <p class="count_text"><span class="counter-value" data-count="125">0</span><span>+</span>
                    </p>
                    <p>Favourite Dishes</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="2500">
                    <div class="icon"><img src="images/rate.png" alt="img"></div>
                    <p class="count_text"><span>4.9</span></p>
                    <p>Customer Rating</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- Video Section End -->


    <!-- Our Menu Section Start -->
    <section class="our_menu_section row_inner_am light_texchur">
        <div class="side_shape">
            <img class="right_side" src="images/dish.png" alt="img">
        </div>
        <div class="container">
            <!-- Section Title Start -->
            <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
                <span class="sub_text">Our menu</span>
                <h2>The best dishes</h2>
            </div>
            <!-- Section Title End -->
            <!-- Navigation tabs Start -->
            <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="1500">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link {{ $category->name == 'steaks' ? 'active' : '' }}"
                            id="{{ $category->name }}-tab" data-toggle="tab" href="#{{ $category->name }}"
                            role="tab" aria-controls="{{ $category->name }}"
                            aria-selected="{{ $category->name == 'steaks' ? 'true' : 'false' }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <!-- Navigation tab End -->

            <!-- Tab Content Start -->
            <div class="tab-content" id="myTabContent" data-aos="fade-up" data-aos-duration="1500">
                @foreach ($food as $item)
                    <div class="tab-pane fade {{ $item->categories->name == 'steaks' ? 'show active' : '' }}"
                        id="{{ $item->categories->name }}" role="tabpanel"
                        aria-labelledby="{{ $item->categories->name }}-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="dish_box">
                                        <div class="dish_info">
                                            <div class="dish_img">
                                                <img src="{{ asset('storage/images/' . $item->img_name) }}"
                                                    alt="img">
                                            </div>
                                            <div class="dish_text">
                                                <h3>{{ $item->name }}</h3>
                                                <p>{{ $item->description }} </p>
                                                <span class="price">${{ $item->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('menu') }}" class="btn btn_primary">view full menu</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tab Content End -->
        </div>
    </section>
    <!-- Our Menu Section End -->


    <!-- Our Discount Dishes Section Start-->
    <section class="discount_section bg_white_textcher row_inner_am">
        <div class="container">
            <div class="section_title text-center" data-30-top="position: sticky;" data-aos="fade-up"
                data-aos-duration="1500">
                <span class="sub_text">Offer of the day</span>
                <h2>our discounted dishes</h2>
            </div>
            <!-- Dish Banner Start -->
            <!-- <div id="skrollr-body"></div> -->
            <div class="dish_slides">
                <div class="dishMain" data-30-top="position: sticky;">
                    <div class="dish_block">
                        <div class="dish_text">
                            <div class="text">
                                <span class="off">50% off</span>
                                <h3>Beef steak grill pan</h3>
                                <p>Beef, Eggs, poached, fried, with <br> bacon, chorizo, roasted roma toma <br>
                                    toes. mushrooms & spinach.</p>
                                <p class="price">
                                    <span class="new_price">$25.00</span>
                                    <span class="old_price">$50.00</span>
                                </p>
                                <a href="menu-list-1.html" class="btn btn_primary">explore more</a>
                            </div>
                        </div>
                        <div class="dish_img">
                            <img src="images/discount_dish.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="dishMain" data-30-top="position: sticky;">
                    <div class="dish_block">
                        <div class="dish_text">
                            <div class="text">
                                <span class="off">25% off</span>
                                <h3>Fresh Oysters Dozen</h3>
                                <p>Fried, Beef, Eggs, poached with <br> roasted roma toma bacon, chorizo,<br>
                                    mushrooms & spinach toes.</p>
                                <p class="price">
                                    <span class="new_price">$25.00</span>
                                    <span class="old_price">$50.00</span>
                                </p>
                                <a href="menu-list-2.html" class="btn btn_primary">explore more</a>
                            </div>
                        </div>
                        <div class="dish_img">
                            <img src="images/discount_dish2.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="dishMain" data-30-top="position: sticky;">
                    <div class="dish_block">
                        <div class="dish_text">
                            <div class="text">
                                <span class="off">35% off</span>
                                <h3>Chicha Morada</h3>
                                <p>bacon, chorizo, roasted roma toma with <br> toes. mushrooms & spinach.<br>
                                    Beef, Eggs, poached, fried.</p>
                                <p class="price">
                                    <span class="new_price">$25.00</span>
                                    <span class="old_price">$50.00</span>
                                </p>
                                <a href="menu-list-3.html" class="btn btn_primary">explore more</a>
                            </div>
                        </div>
                        <div class="dish_img">
                            <img src="images/discount_dish3.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dish Banner End -->
        </div>
    </section>
    <!-- Our Discount Dishes Section End-->

    <!-- Who We Are Section Start -->
    <div class="row_inner_am who_we_section who_version_two light_texchur">
        <!-- Who we Content -->
        <div class="container">
            <!-- Section Title -->
            <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="icon"><img src="{{ asset('front_assets/images/title_icon.png') }}" alt="img"></div>
                <span class="sub_text">Who we are</span>
                <h2>AA Haven of Classic and Timeless Flavors <br> <span class="heading_img"><img
                            src="{{ asset('front_assets/images/who_icon.png') }}" alt="img"></span>
                    Dedicated to Serving Authentic Steaks <br>
                    Experience genuine flavors in a truly traditional setting. <br>
                    The steak that becomes an unforgettable memory. <span class="heading_img"><img
                            src="{{ asset('front_assets/images/who_icon2.png') }}" alt="img"></span>Allow us <br> to
                    transform your dining
                    experience with our premium cuts.
                </h2>
            </div>
        </div>
        <!-- Image Gallery Start-->
        <div class="gallery_slider">
            @foreach ($gallery as $photo)
                @if ($photo->path == 'top')
                    <!-- Right To left -->
                    <div class="owl-carousel owl-theme" id="gallery_flow_right" data-aos="fade-in"
                        data-aos-duration="1500">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('storage/images/' . $photo->name) }}" alt="img">
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Left To Right -->
                    <div class="owl-carousel owl-theme" id="gallery_flow_left" data-aos="fade-in"
                        data-aos-duration="1500">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('storage/images/' . $photo->name) }}" alt="img">
                            </div>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <!-- Image Gallery End-->
        <div class="text-center" data-aos="fade-in" data-aos-duration="1500">
            <a href="{{ route('about') }}" class="btn btn_primary">read our story</a>
        </div>
    </div>
    <!-- Who We Are Section End -->


    <!-- Testimonial Section Start -->
    <section class="row_inner_am testimonial_section bg_white_textcher">
        <div class="container-fluid">
            <!-- Section Title -->
            <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
                <span class="sub_text">Tasty words</span>
                <h2>customer reviews</h2>
            </div>
            <!-- Testimonial Wraper -->
            <div class="testimonial_wraper" data-aos="fade-in" data-aos-duration="1500">
                <div class="owl-carousel owl-theme" id="testimonial_slider">

                    <div class="item">
                        <div class="testimonial_inner">
                            <div class="img">
                                <img src="images/testmonial_01.png" alt="img">
                            </div>
                            <div class="text">
                                <span class="quote">“</span>
                                <div class="star">
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                </div>
                                <h2>It's a great experience. The ambiance is realy very welcoming and charming.
                                    Amazing food, wines and services.</h2>
                                <h3>Marry Christina, <span class="designation">via trip advisor</span></h3>
                                <span class="quote text-right d-block">”</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_inner">
                            <div class="img">
                                <img src="images/testmonial_02.png" alt="img">
                            </div>
                            <div class="text">
                                <span class="quote">“</span>
                                <div class="star">
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                </div>
                                <h2>Amazing food, wines and services very welcoming and charming.
                                    Amazing food, wines and services It's a great experience.</h2>
                                <h3>Marry Christina, <span class="designation">via trip advisor</span></h3>
                                <span class="quote text-right d-block">”</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_inner">
                            <div class="img">
                                <img src="images/testmonial_03.png" alt="img">
                            </div>
                            <div class="text">
                                <span class="quote">“</span>
                                <div class="star">
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                </div>
                                <h2>Amazing ambience, great food, very courteous staff. Overall very good
                                    experience. Best place to have real steak food.</h2>
                                <h3>Willium Joe <span class="designation">via trip advisor</span></h3>
                                <span class="quote text-right d-block">”</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="text-center" data-aos="fade-in" data-aos-duration="1500">
                <a href="reviews.html" class="btn btn_primary">more testimonials</a>
            </div>
        </div>


    </section>
    <!-- Testimonial Section End -->


    <!-- Our Team Start-->
    <section class="row_inner_am our_team_section light_texchur">
        <div class="side_shape">
            <img src="images/knife_fire.png" alt="img">
        </div>
        <div class="container">
            <!-- Section Title -->
            <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
                <span class="sub_text">Our team</span>
                <h2>meet our chef</h2>
            </div>
            <!-- Team Slider Start-->
            <div class="team_slider_wraper" data-aos="fade-in" data-aos-duration="1500">
                <div class="owl-carousel owl-theme" id="team_slider">
                    <div class="item">
                        <div class="team_card">
                            <div class="img">
                                <img src="images/chef_01.png" alt="img">
                            </div>
                            <div class="info">
                                <h3>Jammie Waters</h3>
                                <span class="position">Master Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_card">
                            <div class="img">
                                <img src="images/chef_02.png" alt="img">
                            </div>
                            <div class="info">
                                <h3>Amelia Ava</h3>
                                <span class="position">Master Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_card">
                            <div class="img">
                                <img src="images/chef_03.png" alt="img">
                            </div>
                            <div class="info">
                                <h3>John Due</h3>
                                <span class="position">Master Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_card">
                            <div class="img">
                                <img src="images/chef_01.png" alt="img">
                            </div>
                            <div class="info">
                                <h3>Jammie Waters</h3>
                                <span class="position">Master Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_card">
                            <div class="img">
                                <img src="images/chef_02.png" alt="img">
                            </div>
                            <div class="info">
                                <h3>Amelia Ava</h3>
                                <span class="position">Master Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Slider End-->
        </div>
    </section>
    <!-- Our Team End-->


    <!-- Online ReserVation Form Start -->
    <section class="resarvation_form rform_bg">
        <div class="container">
            <div class="form_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="150">
                <div class="formBlock">
                    <div class="text-center">
                        <h2 class="mb-2">Online Reservation</h2>
                        <p>Booking request <a href="tel:+88123123456">+88-123-123456</a> or fill out the order
                            form
                        </p>
                    </div>
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
                            <div class="col-md-6 col-lg-4">
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
                <div class="contact_block">
                    <h2>Contact Us</h2>
                    <div class="booking">
                        <h3>Booking request</h3>
                        <a href="tel:+88-123-123456">+88-123-123456</a>
                    </div>
                    <ul>
                        <li>
                            <h3>Location</h3>
                            <p>Restaurant St, Delicious City, <br>
                                London 9578, UK</p>
                        </li>
                        <li>
                            <h3>Lunch Time</h3>
                            <p>Monday to Sunday <br>
                                11.00 am - 2.30pm</p>
                        </li>
                        <li>
                            <h3>Dinner Time</h3>
                            <p>Monday to Sunday <br>
                                5.30 pm - 11.30 pm</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Online ReserVation Form End -->


    <!-- Blog Section Start -->
    <section class="row_inner_am blog_card_section bg_white_textcher">
        <div class="container">
            <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
                <span class="sub_text">Tasty stories</span>
                <h2>our latest blogs</h2>
            </div>
            <!-- Blog Card Start -->
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#" class="img">
                            <img src="images/blog01.png" alt="img" class="img-fluid">
                        </a>
                        <div class="info">
                            <span class="date">19.04.2023</span>
                            <h3><a href="blog-list.html">A rare taste you can’t find
                                    anywhere in Newyork</a></h3>
                            <a href="blog-list.html" class="btn btn_text">READ MORE <i
                                    class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#" class="img">
                            <img src="images/blog02.png" alt="img" class="img-fluid">
                        </a>
                        <div class="info">
                            <span class="date">15.04.2023</span>
                            <h3><a href="blog-list.html">Marbling so good it melts in your mouth.</a></h3>
                            <a href="blog-list.html" class="btn btn_text">READ MORE <i
                                    class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#" class="img">
                            <img src="images/blog03.png" alt="img" class="img-fluid">
                        </a>
                        <div class="info">
                            <span class="date">08.04.2023</span>
                            <h3><a href="blog-list.html">Satisfying your steak needs one bite at a time.</a>
                            </h3>
                            <a href="blog-list.html" class="btn btn_text">READ MORE <i
                                    class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" data-aos="fade-in" data-aos-duration="1500">
                <a href="blog-list.html" class="btn btn_primary">more blogs</a>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
