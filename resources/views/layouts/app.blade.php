<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Kitchen</title>
    <link rel="icon" href="{{asset('/img/logo.png')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-green shadow-sm greenbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="padding:0px !important;">
                    <img src="{{asset('img/logo_blanco.png')}}" style="max-width:3.5em;" alt="">
                </a>
                <button class="navbar-toggler whitecolor" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars whitecolor"></i>
                </button>

                <div class="collapse navbar-collapse whitecolor" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link whitecolor" href="#thermomix">{{ __('THERMOMIX') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor" href="#demostracion">{{ __('DEMOSTRACIÓN') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor" href="#compra">{{ __('COMPRA') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor" href="#contactanos">{{ __('CONTÁCTANOS') }}</a>
                      </li>
                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="padding:0px !important;">
            @yield('content')
        </main>
    </div>
</body>
</html>
