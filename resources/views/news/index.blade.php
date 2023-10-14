@extends('layout.base')

@section('breadcrumbs')
    <x-breadcrumbs.link :url="route('welcome')" :text="__('Главная')"/>
    <x-breadcrumbs.separator/>
    <x-breadcrumbs.static :text="__('Новости')"/>
@endsection

@section('pagetitle', __('Новости'))

@section('content')
    <section class="news-page">
        <div class="container">
            <div class="row">
                @foreach($posts as $k => $post)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <x-news.card :$post/>
                    </div>
                @endforeach
            </div><!-- /.row -->

            <ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul><!-- /.post-pagination -->

        </div><!-- /.container -->
    </section><!-- /.news-page -->
@endsection
