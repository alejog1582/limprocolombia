@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Servicio Generado con Metodo de Pago Plan ID: {{$servicio->id}} </h1>
<br>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <img src="https://res.cloudinary.com/dikbf3xct/image/upload/v1598020190/Limpro%20Colombia/Slider%20Carrousel/servicio_realizado.jpg" class="card-img" alt="...">
        </div>
        <br>
    </div>
    <div class="col-md-6">
        <div class="card card_secundaria">
            <div class="card-header text-center card_principal">
                <b>Cliente:</b> {{$servicio->nombre_cliente}} 
            </div>
            <ul class="list-group list-group-flush card_secundaria">
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
                            <b>Valor:</b> @php echo number_format($servicio->valor_plan); @endphp</div>
                        <div class="col-md-6">
                            <b>Estado:</b> Pte. Asignacion Funcionaria
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            El pago del servicio puede ser realizado en el Banco Davivienda en la cuenta de ahorros numero 450700109959. una vez realizado el pago por favor enviar soporte al whatsapp 3504591097
                        </div>
                    </div>
                </li>
                <li class="list-group-item card_secundaria text-center">
                    <a class="btn" id="boton_principal" href="/">Aceptar</a>
                </li>
            </ul>
        </div>
        <br><br>
        
    </div>
</div>
</div>
@endsection

@section('title')
    Nuevo Servicio de Limpieza Generado
@endsection