<ul class="main-menu__list">
    <li{!! active_link('welcome', ' class="current"') !!}>
        <a href="{{ route('welcome') }}">{{ __('Главная') }}</a>
    </li>
    <li{!! active_link('about', ' class="current"') !!}>
        <a href="{{ route('about') }}">{{ __('О компании') }}</a>
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
    <li{!! active_link('contacts', ' class="current"') !!}>
        <a href="{{ route('contacts') }}">{{ __('Контакты') }}</a>
    </li>
</ul>
