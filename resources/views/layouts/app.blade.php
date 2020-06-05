<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        * {
            font-family: 'Balsamiq Sans', cursive;
        }

        .radius{
            border-radius: 20px, 2px, 10px, 5px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Suku Nusantara
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item {{Request()->is('suku') ? 'active' : ''}}">
                                <a class="nav-link" href="/suku">Home</a>
                            </li>
                            <li class="nav-item {{Request::segment(1) == 'about' ? 'active' : ''}}">
                                <a class="nav-link" href="/about">Tentang</a>
                            </li>
                            <li class="nav-item  {{Request()->is('suku/create') ? 'active' : ''}}">
                                <a class="nav-link" href="/suku/create">+Data[Login]</a>
                            </li>
                            <li class="nav-item {{Request()->is('suku/create/tanpa/login') ? 'active' : ''}}">
                                <a class="nav-link" href="/suku/create/tanpa/login">+Data[TanpaLOG]</a>
                            </li>
                            <li class="nav-item" {{Request()->is('login') ? 'active' : ''}}>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item {{Request()->is('register') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                                
                            <li class="nav-item {{Request()->is('suku') ? 'active' : ''}}">
                                <a class="nav-link" href="/suku">Home</a>
                            </li>
                            <li class="nav-item {{Request::segment(1) == 'about' ? 'active' : ''}}">
                                <a class="nav-link" href="/about">Tentang</a>
                            </li>
                            <li class="nav-item  {{Request()->is('suku/create') ? 'active' : ''}}">
                                <a class="nav-link" href="/suku/create">+Data[Login]</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
