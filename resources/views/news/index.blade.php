@extends('layout.base')

@section('breadcrumbs')
    <li><a href="{{ route('welcome') }}">{{ __('Главная') }}</a></li>
    <li>/</li>
    <li><span>{{ __('Новости') }}</span></li>
@endsection

@section('pagetitle', __('Новости'))

@section('content')
    <section class="news-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-1.png" alt="">
                            <a href="news-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                20 Jan
                            </div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i>
                                        by Admin
                                    </a>
                                </li>
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                        2 Comments
                                    </a>
                                </li>
                            </ul><!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="news-details.html">
                                    Get Some Useful Car Service Tips
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                Lorem ipsum is simply free text used by copytyping refreshing.
                            </p><!-- /.blog-card__text -->
                            <a href="news-details.html" class="blog-card__more">
                                Read More
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.blog-card__more -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-2.png" alt="">
                            <a href="news-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                20 Jan
                            </div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i>
                                        by Admin
                                    </a>
                                </li>
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                        2 Comments
                                    </a>
                                </li>
                            </ul><!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="news-details.html">
                                    Globally orchestrate interoperable service
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                Lorem ipsum is simply free text used by copytyping refreshing.
                            </p><!-- /.blog-card__text -->
                            <a href="news-details.html" class="blog-card__more">
                                Read More
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.blog-card__more -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-3.png" alt="">
                            <a href="news-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                20 Jan
                            </div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i>
                                        by Admin
                                    </a>
                                </li>
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                        2 Comments
                                    </a>
                                </li>
                            </ul><!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="news-details.html">
                                    Authoritatively scale channels and multi
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                Lorem ipsum is simply free text used by copytyping refreshing.
                            </p><!-- /.blog-card__text -->
                            <a href="news-details.html" class="blog-card__more">
                                Read More
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.blog-card__more -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-4.png" alt="">
                            <a href="news-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                20 Jan
                            </div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i>
                                        by Admin
                                    </a>
                                </li>
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                        2 Comments
                                    </a>
                                </li>
                            </ul><!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="news-details.html">
                                    Whereas quality models. Rapidiously customized.
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                Lorem ipsum is simply free text used by copytyping refreshing.
                            </p><!-- /.blog-card__text -->
                            <a href="news-details.html" class="blog-card__more">
                                Read More
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.blog-card__more -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-5.png" alt="">
                            <a href="news-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                20 Jan
                            </div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i>
                                        by Admin
                                    </a>
                                </li>
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                        2 Comments
                                    </a>
                                </li>
                            </ul><!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="news-details.html">
                                    Objectively fabricate via just in time resources.
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                Lorem ipsum is simply free text used by copytyping refreshing.
                            </p><!-- /.blog-card__text -->
                            <a href="news-details.html" class="blog-card__more">
                                Read More
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.blog-card__more -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-6.png" alt="">
                            <a href="news-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                20 Jan
                            </div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i>
                                        by Admin
                                    </a>
                                </li>
                                <li class="blog-card__meta-item">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                        2 Comments
                                    </a>
                                </li>
                            </ul><!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="news-details.html">
                                    Intri nsicly unleash energy innovation.
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                Lorem ipsum is simply free text used by copytyping refreshing.
                            </p><!-- /.blog-card__text -->
                            <a href="news-details.html" class="blog-card__more">
                                Read More
                                <i class="far fa-arrow-alt-circle-right"></i>
                            </a><!-- /.blog-card__more -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            </div><!-- /.row -->

            <ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul><!-- /.post-pagination -->

        </div><!-- /.container -->
    </section><!-- /.news-page -->
@endsection
