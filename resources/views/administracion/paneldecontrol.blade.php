@extends('layouts.app')

@section('content')
    
<div class="content">
    <br>
    <h1 class="text-center">Panel de  Control Limpro Colombia</h1>
    <br>
    <div class="container">
        <h2>Nomina</h2>
        <br>
        <div class="row">
            <div class="col-md-2">
                <a href="/administracion/aspirantes" type="button" class="btn btn-lg btn-block" id="boton_principal">Aspirantes</a>
                <br>
            </div>
            <div class="col-md-2">
                <a href="/administracion/entrevistas" type="button" class="btn btn-lg btn-block" id="boton_principal">Entrevistadas</a>
                <br>
            </div>
            <div class="col-md-2">
                <a href="/administracion/funcionarias" type="button" class="btn btn-lg btn-block" id="boton_principal">Funcionarias</a>
                <br>
            </div>
            <div class="col-md-2">
                <a href="/administracion/exfuncionarias" type="button" class="btn btn-lg btn-block" id="boton_principal">Exfuncionarias</a>
            </div>
            <div class="col-md-2">
                <a href="/administracion/entrevistasdescartadas" type="button" class="btn btn-lg btn-block" id="boton_principal">Descartadas</a>
            </div>
        </div> 
        <br>
        <h2>Servicios</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="/administracion/servicios/solicitados" type="button" class="btn btn-lg btn-block" id="boton_principal">Solicitados</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/servicios/asignados" type="button" class="btn btn-lg btn-block" id="boton_principal">Asignados</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/servicios/realizados" type="button" class="btn btn-lg btn-block" id="boton_principal">Realizados</a>
            </div>
            <div class="col-md-3">
                <a href="/administracion/servicios/descartados" type="button" class="btn btn-lg btn-block" id="boton_principal">Descartados</a>
            </div>                        
        </div>
        <br>
        <h2>Cotizaciones</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="/administracion/cotizacionesrecibidas" type="button" class="btn btn-lg btn-block" id="boton_principal">Recibidas</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/cotizacionesrealizadas" type="button" class="btn btn-lg btn-block" id="boton_principal">Realizadas</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/cotizacionesgestionadas" type="button" class="btn btn-lg btn-block" id="boton_principal">Gestionadas</a>
            </div>            
        </div>  
        <br>
        <h2>Tienda</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="/administracion/productos" type="button" class="btn btn-lg btn-block" id="boton_principal">Productos</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/pedidos" type="button" class="btn btn-lg btn-block" id="boton_principal">Pedidos</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/pedidosprocesados" type="button" class="btn btn-lg btn-block" id="boton_principal">Pedidos Procesados</a>
                <br>
            </div>                      
        </div> 
        <br>
        <h2>Calificaciones</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="/administracion/callificacionesmales" type="button" class="btn btn-lg btn-block" id="boton_principal">Malas</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracion/callificacionesbuenas" type="button" class="btn btn-lg btn-block" id="boton_principal">Buenas</a>
            </div>                       
        </div>
        <br>
        <h2>Cupones</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="/administracio/cuponnew" type="button" class="btn btn-lg btn-block" id="boton_principal">Nuevo Cupon</a>
                <br>
            </div>
            <div class="col-md-3">
                <a href="/administracio/cupongestion" type="button" class="btn btn-lg btn-block" id="boton_principal">Gestion de Cupones</a>
                <br><br>                    
            </div>   
        </div>
    </div>
    
    
</div>

@endsection

