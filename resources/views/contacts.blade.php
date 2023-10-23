@extends('layout.base')

@section('pagetitle', 'Контакты')

@section('breadcrumbs')
    <x-breadcrumbs.link :url="route('welcome')" :text="__('Главная')"/>
    <x-breadcrumbs.separator/>
    <x-breadcrumbs.static :text="__('Контакты')"/>
@endsection

@section('scripts-after-jquery')
    <script src="{{ asset('assets/vendors/jquery-masked-input/jquery.maskedinput.min.js') }}"></script>
@endsection

@section('content')
    <section class="contact-one">
        <div class="container">
            <div class="section-title">
                <span class="section-title__tagline">{{ __('Напишите нам') }}</span>
                <h2 class="section-title__title">{!! __('Задайте интересующий вопрос<br /> или предложение') !!}</h2>
            </div><!-- /.section-title -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-one__content">
                        <p class="contact-one__text">
                            {!! __('Наши менеджеры ответят Вам как можно скорее. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam earum error impedit minima optio quibusdam quis, reiciendis repellendus sit velit?') !!}
                        </p>
                        <p class="contact-one__address">г. Липецк <br>
                            ул. Бехтеева, д. 4</p><!-- /.contact-one__address -->
                        <ul class="contact-one__list list-unstyled">
                            <li>
                                <a href="mailto:@settings('email_support')"><i class="fa fa-envelope"></i>@settings('email_support')</a>
                            </li>
                            <li>
                                <a href="tel:{{ phone_link(settings('phone')) }}"><i class="fa fa-phone-square-alt"></i>
                                    @settings('phone')
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.contact-one__content -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <form action="{{ route('feedback.send') }}" class="contact-form-validated contact-one__form">
                        <div class="row">
                            <div class="col-md-6 input-wrap">
                                <input type="text" placeholder="Имя" name="name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 input-wrap">
                                <input type="email" placeholder="E-mail" name="email">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 input-wrap">
                                <input type="tel" placeholder="Номер телефона" name="phone" class="tel">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 input-wrap">
                                <select name="subject">
                                    <option value="" selected disabled>Выберите тему</option>
                                    <option value="zakaz">Заказ</option>
                                    <option value="question">Заявка на ремонт</option>
                                    <option value="suggest">Предложение</option>
                                </select>
                                {{--<option value="1">Домофон</option>
                                <option value="2">Телевидение</option>
                                <option value="2">Остановка</option>--}}
                                {{--                                <input type="text" placeholder="Тема" name="subject">--}}
                            </div><!-- /.col-md-6 -->
                            {{-- TODO: второй селект на тип услуги --}}
                            <div class="col-md-12 input-wrap">
                                <textarea name="message" placeholder="Сообщение"></textarea>
                            </div><!-- /.col-md-12 -->
                            {{-- TODO: Текст согласия --}}
                            <div class="col-md-12">
                                <button type="submit" class="thm-btn">
                                    Отправить
                                    <i class="far fa-arrow-alt-circle-right"></i>
                                </button>
                            </div><!-- /.col-md-12 -->
                            @csrf
                        </div><!-- /.row -->
                    </form><!-- /.contact-form-validated contact-one__form -->
                    <div class="result">
                        <div class="contacts__result contacts__result--success"><p class="success">Спасибо, что связались с нами. Мы скоро вам ответим</p></div><!-- /.inner -->
                        <div class="contacts__result contacts__result--error"><p class="error">Что-то пошло не так. Попробуйте позже</p></div>
                    </div><!-- /.result -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <div class="map__contact-page">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac09b94c8b3eea274c973215c676a5ba48997b9814fc02f1de9ee90c866e3157f&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
    <!-- /.google-map -->
@endsection
