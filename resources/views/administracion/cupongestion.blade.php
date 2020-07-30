@extends('layouts.app')

@section('content')
<div class="container">

    <br>
    <h1 class="text-center">Gestion de Cuupones</h1>
    <a class="btn" id="boton_principal" href="/administracion">Regresar</a>
    <br><br>
    
    <h2>cupones Activos</h2>
    <div class="row">
        @foreach ($cuponeactivos as $cuponeactivo)
            <div class="col-md-4">
                <br>
                <div class="card" >
                    <div class="card-header card_principal">
                        <b>Codigo de Cupon:</b> {{ $cuponeactivo->codigo_canje }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha de Creacion:</b> {{ $cuponeactivo->created_at }}
                                </div>
                                <div class="col-md-6">
                                    <b>Valor de Canje:</b> $@php echo number_format($cuponeactivo->valor_canje); @endphp 
                                </div>
                            </div>  
                        </li>
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Email:</b> {{ $cuponeactivo->email }} 
                                </div>
                            </div>  
                        </li>
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="/administracio/cupongestion/desactivar/{{$cuponeactivo->id}}" >
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_funcionaria" value="{{ $cuponeactivo->id }}">
                                        <button type="submit" class="btn" id="boton_principal">Desactivar</button>
                                    </form> 
                                </div>
                                
                            </div>  
                        </li>
                        
                    </ul>
                </div>
                <br>
            </div>        
        @endforeach
    </div>

    <h2>cupones Desactivos</h2>
    <div class="row">
        @foreach ($cuponedesactivos as $cuponedesactivo)
            <div class="col-md-4">
                <br>
                <div class="card" >
                    <div class="card-header card_principal">
                        <b>Codigo de Cupon:</b> {{ $cuponedesactivo->codigo_canje }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha de Creacion:</b> {{ $cuponedesactivo->created_at }}
                                </div>
                                <div class="col-md-6">
                                    <b>Valor de Canje:</b> $@php echo number_format($cuponedesactivo->valor_canje); @endphp
                                </div>
                            </div>  
                        </li>
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Email:</b> {{ $cuponedesactivo->email }} 
                                </div>
                            </div>  
                        </li>
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="/administracio/cupongestion/activar/{{$cuponedesactivo->id}}" >
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_funcionaria" value="{{ $cuponedesactivo->id }}">
                                        <button type="submit" class="btn" id="boton_principal">Activar</button>
                                    </form> 
                                </div>
                                
                            </div>  
                        </li>
                        
                    </ul>
                </div>
                <br>
            </div>        
        @endforeach
    </div>

    <h2>Cupones Canjeados</h2>
    <div class="row">
        @foreach ($cuponecanjeados as $cuponecanjeado)
            <div class="col-md-4">
                <br>
                <div class="card" >
                    <div class="card-header card_principal">
                        <b>Codigo de Cupon:</b> {{ $cuponecanjeado->codigo_canje }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha de Creacion:</b> {{ $cuponecanjeado->created_at }}
                                </div>
                                <div class="col-md-6">
                                    <b>Valor de Canje:</b> $@php echo number_format($cuponecanjeado->valor_canje); @endphp
                                </div>
                            </div>  
                        </li>
                        <li class="list-group-item card_secundaria">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Email:</b> {{ $cuponecanjeado->email }} 
                                </div>
                                <div class="col-md-6">
                                    <b>Id Servicio Canjeado:</b> {{ $cuponecanjeado->servicio_canjeado }} 
                                </div>
                            </div>  
                        </li>
                        
                        
                    </ul>
                </div>
                <br>
            </div>        
        @endforeach
    </div>

</div>

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection