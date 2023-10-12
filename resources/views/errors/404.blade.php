@extends('layout.error')

@section('content')
    <section class="error-section">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/shapes/404-bg.png') }});"></div>
        <div class="container">

            <h1 class="error-section__title">404</h1>
            <h3 class="error-section__subtitle">{{ __('Страница не найдена') }}</h3>
            <p class="error-section__text mb-3">{{ __('Вы попали на страницу, которая не существует, либо зашли по неверному адресу') }}</p>
{{--            <form action="#" class="search-form">
                <input type="text" placeholder="Search" name="s">
                <button type="submit">
                    <i class="crsine-magnifying-glass"></i>
                </button>
            </form>--}}
            <a href="{{ route('welcome') }}" class="thm-btn">
                {{ __('На главную') }}
                <i class="far fa-arrow-alt-circle-right"></i>
            </a><!-- /.thm-btn -->
        </div><!-- /.container -->
    </section><!-- /.error-section -->
@endsection

