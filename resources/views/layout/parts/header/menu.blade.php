<nav class="main-menu">
    <div class="container">
        <div class="main-menu__inner">

            <div class="main-menu__logo">
                <a href="/">
                    <img src="{{ asset('assets/images/logo-dark.svg') }}" width="160" alt="Crsine - Car services html template">
                </a>
            </div><!-- /.main-menu__logo -->

            @include('layout.parts.header.menu-list')

            <div class="main-menu__right">
                {{--                    <a href="#" class="main-menu__search search-toggler crsine-magnifying-glass"></a>--}}
                {{--                    <a href="#" class="main-menu__cart crsine-shopping-cart mini-cart__toggler"></a>--}}
                <a href="#" class="thm-btn thm-btn--iconleft">
                    <i class="far fa-user"></i>
                    {{ __('Личный кабинет') }}
                </a><!-- /.thm-btn -->
                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
            </div><!-- /.main-menu__right -->
        </div><!-- /.main-menu__inner -->
    </div><!-- /.container -->
</nav>
<!-- /.main-menu -->
