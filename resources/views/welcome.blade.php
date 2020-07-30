@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://res.cloudinary.com/dikbf3xct/image/upload/v1595547695/Limpro%20Colombia/Slider%20Carrousel/Mesa_de_trabajo_1-80.jpg" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

@if (Auth::check())
    @if ($user->email == 'alejog1582@gmail.com')
        <br>
        <a id="enlace_administracion" href="/administracion">Administracion</a>
    @endif
@endif




<div class="container">

    <br><br>

    <h1 class="text-center titulo">Conoce los servicios que Limpro Colombia tiene para ti</h1>

    <br>

    <div class="row">
        <div class="col-sm">
            <div class="card h-100 text-center card_principal">
                <img src="{{ asset('images/servicio.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Quiero un Servicio de Limpieza</h5>
                    <p class="card-text">Ponemos a disposicion personal profesional en servicio de limpieza para hacerte la vida mas facil.</p>
                    <a href="/servicionew" class="btn" id="boton_principal">Solicitar Servicio</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/cotizacion.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Quiero una Cotizacion</h5>
                    <p class="card-text">Queremos manejar el serivcio general de tu empresa y/o hogar con planes por dias con precios sorprendentes</p>
                    <a href="/cotizacionew" class="btn" id="boton_principal">Solicitar Cotizacion</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center  card_secundaria">
                <img src="{{ asset('images/productos.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Quiero Productos de Aseo</h5>
                    <p class="card-text">Conoce nuestra tienda virtual con productos de aseo de exelcente calidad. Contamos con productos quimicos y ecologico.</p>
                    <a href="/tienda" class="btn" id="boton_principal">Visitar la Tienda</a>
                </div>
            </div>
            <br>
        </div>
    </div>

  
</div>

<br><br>

<h2 class="text-center titulo" id="nuestros_planes">Nuestros Planes</h2>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <img src="{{ asset('images/numero_4n.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Plan de 4 Horas</h5>
                    <p class="card-text">Planes que se acomadan a tu necedidad. Cobramos por servicio recibido a satisfaccion del cliente</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <img src="{{ asset('images/numero_8n.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Valor 8 Horas</h5>
                    <p class="card-text">Nuestro unico interes es prestarte un servicio en el cnuestros clientes esten totalmente satisfechos. Si decides contrtatar con nosotros olvidate de las clausalas de permanencia y disfruta el mejor servicio de limpieza.</p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<br><br>
<h2 class="text-center titulo">Porque Con Nosotros</h2>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card h-100 text-center card_principal">
                <img src="{{ asset('images/reloj.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Servicio De Limpieza Por Dias o Por Horas</h5>
                    <p class="card-text">Planes que se acomadan a tu necedidad. Cobramos por servicio recibido a satisfaccion del cliente</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/contrato.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Contratos sin clausulas de permanecia</h5>
                    <p class="card-text">Nuestro unico interes es prestarte un servicio en el cnuestros clientes esten totalmente satisfechos. Si decides contrtatar con nosotros olvidate de las clausalas de permanencia y disfruta el mejor servicio de limpieza.</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/entrevista.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Seleccion de Personal</h5>
                    <p class="card-text">Riguroso proceso de seleccion de nuestro personal para brinnda la segurar que nuestros clientes estan buscando. Nuestro proceo se seleccion incluyen pruebas psicoactivas y vistas domiciliarias</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/garantia.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Garantia de Serivcio</h5>
                    <p class="card-text">Planes que se acomadan a tu necedidad. Cobramos por servicio recibido a satisfaccion del cliente</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/calificacion.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Sistema de Calificacion</h5>
                    <p class="card-text">Ofrecemos lo mejor en servicios generales de aseo y contamos con la disponibilidad de nuestros colaboradores de acuerdo a tu necesidad ya sea por días o por horas.</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_principal">
                <img src="{{ asset('images/redes.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Pago de Seguridad Social</h5>
                    <p class="card-text">Riguroso proceso de seleccion de nuestro personal para brinnda la segurar que nuestros clientes estan buscando. Nuestro proceo se seleccion incluyen pruebas psicoactivas y vistas domiciliarias</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm" id="columnas_botones">
            <a href="/servicionew" class="btn" id="boton_principal">Queiero un Servicio</a>
        </div>
        <br><br>
        <div class="col-sm" id="columnas_botones">
            <a href="/cotizacionew" class="btn" id="boton_principal">Queiero una Cotizacion</a>
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <h2 class="text-center titulo">Como Funciona Nuestro Servicio</h2>

    <br><br>

    

    <div class="row">
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">1</li>
                <br>
                <img src="{{ asset('images/garantia.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Solicita tu Servicio</h5>
                    <p class="card-text">Planes que se acomadan a tu necedidad. Cobramos por servicio recibido a satisfaccion del cliente</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">2</li>
                <br>
                <img src="{{ asset('images/calificacion.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Conoce a la funcionaria asignada</h5>
                    <p class="card-text">Ofrecemos lo mejor en servicios generales de aseo y contamos con la disponibilidad de nuestros colaboradores de acuerdo a tu necesidad ya sea por días o por horas.</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">3</li>
                <br>
                <img src="{{ asset('images/redes.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Dejate Atender</h5>
                    <p class="card-text">Riguroso proceso de seleccion de nuestro personal para brinnda la segurar que nuestros clientes estan buscando. Nuestro proceo se seleccion incluyen pruebas psicoactivas y vistas domiciliarias</p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">4</li>
                <br>
                <img src="{{ asset('images/redes.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Califica la funcionaira</h5>
                    <p class="card-text">Riguroso proceso de seleccion de nuestro personal para brinnda la segurar que nuestros clientes estan buscando. Nuestro proceo se seleccion incluyen pruebas psicoactivas y vistas domiciliarias</p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<br><br>

<div class="container">

    <div class="row">
        <div class="col-sm">

            <h2 class="text-center titulo">Algunos de nuestros clientes</h2>
            
            <br>
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/clientes_1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/clientes_2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/clientes_3.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <h2 class="text-center titulo">Trabaja con nosotros</h2>
            <div class="card text-center card_principal">
                <img src="{{ asset('images/servicio.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <p class="card-text">unete a nuestra familia y disfurta de la estabilidad de un contrato directo con todas las prestaciones de ley y demas beneficios que tenemos para ti y tu familia.</p>
                    <a href="/aspirante" class="btn" id="boton_principal">Solicita Entrevista</a>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>

@endsection

            