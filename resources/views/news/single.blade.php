<?php
    /**
     * @var \App\Models\News $post
     */
?>
@extends('layout.base')

@section('pagetitle', $post->title)

@section('breadcrumbs')
    <x-breadcrumbs.link :url="route('welcome')" :text="__('Главная')"/>
    <x-breadcrumbs.separator/>
    <x-breadcrumbs.link :url="route('news.index')" :text="__('Новости')"/>
@endsection

@section('content')
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="blog-card__image blog-details__image">
                        <x-news.card-date :date="$post->published_at" class="blog-details__date"/>
                        @php $pictures = $post->getPictures() @endphp
                        @if(!empty($pictures))
                            @if(sizeof($pictures) > 1)
                                <div class="swiper-container post-pictures">
                                    <div class="swiper-wrapper">
                                        @foreach($post->getPictures() as $picture)
                                            <div class="swiper-slide post-picture">
                                                <a href="{{ $picture }}" class="lightbox-image">
                                                    <img src="{{ $picture }}" alt="">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="slider-dots post-pictures__paginate"></div>
                                </div>
                            @else
                                <img src="{{ $pictures[0] }}" alt="">
                            @endif
                        @endif
                    </div><!-- /.blog-card__image -->


                    <div class="blog-details__content blog-card__content">
                        <x-news.card-meta :comments_count="2"/>

