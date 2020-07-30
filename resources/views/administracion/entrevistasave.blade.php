@extends('layouts.app')

@section('content')
    
<div class="container">
    <br>
    @if ($funcionaria->estado == 'entrevistada') 
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card_principal">
                        Entrevista <b> {{ $funcionaria->nombre_funcionaria_abreviado }} </b>
                    </div>
                    <div class="card-body  card_secundaria">
                        <p class="card-text">La entrevista a sido guardad con exito. El id de la entrevista es {{ $funcionaria->id }}.</p>
                        <a href="/administracion" class="btn" id="boton_principal">Aceptar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body card_secundaria">
                        <p>Si el concepto de la entrevista es bueno enviar a al funcionaria a examenes medicos, programar visitia domiciliaria y realizar revision de antecedentes laborales y judiciales</p> 
                    </div>
                </div>
            </div>
        </div>
        <br>    
    @endif


    @if ($funcionaria->estado == 'descartada') 
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card_principal">
                        Entrevista <b> {{ $funcionaria->nombre_funcionaria_abreviado }} </b>
                    </div>
                    <div class="card-body card_secundaria">
                        <p class="card-text">La entrevista a sido Descartada.</p>
                        <a href="/administracion" class="btn" id="boton_principal">Aceptar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body card_secundaria">
                        <img height="100%" width="100%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Crystal_128_error.svg/1024px-Crystal_128_error.svg.png" alt=""> 
                    </div>
                </div>
            </div>
        </div>
        <br>    
    @endif

    @if ($funcionaria->estado == 'funcionaria') 
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card_principal">
                        Funcionaria <b> {{ $funcionaria->nombre_funcionaria_abreviado }} </b>
                    </div>
                    <div class="card-body card_secundaria">
                        <p class="card-text">El proceso de seleccion a sido satisfactorio. {{ $funcionaria->nombre_funcionaria_abreviado }} hace parte de la familiar de Limpro Colombia.</p>
                        <a href="/administracion" class="btn" id="boton_principal">Aceptar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body card_secundaria">
                        <p>Firmar contrato con la funccionaria, entregar dotacion, plan de celular y usuario en geovictoria</p>
                    </div>
                </div>
            </div>
        </div>
        <br>    
    @endif

    @if ($funcionaria->estado == 'exfuncionaria') 
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card_principal">
                        Funcionaria <b> {{ $funcionaria->nombre_funcionaria_abreviado }} </b>
                    </div>
                    <div class="card-body card_secundaria">
                        <p class="card-text">El proceso de desvinculacion a sido satisfactorio. {{ $funcionaria->nombre_funcionaria_abreviado }} hace parte de la familiar de Limpro Colombia.</p>
                        <a href="/administracion" class="btn" id="boton_principal">Aceptar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body card_secundaria">
                        <p>Para la liquidacion la funcionaria debe hacer entrega de la dotacioncion.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>    
    @endif
</div>

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection