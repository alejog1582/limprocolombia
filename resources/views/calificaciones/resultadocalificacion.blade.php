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
                        Agradecemos tu calificacion y es un placer para nosotros cumplir con las expectativas de nuestros clientes y seguiremos trabajando para ser mejores cada dia.
                    @endif
                    @if ($cal_total < 3)
                        Agradecemos tu calificación, la cual nos permite realizar un acompañamiento constructivo con nuestro equipo humano y así poder brindar una mejor experiencia a nuestros clientes. <br> <br>  En caso que presentaras una novedad puntal que desees compartirnos, agradecemos tus comentarios a nuestro correo <b>servicios@limpro.co</b>
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

