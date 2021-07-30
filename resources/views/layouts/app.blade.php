<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LOGIN|The EAPHLN e-learning system is intended to be utilized as a training tool to build the capacity of the laboratories professionals within the region|The EAPHLNP is a World Bank-funded project that is being implemented by the East African Community (EAC) Partner States namely; Burundi Kenya, Rwanda, Tanzania and Uganda in collaboration with the East African Community Secretariat and the East Central and Southern African Health Community (ECSA-HC). The objective of the project is "to establish a network of efficient, high quality, accessible public health labaratories for the diagnosis and surveillance of Tuberculosis (TB) and other communicable diseases". Designed by HIRESWARE LTD</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url({{url('assets/as.jpg')}});">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #2c3e50 !important; color: white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
                    EAPHLN E-LEARNING
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="color: white !important">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="color: white !important" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color: white !important" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           
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
