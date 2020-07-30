@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Cotizaciones Solicitados</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row">
    @foreach ($cotizaciones as $cotizacion)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center card_principal">
                    <b>Cliente:</b> {{$cotizacion->nombre_cliente}} ||
                    <b>ID:</b> {{$cotizacion->id}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Servicio de Interes:</b> {{$cotizacion->tipo_servicio}}
                            </div>
                            <div class="col-md-6">
                                <b>Lugar Servicio:</b> {{$cotizacion->lugar_servicio}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Plan:</b> {{$cotizacion->plan}}</div>
                            <div class="col-md-6">
                                <b>Periodicidad:</b> {{$cotizacion->periodicidad}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Email:</b> {{$cotizacion->email}}</div>
                            <div class="col-md-6">
                                <b>Fecha de la solicitud:</b> {{$cotizacion->created_at}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Celular:</b> {{$cotizacion->celular_contacto}}</div>
                            <div class="col-md-6">
                                <b>Fijo:</b> {{$cotizacion->fijo_contacto}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Celular:</b> {{$cotizacion->celular_contacto}}</div>
                            <div class="col-md-6">
                                <b>Fijo:</b> {{$cotizacion->fijo_contacto}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Ciudad:</b> {{$cotizacion->ciudad}}</div>
                            <div class="col-md-6">
                                <b>Barrio:</b> {{$cotizacion->barrio}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Observacion:</b> {{$cotizacion->observacion}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item card_secundaria">
                        <div class="row">
                            <div class="form-group col-sm-12 text-center">
                                <form method="POST" action="/administracion/cotizacionesrecibidaschange/{{$cotizacion->id}}" >
                                {{ csrf_field() }}
                                    <input type="hidden" name="id_funcionaria" value="{{ $cotizacion->id }}">
                                    <button type="submit" class="btn" id="boton_principal">Realizado</button>
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

</div>

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection