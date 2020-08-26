<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <Div class="row">
        <div class="col-sm-12">
            <h1 class="titulo">Califica Nuestro Servicio Prestadoo</h1>
        </div>
    </Div>
    <div class="row">
        <div class="col-sm-12">
            <p>Hola <b> {{$servicio->nombre_cliente}}</b>, trabajamos día a día para ofrecerle el mejor servicio a nuestros clientes, por lo cual para nosotros es muy importante conocer tu experencia con el servicio prestado. Agradecemos tu calificacion.
            <br><br>
            Califica el servicio prestado por nuestra funcionaria <b> {{ $servicio->funcionaria_asignada->nombre_funcionaria_abreviado }} </b> el dia <b> {{$servicio->fecha_servicio}}</b>
            <br><br>
            <a href="http://www.limpro.co/calificacionservicio/{{$servicio->id}}" class="btn" id="boton_principal">Califica tu servicio</a>
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