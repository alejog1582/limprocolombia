@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <h1 class="text-center">Funcionarias Limpro Colombia</h1>
    <a class="btn" id="boton_principal" href="/administracion">Regresar</a>
    <br><br>
    <div class="row">
        <div class="accordion" id="accordionExample">
            @foreach ($funcionarias as $funcionaria)
                <div class="col-md-6">    
                    @if ($funcionaria->estado == 'funcionaria')
                        <div class="card card_secundaria">
                            <div class="card-header card_principal" id="headingOne">
                                <h2 class="">
                                    <button class="btn btn-link card_principal" type="button" data-toggle="collapse" data-target="#collapseOne{{$funcionaria->id}}" aria-expanded="true" aria-controls="collapseOne">
                                        <b>Nombre:</b> {{ $funcionaria->nombre_funcionaria }} || <b>CC:</b> {{ $funcionaria->numero_documento }} || <b>ID:</b> {{ $funcionaria->id }}
                                    </button>
                                </h2>
                            </div>          
                            <div id="collapseOne{{$funcionaria->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6"><b>Cargo:</b> {{ $funcionaria->oficio }}</div>
                                        <div class="col-md-6"><b>Fecha de Vinculacion:</b> {{ $funcionaria->fecha_vinculacion }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Email:</b> {{ $funcionaria->email }}</div>
                                        <div class="col-md-6"><b>Fijo:</b> {{ $funcionaria->fijo_contacto }}</div>                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Celular:</b> {{ $funcionaria->celular_contacto }}</div>
                                        <div class="col-md-6"><b>Operador:</b> {{ $funcionaria->operador_celular }}</div>                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Direccion Casa:</b> {{ $funcionaria->direccion_casa }}</div>
                                        <div class="col-md-6"><b>Barrio Casa:</b> {{ $funcionaria->barrio_casa }}, {{ $funcionaria->ciudad }}</div>                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Edad:</b> {{ $funcionaria->edad }}</div>
                                        <div class="col-md-6"><b>Fecha de Nacimiento:</b> {{ $funcionaria->fecha_nacimiento }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Eps:</b> {{ $funcionaria->eps }}</div>
                                        <div class="col-md-6"><b>Pension:</b> {{ $funcionaria->pension }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>T. Uniforme:</b> {{ $funcionaria->talla_uniforme }}</div>
                                        <div class="col-md-6"><b>T. Zapatos:</b> {{ $funcionaria->talla_zapato }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Fecha Dotacion:</b> {{ $funcionaria->fecha_dotacion }}</div>
                                        <div class="col-md-6"><b>Fecha Man. Alimentos:</b> {{ $funcionaria->fecha_manipulacion_alimentos }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Banco Cuenta:</b> {{ $funcionaria->cuenta_ahorro }}</div>
                                        <div class="col-md-6"><b>Numero de Cuenta:</b> {{ $funcionaria->numero_cuenta_ahorro }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Acudiente:</b> {{ $funcionaria->nombre_acudiente }}</div>
                                        <div class="col-md-6"><b>Numero de Acudiente:</b> {{ $funcionaria->celular_acudiente }}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6"><b>Numero de Servicios :</b> 
                                        @foreach ($servicios as $servicio)
                                            @if ($funcionaria->id == $servicio->id_funcionaria_asignada)
                                                @php                                        
                                                    $numero_servicios=$numero_servicios+1;//Cuenta el numero de registros
                                                @endphp
                                            @endif       
                                        @endforeach {{ $numero_servicios }} 
                                        @php                                        
                                            $numero_servicios=0;//sumanos los valores, ahora solo fata mostrar dicho valor
                                        @endphp</div>
                                        <div class="col-md-6"><b>Calificacion:</b> 
                                        @foreach ($calificaciones as $calificacion)
                                            @if ($funcionaria->id == $calificacion->id_empleado)
                                                @php                                        
                                                    $numero_servicios=$numero_servicios+1;
                                                    $suma_calificacion+=$calificacion->cal_total;//Cuenta el numero de registros
                                                    $resultado_calificacion = round($suma_calificacion / $numero_servicios,1);
                                                @endphp
                                            @endif       
                                        @endforeach {{ $resultado_calificacion }} <a style="font-size: 32px; color:#7AB518" href="#!">&#9733;</a>
                                        @php                                        
                                            $numero_servicios=0;
                                            $suma_calificacion=0;
                                            $resultado_calificacion=0;
                                        @endphp
                                        </div>                                                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Servicios Malos :</b>
                                        @foreach ($calificaciones as $calificacion)
                                            @if ($funcionaria->id == $calificacion->id_empleado)
                                                @if ($calificacion->cal_total < 3)
                                                    @php                                        
                                                        $calificaciones_malas=$calificaciones_malas+1;//Cuenta el numero de registros
                                                    @endphp                                            
                                                @endif
                                            @endif       
                                        @endforeach {{ $calificaciones_malas }} 
                                        @php                                        
                                            $calificaciones_malas=0;//sumanos los valores, ahora solo fata mostrar dicho valor
                                        @endphp
                                        </div>
                                        <div class="col-md-6"><b>Servicios Buenos:</b>
                                            @foreach ($calificaciones as $calificacion)
                                            @if ($funcionaria->id == $calificacion->id_empleado)
                                                @if ($calificacion->cal_total >= 3)
                                                    @php                                        
                                                        $calificaciones_buenas=$calificaciones_buenas+1;//Cuenta el numero de registros
                                                    @endphp                                            
                                                @endif
                                            @endif       
                                        @endforeach {{ $calificaciones_buenas }} 
                                        @php                                        
                                            $calificaciones_buenas=0;//sumanos los valores, ahora solo fata mostrar dicho valor
                                        @endphp</div>                                                                                                
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <a href="/administracion/entrevistas/{{$funcionaria->id}}" type="button" class="btn" id="boton_principal">Gestionar</a>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <a href="/administracion/funcionarias/desvincular/{{$funcionaria->id}}" type="button" class="btn boton_principal" id="boton_principal">Desvincular</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    @endif    
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
