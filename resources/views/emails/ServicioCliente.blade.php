<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <Div class="row">
        <div class="col-sm-12">
            <h1 class="titulo">Servicio solicitado de {{ $servicio->tipo_servicio }} con ID: {{$servicio->id}}</h1>
        </div>
    </Div>
    <div class="row">
        <div class="col-sm-12">
            <p>Hola <b> {{$servicio->nombre_cliente}}</b>, hemos recibido la solicitud del servicio de <b> {{ $servicio->tipo_servicio }} </b> para el dia <b> {{$servicio->fecha_servicio}}</b>. En las proximas horas nos pondremos en contacto para brindarte la informacion detallada del servicio y de la profesional asignada.
            <br><br>
            Gracias escoger nuestro servicio, tu limpieza esta en las mejores manos.
        </b> <br><br>
        Cordialmente,
        <br><br>

       <b>LIMPRO COLOMBIA SAS</b>
        <br>
        Tel: 655 62 19 
        <br>
        Cel: 350 459 10 97
        <br>
        <a href="www.limpro.co">www.limpro.co</a> 
            </p>
        </div>
    </div>
</div>