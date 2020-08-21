@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
    <div class="col-sm-12">
        <br>
        <div class="card">
            <div class="card-header card_principal">
                La calificación al funcionario <b>{{ $calificacion->cal_funcionario->nombre_funcionaria_abreviado }}</b> se ha registrado satisfactoriamiente.
            </div>
            <div class="card-body card_secundaria">
                <p class="card-text">
                    @if ($cal_total >= 3)
                        Es un placer para nosotros cumplir con las expectativas del servicio. Agradecemos tu calificacion y por elegirnos como proveedores de servicios de Limpieza. <br><br> Sera un placer acompañarte en la proxima solicitud.
                    @endif
                    @if ($cal_total < 3)
                        Agradecemos tu calificación, la cual nos permite realizar un acompañamiento constructivo con nuestro equipo humano y así poder brindar una mejor experiencia a nuestros clientes. <br> <br>  Con el fin de brindarte un acompañamiento y conocer los detalles de la clificacion, uno de nuestros funcionarias de servicio al cliente se pondran en contacto contigo.
                    @endif            
                </p>
              <a href="/micuenta" class="btn" id="boton_principal">Aceptar</a>
            </div>
        </div>
        <br>
    </div>
</div>

</div>
@endsection

@section('title')
    Calificacion Realizada
@endsection

