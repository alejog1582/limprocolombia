@extends('layouts.app')

@section('content')

<div class="row text-center">
    <div class="col-sm-12">
        <br>
        <h2 class="titulo-principal">Pedidos Pendientes de Pago</h2>
        <br>
    </div>
</div>
<div class="row">
    @foreach ($pedidosptepagos as $pedidoptepago)
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">
                <b>Pedido Id: {{ $pedidoptepago->id }}</b>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>{{ $pedidoptepago->nombre_producto }}</b>
                            </div>    
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Direccion de envio: </b>{{ $pedidoptepago->direccion_envio }} {{ $pedidoptepago->apto_casa_oficina }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Cantidades: </b> {{ $pedidoptepago->cantidades }}
                            </div>
                            <div class="col-md-6">
                                <b>Fecha de Entrega: </b>{{ $pedidoptepago->fecha_entrega }} {{ $pedidoptepago->hora_entrega }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Tipo de Identificacion: </b> {{ $pedidoptepago->tipo_documento }}
                            </div>
                            <div class="col-md-6">
                                <b>Identificacion: </b>{{ $pedidoptepago->identificacion_cliente }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Nombre Cliente: </b> {{ $pedidoptepago->nombre_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Email: </b>{{ $pedidoptepago->email_contacto }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Celuar: </b> {{ $pedidoptepago->celular_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Medio de Pago: </b>{{ $pedidoptepago->medio_pago }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Valor Producto: </b> @php echo number_format($pedidoptepago->valor_producto); @endphp 
                            </div>
                            <div class="col-md-6">
                                <b>Valor Pedido: </b> @php echo number_format($pedidoptepago->valor_pedido); @endphp
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-muted">
                <form action="/administracion/pedidos/changepagado/{{ $pedidoptepago->id }}" method="get">
                    {{ csrf_field() }}<button class="btn" id="boton_principal">Pedido Pagado</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row text-center">
    <div class="col-sm-12">
        <br>
        <h2>Pedidos Pagados</h2>
        <br>
    </div>
</div>
<div class="row">
    @foreach ($pedidospagos as $pedidopago)
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">
                <b>Pedido Id: {{ $pedidopago->id }}</b>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>{{ $pedidopago->nombre_producto }}</b>
                            </div>    
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Direccion de envio: </b>{{ $pedidopago->direccion_envio }} {{ $pedidopago->apto_casa_oficina }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Cantidades: </b> {{ $pedidopago->cantidades }}
                            </div>
                            <div class="col-md-6">
                                <b>Fecha de Entrega: </b>{{ $pedidopago->fecha_entrega }} {{ $pedidopago->hora_entrega }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Tipo de Identificacion: </b> {{ $pedidopago->tipo_documento }}
                            </div>
                            <div class="col-md-6">
                                <b>Identificacion: </b>{{ $pedidopago->identificacion_cliente }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Nombre Cliente: </b> {{ $pedidopago->nombre_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Email: </b>{{ $pedidopago->email_contacto }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Celuar: </b> {{ $pedidopago->celular_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Medio de Pago: </b>{{ $pedidopago->medio_pago }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Valor Producto: </b> @php echo number_format($pedidopago->valor_producto); @endphp 
                            </div>
                            <div class="col-md-6">
                                <b>Valor Pedido: </b> @php echo number_format($pedidopago->valor_pedido); @endphp
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-muted">
                <form action="/administracion/pedidos/changedespachado/{{ $pedidopago->id }}" method="get">
                    {{ csrf_field() }}<button class="btn" id="boton_principal">Despachado</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row text-center">
    <div class="col-sm-12">
        <br>
        <h2 class="titulo-principal">Pedidos en Despacho</h2>
        <br>
    </div>
</div>
<div class="row">
    @foreach ($pedidosdespachados as $pedidodespachado)
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">
                <b>Pedido Id: {{ $pedidodespachado->id }}</b>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>{{ $pedidodespachado->nombre_producto }}</b>
                            </div>    
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Direccion de envio: </b>{{ $pedidodespachado->direccion_envio }} {{ $pedidodespachado->apto_casa_oficina }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Cantidades: </b> {{ $pedidodespachado->cantidades }}
                            </div>
                            <div class="col-md-6">
                                <b>Fecha de Entrega: </b>{{ $pedidodespachado->fecha_entrega }} {{ $pedidodespachado->hora_entrega }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Tipo de Identificacion: </b> {{ $pedidodespachado->tipo_documento }}
                            </div>
                            <div class="col-md-6">
                                <b>Identificacion: </b>{{ $pedidodespachado->identificacion_cliente }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Nombre Cliente: </b> {{ $pedidodespachado->nombre_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Email: </b>{{ $pedidodespachado->email_contacto }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Celuar: </b> {{ $pedidodespachado->celular_contacto }}
                            </div>
                            <div class="col-md-6">
                                <b>Medio de Pago: </b>{{ $pedidodespachado->medio_pago }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Valor Producto: </b> @php echo number_format($pedidodespachado->valor_producto); @endphp 
                            </div>
                            <div class="col-md-6">
                                <b>Valor Pedido: </b> @php echo number_format($pedidodespachado->valor_pedido); @endphp
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-muted">
                <form action="/administracion/pedidos/changeprocesado/{{ $pedidodespachado->id }}" method="get">
                    {{ csrf_field() }}<button class="btn" id="boton_principal">Procesado</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection