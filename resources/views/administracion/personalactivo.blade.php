@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <h1 class="text-center">Personal Activo</h1>
    <a class="btn" id="boton_principal" href="/administracion">Regresar</a>
    <br><br>
    @foreach ($funcionarias as $funcionaria)
        <div class="row">
            <div class="col-md-3">    
                <b>ID:</b> {{ $funcionaria->id }}
            </div>
            <div class="col-md-4">    
                <b>ID:</b> {{ $funcionaria->nombre_funcionaria }}
            </div>          
        </div>
    @endforeach
    <br>
</div>

@endsection
