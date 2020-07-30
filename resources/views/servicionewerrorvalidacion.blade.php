@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <div class="card">
                <div class="card-header card_principal ">Error de Validacion</div>

                <div class="card-body card_secundaria">
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <p>El codigo ingresado no es valido por favor revisar e ingresarlo nuevamnete.</p>    
                            <a href="/servicionew" type="submit" class="btn" id="boton_principal">
                                Aceptar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection