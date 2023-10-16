{{--
@props(['comments_count' => -1])
<ul class="list-unstyled blog-card__meta">
    @if($comments_count != -1)
        <li class="blog-card__meta-item">
            <a href="#">
                <i class="far fa-comments"></i>
                {{ $comments_count }} {{ __('комментария') }}
            </a>
        </li>
    @endif
</ul><!-- /.blog-card__meta -->
--}}
