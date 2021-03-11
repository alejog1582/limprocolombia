@extends('layouts.app')

@section('content')

<div class="container">

<br>
<h1 class="text-center">Consulta Servicios Desde El ID {{$id_servicio_consulta}} </h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>

<table class="table">
    <thead class="card_principal">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">M.Pago</th>
        <th scope="col">Fecha</th>
        <th scope="col">T.Doc</th>
        <th scope="col">Documento</th>
        <th scope="col">Cliente</th>
        <th scope="col">Direccion</th>
        <th scope="col">Celular</th>
        <th scope="col">Email</th>
        <th scope="col">Valor</th>
        <th scope="col">Estado</th>
        <th scope="col">Funcionaria</th>
        <th scope="col">Calificacion</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
            <tr>
                <th>{{$servicio->id}}</th>
                <th>{{$servicio->metodo_pago}}</th>
                <th>{{$servicio->fecha_servicio}}</th>
                <td>{{$servicio->tipo_documento}}</td>
                <td>{{$servicio->numero_documento}}</td>
                <td>{{$servicio->nombre_cliente}}</td>
                <td>{{$servicio->direccion_servicio}}</td>
                <td>{{$servicio->celular_contacto}}</td>
                <td>{{$servicio->email}}</td>
                <td>{{$servicio->valor_plan}}</td>
                <td>{{$servicio->estado}}</td>
                <td>
                  @if ($servicio->funcionaria_asignada)
                    {{$servicio->funcionaria_asignada->nombre_funcionaria}}
                  @endif
                </td>
                <td>
                  @if ($servicio->calificacion)
                    {{$servicio->calificacion->cal_total}}
                  @endif
                </td>
                <!--<td>
                  @if ($servicio->funcionaria_asignada)
                    {{$servicio->id_funcionaria_asignada}}
                  @endif
                </td>
                <td>
                  <form action="/administracion/servicios/consulta/actualizacionid" method="get">
                    {{ csrf_field() }}
                          <input type="hidden" name="id_servicio" value="{{$servicio->id}}">
                            <input type="text" class="form-control" id="id_funcionaria_actualizada" name="id_funcionaria_actualizada">
                            <button type="submit" class="btn" id="boton_principal">Actualizar</button>
                    </div>
                </form>
                </td>-->
            </tr>
        @endforeach
    </tbody>
  </table>
  
 




</div>

@endsection