{{--                        <h3 class="blog-card__title">Get Some Useful Car Service Tips</h3>--}}

                        <div class="blog-content mt-4">
                            {!! $post->content !!}
                        </div>
                    </div><!-- /.blog-details__content -->
{{--                    <div class="blog-details__meta">
                        <p class="blog-details__tags"><span>Tags:</span><a href="#">Car washing,</a><a href="#">Car
                                washing</a></p>
                        <div class="blog-details__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div><!-- /.blog-details__social -->
                    </div><!-- /.blog-details__meta -->

                    <div class="blog-author">
                        <div class="blog-author__image">
                            <img src="{{ asset('assets/images/blog/blog-author-1-1.jpg') }}" alt="">
                        </div><!-- /.blog-author__image -->
                        <div class="blog-author__content">
                            <h3>Mike Hardson</h3>
                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem
                                ipsum quia quaed inventore veritatis et quasi est qui dolorem
                                ipsum quia quaed inventore veritatis et quasi.</p>
                        </div><!-- /.blog-author__content -->
                    </div><!-- /.blog-author -->
                    <div class="blog-comment">
                        <h2>2 Comments</h2>
                        <div class="blog-comment__box">
                            <div class="blog-comment__image">
                                <img src="{{ asset('assets/images/blog/blog-comment-1-1.jpg') }}" alt="">
                            </div><!-- /.blog-comment__image -->
                            <div class="blog-comment__content">
                                <div class="blog-comment__content-top">
                                    <h3>Kevin Martin</h3>
                                    <span><i class="far fa-clock"></i>28 Nov, 2020</span>
                                </div><!-- /.blog-comment__content-top -->
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explicabo.</p>
                                <a href="#" class="thm-btn">
                                    Reply <i class="far fa-arrow-alt-circle-right"></i> </a><!-- /.thm-btn -->
                            </div><!-- /.blog-comment__content -->
                        </div><!-- /.blog-comment__box -->
                        <div class="blog-comment__box">
                            <div class="blog-comment__image">
                                <img src="{{ asset('assets/images/blog/blog-comment-1-2.jpg') }}" alt="">
                            </div><!-- /.blog-comment__image -->
                            <div class="blog-comment__content">
                                <div class="blog-comment__content-top">
                                    <h3>Sarah Albert</h3>
                                    <span><i class="far fa-clock"></i>28 Nov, 2020</span>
                                </div><!-- /.blog-comment__content-top -->
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explicabo.</p>
                                <a href="#" class="thm-btn">
                                    Reply <i class="far fa-arrow-alt-circle-right"></i> </a><!-- /.thm-btn -->
                            </div><!-- /.blog-comment__content -->
                        </div><!-- /.blog-comment__box -->
                    </div><!-- /.blog-comment -->
                    <div class="comment-form">
                        <h2>Leave a Comments</h2>

                        <form action="{{ asset('assets/inc/sendemail.php') }}" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Submit Comment</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.comment-form -->--}}
                </div><!-- /.col-md-12 col-lg-9 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-sidebar">
                        {{--<div class="blog-sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="crsine-magnifying-glass"></i></button>
                            </form>
                        </div><!-- /.blog-sidebar__search -->--}}
                        <div class="blog-sidebar__posts">
                            <h3>Похожие новости</h3>
                            <ul>
                                @foreach($sidebar_posts as $post)
                                    <x-news.sidebar :$post/>
                                @endforeach
                            </ul>
                        </div><!-- /.blog-sidebar__posts -->
{{--
                        <div class="service-details__menu">
                            <h3 class="service-details__menu-title">Categories</h3>
                            <ul class="list-unstyled service-details__menu-list">
                                <li><a href="service-details.html">Full Service Wash
                                    </a></li>

                                <li><a href="service-details.html">
                                        Auto Detailing
                                    </a></li>
                                <li><a href="service-details.html">
                                        Express Interior
                                    </a></li>
                                <li><a href="service-details.html">
                                        Interior Polish
                                    </a></li>
                                <li><a href="service-details.html">
                                        Tire Shine
                                    </a></li>
                                <li><a href="service-details.html">
                                        Engine Wash
                                    </a></li>
                            </ul><!-- /.list-unstyled service-details__menu-list -->
                        </div><!-- /.service-details__menu -->
                        <div class="blog-sidebar__tags">
                            <h3>Tags</h3>
                            <div class="blog-sidebar__tags-links">
                                <a href="#">Carwashing,</a>
                                <a href="#">Auto Car Detailing,</a>
                                <a href="#">Express Interior,</a>
                                <a href="#">Interior Polish,</a>
                                <a href="#">Tire Shine,</a>
                                <a href="#">Engine Wash</a>
                            </div><!-- /.blog-sidebar__tags-links -->
                        </div><!-- /.blog-sidebar__tags -->
                        <div class="blog-sidebar__gallery">
                            <h3>Gallery</h3>
                            <div class="blog-sidebar__gallery-links">
                                <a href="{{ asset('assets/images/blog/gallery-1-1.jpg') }}" class="lightbox-image">
                                    <img src="{{ asset('assets/images/blog/gallery-1-1.jpg') }}" alt="">
                                </a>
                                <a href="{{ asset('assets/images/blog/gallery-1-2.jpg') }}" class="lightbox-image">
                                    <img src="{{ asset('assets/images/blog/gallery-1-2.jpg') }}" alt="">
                                </a>
                                <a href="{{ asset('assets/images/blog/gallery-1-3.jpg') }}" class="lightbox-image">
                                    <img src="{{ asset('assets/images/blog/gallery-1-3.jpg') }}" alt="">
                                </a>
                                <a href="{{ asset('assets/images/blog/gallery-1-4.jpg') }}" class="lightbox-image">
                                    <img src="{{ asset('assets/images/blog/gallery-1-4.jpg') }}" alt="">
                                </a>
                                <a href="{{ asset('assets/images/blog/gallery-1-5.jpg') }}" class="lightbox-image">
                                    <img src="{{ asset('assets/images/blog/gallery-1-5.jpg') }}" alt="">
                                </a>
                                <a href="{{ asset('assets/images/blog/gallery-1-6.jpg') }}" class="lightbox-image">
                                    <img src="{{ asset('assets/images/blog/gallery-1-6.jpg') }}" alt="">
                                </a>
                            </div><!-- /.blog-sidebar__tags-links -->
                        </div><!-- /.blog-sidebar__tags -->
--}}

                    </div><!-- /.blog-sidebar -->
                </div><!-- /.col-md-12 col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->
@endsection
