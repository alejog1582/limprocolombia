@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm">
        <br>
        <div class="card">
            <div class="card-body text-center">
                El estado del producto: {{ $producto->nombre_producto }} exitosamente.
                <br><br>
                <a class="btn" id="boton_principal" href="/administracion">Aceptar</a>
            </div>
        </div>
        <br>
    </div>
</div>


@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection