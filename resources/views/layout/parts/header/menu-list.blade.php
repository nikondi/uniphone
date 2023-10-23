<ul class="main-menu__list">
    <li{!! active_link('welcome', ' class="current"') !!}>
        <a href="{{ route('welcome') }}">{{ __('Главная') }}</a>
    </li>
    <li{!! active_link('about', ' class="current"') !!}>
        <a href="{{ route('about') }}">{{ __('О компании') }}</a>
    </li>
    <li class="dropdown">
        <a href="">{{ __('Каталог') }}</a>
        <ul>
            <li><a href="services.html">СКУД</a></li>
            <li><a href="service-details.html">И тд</a></li>
        </ul>
    </li>
    <li{!! active_link('news*', ' class="current"') !!}>
        <a href="{!! route('news.index') !!}">{{ __('Новости') }}</a>
    </li>
    <li{!! active_link('contacts', ' class="current"') !!}>
        <a href="{{ route('contacts') }}">{{ __('Контакты') }}</a>
    </li>
</ul>
