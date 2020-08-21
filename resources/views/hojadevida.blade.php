@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Hoja de vida: {{ $funcionaria->nombre_funcionaria_abreviado }}</h1>
<br>
<a class="btn" id="boton_principal" href="/micuenta">Regresar</a>
<br><br>
    <div class="contenedor">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img width="20%" src="{{ $funcionaria->url_foto }}" alt="">
            </div>
        </div>
        <br>        
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label for="edad">Edad</label>
            <input disabled value="{{ $funcionaria->edad }} Años" type="text" class="form-control" id="edad" name="edad">            
        </div>
        <div class="form-group col-md-4">
            <label for="tipo_sangre">Tipo de Sangre</label>
            <input disabled value="{{ $funcionaria->tipo_sangre }}" type="text" class="form-control" id="tipo_sangre" name="tipo_sangre">            
        </div>
        <div class="form-group col-md-4">
            <label for="eps">Experiencia en Servicios Generales</label>
            <input disabled value="{{ $funcionaria->experiencia_tiempo }} Años" type="text" class="form-control" id="eps" name="eps">
        </div>        
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label for="eps">Eps</label>
            <input disabled value="{{ $funcionaria->eps }}" type="text" class="form-control" id="eps" name="eps">
        </div>
        <div class="form-group col-md-4">
            <label for="arl">Arl</label>
            <input disabled value="Sura" type="text" class="form-control" id="arl" name="arl">
        </div>
        <div class="form-group col-md-4">
            <label for="pension">Pension</label>
            <input disabled value="{{ $funcionaria->pension }}" type="text" class="form-control" id="pension" name="pension">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fortalezas">Fortalezas</label>
            <textarea disabled class="form-control" id="fortalezas" rows="4" name="fortalezas">{{ $funcionaria->fortalezas }}</textarea>
        </div>                                      
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <b>Calificacion Glogal</b>
            @foreach ($calificaciones as $calificacion)
                @if ($funcionaria->id == $calificacion->id_empleado)
                    @php                                        
                        $numero_servicios=$numero_servicios+1;
                        $suma_calificacion+=$calificacion->cal_total;//Cuenta el numero de registros
                        $resultado_calificacion = round($suma_calificacion / $numero_servicios,1);
                    @endphp
                @endif       
            @endforeach {{ $resultado_calificacion }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a> <a href="/calificaciones/{{ $funcionaria->id }}">Ver Calificaciones de Funcionaria</a>
            @php                                        
                $numero_servicios=0;
                $suma_calificacion=0;
                $resultado_calificacion=0;
            @endphp
        </div>
        <div class="form-group col-md-6">
            <br>
            <b>Numero de Servicios Realizados:</b>
            @foreach ($servicios as $servicio)
                @if ($funcionaria->id == $servicio->id_funcionaria_asignada)
                    @php                                        
                        $numero_servicios=$numero_servicios+1;//Cuenta el numero de registros
                    @endphp
                @endif       
            @endforeach {{ $numero_servicios }} 
            @php                                        
                $numero_servicios=0;//sumanos los valores, ahora solo fata mostrar dicho valor
            @endphp
        </div>                                            
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="/micuenta" class="btn" id="boton_principal">Aceptar</a>
            <br><br>
        </div>
    </div>
</div>

@endsection

@section('title')
    Hoja de Vida Funcionaria de Limpieza
@endsection