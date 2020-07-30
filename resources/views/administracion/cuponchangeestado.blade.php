@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">
            <br>
            <div class="card card_secundaria">
                <div class="card-body text-center">
                    Se a cambiado el estado de la cotizacion con ID: {{ $cupon->id }} exitosamente.
                    <br><br>
                    <a class="btn" id="boton_principal" href="/administracio/cupongestion">Aceptar</a>
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