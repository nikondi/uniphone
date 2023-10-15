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
        <div class="mobile-nav__container">
            @include('layout.parts.header.menu-list')
        </div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:@settings('email_support')">@settings('email_support')</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ phone_link(settings('phone')) }}">@settings('phone')</a>
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