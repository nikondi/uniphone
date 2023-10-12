@props(['post'])

<div {{ $attributes->class(['blog-card']) }}>
    <div class="blog-card__image">
        <img src="{{ $post->getThumbnail() }}" alt="">
        <a href="{{ route('news.show', ['post_slug' => $post->slug]) }}"></a>
        <x-news.card-date :date="$post->published_at" />
    </div><!-- /.blog-card__image -->
    <div class="blog-card__content">
        <x-news.card-meta comments_count="2"/>
        <h3 class="blog-card__title">
            <a href="{{ route('news.show', ['post_slug' => $post->slug]) }}">
                {{ $post->title }}
            </a>
        </h3><!-- /.blog-card__title -->
        <p class="blog-card__text">
            {{ $post->short }}
        </p><!-- /.blog-card__text -->
        <a href="{{ route('news.show', ['post_slug' => $post->slug]) }}" class="blog-card__more">
            Подробнее
            <i class="far fa-arrow-alt-circle-right"></i>
        </a><!-- /.blog-card__more -->
    </div><!-- /.blog-card__content -->
</div><!-- /.blog-card -->
