@extends('layout.base')

@section('breadcrumbs')
    <x-breadcrumbs.link :url="route('welcome')" :text="__('Главная')"/>
    <x-breadcrumbs.separator/>
    <x-breadcrumbs.static :text="__('Камеры')"/>
@endsection

@section('pagetitle', 'Камеры')

@section('content')
    <section class="py-4">
        <div class="container">
            <iframe src="https://camera.lipetsk.ru" height="800" width="100%"></iframe>
        </div>
    </section>
@endsection
