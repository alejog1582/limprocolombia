@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Aspirates Limpro Colombia</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row">
    @foreach ($funcionarias as $funcionaria)
        @if ($funcionaria->estado == 'aspirante')
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center card_principal">
                        <b>{{ $funcionaria->nombre_funcionaria }}</b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item card_secundaria"><b>Id:</b> {{ $funcionaria->id }}</li>
                        <li class="list-group-item card_secundaria"><b>Identificacion:</b> {{ $funcionaria->tipo_documento }} {{ $funcionaria->numero_documento }}</li>
                        <li class="list-group-item card_secundaria"><b>Email:</b> {{ $funcionaria->email }}</li>
                        <li class="list-group-item card_secundaria"><b>Numeros de Contacto:</b> {{ $funcionaria->celular_contacto }} {{ $funcionaria->fijo_contacto }}</li>
                        <li class="list-group-item card_secundaria"><b>Direccion Casa:</b> {{ $funcionaria->direccion_casa }}, {{ $funcionaria->barrio_casa}}, {{ $funcionaria->ciudad}}</li>
                        <li class="list-group-item card_secundaria"><b>Edad:</b> {{ $funcionaria->edad }} || <b>Cargo:</b> {{ $funcionaria->oficio }} || <b>Experiencia:</b> {{ $funcionaria->experiencia_oficio }}</li>
                        <li class="list-group-item card_secundaria"><div class="row"><div class="col-sm text-center"><a class="btn" id="boton_principal" href="/administracion/entrevista/{{ $funcionaria->id }}">Entrevistar</a></div></div></li>
                    </ul>
                </div>
                <br>
            </div>
        @endif
    @endforeach
</div>

</div>

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection