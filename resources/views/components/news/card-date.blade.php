<div {{ $attributes->class('blog-card__date') }}>
    <i class="fas fa-calendar-alt"></i><p class="blog-card__date-text">{{ $date->getTranslatedShortMonthName() }} {{ $date->format('d') }}</p>
</div>
