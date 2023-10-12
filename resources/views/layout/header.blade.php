<header class="main-header">
    <div class="topbar">
        <div class="container">
            <div class="topbar__inner">
                <ul class="list-unstyled topbar__infos">
                    <li class="topbar__infos-item">
                        <a class="topbar__infos-link" href="#"><i class="far fa-clock"></i> Monday to Saturday 9:00 to
                            6:00</a>
                    </li>
                    <li class="topbar__infos-item">
                        <a class="topbar__infos-link" href="tel:92-666-888-0000"><i class="fa fa-phone-alt"></i> 92 666
                            888 000</a>
                    </li>
                </ul><!-- /.list-unstyled topbar__infos -->

                <div class="topbar__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.topbar__social -->
            </div><!-- /.topbar__inner -->
        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <nav class="main-menu">
        <div class="container">
            <div class="main-menu__inner">

                <div class="main-menu__logo">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo-dark.svg') }}" width="160" alt="Crsine - Car services html template">
                    </a>
                </div><!-- /.main-menu__logo -->
                <ul class="main-menu__list">
                    <li{!! active_link('welcome', ' class="current"') !!}>
                        <a href="{{ route('welcome') }}">{{ __('Главная') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ __('О компании') }}</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">{{ __('Каталог') }}</a>
                        <ul>
                            <li><a href="services.html">СКУД</a></li>
                            <li><a href="service-details.html">И тд</a></li>
                        </ul>
                    </li>
                    {{--<li class="dropdown">
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="online-booking.html">Online Booking</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="help.html">Help</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li>--}}
                    <li{!! active_link('news*', ' class="current"') !!}>
                        <a href="{!! route('news') !!}">{{ __('Новости') }}</a>
                    </li>
                    <li>
                        <a href="shop.html">{{ __('Контакты') }}</a>
                    </li>
                </ul>
                <div class="main-menu__right">
{{--                    <a href="#" class="main-menu__search search-toggler crsine-magnifying-glass"></a>--}}
{{--                    <a href="#" class="main-menu__cart crsine-shopping-cart mini-cart__toggler"></a>--}}
                    <a href="online-booking.html" class="thm-btn thm-btn--iconleft">
                        <i class="far fa-user"></i>
                        {{ __('Личный кабинет') }}
                    </a><!-- /.thm-btn -->
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                </div><!-- /.main-menu__right -->
            </div><!-- /.main-menu__inner -->
        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header><!-- /.main-header -->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
