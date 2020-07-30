<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', 'Limpro Colombia')</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Estilos CSS -->
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

        <!-- Iconos -->        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="barra_menu">
                <a class="navbar-brand" href="#">
                    <img id="logo_navbar" src="{{ asset('images/logo_500.png') }}" width="30" height="30" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" id="texto_menu" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="texto_menu" href="#nuestros_planes">Nuestros Planes</a>
                    </li>                    
                    <li class="nav-item">
                      <a class="nav-link" id="texto_menu" href="#">Cotizaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="texto_menu" href="#">Productos de Aseo</a>
                    </li>
                  </ul>                  
                </div>
              </nav>

            <div class="content">
                @yield('content')
            </div>

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

        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
