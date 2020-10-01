<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="google-site-verification" content="P4At6vdOx5CUQoZGrLC6GV4mezGQ9nA2cL1LnC2LzZk" />
        <meta name="google-site-verification" content="ICH6EWzAzcU_d1p-8daaK9qpk9i-c1ow4se6az1f5eY" />
        <meta name="google-site-verification" content="ICH6EWzAzcU_d1p-8daaK9qpk9i-c1ow4se6az1f5eY" />

        <meta name="description" content="Pide tu servicio ahora y para mayor confiabilidad selecciona la persona que te atenderá. Califica el servicio que te prestamos y obtén un servicio gratis por 10 realizados."/>


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Limpro Colombia Servicio de Limpieza Profesional')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@700&display=swap" rel="stylesheet">

        
        <!-- Iconos -->        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        
        
    </head>
    <body>
        <a href="https://wa.me/5717868181?text=Quiero%20mas%20informacion%20sobre%20el%20servicio%20de%20limpieza" class="whatsapp" target="_blank"><i class="fab fa-whatsapp whatsapp-icon"></i></a>
        <div id="app">
                <div class="row text-center" id="barra_menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-white"><i class="fas fa-phone-volume text-white" style="margin-right: 1em;"></i><i class="fab fa-whatsapp text-white" style="margin-right: 1em;"></i><a href="tel:0317868181" style="color: white">7 86 81 81</a></div>
                            <div class="col-md-4 text-white"><i class="fas fa-mobile-alt text-white" style="margin-right: 1em;"></i><a href="tel:3504591097" style="color: white">350 450 10 97</a></div>
                            <div class="col-md-4 text-white"><i class="far fa-envelope text-white" style="margin-right: 1em;"></i><a href="mailto:servicios@limpro.co" style="color: white">servicios@limpro.co</a></div>
                        </div>
                    </div>
                </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="barra_menu">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img id="logo_navbar" src="{{ asset('images/logo_500.png') }}" width="30" height="30" alt="Logo Limpro Colombia Limpieza Profesional">
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
                                <a class="nav-link" id="texto_menu" href="/nuestrosplanes">Nuestros Planes</a>
                            </li>                    
                            <li class="nav-item">
                                <a class="nav-link" id="texto_menu" href="/servicionew">Solicita un Servicio</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" id="texto_menu" href="/tienda">Productos de Aseo</a>
                            </li>-->
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="btn" id="login" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="btn" id="boton_principal2" href="{{ route('register') }}">{{ __('Registrate') }}</a>
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
                            <p>- Cra 7 # 156 - 68 Torre 3 Oficina 1103 <br> - Bogotá, D.C. - Colombia<br><a href="tel:7868181" id="contacto_footer">- 7 86 81 81<br></a><a href="tel:3504591097" id="contacto_footer">- 350 4591097<br><a href="mailto:servicios@limpro.co" id="contacto_footer">- servicios@limpro.co</a></p>
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


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" charset="UTF-8" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>

    </body>
</html>
