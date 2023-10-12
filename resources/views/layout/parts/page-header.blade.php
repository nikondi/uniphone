<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>@yield('pagetitle')</h2>
        <ul class="thm-breadcrumb list-unstyled">
            @yield('breadcrumbs')
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
