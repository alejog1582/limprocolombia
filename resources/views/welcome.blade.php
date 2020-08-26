@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://res.cloudinary.com/dikbf3xct/image/upload/v1596487539/Limpro%20Colombia/Slider%20Carrousel/Slider1-brillo.jpg" class="d-block w-100" alt="...">
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
    <br>
    <div class="alert alert-primary" role="alert">
        Estamos preparados para prestarte el mejor servicio de limpieza con los protocolos de  Bioseguridad indicados por la OMS.<a href="/protocolos" class="alert-link">Conoce nuestro protocolo</a>
    </div>

    <br>

    <h1 class="text-center titulo">Conoce los servicios que Limpro Colombia tiene para ti</h1>

    <br>
                                      
    <div class="row">
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_principal">
                <img src="{{ asset('images/servicio.png') }}" class="card-img-top" id="img_principal" alt="Solicitud de un nuevo servicio de limpieza">
                <div class="card-body">
                    <h5 class="card-title titulo">Quiero un Servicio de Limpieza</h5>
                    <p class="card-text">Para LIMPRO COLOMBIA SAS es muy importante
                        satisfacer gratamente las necesidades de nuestros clientes, programa tu servicio en línea y
                        deja la limpieza en nuestras manos expertas.</p>
                    <a href="/servicionew" class="btn" id="boton_principal">Solicitar Servicio</a>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/cotizacion.png') }}" class="card-img-top" id="img_principal" alt="Solicitu de una cotizacion de limpieza">
                <div class="card-body">
                    <h5 class="card-title titulo">Quiero una Cotizacion</h5>
                    <p class="card-text">Conoce a fondo nuestros servicios de limpieza solicitando una cotización
                        de acuerdo a tu necesidad y con los mejoes precios del mercado.</p>
                    <a href="/cotizacionew" class="btn" id="boton_principal">Solicitar Cotizacion</a>
                </div>
            </div>
            <br>
        </div>
        <div hidden class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center  card_secundaria">
                <img src="{{ asset('images/productos.png') }}" class="card-img-top" id="img_principal" alt="...">
                <div class="card-body">
                    <h5 class="card-title titulo">Quiero Productos de Aseo</h5>
                    <p class="card-text">Conoce nuestra tienda virtual, contamos con excelentes productos eficaces para la
                        limpieza, con excelente calidad.</p>
                    <a href="/tienda" class="btn" id="boton_principal">Visitar la Tienda</a>
                </div>
            </div>
            <br>
        </div>
    </div>

  
</div>

<br>

<h2 class="text-center titulo" id="nuestros_planes">Nuestros Planes de Limpieza</h2>

<br>
<div class="container">
    <p class="text-center">Contamos con personal experto en limpieza y ofrecemos deferentes
        planes para satisfacer tus necesidades, con facilidades de pago. Pide tu servicio de limpieza sin riesgos ya que contamos un proceso de seleccion extricto para tu seguridad y nos encargamos de la prestacion social de nuestras funcionairas
        encargamos de su carga prestacional</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/numero_4n.png') }}" class="card-img-top" id="img_principal" alt="Plan 4 horas Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Plan de 4 Horas</h5>
                    <p class="card-text">Nos Comprometemos con un servicio a la medida de sus
                        necesidades garantizando un nivel optimo de limpieza, basado en sus necesidades.
                    </p>
                    <a href="/nuestrosplanes" class="btn" id="boton_principal">Ver Detalle</a>
                </div>
            </div>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/numero_8n.png') }}" class="card-img-top" id="img_principal" alt="Plan 8 horas Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Valor 8 Horas</h5>
                    <p class="card-text">Con base en el análisis sobre las necesidades de nuestros
                        clientes, ofrecemos en este plan todas las tareas de Limpieza y desinfección a profundidad
                        en todo tipo de instalaciones como cocinas, baños, alcobas y zonas comunes entre otros
                        
                    </p>
                    <a href="/nuestrosplanes" class="btn" id="boton_principal">Ver Detalle</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<h2 class="text-center titulo">Porque Con Nosotros</h2>

<br>

<div class="container">
    <div class="row">
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_principal">
                <img src="{{ asset('images/reloj.png') }}" class="card-img-top" id="img_principal" alt="Servicio de limpieza por dias o por horas">
                <div class="card-body">
                    <h5 class="card-title titulo">Servicio De Limpieza Por Dias o Por Horas</h5>
                    <p class="card-text">Contamos con planes de acuerdo a tu
                        necesidad, todos acompañados de profesionales expertos en limpieza con todos los
                        protocolos de Bioseguridad requeridos.
                        </p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/contrato.png') }}" class="card-img-top" id="img_principal" alt="Contratos sin clausulas de permanecia Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Contratos sin clausulas de permanecia</h5>
                    <p class="card-text">Nuestro interés es generar relaciones a
                        largo plazo con nuestros clientes, basados en la satisfacción de nuestros servicios, por lo
                        que nuestros contratos de servicios no cuentan con clausulas de permanencia
                    </p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/entrevista.png') }}" class="card-img-top" id="img_principal" alt="Seleccion de Personal Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Seleccion de Personal</h5>
                    <p class="card-text">Contamos con un riguroso proceso de selección de nuestro
                        personal con el fin de brindar un servicio optimo, brindando la seguridad que nuestros
                        clientes están buscando
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/garantia.png') }}" class="card-img-top" id="img_principal" alt="Garantia de Servicio Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Garantia de Serivcio</h5>
                    <p class="card-text">Cumpliendo con nuestro objetivo, escucharemos atentamente
                        tus comentarios y luego de la validación pertinente, procederemos a informar a nuestros
                        clientes las garantías sobre los servicios prestados.
                    </p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <img src="{{ asset('images/calificacion.png') }}" class="card-img-top" id="img_principal" alt="Sistma de calificacion Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Sistema de Calificacion</h5>
                    <p class="card-text">Trabajamos día a día para ofrecerle el mejor servicio y su
                        opinión sobre nuestros servicios es importante para nosotros, por lo que podrán
                        calificar tanto a nuestra funcionaria como el servicio prestado.
                    </p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_principal">
                <img src="{{ asset('images/redes.png') }}" class="card-img-top" id="img_principal" alt="Carga Prestacional Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Carga Prestacional</h5>
                    <p class="card-text">Evita cálculos y tramites dispendiosos en la afiliación y aportes de
                        la carga prestacional de las funcionarias, nosotros lo hacemos por ti!!!
                        </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm" id="columnas_botones">
            <a href="/servicionew" class="btn" id="boton_principal">Quiero un Servicio</a>
        </div>
        <br><br>
        <div class="col-sm" id="columnas_botones">
            <a href="/cotizacionew" class="btn" id="boton_principal">Quiero una Cotizacion</a>
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <h2 class="text-center titulo">Como Funciona Nuesto Servicio de Limpieza</h2>

    <br>

    

    <div class="row">
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">1</li>
                <br>
                <img src="{{ asset('images/monitor.png') }}" class="card-img-top" id="img_principal" alt="Solicitud de servicio Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Solicita tu Servicio</h5>
                    <p class="card-text">De acuerdo a su necesidad escoge el plan que prefieras y deja la
                        limpieza en nuestras manos expertas
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">2</li>
                <br>
                <img src="{{ asset('images/conoce_funcionaria.png') }}" class="card-img-top" id="img_principal" alt="Conoce la funcionaria asignada en Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Conoce a la funcionaria asignada</h5>
                    <p class="card-text">Luego de tu solicitud de servicio, conocerás los
                        datos y perfil de la funcionaria asignada.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">3</li>
                <br>
                <img src="{{ asset('images/limpiar.png') }}" class="card-img-top" id="img_principal" alt="Disfruta del servicio de Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Dejate Atender</h5>
                    <p class="card-text">Nuestra funcionaria estara tocando tu puerta la fecha y hora indicada para brindarte la mejor experencia y de jando tus espacios relicientes con el mejor servicio de limpieza</p>
                </div>
            </div>
        </div>
        <div class="col-sm" style="margin-bottom: 1rem">
            <div class="card h-100 text-center card_secundaria">
                <br>
                <li class="numerador">4</li>
                <br>
                <img src="{{ asset('images/exito.png') }}" class="card-img-top" id="img_principal" alt="Calificacion de Funcionaria Limpro Colombia">
                <div class="card-body">
                    <h5 class="card-title titulo">Califica la funcionaira</h5>
                    <p class="card-text">Luego de conocer nuestro servicio, agradecemos la calificación y
                        retroalimentación del mismo con el fin de continuar mejorando día a día.
                    </p>
                </div>
            </div>
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
                        <img src="{{ asset('images/clientes_1.png') }}" class="d-block w-100" alt="Clientes Limpro Colombia">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/clientes_2.png') }}" class="d-block w-100" alt="Clientes Limpro Colombia">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/clientes_3.png') }}" class="d-block w-100" alt="Clientes Limpro Colombia">
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
            <br>
            <div class="card text-center card_principal">
                <img src="{{ asset('images/trabajo.png') }}" class="card-img-top" id="img_principal" alt="Trabaja con nosotros Limpro Colombia">
                <div class="card-body">
                    <p class="card-text">Unete a nuestra familia para ofrecer la mejor experiencia de limpieza a nuestros clientes.</p>
                    <a href="/aspirante" class="btn" id="boton_principal">Solicita Entrevista</a>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>

@endsection

            