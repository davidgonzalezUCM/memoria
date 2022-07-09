<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/cf0201b697.js" crossorigin="anonymous"></script>
    
</head>
<body style="background-color:#fdc441">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-custom shadow-sm">
            <div class="container">
                
                <router-link to="/home" class="navbar-brand">inicio</router-link>
                <router-link to="/solicitar_hora" class="navbar-brand">solicitar hora</router-link>
                <router-link to="/example" class="navbar-brand">example</router-link>
                <router-link to="/sobre_mi" class="navbar-brand">sobre mi</router-link>
                <router-link to="/servicios" class="navbar-brand">servicios</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto bg-">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <router-link to="/mi_perfil" class="dropdown-item">Mi perfil</router-link>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-3">
            @yield('content')
        </main>
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="img/logo.svg" alt="Logo">
                        </a>
                    </figure>
                    
                </div>
                <div class="box">
                    <h2>Preguntas Frecuentes</h2>
                    <p>¿Metodos de pago?</p>
                    <p>¿Metodos de atencion?</p>
                    <p>¿Como agendar una hora?</p>
                    <p>¿Como ingresar a una sesion?</p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-whatsapp"></a>
                        
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <!---small>&copy; AÑO <b> NOMBRE </b> AÑADIDO </small-->
            </div>
        </footer>

    </div>

</body>

</html>
