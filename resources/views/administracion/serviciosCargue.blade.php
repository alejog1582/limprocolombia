@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Cargue de Servicvios</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <form action="/administracion/servicios/cargue/save" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if (Session::has('message'))
            <p>{{ Session::get('message') }}</p>                
            @endif

            <input type="file" name="file">

            <button type="submit" class="btn" id="boton_principal">Cargar</button>
        </form>
        <br>
    </div>
</div>

</div>

@endsection