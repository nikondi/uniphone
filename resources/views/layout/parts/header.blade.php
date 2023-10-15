<header class="main-header">
    @if(!isset($topbar) || $topbar)
        @include('layout.parts.header.topbar')
    @endif
    @include('layout.parts.header.menu')
</header><!-- /.main-header -->

<div class="stricky-header stricked-menu">
    <div class="sticky-header__content">
        @include('layout.parts.header.menu')
    </div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<div class="stricky-trigger"></div>
