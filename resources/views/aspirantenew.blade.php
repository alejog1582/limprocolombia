@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <div class="card">
                <div class="card-header card_principal">Proceso Exitoso</div>

                <div class="card-body card_secundaria">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <p>El servicio se realizo exitosamente. En los proximos dias te estaremos llamando a entrevista. El numeo de ID de tu proceso es el: <b>{{$funcionaria->id}} </b></p>
                            <a class="btn text-center" id="boton_principal" href="/">Aceptar</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>            
</div>
@endsection