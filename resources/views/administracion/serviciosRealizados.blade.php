@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Servicio de Limpieza Realizados</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row">
@foreach ($servicios as $servicio)
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center card_principal">
                <b>Cliente:</b> {{$servicio->nombre_cliente}} ||
                <b>ID:</b> {{$servicio->id}}
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}
                        </div>
                        <div class="col-md-6">
                            <b>Lugar Servicio:</b> {{$servicio->lugar_servicio}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Fecha de Servicio:</b> {{$servicio->fecha_servicio}}</div>
                        <div class="col-md-6">
                            <b>Hora de Inicio:</b> {{$servicio->hora_inicio}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Plan:</b> {{$servicio->plan}} Horas</div>
                        <div class="col-md-6">
                            <b>Metodo de Pago:</b> {{$servicio->metodo_pago}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Valor:</b> {{$servicio->valor_plan}}</div>
                        <div class="col-md-6">
                            <b>Email:</b> {{$servicio->email}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Celular:</b> {{$servicio->celular_contacto}}</div>
                        <div class="col-md-6">
                            <b>Fijo:</b> {{$servicio->fijo_contacto}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Tipo Documento:</b> {{$servicio->tipo_documento}}</div>
                        <div class="col-md-6">
                            <b>Documento:</b> {{$servicio->numero_documento}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Kit de Productos:</b> {{$servicio->kit_productos}}</div>
                        <div class="col-md-6">
                            <b>Codigo Cupon:</b> {{$servicio->canje}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-12">
                            <b>Requerimiento Especial:</b> {{$servicio->observacion}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Funcionaria Asignada:</b> {{ $servicio->funcionaria_asignada->nombre_funcionaria }}
                        </div>    
                        @if ($servicio->estado == 'realizado')
                            <div class="form-group col-md-6">
                                <b>Servicio Sin Calificar</b>    
                            </div>
                        @else
                        <div class="form-group col-md-6">
                            <b>Calificacion:</b> {{ $servicio->calificacion->cal_total }} <span style="font-size: 32px; color:#22c7c0">&#9733;</span> 
                        </div>
                        @endif          
                    </div>
                    </form>
                </li>
            </ul>
          </div>
        <br>
    </div>
    
    
    @endforeach
</div>

</div>

@endsection

