<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('/js/grafica.js')}}"></script>
    <script src="{{ asset('/js/animsition.js')}}"></script>
    <script src="{{ asset('/js/popper.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/js/select2.js')}}"></script>
    <script src="{{ asset('/js/moment.js')}}"></script>
    <script src="{{ asset('/js/daterangepicker.js')}}"></script>
    <script src="{{ asset('/js/countdowntime.js')}}"></script>
    <script src="{{ asset('/js/main.js')}}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/util.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/animsition.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/Chart.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="{{ asset('/img/logo1.png')}}" class="d-blobk" alt="..." height="40px" width="95px">
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
                            <!--   <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>-->
                            @endif
                        @else
                            <li class="nav-item dropleft">
                                <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                            <li>
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>

        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
