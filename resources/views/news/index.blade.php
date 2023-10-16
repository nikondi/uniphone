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

            {{ $posts->onEachSide(2)->links('layout.parts.paginate') }}

        </div><!-- /.container -->
    </section><!-- /.news-page -->
@endsection
