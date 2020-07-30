@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">
            <br>
            <div class="card card_secundaria">
                <div class="card-body text-center">
                    Se a cambiado el estado del servicio con ID: {{ $servicio->id }} exitosamente.
                    <br><br>
                    <a class="btn" id="boton_principal" href="/administracion">Aceptar</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection