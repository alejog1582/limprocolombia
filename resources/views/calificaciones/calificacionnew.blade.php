@extends('layouts.app')

<script type="text/javascript">
    function cal_estrella_1(){
    document.getElementById('cal_estrella_1').style.color = '#22c7c0'
    document.getElementById('cal_estrella_2').style.color = '#888'
    document.getElementById('cal_estrella_3').style.color = '#888'
    document.getElementById('cal_estrella_4').style.color = '#888'
    document.getElementById('cal_estrella_5').style.color = '#888'
    document.getElementById('calidad').value = '1'};
    function cal_estrella_2(){
    document.getElementById('cal_estrella_1').style.color = '#22c7c0'
    document.getElementById('cal_estrella_2').style.color = '#22c7c0'
    document.getElementById('cal_estrella_3').style.color = '#888'
    document.getElementById('cal_estrella_4').style.color = '#888'
    document.getElementById('cal_estrella_5').style.color = '#888'
    document.getElementById('calidad').value = '2'};
    function cal_estrella_3(){
    document.getElementById('cal_estrella_1').style.color = '#22c7c0'
    document.getElementById('cal_estrella_2').style.color = '#22c7c0'
    document.getElementById('cal_estrella_3').style.color = '#22c7c0'
    document.getElementById('cal_estrella_4').style.color = '#888'
    document.getElementById('cal_estrella_5').style.color = '#888'
    document.getElementById('calidad').value = '3'};
    function cal_estrella_4(){
    document.getElementById('cal_estrella_1').style.color = '#22c7c0'
    document.getElementById('cal_estrella_2').style.color = '#22c7c0'
    document.getElementById('cal_estrella_3').style.color = '#22c7c0'
    document.getElementById('cal_estrella_4').style.color = '#22c7c0'
    document.getElementById('cal_estrella_5').style.color = '#888'
    document.getElementById('calidad').value = '4'};
    function cal_estrella_5(){
    document.getElementById('cal_estrella_1').style.color = '#22c7c0'
    document.getElementById('cal_estrella_2').style.color = '#22c7c0'
    document.getElementById('cal_estrella_3').style.color = '#22c7c0'
    document.getElementById('cal_estrella_4').style.color = '#22c7c0'
    document.getElementById('cal_estrella_5').style.color = '#22c7c0'
    document.getElementById('calidad').value = '5'};
    function pun_estrella_1(){
    document.getElementById('pun_estrella_1').style.color = '#22c7c0'
    document.getElementById('pun_estrella_2').style.color = '#888'
    document.getElementById('pun_estrella_3').style.color = '#888'
    document.getElementById('pun_estrella_4').style.color = '#888'
    document.getElementById('pun_estrella_5').style.color = '#888'
    document.getElementById('puntualidad').value = '1'};
    function pun_estrella_2(){
    document.getElementById('pun_estrella_1').style.color = '#22c7c0'
    document.getElementById('pun_estrella_2').style.color = '#22c7c0'
    document.getElementById('pun_estrella_3').style.color = '#888'
    document.getElementById('pun_estrella_4').style.color = '#888'
    document.getElementById('pun_estrella_5').style.color = '#888'
    document.getElementById('puntualidad').value = '2'};
    function pun_estrella_3(){
    document.getElementById('pun_estrella_1').style.color = '#22c7c0'
    document.getElementById('pun_estrella_2').style.color = '#22c7c0'
    document.getElementById('pun_estrella_3').style.color = '#22c7c0'
    document.getElementById('pun_estrella_4').style.color = '#888'
    document.getElementById('pun_estrella_5').style.color = '#888'
    document.getElementById('puntualidad').value = '3'};
    function pun_estrella_4(){
    document.getElementById('pun_estrella_1').style.color = '#22c7c0'
    document.getElementById('pun_estrella_2').style.color = '#22c7c0'
    document.getElementById('pun_estrella_3').style.color = '#22c7c0'
    document.getElementById('pun_estrella_4').style.color = '#22c7c0'
    document.getElementById('pun_estrella_5').style.color = '#888'
    document.getElementById('puntualidad').value = '4'};
    function pun_estrella_5(){
    document.getElementById('pun_estrella_1').style.color = '#22c7c0'
    document.getElementById('pun_estrella_2').style.color = '#22c7c0'
    document.getElementById('pun_estrella_3').style.color = '#22c7c0'
    document.getElementById('pun_estrella_4').style.color = '#22c7c0'
    document.getElementById('pun_estrella_5').style.color = '#22c7c0'
    document.getElementById('puntualidad').value = '5'};
    function pp_estrella_1(){
    document.getElementById('pp_estrella_1').style.color = '#22c7c0'
    document.getElementById('pp_estrella_2').style.color = '#888'
    document.getElementById('pp_estrella_3').style.color = '#888'
    document.getElementById('pp_estrella_4').style.color = '#888'
    document.getElementById('pp_estrella_5').style.color = '#888'
    document.getElementById('pp').value = '1'};
    function pp_estrella_2(){
    document.getElementById('pp_estrella_1').style.color = '#22c7c0'
    document.getElementById('pp_estrella_2').style.color = '#22c7c0'
    document.getElementById('pp_estrella_3').style.color = '#888'
    document.getElementById('pp_estrella_4').style.color = '#888'
    document.getElementById('pp_estrella_5').style.color = '#888'
    document.getElementById('pp').value = '2'};
    function pp_estrella_3(){
    document.getElementById('pp_estrella_1').style.color = '#22c7c0'
    document.getElementById('pp_estrella_2').style.color = '#22c7c0'
    document.getElementById('pp_estrella_3').style.color = '#22c7c0'
    document.getElementById('pp_estrella_4').style.color = '#888'
    document.getElementById('pp_estrella_5').style.color = '#888'
    document.getElementById('pp').value = '3'};
    function pp_estrella_4(){
    document.getElementById('pp_estrella_1').style.color = '#22c7c0'
    document.getElementById('pp_estrella_2').style.color = '#22c7c0'
    document.getElementById('pp_estrella_3').style.color = '#22c7c0'
    document.getElementById('pp_estrella_4').style.color = '#22c7c0'
    document.getElementById('pp_estrella_5').style.color = '#888'
    document.getElementById('pp').value = '4'};
    function pp_estrella_5(){
    document.getElementById('pp_estrella_1').style.color = '#22c7c0'
    document.getElementById('pp_estrella_2').style.color = '#22c7c0'
    document.getElementById('pp_estrella_3').style.color = '#22c7c0'
    document.getElementById('pp_estrella_4').style.color = '#22c7c0'
    document.getElementById('pp_estrella_5').style.color = '#22c7c0'
    document.getElementById('pp').value = '5'};
    function amb_estrella_1(){
    document.getElementById('amb_estrella_1').style.color = '#22c7c0'
    document.getElementById('amb_estrella_2').style.color = '#888'
    document.getElementById('amb_estrella_3').style.color = '#888'
    document.getElementById('amb_estrella_4').style.color = '#888'
    document.getElementById('amb_estrella_5').style.color = '#888'
    document.getElementById('amabilidad').value = '1'};
    function amb_estrella_2(){
    document.getElementById('amb_estrella_1').style.color = '#22c7c0'
    document.getElementById('amb_estrella_2').style.color = '#22c7c0'
    document.getElementById('amb_estrella_3').style.color = '#888'
    document.getElementById('amb_estrella_4').style.color = '#888'
    document.getElementById('amb_estrella_5').style.color = '#888'
    document.getElementById('amabilidad').value = '2'};
    function amb_estrella_3(){
    document.getElementById('amb_estrella_1').style.color = '#22c7c0'
    document.getElementById('amb_estrella_2').style.color = '#22c7c0'
    document.getElementById('amb_estrella_3').style.color = '#22c7c0'
    document.getElementById('amb_estrella_4').style.color = '#888'
    document.getElementById('amb_estrella_5').style.color = '#888'
    document.getElementById('amabilidad').value = '3'};
    function amb_estrella_4(){
    document.getElementById('amb_estrella_1').style.color = '#22c7c0'
    document.getElementById('amb_estrella_2').style.color = '#22c7c0'
    document.getElementById('amb_estrella_3').style.color = '#22c7c0'
    document.getElementById('amb_estrella_4').style.color = '#22c7c0'
    document.getElementById('amb_estrella_5').style.color = '#888'
    document.getElementById('amabilidad').value = '4'};
    function amb_estrella_5(){
    document.getElementById('amb_estrella_1').style.color = '#22c7c0'
    document.getElementById('amb_estrella_2').style.color = '#22c7c0'
    document.getElementById('amb_estrella_3').style.color = '#22c7c0'
    document.getElementById('amb_estrella_4').style.color = '#22c7c0'
    document.getElementById('amb_estrella_5').style.color = '#22c7c0'
    document.getElementById('amabilidad').value = '5'};
    </script>

@section('content')
<div class="container">
<br>
<h1 class="text-center titulo">Calificacion del servicio ID {{$servicio->id}} </h1>
<a class="btn" id="boton_principal" href="/micuenta">Regresar</a>
<br>

@if ($servicio->estado == 'calificado')
<div class="row">
    <div class="col-sm">
        <br>
        <div class="card card_secundaria">
            <div class="card-body text-center">
                El servicio ya a sido calificado. Muchas gracias por tus comentarios que nos ayuda a nuestra mejora continua.
                <br><br>
                <a class="btn" id="boton_principal" href="/micuenta">Aceptar</a>
            </div>
        </div>
        <br>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-6">
        <h2 class="text-center titulo">Informacion del Servicio</h2>
        <br>
        <div class="card">
            <div class="card-header text-center card_principal">
                <b>Cliente:</b> {{$servicio->nombre_cliente}}            
            </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item card_secundaria">
                <div class="row">
                    <div class="col-md-12">
                        <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}
                    </div>                        
                </div>
            </li>
            <li class="list-group-item card_secundaria">
                <div class="row">
                    <div class="col-md-6">
                        <b>Fecha de Servicio:</b> {{$servicio->fecha_servicio}}</div>
                    <div class="col-md-6">
                        <b>Plan:</b> {{$servicio->plan}} Horas</div>
                    </div>
                </div>
            </li>            
        </ul>
        <br>
    </div>        
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card_principal">
                <h2 class="text-center titulo">Funcionaria {{ $servicio->funcionaria_asignada->nombre_funcionaria }}</h2>
            </div>
            <form  action="/seleccion/savecalificacion" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_funcionario" value="{{ $servicio->id_funcionaria_asignada }}">
                <input type="hidden" name="id_servicio" value="{{ $servicio->id }}">
            <ul class="list-group list-group-flush">
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <p><span class="green-texto">Calidad:</span></p>
                        </div>
                        <div class="col-md-6">
                            <input id="calidad" type="hidden" name="calidad" class="@if ($errors->has('calidad')) is-invalid    @endif">
                            <div class="ec-stars-wrapper">
                                <a id="cal_estrella_1" href="#!" title="Votar con 1 estrellas" onclick="cal_estrella_1()">&#9733;</a>
                                <a id="cal_estrella_2" href="#!" title="Votar con 2 estrellas" onclick="cal_estrella_2()">&#9733;</a>
                                <a id="cal_estrella_3" href="#!" title="Votar con 3 estrellas" onclick="cal_estrella_3()">&#9733;</a>
                                <a id="cal_estrella_4" href="#!" title="Votar con 4 estrellas" onclick="cal_estrella_4()">&#9733;</a>
                                <a id="cal_estrella_5" href="#!" title="Votar con 5 estrellas" onclick="cal_estrella_5()">&#9733;</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                @if ($errors->has('calidad'))
                                    @foreach ($errors->get('calidad') as $error)
                                        <h5 id="mensaje_request">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>                    
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <p><span class="green-texto">Puntualidad:</span></p>
                        </div>
                        <div class="col-md-6">
                            <input id="puntualidad" type="hidden" name="puntualidad" class="@if ($errors->has('puntualidad')) is-invalid    @endif">
                            <div class="ec-stars-wrapper">
                                <a id="pun_estrella_1" href="#!" title="Votar con 1 estrellas" onclick="pun_estrella_1()">&#9733;</a>
                                <a id="pun_estrella_2" href="#!" title="Votar con 2 estrellas" onclick="pun_estrella_2()">&#9733;</a>
                                <a id="pun_estrella_3" href="#!" title="Votar con 3 estrellas" onclick="pun_estrella_3()">&#9733;</a>
                                <a id="pun_estrella_4" href="#!" title="Votar con 4 estrellas" onclick="pun_estrella_4()">&#9733;</a>
                                <a id="pun_estrella_5" href="#!" title="Votar con 5 estrellas" onclick="pun_estrella_5()">&#9733;</a>
               	            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                @if ($errors->has('puntualidad'))
                                    @foreach ($errors->get('puntualidad') as $error)
                                        <h5 id="mensaje_request">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>                    
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <p><span class="green-texto">Presentacion Personal:</span></p>
                        </div>
                        <div class="col-md-6">
                            <input id="pp" type="hidden" name="pp" class="@if ($errors->has('pp')) is-invalid    @endif">
                            <div class="ec-stars-wrapper">
		                        <a id="pp_estrella_1" href="#!" title="Votar con 1 estrellas" onclick="pp_estrella_1()">&#9733;</a>
                                <a id="pp_estrella_2" href="#!" title="Votar con 2 estrellas" onclick="pp_estrella_2()">&#9733;</a>
                                <a id="pp_estrella_3" href="#!" title="Votar con 3 estrellas" onclick="pp_estrella_3()">&#9733;</a>
                                <a id="pp_estrella_4" href="#!" title="Votar con 4 estrellas" onclick="pp_estrella_4()">&#9733;</a>
                                <a id="pp_estrella_5" href="#!" title="Votar con 5 estrellas" onclick="pp_estrella_5()">&#9733;</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                @if ($errors->has('pp'))
                                    @foreach ($errors->get('pp') as $error)
                                        <h5 id="mensaje_request">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>                    
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Amabilidad:</p>
                        </div>
                        <div class="col-md-6">
                            <input id="amabilidad" type="hidden" name="amabilidad" class="@if ($errors->has('amabilidad')) is-invalid    @endif">
                            <div class="ec-stars-wrapper">
                                <a id="amb_estrella_1" href="#!" title="Votar con 1 estrellas" onclick="amb_estrella_1()">&#9733;</a>
                                <a id="amb_estrella_2" href="#!" title="Votar con 2 estrellas" onclick="amb_estrella_2()">&#9733;</a>
                                <a id="amb_estrella_3" href="#!" title="Votar con 3 estrellas" onclick="amb_estrella_3()">&#9733;</a>
                                <a id="amb_estrella_4" href="#!" title="Votar con 4 estrellas" onclick="amb_estrella_4()">&#9733;</a>
                                <a id="amb_estrella_5" href="#!" title="Votar con 5 estrellas" onclick="amb_estrella_5()">&#9733;</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                @if ($errors->has('amabilidad'))
                                    @foreach ($errors->get('amabilidad') as $error)
                                        <h5 id="mensaje_request">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>                    
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="comentario">Escribe tus comentaios del servicio (opcional)</label>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <textarea style="width: 100%" rows="5" id="comentario" name="comentario"></textarea>
                        </div>
                                        
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn" id="boton_principal" type="submit">Calificar</button>
                        </div>                        
                    </div>                    
                </li>
            </ul>
        </form> 
        </div>
        <br>
    </div>
</div>
@endif


    

</div>
@endsection

@section('title')
    Calificacion de Servicio de Limpieza
@endsection