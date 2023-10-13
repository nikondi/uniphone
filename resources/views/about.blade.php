@extends('layout.base')

@section('pagetitle', 'О компании')

@section('breadcrumbs')
    <li><a href="{{ route('welcome') }}">{{ __('Главная') }}</a></li>
    <li>/</li>
    <li><span>{{ __('О компании') }}</span></li>
@endsection


@section('content')
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/images/resources/about-1-1.jpg" alt="" class="img-fluid">
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <img src="assets/images/resources/about-1-2.jpg" alt="" class="img-fluid">
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <span class="section-title__tagline">Write a Message</span>
                        <h2 class="section-title__title">We’re the Leading
                            Carwash Center
                            For You</h2>
                    </div><!-- /.section-title -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="about-one__content">
                        <p class="about-one__highlighted">We have 30+ years of experiences for give you better quality
                            results.</p><!-- /.about-one__highlighted -->
                        <p class="about-one__text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even you are
                            going to use a passage.
                        </p><!-- /.about-one__text -->
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <hr class="section-separator">
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
    </div><!-- /.client-carousel -->

    <section class="team-about">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Meet Our Team</span>
                <h2 class="section-title__title">Meet Our Professional <br>
                    Skilled Staff</h2>
            </div><!-- /.section-title -->
            <div class="row team-card__row">
                <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-1.jpg" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                            <h3>Jessica Brown</h3>
                            <p>Worker</p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-lg-6 col-xl-3 -->
                <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-2.jpg" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                            <h3>Jordan Rodriquez</h3>
                            <p>Worker</p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-lg-6 col-xl-3 -->
                <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-4.jpg" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                            <h3>Leila Manning</h3>
                            <p>Worker</p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-lg-6 col-xl-3 -->
                <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-3.jpg" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                            <h3>Martin McLaughlin</h3>
                            <p>Worker</p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-lg-6 col-xl-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-about -->

    <section class="testimonials-one">
        <div class="testimonials-one__boxed">
            <div class="container">
                <div class="swiper-container testimonials-one__thumb" id="testimonials-one__thumb">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/testi-1-1.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/testi-1-2.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/testi-1-3.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container -->
                <div class="swiper-container testimonials-one__carousel" id="testimonials-one__carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="testimonials-one__text">This is due to their excellent service, competitive pricing
                                and customer support. It’s
                                throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                                dolor in
                                reprehenderit in esse nulla pariatur.</p>
                            <div class="testimonials-two__meta">
                                <h3 class="testimonials-one__name">Christine Rose</h3>
                                <span class="testimonials-one__designation">Customer</span>
                            </div><!-- /.testimonials-two__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <p class="testimonials-one__text">This is due to their excellent service, competitive pricing
                                and customer support. It’s
                                throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                                dolor in
                                reprehenderit in esse nulla pariatur.</p>
                            <div class="testimonials-two__meta">
                                <h3 class="testimonials-one__name">Christine Rose</h3>
                                <span class="testimonials-one__designation">Customer</span>
                            </div><!-- /.testimonials-two__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <p class="testimonials-one__text">This is due to their excellent service, competitive pricing
                                and customer support. It’s
                                throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                                dolor in
                                reprehenderit in esse nulla pariatur.</p>
                            <div class="testimonials-two__meta">
                                <h3 class="testimonials-one__name">Christine Rose</h3>
                                <span class="testimonials-one__designation">Customer</span>
                            </div><!-- /.testimonials-two__meta -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.testimonials-one__boxed -->
    </section><!-- /.testimonials-one -->

    <div class="gallery-two">
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
    </div><!-- /.gallery-two -->

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
@endsection
