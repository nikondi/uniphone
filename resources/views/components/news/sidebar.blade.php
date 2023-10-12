<li>
    <img src="{{ $post->getThumbnail() }}" alt="">
    <span><i class="far fa-clock"></i>{{ $post->published_at->translatedFormat('d M, Y') }}</span>
    <h4><a href="{{ route('news.show', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a></h4>
</li>
