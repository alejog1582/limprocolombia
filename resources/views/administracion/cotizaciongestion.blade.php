@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm">
        <br>
        <div class="card">
            <div class="card-body text-center">
                Se a gestionado la cotizacion con ID: {{ $cotizacion->id }} exitosamente.
                <br><br>
                <a class="btn" id="boton_principal" href="/administracion">Aceptar</a>
            </div>
        </div>
        <br>
    </div>
</div>


@endsection

