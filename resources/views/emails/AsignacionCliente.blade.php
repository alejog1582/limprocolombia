<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <Div class="row">
        <div class="col-sm-12">
            <h1 class="titulo">Funcionaria Asignada al Servicio Solicitado</h1>
        </div>
    </Div>
    <div class="row">
        <div class="col-sm-12">
            <p>Hola <b> {{$servicio->nombre_cliente}}</b>, hemos asinado a nuestra funcionaria <b> {{ $servicio->funcionaria_asignada->nombre_funcionaria_abreviado }} </b> para realizar el serivcio solicitado el dia<b> {{$servicio->fecha_servicio}}</b>.
            <br><br>
            Conoce la hoja de vida virtual y las calificaones de servicio de nuestra funcionaria asignada.
            <br><br>
            <a href="http://127.0.0.1:8000/hojadevida/{{ $servicio->funcionaria_asignada->id }}" class="btn" id="boton_principal">Ver Hoja de Vida</a>
            </p>
        </div>
    </div>
</div>