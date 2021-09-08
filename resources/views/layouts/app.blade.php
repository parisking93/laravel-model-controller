<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}} ">
        <!-- prendo il nome della route in cui mi trovo -->
        <title>{{ Route::currentRouteName()}}</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        
        @include('partials.header')
        <main> @yield('main')</main>
        @include('partials.footer')
    </body>
</html>
