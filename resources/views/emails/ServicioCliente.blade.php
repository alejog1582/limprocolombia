<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <Div class="row">
        <div class="col-sm-12">
            <h1 class="titulo">Servicio solicitado de {{ $servicio->tipo_servicio }} con ID: {{$servicio->id}}</h1>
        </div>
    </Div>
    <div class="row">
        <div class="col-sm-12">
            <p>Hola <b> {{$servicio->nombre_cliente}}</b>, hemos recibido la solicitud del servicio de <b> {{ $servicio->tipo_servicio }} </b> para el dia <b> {{$servicio->fecha_servicio}}</b>. En las proximas horas recibiras la informacion de la funcionaria asignada al servicio.
            <br><br>
            Gracias escoger nuestro servicio, tu limpieza esta en las mejores manos.
            </p>
        </div>
    </div>
</div>