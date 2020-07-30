<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <Div class="row">
        <div class="col-sm-12">
            <h1 class="titulo">Califica Nuestro Servicio Prestadoo</h1>
        </div>
    </Div>
    <div class="row">
        <div class="col-sm-12">
            <p>Hola <b> {{$servicio->nombre_cliente}}</b>, para nosotros es muy importante conocer tu experencia con nuestro servicio. Agradecemos tu calificacion que nos ayuda a prestarte un mejor servicio dia a dia.
            <br><br>
            Califica el servicio prestado por nuestra funcionaria <b> {{ $servicio->funcionaria_asignada->nombre_funcionaria_abreviado }} </b> el dia <b> {{$servicio->fecha_servicio}}</b>
            <br><br>
            <a href="http://127.0.0.1:8000/calificacionservicio/{{$servicio->id}}" class="btn" id="boton_principal">Califica tu servicio</a>
            </p>
        </div>
    </div>
</div>