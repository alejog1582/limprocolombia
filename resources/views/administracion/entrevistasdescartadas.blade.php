@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Entrevistas Limpro Colombia</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row">
    <div class="accordion" id="accordionExample">
    @foreach ($funcionarias as $funcionaria)
    <div class="col-md-6">    
        @if ($funcionaria->estado == 'descartada')
                <div class="card">
                    <div class="card-header  card_principal" id="headingOne">
                        <h2>
                            <button class="btn btn-link  card_principal" type="button" data-toggle="collapse" data-target="#collapseOne{{$funcionaria->id}}" aria-expanded="true" aria-controls="collapseOne">
                                <b>Nombre:</b> {{ $funcionaria->nombre_funcionaria }} || <b>CC:</b> {{ $funcionaria->numero_documento }} || <b>ID:</b> {{ $funcionaria->id }}
                            </button>
                        </h2>
                    </div>          
                    <div id="collapseOne{{$funcionaria->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body card_secundaria">
                            <div class="row">
                                <div class="col-md-6"><b>F. Entrevista:</b> {{ $funcionaria->fecha_entrevista }}</div>
                                <div class="col-md-6"><b>Conc. Entrevista:</b> {{ $funcionaria->concepto_entrevista }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>Cargo:</b> {{ $funcionaria->oficio }}</div>
                                <div class="col-md-6"><b>Experiencia:</b> {{ $funcionaria->experiencia_oficio }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>Ciudad</b> {{ $funcionaria->ciudad }}</div>
                                <div class="col-md-6"><b>Barrio:</b> {{ $funcionaria->barrio_casa }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>Email:</b> {{ $funcionaria->email }}</div>
                                <div class="col-md-6"><b>Dis. Tiempo:</b> {{ $funcionaria->disponibilidad_tiempo }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>Celular:</b> {{ $funcionaria->celular_contacto }}</div>
                                <div class="col-md-6"><b>Fijo:</b> {{ $funcionaria->fijo_contacto }}</div>                                
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>Edad:</b> {{ $funcionaria->edad }}</div>
                                <div class="col-md-6"><b>Operador:</b> {{ $funcionaria->operador_celular }}</div>                                
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
                                <div class="col-md-6"><b>Cocina:</b> {{ $funcionaria->cocina }}</div>
                                <div class="col-md-6"><b>Greca:</b> {{ $funcionaria->cafeteria }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>plancha:</b> {{ $funcionaria->plancha }}</div>
                                <div class="col-md-6"><b>T. Pisos:</b> {{ $funcionaria->tratamiento_pisos }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>P. Aseo:</b> {{ $funcionaria->productos_aseo }}</div>
                                <div class="col-md-6"><b>M. Alimentos:</b> {{ $funcionaria->manipulacion_alimentos }} || {{ $funcionaria->fecha_manipulacion_alimentos }}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12"><b>Concepto Entrevista:</b> {{ $funcionaria->concepto_entrevista }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            
                
                @endif    
            </div>    
                @endforeach
            </div>
</div>

</div>

@endsection