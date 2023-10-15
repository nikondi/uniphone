<div class="topbar">
    <div class="container">
        <div class="topbar__inner">
            <ul class="list-unstyled topbar__infos">
                <li class="topbar__infos-item">
                        <span class="topbar__infos-link">
                            <i class="far fa-clock"></i>
                            @settings('worktime')
                        </span>
                </li>
                <li class="topbar__infos-item">
                    <a class="topbar__infos-link" href="tel:{{ phone_link(settings('phone')) }}">
                        <i class="fa fa-phone-alt"></i>
                        @settings('phone')
                    </a>
                </li>
            </ul><!-- /.list-unstyled topbar__infos -->

            <div class="topbar__social">
                {{--<a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>--}}
            </div><!-- /.topbar__social -->
        </div><!-- /.topbar__inner -->
    </div><!-- /.container -->
</div><!-- /.topbar -->
