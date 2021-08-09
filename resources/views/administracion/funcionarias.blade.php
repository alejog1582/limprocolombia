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
                                        <div class="col-md-12 text-center">
                                            <img src="{{$funcionaria->url_foto}}" alt="" width="60%" height="60%">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Cedula:</b> {{ $funcionaria->numero_documento }}</div>
                                        <div class="col-md-6"><b>Nombre:</b> {{ $funcionaria->nombre_funcionaria_abreviado }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Email:</b> {{ $funcionaria->email }}</div>
                                        <div class="col-md-6"><b>Celular:</b> {{ $funcionaria->celular_contacto }}</div>                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Direccion Casa:</b> {{ $funcionaria->direccion_casa }}</div>
                                        <div class="col-md-6"><b>Edad:</b> {{ $funcionaria->edad }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Eps:</b> {{ $funcionaria->eps }}</div>
                                        <div class="col-md-6"><b>Pension:</b> {{ $funcionaria->pension }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Banco:</b> {{ $funcionaria->cuenta_ahorro }}</div>
                                        <div class="col-md-6"><b>Numero Cuenta:</b> {{ $funcionaria->numero_cuenta_ahorro }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>T. Uniforme:</b> {{ $funcionaria->talla_uniforme }}</div>
                                        <div class="col-md-6"><b>T. Zapatos:</b> {{ $funcionaria->talla_zapato }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Acudiente:</b> {{ $funcionaria->nombre_acudiente }}</div>
                                        <div class="col-md-6"><b>Numero de Acudiente:</b> {{ $funcionaria->celular_acudiente }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Plancha:</b> {{ $funcionaria->plancha }}</div>
                                        <div class="col-md-6"><b>Fecha de Vinculacion:</b> {{ $funcionaria->fecha_vinculacion }}</div>
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
