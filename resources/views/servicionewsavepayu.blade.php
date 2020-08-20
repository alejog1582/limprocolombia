@extends('layouts.app')

@section('content')

<div class="container">



<br>
<h1 class="text-center">Servicio Generado con ID: {{$servicio->id}} </h1>
<br>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center card_principal">
                <b>Cliente:</b> {{$servicio->nombre_cliente}}
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}, {{$servicio->ciudad}}
                        </div>
                        <div class="col-md-6">
                            <b>Tipo de Servicio:</b> {{$servicio->tipo_servicio}}
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
                            <b>Valor del Servicio:</b> @php echo number_format($servicio->valor_plan); @endphp</div>
                        <div class="col-md-6">
                            <b>Estado:</b> Pte. Asignacion Funcionaria
                        </div>
                    </div>
                </li>
                @if ($servicio->kit_productos == 'kit1')
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-12">
                            <b>Kit de Aseo:</b> Kit 1 $ 30.000
                        </div>
                    </div>
                </li>                    
                @endif
                @if ($servicio->kit_productos == 'kit2')
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-12">
                            <b>Kit de Aseo:</b> Kit 2 $ 50.000
                        </div>
                    </div>
                </li>                    
                @endif
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <form method="post" target="_blank" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                                <input name="merchantId"    type="hidden"  value="765646"   >
                                <input name="accountId"     type="hidden"  value="772247" >
                                <input name="description"   type="hidden"  value="Servcio de Limpieza plan {{$servicio->plan}} Horas"  >
                                <input name="referenceCode" type="hidden"  value="ServicioId{{$servicio->id}}" >
                                <input name="amount"        type="hidden"  value="{{$servicio->valor_plan}}"   >
                                <input name="tax"           type="hidden"  value="{{$tax}}"  >
                                <input name="taxReturnBase" type="hidden"  value="0" >
                                <input name="currency"      type="hidden"  value="COP" >
                                <input name="signature"     type="hidden"  value="{{$signature}}">
                                <input name="buyerFullName" type="hidden" value="{{$servicio->nombre_cliente}}"> 
                                <input name="test"          type="hidden"  value="1" >
                                <input name="buyerEmail"    type="hidden"  value="{{$servicio->email}}" >
                                <input name="telephone"    type="hidden"  value="{{$servicio->celular_contacto}}" >
                                <input name="responseUrl"    type="hidden"  value="http://www.test.com/response" >
                                <input name="Submit" type="submit" class="btn" id="boton_principal" value="Pagar" onClick="enviaMD5(calculaMD5())" >
                            </form>   
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="/" class="btn" id="boton_principal">Regresar</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <br><br>
        
    </div>
</div>
</div>
@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection