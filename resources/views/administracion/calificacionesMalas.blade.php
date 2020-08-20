@extends('layouts.app')

@section('content')
<div class="container">


<br>
<h1 class="text-center">Calificaciones Malas</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row">
    @foreach ($calificaciones as $calificacion)
        <div class="col-md-4">
            <br>
            <div class="card" >
                <div class="card-header card_principal">
                    <b>Funcionaria calificada:</b> {{ $calificacion->cal_funcionario->nombre_funcionaria_abreviado }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>ID Servicio:</b> {{ $calificacion->cal_servicio->id }}
                            </div>
                            <div class="col-md-6">
                                <b>Cliente:</b> {{ $calificacion->cal_servicio->nombre_cliente }}
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Calificacion Total:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_total }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Calidad:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_calidad_servicio }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Puntualidad:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_puntualidad }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Presentacion personal:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_presentacion_personal }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Amabilidad:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_amabilidad }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-sm-12">
                                <b>Comentario:</b> {{ $calificacion->comentario }}
                            </div>                            
                        </div>  
                    </li>
                </ul>
            </div>
            <br>
        </div>        
    @endforeach
</div>

</div>

@endsection

