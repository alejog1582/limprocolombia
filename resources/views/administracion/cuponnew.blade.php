@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <h1 class="text-center">Generar Nuevo Cupon</h1>
    <a class="btn" id="boton_principal" href="/administracion">Regresar</a>
    <br><br>

    <div class="row">
        <div class="col-md-12">
            <form action="/administracio/cuponnew/save" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="codigo_canje">Ingresa Codigo de Cupon</label>
                        <input type="text" class="form-control" id="codigo_canje" name="codigo_canje" @if ($errors->has('codigo_canje')) is-invalid @endif>
                        @if ($errors->has('codigo_canje'))
                            @foreach ($errors->get('codigo_canje') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="valor_canje">Valor del Cupon</label>
                        <input type="text" class="form-control" id="valor_canje" name="valor_canje" @if ($errors->has('valor_canje')) is-invalid @endif>
                        @if ($errors->has('valor_canje'))
                            @foreach ($errors->get('valor_canje') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email Envio Cupon</label>
                        <input type="text" class="form-control" id="email" name="email" @if ($errors->has('email')) is-invalid @endif>
                        @if ($errors->has('email'))
                            @foreach ($errors->get('valor_cemailanje') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn" id="boton_principal">Guardar</button>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection