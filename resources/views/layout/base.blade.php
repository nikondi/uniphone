<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @section('head')
        @seo
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png"/>
        <link rel="manifest" href="assets/images/favicons/site.webmanifest"/>

        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/crsine-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-fancybox/jquery.fancybox.min.css') }}">
        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/crsine.css') }}"/>
    @show
</head>

<body>
<div class="preloader">
    <svg width="238" height="96" viewBox="0 0 238 96" fill="none" xmlns="http://www.w3.org/2000/svg" class="preloader__image">
        <defs>
            <clipPath id="preloader-svg-clip" clipPathUnits="userSpaceOnUse">
                <path d="M3.63105 31.5152H0V47.9644C3.18539e-05 57.0489 7.3895 64.4137 16.5049 64.4137C25.6202 64.4137 33.0096 57.0489 33.0096 47.9644C33.0096 47.9067 33.0093 47.8491 33.0087 47.7916C33.1016 40.7851 38.83 35.1339 45.8821 35.1339C52.882 35.1339 58.5766 40.7013 58.7517 47.6352H58.7561V47.9529V47.9644V47.9759V55.0373L58.757 64.4137H62.3877V47.9648C62.3877 38.8803 54.9975 31.5152 45.8821 31.5152C36.7667 31.5152 29.3775 38.88 29.3775 47.9644C29.3775 48.061 29.3782 48.1575 29.3799 48.2536L29.3754 48.2535C29.221 55.2058 23.5178 60.7949 16.5049 60.7949C9.39485 60.7949 3.63108 55.0507 3.63105 47.9644V47.9607C3.63108 47.8522 3.63248 47.7435 3.63522 47.6355H3.63105V31.5152Z"/>
                <path d="M73.0916 35.0089V64.6285H76.7222V35.0089C76.3425 35.6085 75.6714 36.0069 74.9069 36.0069C74.1423 36.0069 73.4713 35.6085 73.0916 35.0089Z"/>
                <path d="M146.233 48.0569L146.232 48.1289H146.234C146.323 57.1373 153.677 64.4133 162.738 64.4133C171.853 64.4133 179.242 57.0485 179.242 47.9643V47.8644V47.7999H179.244C179.332 40.7896 185.062 35.1339 192.116 35.1339C199.171 35.1339 204.901 40.7896 204.99 47.7999C204.989 47.8548 204.989 47.9097 204.989 47.9646C204.989 57.0488 212.38 64.4135 221.495 64.4135C221.605 64.4135 221.714 64.4126 221.824 64.4103V60.7909C221.715 60.7935 221.605 60.7951 221.495 60.7951C214.423 60.7951 208.685 55.1141 208.621 48.0825C208.622 48.0432 208.622 48.0039 208.622 47.9644C208.622 38.8799 201.232 31.5152 192.116 31.5152C183.001 31.5152 175.612 38.8799 175.612 47.9644C175.612 48.0743 175.613 48.1839 175.615 48.2933H175.607C175.432 55.2272 169.738 60.7946 162.738 60.7946C155.738 60.7946 150.043 55.2272 149.868 48.2933H149.865L149.861 48.2862C149.862 48.1792 149.864 48.0719 149.864 47.9644C149.864 38.88 142.475 31.5152 133.359 31.5152C124.244 31.5152 116.854 38.88 116.854 47.9644C116.854 48.0729 116.855 48.1812 116.857 48.2892H116.851C116.677 55.2253 110.982 60.7952 103.981 60.7952C96.9257 60.7952 91.1961 55.1392 91.1081 48.1292H90.9458V47.9068H87.5347V48.1292H87.4766C87.48 48.5475 87.5005 48.962 87.5347 49.3722V95.814H90.9458V58.0557C93.9656 61.9247 98.6812 64.4137 103.981 64.4137C110.382 64.4137 115.932 60.7816 118.669 55.4727L118.709 55.5476L118.682 55.4481C119.812 53.249 120.46 50.763 120.486 48.1289V48.0514V47.9647V47.8795C120.531 40.8327 126.277 35.1339 133.359 35.1339C140.469 35.1339 146.233 40.8785 146.233 47.9644V48.0569Z"/>
            </clipPath>
        </defs>

        <path d="M122.777 35.8796C121.48 36.7132 120.332 37.6994 119.366 38.7818V0H122.777V35.8796Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M146.233 51.476V64.4133H149.865V59.0066C148.075 56.8776 146.801 54.3039 146.233 51.476ZM149.865 51.0925C149.659 50.1873 149.545 49.2472 149.535 48.2823L149.361 47.9643H149.865V51.0925Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M120.485 51.476V64.4133H116.853V59.0066C118.643 56.8776 119.918 54.3039 120.485 51.476ZM116.853 51.0925C117.059 50.1873 117.173 49.2472 117.183 48.2823L117.357 47.9643H116.853V51.0925Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M33.0084 51.476V64.4133H29.3774V59.0066C31.167 56.8776 32.4412 54.3039 33.0084 51.476ZM29.3774 51.0925C29.5832 50.1873 29.6964 49.2472 29.7068 48.2823L29.8809 47.9643H29.3774V51.0925Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M29.3774 44.4525V31.5152H33.0084V36.9222C31.2189 39.0505 29.9448 41.6244 29.3774 44.4525ZM33.0084 44.8362C32.8027 45.7412 32.6895 46.6811 32.6793 47.6464L32.5052 47.9644H33.0084V44.8362Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M204.989 51.476V64.4133H208.621V59.0066C206.831 56.8776 205.556 54.3039 204.989 51.476ZM208.621 51.0925C208.415 50.1873 208.301 49.2472 208.291 48.2823L208.117 47.9643H208.621V51.0925Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M179.242 51.476V64.4133H175.612V59.0066C177.402 56.8776 178.675 54.3039 179.242 51.476ZM175.612 51.0925C175.817 50.1873 175.93 49.2472 175.941 48.2823L176.116 47.9643H175.612V51.0925Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M177.223 40.0725C174.42 34.9727 168.984 31.5152 162.738 31.5152C156.51 31.5152 151.087 34.9533 148.278 40.0291C149.191 41.7647 149.809 43.6791 150.063 45.7067C151.133 39.6973 156.402 35.1339 162.738 35.1339C169.086 35.1339 174.361 39.7125 175.419 45.737C175.679 43.7129 176.303 41.802 177.223 40.0725ZM177.607 47.7999H179.078V50.2996C179.187 49.5369 179.243 48.7572 179.243 47.9644C179.243 47.2035 179.191 46.4548 179.091 45.7214C178.983 46.3701 178.922 47.0353 178.914 47.7126H177.627L177.607 47.7999ZM146.562 47.9804C146.563 47.9246 146.563 47.8689 146.563 47.8127C146.563 47.0869 146.504 46.3749 146.391 45.6809C146.287 46.4274 146.233 47.1896 146.233 47.9644C146.233 49.9675 146.593 51.8864 147.251 53.6612L148.238 49.1865L147.501 47.3094L146.828 47.9804H146.562Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M118.465 40.0725C115.662 34.9727 110.226 31.5152 103.98 31.5152C95.0308 31.5152 87.7447 38.6147 87.4824 47.4707H91.1156C91.3762 40.6133 97.0366 35.1339 103.98 35.1339C110.328 35.1339 115.602 39.7125 116.661 45.737C116.921 43.7129 117.545 41.802 118.465 40.0725ZM118.85 47.7999H120.321V50.2996C120.429 49.5369 120.485 48.7572 120.485 47.9644C120.485 47.2035 120.433 46.4548 120.333 45.7214C120.225 46.3701 120.164 47.0353 120.156 47.7126H118.869L118.85 47.7999ZM88.4922 53.6612C88.4409 53.5232 88.3922 53.3848 88.3444 53.2446C88.4734 53.0336 88.5998 52.8248 88.722 52.6195L88.4922 53.6612Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M205.32 47.8127C205.32 47.8688 205.319 47.9246 205.318 47.9804H205.583L206.257 47.3094L206.931 49.0259L205.927 53.4454C205.32 51.7308 204.989 49.8859 204.989 47.9644C204.989 47.1896 205.043 46.4274 205.147 45.6809C205.261 46.3749 205.32 47.0869 205.32 47.8127ZM207.034 40.0291C207.947 41.7647 208.564 43.6791 208.819 45.7064C209.889 39.6972 215.157 35.1339 221.494 35.1339C228.604 35.1339 234.368 40.8785 234.368 47.9644H237.999C237.999 38.8799 230.609 31.5152 221.494 31.5152C215.266 31.5152 209.843 34.9533 207.034 40.0291Z" fill="#636363" class="preloader-svg-gray"/>
        <path d="M208.951 45.9903H237.674L238 47.7999V49.6091H209.116L208.951 45.9903Z" fill="#636363" class="preloader-svg-gray"/>

        <path d="M75.0968 35.1339C76.0998 35.1339 76.9121 34.3237 76.9121 33.3244C76.9121 32.3251 76.0998 31.5152 75.0968 31.5152C74.0942 31.5152 73.2815 32.3251 73.2815 33.3244C73.2815 34.3237 74.0942 35.1339 75.0968 35.1339Z" fill="#246BFD" id="preloader-svg-dot"/>

        {{--<path d="M222.5 62.5C214.5 62.5 207 58 207 49C207 28 177.5 28.5 177.5 48.5C177.5 67.5 148 66.5 148 48.5C148 28 118.5 28.5 118.5 48.5C118.5 69 88.7986 66.5 88.9995 47L88.9997 96.5L75 67.5V34.5H67V67.5H60V46C60 29 31.5 29 31.5 48.5C31.5 67 2.5 67 2.5 48.5V31.5" stroke="#0f0f0f" stroke-width="5"  clip-path="url(#preloader-svg-clip)"/>--}}
        <path d="M2.00004 31.5C1.99995 33 2.00014 40 2 45C1.99934 69 32 67 32 46C32 30.5 59.9999 28.5 59.9999 46C59.9999 47 59.9999 58.5 59.9999 64.5" stroke="#0f0f0f" stroke-width="5" clip-path="url(#preloader-svg-clip)" id="preloader-svg-un"/>
        <path d="M75 65V34.5" stroke="#0f0f0f" stroke-width="5" clip-path="url(#preloader-svg-clip)" id="preloader-svg-i"/>
        <path d="M88.5 95.5L88.9997 47C88.7988 66.5 118.5 69 118.5 48.5C118.5 28.5 148 28 148 48.5C148 66.5 177.5 67.5 177.5 48.5C177.5 28.5 207 28 207 49C207 58 214.5 62.5 222.5 62.5" stroke="#0f0f0f" stroke-width="5" clip-path="url(#preloader-svg-clip)" id="preloader-svg-phone"/>
    </svg>


</div>
<!-- /.preloader -->
<script>
    document.querySelector('.preloader').style.display = 'flex';
</script>
<div class="page-wrapper">
    @include('layout.header')

    <div class="page-content">
    @section('content')
    @show


    @include('layout.footer')
</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image">
                <img src="{{ asset('assets/images/logo-dark.svg') }}" width="160" alt=""/>
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@crsine.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<div class="mini-cart">
    <div class="mini-cart__overlay mini-cart__toggler"></div>
    <div class="mini-cart__content">
        <div class="mini-cart__top">
            <h3 class="mini-cart__title">Shopping Cart</h3>
            <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
        </div><!-- /.mini-cart__top -->
        <div class="mini-cart__item">
            <img src="assets/images/products/product-s-1.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Tire with Wheel </a></h3>
                    <p>$3.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="1" value="1"/>
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <div class="mini-cart__item">
            <img src="assets/images/products/product-s-2.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Car Breaks </a></h3>
                    <p>$120.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="2" value="1"/>
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <div class="mini-cart__item">
            <img src="assets/images/products/product-s-3.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Oil Filters </a></h3>
                    <p>$9.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="3" value="1"/>
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <a href="checkout.html" class="thm-btn mini-cart__checkout">Proceed To Checkout <i
                class="far fa-arrow-alt-circle-right"></i></a>
    </div><!-- /.mini-cart__content -->
</div><!-- /.cart-toggler -->


<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..."/>
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="crsine-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


@section('scripts')
    <script src="{{ asset('assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    @yield('scripts-after-jquery')
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-fancybox/jquery.fancybox.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/js/crsine.js') }}"></script>
@show
</body>

</html>
