@extends('layouts.app')

@section('content')
<div class="container">
<br>
<h1 class="text-center">Calificaciones Funcionaria <b> {{ $funcionaria->nombre_funcionaria_abreviado }}</b></h1>
<a class="btn" id="boton_principal" href="/micuenta">Regresar</a>
<br><br>
<div class="row">
    @foreach ($calificaciones as $calificacion)
    @if ($calificacion->id_empleado == $funcionaria->id)
        
    
        <div class="col-md-4">
            <br>
            <div class="card" >
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Fecha Servicio:</b> {{ $calificacion->cal_servicio->fecha_servicio }}
                        </div>
                        <div class="col-md-6">
                            <b>Plan:</b> {{ $calificacion->cal_servicio->plan }}                    
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Calificacion Total:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_total }} <a style="font-size: 32px; color:#7AB518" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Calidad:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_calidad_servicio }} <a style="font-size: 32px; color:#7AB518" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Puntualidad:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_puntualidad }} <a style="font-size: 32px; color:#7AB518" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Presentacion personal:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_presentacion_personal }} <a style="font-size: 32px; color:#7AB518" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Amabilidad:</b>
                            </div>
                            <div class="col-md-6">
                                {{ $calificacion->cal_amabilidad }} <a style="font-size: 32px; color:#7AB518" href="#!">&#9733;</a>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item">
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
        @endif     
    @endforeach
</div>

</div>

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection