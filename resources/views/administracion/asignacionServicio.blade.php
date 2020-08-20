@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Asignacion de Servicio Exitoso</h1>
<br>
<div class="row">
    <div class="col-sm">
        <div class="card card_secundaria">
            <div class="card-body text-center">
                La funcionaria {{ $servicio->funcionaria_asignada->nombre_funcionaria_abreviado }} a sido asignada con exito al servicio ID {{$servicio->id}}
                <br><br>
                <a class="btn" id="boton_principal" href="/administracion">Aceptar</a>
            </div>
        </div>
        <br>
    </div>
</div>
   
</div>
@endsection

