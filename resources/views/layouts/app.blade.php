<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TM6</title>
    <link rel="icon" href="{{asset('/img/logo.png')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/smooth.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- SWAL -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=d68268cb-f60b-4b86-b42d-d87a9d6c4a0e"> </script>
    <!-- End of  Zendesk Widget script -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm greenbar" style="position:sticky;z-index:999;top:0px;" id="nav">
            <div class="container">
                <a class="navbar-brand smooth" href="#inicio" style="padding:0px !important;">
                    <img src="{{asset('img/logo_blanco.png')}}" style="max-width:2.5em;" alt="">
                </a>
                <button class="navbar-toggler whitecolor" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars whitecolor"></i>
                </button>

                <div class="collapse navbar-collapse whitecolor" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size:.8em!important;">
                      <li class="nav-item">
                          <a class="nav-link whitecolor smooth" href="#smartkitchen"><b>{{ __('SMART KITCHEN') }}</b></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor smooth" href="#thermomix"><b>{{ __('TM6') }}</b></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor smooth" href="#demostracion"><b>{{ __('DEMOSTRACIÓN') }}</b></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor smooth" href="#compra"><b>{{ __('COMPRA') }}</b></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor smooth" href="#promociones"><b>{{ __('PROMOCIONES') }}</b></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link whitecolor smooth" href="#testimonios"><b>{{ __('TESTIMONIOS') }}</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link whitecolor smooth" href="#contactanos"><b>{{ __('CONTÁCTANOS') }}</b></a>
                        <!-- <a class="nav-link whitecolor" href="https://api.whatsapp.com/send?phone=525532801119&text=Quisiera más información sobre el TM6">{{ __('CONTÁCTANOS') }}</a> -->
                      </li>
                      <li></li>
                      <li>
                        <a class="nav-link whitecolor" href="https://www.facebook.com/cucharadasdesabor/" target="_blank"><i class="fab fa-facebook-square" style="font-size:1.5em;"></i></a>
                      </li>
                      <li>
                        <a class="nav-link whitecolor" href="https://www.instagram.com/cucharadas_de_sabor/?hl=es-la" target="_blank"><i class="fab fa-instagram" style="font-size:1.5em;"></i></a>
                      </li>
                      <li>
                        <a class="nav-link whitecolor" href="https://api.whatsapp.com/send?phone=525532801119&text=Quisiera más información sobre el TM6" target="_blank"><i class="fab fa-whatsapp" style="font-size:1.5em;"></i></a>
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
