@extends('layouts.app')

@section('content')
    
<div class="container">
    <br>
    <div class="card">
        <div class="card-header card_principal ">Cotizacion generada con exito</div>
        <div class="card-body card_secundaria text-center">
            <p class="card-text">En las proximas 24 horas recibiras nuestra cotizacion al correo registrado. Esperamos muy pronto establecer una relacion comercial duradera.</p>
            <a href="/" class="btn" id="boton_principal">Aceptar</a>
        </div>        
    </div>
    <br>    
</div>

@endsection

@section('title')
    Cotizacion de Servicio de Limpieza Enviada
@endsection