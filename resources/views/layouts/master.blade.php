<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title and Icons -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="/site.webmanifest"> this does not work -->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <header class="shadow">
            <nav class="containerCustom">
                <a href="/" class="logo">
                    <div>
                        <img src="/img/logo/logo.png" alt="M&D STAV Logo">
                    </div>
                    <span class="header-pc h4 fw-bold">Realizácie stavieb</span>
                </a>
                <ul class="header-pc fs-5 fw-bold">
                    <li><a href="{{ url('/') }}">Domov</a></li>
                    <li><a href="{{ url('/sluzby') }}">Služby</a></li>
                    <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                </ul>

                <a onclick="openPostHeader()" class="header-mobile">
                    <img class="menu-icons filter-grey" src="/img/svg/menu-burger.svg" alt="Menu icon">
                </a>
            </nav>
        </header>

        <div id="postHeader" class="post-header" onclick="event.stopPropagation();">
            <div onclick="closePostHeader()">
                <img class="menu-icons filter-grey" src="/img/svg/cross.svg" alt="Close icon">
            </div>

            <ul class="fs-5 fw-bold">
                <li><a href="{{ url('/') }}">Domov</a></li>
                <li><a href="{{ url('sluzby') }}">Služby</a></li>
                <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
            </ul>
        </div>

        <main>
            @yield('content')
        </main>

        @if (Request::path() != 'kontakt')
        <footer>
            <div class="containerCustom">
                <section>
                    <div>
                        <img class="icons filter-grey" src="/img/svg/phone-call.svg" alt="Phone icon">
                        <a href="tel:0948431191">0948 431 191</a>
                        <a href="tel:0940116398">0940 116 398</a>
                    </div>
                    <div>
                        <img class="icons filter-grey" src="/img/svg/envelope.svg" alt="Mail icon">
                        <a href="mailto:martin158159@gmail.com">martin158159@gmail.com</a>
                    </div>
                </section>
            </div>
        </footer>
        @endif

        <!-- Hidden elements -->
        <section id="overlay" class="overlay" onclick="closeModal()"></section>
    </div>
</body>
</html>

<script>
    
</script>