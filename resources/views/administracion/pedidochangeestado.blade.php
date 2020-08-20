@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm">
        <br>
        <div class="card">
            <div class="card-body text-center">
                El estado del peido con ID: {{ $pedido->id }} se cambio exitosamente.
                <br><br>
                <a class="btn" id="boton_principal" href="/administracion/pedidos">Aceptar</a>
            </div>
        </div>
        <br>
    </div>
</div>


@endsection

