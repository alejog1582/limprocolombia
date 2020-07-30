@extends('layouts.app')

@section('content')

<div class="row text-center">
    <div class="col-sm-12">
        <br>
        <h1 class="titulo-principal">Pedidos Procesados</h1>
        <br>
    </div>
</div>
<div class="row">
    @foreach ($pedidosprocesados as $pedidoprocesado)
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">
                <b>Pedido Id: {{ $pedidoprocesado->id }}</b>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>{{ $pedidoprocesado->nombre_producto }}</b>
                            </div>    
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Direccion de envio: </b>{{ $pedidoprocesado->direccion_envio }} {{ $pedidoprocesado->apto_casa_oficina }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Cantidades: </b> {{ $pedidoprocesado->cantidades }}
                            </div>
                            <div class="col-md-6">
                                <b>Fecha de Entrega: </b>{{ $pedidoprocesado->fecha_entrega }} {{ $pedidoprocesado->hora_entrega }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Tipo de Identificacion: </b> {{ $pedidoprocesado->tipo_documento }}
                            </div>
                            <div class="col-md-6">
                                <b>Identificacion: </b>{{ $pedidoprocesado->identificacion_cliente }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Nombre Cliente: </b> {{ $pedidoprocesado->nombre_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Email: </b>{{ $pedidoprocesado->email_contacto }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Celuar: </b> {{ $pedidoprocesado->celular_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Medio de Pago: </b>{{ $pedidoprocesado->medio_pago }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Valor Producto: </b> @php echo number_format($pedidoprocesado->valor_producto); @endphp 
                            </div>
                            <div class="col-md-6">
                                <b>Valor Pedido: </b> @php echo number_format($pedidoprocesado->valor_pedido); @endphp
                            </div>
                        </div>
                    </li>
                </ul>
            </div>            
        </div>
    </div>
    @endforeach
</div>


@endsection