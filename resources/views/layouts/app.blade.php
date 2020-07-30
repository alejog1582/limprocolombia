<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <!-- Iconos -->        
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="barra_menu">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img id="logo_navbar" src="{{ asset('images/logo_500.png') }}" width="30" height="30" alt="">
                </a>
                <button class="navbar-toggler" style="background-color:white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="texto_menu" href="/">Inicio <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="texto_menu" href="#nuestros_planes">Nuestros Planes</a>
                          </li>                    
                          <li class="nav-item">
                            <a class="nav-link" id="texto_menu" href="/servicionew">Solicita un Servicio</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="texto_menu" href="/tienda">Productos de Aseo</a>
                          </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn" id="login" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn" id="boton_principal2" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li><a href="/micuenta" class="btn" id="login">Mi cuenta</a></li>
                            <li class="nav-item dropdown" >
                                <a id="boton_principal2" style="color:white" class="nav-link dropdown-toggle btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
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

        
        


            @yield('content')
        
        <div class="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm">
                        <br>
                        <p>Siguenos en nuestras redes sociales:<br><br><a href="https://web.facebook.com/limprocolombia/" target="_blank"><i class="fab fa-facebook" id="redes_sociales"></i></a><a href="https://www.instagram.com/limprocolombia/" target="_blank"><i class="fab fa-instagram" id="redes_sociales"></i></a><a href="https://twitter.com/limprocolombia" target="_blank"><i class="fab fa-twitter" id="redes_sociales"></i></a><hr></p>
                        <hr id="hr_footer">
                        <p>Terminos y condiciones</p>
                        <p>Politica de Privacidad</p>
                    </div>
                    <div class="col-sm">
                        <br>
                        <h3>Contacto</h3>
                        <p>- Bogotá, D.C. - Colombia<br><a href="tel:+573504591097" id="contacto_footer">- Ventas: (+57) 350 4591097<br><a href="tel:+5716556219" id="contacto_footer">- 6 55 62 19<br></a><a href="mailto:servicios@limpro.co" id="contacto_footer">- servicios@limpro.co</a></p>
                    </div>
                </div>
                <hr id="hr_footer">
                <div class="row">
                    <div class="col-sm">
                        <p class="text-center">Esta pagina a sido desarrollada por <a href="http://www.tekquo.com.co/">TekQuo</a> © 2020 Limpro Colombia SAS Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
