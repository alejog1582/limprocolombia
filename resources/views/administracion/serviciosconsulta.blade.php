@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Consulta Servicios Desde El ID {{$id_servicio_consulta}} </h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">M.Pago</th>
        <th scope="col">T.Doc</th>
        <th scope="col">Documento</th>
        <th scope="col">Cliente</th>
        <th scope="col">Direccion</th>
        <th scope="col">Celular</th>
        <th scope="col">Email</th>
        <th scope="col">Valor</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
            <tr>
                <th scope="row">{{$servicio->id}}</th>
                <th scope="row">{{$servicio->metodo_pago}}</th>
                <td>{{$servicio->tipo_documento}}</td>
                <td>{{$servicio->numero_documento}}</td>
                <td>{{$servicio->nombre_cliente}}</td>
                <td>{{$servicio->direccion_servicio}}</td>
                <td>{{$servicio->celular_contacto}}</td>
                <td>{{$servicio->email}}</td>
                <td>{{$servicio->valor_plan}}</td>
                <td>{{$servicio->estado}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
  
 




</div>

@endsection