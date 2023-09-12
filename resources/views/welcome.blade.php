<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @seo

        @include('layout.styles')
    </head>
    <body>
        @include('layout.header')

        @include('layout.footer')

        @include('layout.scripts')
    </body>
</html>
