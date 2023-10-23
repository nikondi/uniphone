@extends('layout.base', ['pageHeader' => false])

@section('content')

{{--    <section class="main-first">
        <div class="main-text">
            <div class="main-text__background">
                <img src="{{ asset('assets/images/backgrounds/main-slider-1-1.jpg') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <h1 class="wow fadeInDown">Цифровая платформа<br /> КСОБЖ-<span class="text-primary">Uniphone</span></h1>
                    <div class="main-text-ksobj">
                        <div class="wow fadeIn" data-wow-delay="400ms" data-wow-duration="1100ms">Комплексная</div>
                        <div class="wow fadeIn" data-wow-delay="600ms" data-wow-duration="1100ms">Система</div>
                        <div class="wow fadeIn" data-wow-delay="800ms" data-wow-duration="1100ms">Обеспечения</div>
                        <div class="wow fadeIn" data-wow-delay="1000ms" data-wow-duration="1100ms">Безопасности</div>
                        <div class="wow fadeIn" data-wow-delay="1200ms" data-wow-duration="1100ms">Жизнедеятельности</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-map">
            <img src="{{ asset('assets/images/main/map-background.png') }}" alt="">
        </div>
    </section>--}}

    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
          "effect": "fade",
          "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
          },
          "autoplay": {
              "delay": 6000
          }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer">
                        <img src="{{ asset('assets/images/backgrounds/main-slider-1-1.jpg') }}" alt="">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2>Добро пожаловать<br>
                                    в <span class="text-primary">UNIPHONE</span></h2>
                                <a href="#" class="thm-btn">Подробнее <i class="far fa-arrow-alt-circle-right"></i></a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer">
                        <img src="{{ asset('assets/images/backgrounds/main-slider-1-2.jpg') }}" alt="">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2>Большие производ<span class="mobile-break"></span>ственные мощности</h2>
                                <a href="online-booking.html" class="thm-btn">Order Now <i class="far fa-arrow-alt-circle-right"></i></a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="crsine-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="crsine-right-arrow"></i>
                </div>
            </div><!-- /.main-slider__nav -->
        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->

    <section class="main-about">
        <div class="container">
            <div class="row main-about__row">
                <div class="col-12 col-md-6 main-about__image-col">
                    <div class="image-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1100ms">
                        <figure class="image js-tilt"><img src="{{ asset('assets/images/main/intercom.jpg') }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="section-title wow slideInUp" data-wow-delay="0ms" data-wow-duration="1100ms">
                        <h2 class="section-title__title">СКУД <span class="text-primary">Uniphone</span></h2>
                    </div>

                    <div class="main-about__description wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1100ms">
                        <p>
                            Система контроля и управления доступом это инновационная разработка Uniphone. Такая только у нас и у Майкла Джексона
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, corporis delectus enim error facere iste itaque magnam, maxime necessitatibus pariatur possimus, recusandae unde veritatis! Aperiam consequuntur dolorem doloremque earum expedita libero, magni non quaerat quas quod, repellat sed totam, vero! Amet atque debitis dolore eos ex, exercitationem molestias officiis sapiente.
                        </p>
                    </div><!-- /.about-two__summery -->

                    <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1100ms">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Безопасность и антивандальность
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Удобство в использовании
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Вызов экстренных служб
                        </li>
                    </ul><!-- /.about-two__list -->
                    <a href="#" class="thm-btn thm-btn--default wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1100ms">
                        Подробнее
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </a><!-- /.thm-btn -->

                </div>
            </div>
        </div>
    </section>
    <section class="main-about main-about--gray main-about--reverse">
        <div class="container">
            <div class="row main-about__row">
                <div class="col-12 col-md-6 main-about__image-col">
                    <div class="image-box wow slideInRight" data-wow-delay="0ms" data-wow-duration="1100ms">
                        <figure class="image js-tilt"><img src="{{ asset('assets/images/main/door.png') }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="section-title wow slideInUp" data-wow-delay="0ms" data-wow-duration="1100ms">
                        <h2 class="section-title__title">Двери <span class="text-primary">Uniphone</span></h2>
                    </div>
                    <div class="main-about__description wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1100ms">
                        <p>
                            Система контроля и управления доступом это инновационная разработка Uniphone. Такая только у нас и у Майкла Джексона
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, corporis delectus enim error facere iste itaque magnam, maxime necessitatibus pariatur possimus, recusandae unde veritatis! Aperiam consequuntur dolorem doloremque earum expedita libero, magni non quaerat quas quod, repellat sed totam, vero! Amet atque debitis dolore eos ex, exercitationem molestias officiis sapiente.
                        </p>
                    </div><!-- /.about-two__summery -->
                    <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1100ms">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Безопасность и антивандальность
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Удобство в использовании
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Вызов экстренных служб
                        </li>
                    </ul><!-- /.about-two__list -->
                    <a href="#" class="thm-btn thm-btn--default wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1100ms">
                        Подробнее
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </a><!-- /.thm-btn -->

                </div>
            </div>
        </div>
    </section>

    {{--<section class="about-two">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6">
                    <div class="about-two__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="assets/images/resources/about-2-1.jpg" alt="" class="img-fluid">
                    </div><!-- /.about-two__image -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="about-two__content">
                        <div class="section-title">
                            <span class="section-title__tagline">write a message</span>
                            <h2 class="section-title__title">It’s Time to Come and <br>
                                Clean Your Car</h2>
                        </div><!-- /.section-title -->
                        <div class="about-two__summery">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even.
                        </div><!-- /.about-two__summery -->
                        <ul class="about-two__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                We’re professional and certified car washers
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                We use quality material to clean your cars
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                We care about our customers satisfaction
                            </li>
                        </ul><!-- /.about-two__list -->
                        <hr class="section-separator">
                        <div class="about-two__icon-box">
                            <i class=" crsine-car-service-3 about-two__icon"></i>
                            <div class="about-two__icon-content">
                                We have 30+ years of experiences for
                                give you better quality results.
                            </div><!-- /.about-two__icon-content -->
                        </div><!-- /.about-two__icon-box -->
                        <div class="about-two__button-box">
                            <a href="online-booking.html" class="thm-btn">
                                Order Now
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.thm-btn -->
                            <div class="about-two__phone">
                                <i class="crsine-phone-call"></i>
                                <div class="about-two__phone-content">
                                    <span>Call Us Anytime</span>
                                    <a href="tel:92-666-888-0000">92 666 888 0000</a>
                                </div><!-- /.about-two__phone-content -->
                            </div><!-- /.about-two__phone -->
                        </div><!-- /.about-two__button-box -->
                    </div><!-- /.about-two__content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-two -->

    <section class="service-home">
        <img src="assets/images/backgrounds/service-bg-1.png" alt="" class="image-layer">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">What We’re Offering</span>
                <h2 class="section-title__title">Services We’re Provding <br>
                    to Customers</h2>
            </div><!-- /.section-title -->

            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="service-card">
                        <div class="service-card__image">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <a href="service-details.html"><i class="crsine-plus"></i></a>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <div class="service-card__icon">
                                <i class=" crsine-car-service-1"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title"><a href="service-details.html">
                                    Full Service Wash
                                </a></h3><!-- /.service-card__title -->
                            <p class="service-card__text">There are not many of passages of lorem ipsum avail isn alteration
                                donationa in form.</p><!-- /.service-card__text -->
                            <a href="service-details.html" class="service-card__more"><i class="crsine-right-arrow"></i></a>
                            <!-- /.service-card__more -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="service-card">
                        <div class="service-card__image">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <a href="service-details.html"><i class="crsine-plus"></i></a>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <div class="service-card__icon">
                                <i class="crsine-car-service-2"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title"><a href="service-details.html">
                                    Auto Detailing
                                </a></h3><!-- /.service-card__title -->
                            <p class="service-card__text">There are not many of passages of lorem ipsum avail isn alteration
                                donationa in form.</p><!-- /.service-card__text -->
                            <a href="service-details.html" class="service-card__more"><i class="crsine-right-arrow"></i></a>
                            <!-- /.service-card__more -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="service-card">
                        <div class="service-card__image">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <a href="service-details.html"><i class="crsine-plus"></i></a>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <div class="service-card__icon">
                                <i class="crsine-car-wash"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title"><a href="service-details.html">
                                    Express Interior
                                </a></h3><!-- /.service-card__title -->
                            <p class="service-card__text">There are not many of passages of lorem ipsum avail isn alteration
                                donationa in form.</p><!-- /.service-card__text -->
                            <a href="service-details.html" class="service-card__more"><i class="crsine-right-arrow"></i></a>
                            <!-- /.service-card__more -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-home -->


    <section class="feature-lists">
        <div class="feature-lists__boxed jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
            <img src="assets/images/backgrounds/feature-bg-1-1.jpg" alt="" class="jarallax-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <span class="section-title__tagline">What We’re Offering</span>
                            <h2 class="section-title__title">Premium Car <br>
                                Washing Center</h2>
                        </div><!-- /.section-title -->
                        <a href="online-booking.html" class="thm-btn">Appointment <i class="far fa-arrow-alt-circle-right"></i></a>
                        <!-- /.thm-btn -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <div class="feature-lists__wrap">

                            <ul class="list-unstyled feature-lists__list">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Platinum Exterior Wash
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    24-Hour Rain Guarantee
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Door Panels / Seats Wiped
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Super Wash
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Hhard Surfaces Cleaned
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Thorough Cleaning of Dash
                                </li>
                            </ul><!-- /.list-untyled -->
                            <ul class="list-unstyled feature-lists__list">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Rubber Mats Washed
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Tire Shine
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Engine Wash
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Seats Cleaning
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Rim Cleaner x 2
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Interior Polish
                                </li>
                            </ul><!-- /.list-untyled -->
                            <ul class="list-unstyled feature-lists__list">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Dashboard Cleaning
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Exterior Shine
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Auto Detailing
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Full Car Service
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    All Cars Wash
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Best Quality
                                </li>
                            </ul><!-- /.list-untyled -->
                        </div><!-- /.feature-lists__wrap -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.feature-lists__boxed -->
    </section><!-- /.feature-lists -->

    <section class="call-to-action">
        <div class="container">
            <h3 class="call-to-action__title">Easy Online Carwash Booking System</h3>

            <div class="call-to-action__btn-wrap">
                <a href="online-booking.html" class="thm-btn">
                    Book Appointment
                    <i class="far fa-arrow-alt-circle-right"></i>
                </a><!-- /.thm-btn -->
            </div><!-- /.call-to-action__btn-wrap -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action -->

    <section class="feature-one">
        <div class="video-one wow fadeInLeft" data-wow-duration="1500ms">
            <img src="assets/images/resources/video-1-1.jpg" alt="">
            <div class="video-one__content">
                <a href="https://www.youtube.com/watch?v=y2Eqx6ys1hQ" class="lightbox-image"><i class="fa fa-play"></i></a>
                <p class="video-one__text">We specialize
                    in detailing
                    and cars
                    washing</p>
            </div><!-- /.video-one__content -->
        </div><!-- /.video-one -->
        <div class="container">
            <div class="row justify-content-xl-end">
                <div class="col-lg-7">
                    <div class="feature-one__content">
                        <div class="section-title">
                            <span class="section-title__tagline">Our Service Benefits</span>
                            <h2 class="section-title__title">Why You Should Choose <br>
                                Our Services</h2>
                        </div><!-- /.section-title -->
                        <div class="feature-one__summery">
                            There are many variations of passages of but the majority have in some form, by injected humou
                            or words which don't look even slightly believable of but the majority have suffered look even slightly believable of but the majority have suffered.
                        </div><!-- /.feature-one__summery -->
                        <ul class="list-unstyled feature-one__list">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Reliable and Proven
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Best Team Members
                            </li>
                        </ul><!-- /.list-unstyled -->

                        <ul class="list-unstyled feature-one__progress">
                            <li class="feature-one__progress-item">
                                <span class="feature-one__progress-title">Cleaning</span>
                                <div class="feature-one__progress-bar">
                                        <span class="feature-one__progress-main" style="width: 77%;">
                                            <span class="feature-one__progress-count">77%</span>
                                        </span>
                                </div><!-- /.feature-one__progress-bar -->
                            </li>
                            <li class="feature-one__progress-item">
                                <span class="feature-one__progress-title">Washing</span>
                                <div class="feature-one__progress-bar">
                                        <span class="feature-one__progress-main" style="width: 58%;">
                                            <span class="feature-one__progress-count">58%</span>
                                        </span>
                                </div><!-- /.feature-one__progress-bar -->
                            </li>
                        </ul><!-- /.list-unstyled feature-one__progress -->

                        <div class="feature-one__counter">
                            <i class="crsine-car-service feature-one__counter-icon"></i>

                            <div class="feature-one__counter-content">
                                <h3 class="feature-one__counter-title odometer" data-count="867000">00</h3>
                                <!-- /.feature-one__counter-title -->
                                <p class="feature-one__counter-text">Happy customers in 30 years of washing</p>
                                <!-- /.feature-one__counter-text -->
                            </div><!-- /.feature-one__counter-content -->
                        </div><!-- /.feature-one__counter -->
                    </div><!-- /.feature-one__content -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-one -->


    <section class="pricing-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Pricing Plans</span>
                <h2 class="section-title__title">Looking for Car Wash? <br>
                    Choose a Plan</h2>
            </div><!-- /.section-title -->

            <div class="tab-box" id="price-tab">
                <ul class="pricing-one__tab-title tab-box__title list-unstyled">
                    <li class="pricing-one__tab-title-item active-item">
                        <i class="crsine-sedan-car-model"></i>
                        <p>Sedan Car</p>
                    </li>
                    <li class="pricing-one__tab-title-item">
                        <i class="crsine-minivan-car"></i>
                        <p>Minivan Can</p>
                    </li>
                    <li class="pricing-one__tab-title-item">
                        <i class="crsine-microbus"></i>
                        <p>Microbus</p>
                    </li>
                    <li class="pricing-one__tab-title-item">
                        <i class="crsine-car-suv"></i>
                        <p>SUV Car</p>
                    </li>
                </ul><!-- /.pricing-one__tab-title -->

                <div class="tab-box__content active-item">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    20
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    30
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    60
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.tab-box__content -->

                <div class="tab-box__content">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    20
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    30
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    60
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.tab-box__content -->

                <div class="tab-box__content">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    20
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    30
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    60
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.tab-box__content -->

                <div class="tab-box__content">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    20
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    30
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="price-card">
                                <p class="price-card__name">Basic Washing</p><!-- /.price-card__name -->
                                <p class="price-card__amount">
                                    <span class="price-card__amount-symbol">$</span><!-- /.price-card__amount-symbol -->
                                    60
                                    <span class="price-card__amount-fraction">.99</span>
                                    <!-- /.price-card__amount-fraction -->
                                </p><!-- /.price-card__amount -->
                                <div class="price-card__duration">
                                    <i class="far fa-clock"></i>
                                    20 Minutes
                                </div><!-- /.price-card__duration -->
                                <div class="price-card__bottom">
                                    <ul class="price-card__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Exterior Wash
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Interior Vacuum
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Exterior Polish
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Windows In & Out
                                        </li>
                                    </ul><!-- /.price-card__list -->
                                    <a href="online-booking.html" class="thm-btn">
                                        Order Now
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a><!-- /.thm-btn -->
                                </div><!-- /.price-card__bottom -->
                            </div><!-- /.price-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.tab-box__content -->

            </div><!-- /.tab-box -->
        </div><!-- /.container -->
    </section><!-- /.pricing-one -->

    <section class="feature-two">
        <div class="container">
            <div class="row flex-xl-row-reverse">
                <div class="col-xl-6">
                    <div class="feature-two__image">
                        <img src="assets/images/resources/feature-1-1.jpg" alt="">
                        <div class="feature-two__image-text wow flipInY" data-wow-duration="1500ms">
                            <i class="feature-two__image-line-left"></i>
                            <i class="feature-two__image-line-right"></i>
                            <i class="feature-two__image-line-top"></i>
                            <i class="feature-two__image-line-bottom"></i>
                            <span>30</span>
                            Years of
                            Experience
                        </div><!-- /.feature-two__image-text -->
                    </div><!-- /.feature-two__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6">
                    <div class="feature-two__content">
                        <div class="section-title">
                            <span class="section-title__tagline">Find Who We Are</span>
                            <h2 class="section-title__title">We Only Provide Quality <br>
                                Care Services</h2>
                        </div><!-- /.section-title -->

                        <ul class="list-unstyled feature-two__list">
                            <li class="feature-two__list-item">
                                <i class="feature-two__list-icon crsine-car"></i>
                                <div class="feature-two__list-content">
                                    <h3 class="feature-two__list-title">
                                        Natural Cleaners
                                    </h3><!-- /.feature-two__list-title -->
                                    <p class="feature-two__list-text">
                                        Donec pellentesque dapibus interdum. Mauris et tellus congue rutrum neque a, varius
                                        felis.
                                    </p><!-- /.feature-two__list-text -->
                                </div><!-- /.feature-two__list-content -->
                            </li>
                            <li class="feature-two__list-item">
                                <i class="feature-two__list-icon crsine-tire"></i>
                                <div class="feature-two__list-content">
                                    <h3 class="feature-two__list-title">
                                        Tire Shines
                                    </h3><!-- /.feature-two__list-title -->
                                    <p class="feature-two__list-text">
                                        Donec pellentesque dapibus interdum. Mauris et tellus congue rutrum neque a, varius
                                        felis.
                                    </p><!-- /.feature-two__list-text -->
                                </div><!-- /.feature-two__list-content -->
                            </li>
                            <li class="feature-two__list-item">
                                <i class="feature-two__list-icon crsine-mat"></i>
                                <div class="feature-two__list-content">
                                    <h3 class="feature-two__list-title">
                                        Mat Washing
                                    </h3><!-- /.feature-two__list-title -->
                                    <p class="feature-two__list-text">
                                        Donec pellentesque dapibus interdum. Mauris et tellus congue rutrum neque a, varius
                                        felis.
                                    </p><!-- /.feature-two__list-text -->
                                </div><!-- /.feature-two__list-content -->
                            </li>
                        </ul><!-- /.list-unstyled feature-two__list -->

                    </div><!-- /.feature-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-two -->

    <div class="gallery-two__home-title">
        <div class="container">
            Checkout Our Gallery
        </div><!-- /.container -->
    </div><!-- /.gallery-two__home-title -->

    <div class="gallery-two gallery-two__home">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": false, "spaceBetween": 0, "slidesPerView": 1, "autoplay": { "delay": 5000 }, "breakpoints": {
                "376": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "576": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "768": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "992": {
                    "spaceBetween": 30,
                    "slidesPerView": 4
                },
                "1200": {
                    "spaceBetween": 30,
                    "slidesPerView": 5
                }
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/gallery/gallery-2-1.jpg" alt="">
                        <a class="lightbox-image" href="assets/images/gallery/gallery-2-1.jpg"><i class="crsine-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/gallery/gallery-2-2.jpg" alt="">
                        <a class="lightbox-image" href="assets/images/gallery/gallery-2-2.jpg"><i class="crsine-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/gallery/gallery-2-3.jpg" alt="">
                        <a class="lightbox-image" href="assets/images/gallery/gallery-2-3.jpg"><i class="crsine-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/gallery/gallery-2-4.jpg" alt="">
                        <a class="lightbox-image" href="assets/images/gallery/gallery-2-4.jpg"><i class="crsine-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/gallery/gallery-2-5.jpg" alt="">
                        <a class="lightbox-image" href="assets/images/gallery/gallery-2-5.jpg"><i class="crsine-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.gallery-two -->--}}

    <section class="images-carousel-wrap">
        <div class="swiper images-carousel">
            <div class="swiper-wrapper">
                @php
                    $slides = [
                        asset('assets/images/backgrounds/main-slider-1-1.jpg'),
                        asset('assets/images/images-carousel/1.jpg'),
                        asset('assets/images/images-carousel/photo_2023-08-07_21-35-32.jpg'),
                        asset('assets/images/images-carousel/photo_2023-08-15_14-38-33.jpg'),
                        asset('assets/images/images-carousel/photo_2023-09-01_08-46-50.jpg'),
                        asset('assets/images/images-carousel/photo_2023-07-26_14-47-33 (2).jpg'),
                    ];
                @endphp
                @foreach($slides as $slide)
                    <div class="swiper-slide images-carousel__item">
                        <a href="{{ $slide }}" class="lightbox-image">
                            <div></div>
                        </a>
                        <img src="{{ $slide }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if(!empty($news)) {{-- TODO: Slider mobile--}}
        <section class="blog-home">
            <div class="container">
                <div class="blog-home__top">
                    <div class="section-title">
                        {{--<span class="section-title__tagline">Новости компании</span>--}}
                        <h2 class="section-title__title">Новости компании</h2>
                    </div><!-- /.section-title -->

                    {{--<div class="blog-home__top-text">
                        Donec pellentesque dapibus interdum. Mauris et tellus <br> congue rutrum neque a, varius felis.
                    </div><!-- /.blog-home__top-text -->--}}

                </div><!-- /.blog-home__top -->
                <div class="swiper-container main-news">
                    <div class="swiper-wrapper">
                        @foreach($news as $k => $post)
                            <div class="swiper-slide main-news__slide">
                                <x-news.card :$post class="wow flipInY" data-wow-duration="1100ms" data-wow-delay="{{ $k * 300 }}ms"/>
                            </div>
                        @endforeach
                    </div>
                </div><!-- /.swiper-container thm-swiper__slider -->
            </div><!-- /.container -->
        </section><!-- /.blog-home -->
    @endif

    <section>
        <div class="main-video">
            <div class="main-video__text">
                <h3>Посмотрите видео о нас</h3>
                <div class="main-video__description">
                    И вам точно понравится
                </div>
                <a href="https://www.youtube.com/watch?v=PxtNRoc_7J8" class="lightbox-image main-video__link"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </section>

{{--    <hr class="section-separator">
    <div class="client-carousel ">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 140,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.thm-swiper__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->--}}
@endsection


@section('scripts-after-jquery')
    <script src="{{ asset('assets/vendors/tilt/tilt.jquery.js') }}"></script>
@endsection
