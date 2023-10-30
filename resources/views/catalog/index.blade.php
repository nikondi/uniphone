@extends('layout.base')

@section('breadcrumbs')
    <x-breadcrumbs.link text="Главная" :url="route('welcome')"/>
    <x-breadcrumbs.separator/>
    <x-breadcrumbs.static text="Каталог"/>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="category-list">
                <div class="category-card">
                    <div class="category-card__image"></div>
                    <div class="category-card__image"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
