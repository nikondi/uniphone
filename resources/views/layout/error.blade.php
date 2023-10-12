<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @section('head')
        <title>Ошибка @yield('error_code')</title>

        @include('layout.parts.favicons')

        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}"/>
        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/crsine.css') }}"/>
    @show
</head>

<body>

<div class="page-wrapper page-wrapper--error">
    <div class="page-content">
        @section('content')
        @show
    </div>
</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

@section('scripts')
@show
</body>

</html>
