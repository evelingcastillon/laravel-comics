<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page_title', 'Dc Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">    
    </head>
    <body>
        <header id="site_header">

            <div class="primary_menu">
                
            </div>

            <div class="secondary_menu container">

                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                </a>
                <nav class="main_menu">
                    <a href="{{route('characters')}}">CHARACTERS</a>
                    <a href="{{route('comics')}}">COMICS</a>
                    <a href="{{route('movies')}}">MOVIES</a>
                    <a href="{{route('tv')}}">TV</a>
                    <a href="{{route('games')}}">GAMES</a>
                    <a href="{{route('collectibles')}}">COLLECTIBLES</a>
                    <a href="{{route('videos')}}">VIDEOS</a>
                    <a href="{{route('fans')}}">FANS</a>
                    <a href="{{route('news')}}">NEWS</a>
                    <a href="{{route('shop')}}">SHOP</a>
                </nav>
                <div class="search">
                    <input type="text" name="" id="" placeholder="Search">
                </div>
            </div>
        </header>
        <main id="site_main">
        @yield('content')
        </main>
        <footer id="site_footer"></footer>
    </body>
</html>
