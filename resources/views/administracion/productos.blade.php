@extends('layouts.app')

@section('content')

<br>
<h1 class="text-center">Administracion de Productos</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>
<div class="row text-center">
    <div class="col-sm-12">
        <a href="/administracion/productos/new" class="btn btn-lg btn-block" id="boton_principal">Nuevo Producto</a>
    </div>   
</div>
<br>
<h2>Servicios activos</h2>
<br>
<div class="row">
    @foreach ($productosactivos as $productoactivo)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$productoactivo->foto_producto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>{{$productoactivo->nombre_producto}}</b></h5>
                    <p class="card-text">{{$productoactivo->caracteristicas_producto}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Presentacion:</b> {{$productoactivo->presentacion_producto}} </li>
                    <li class="list-group-item"><b>Categoria:</b> {{$productoactivo->categoria_producto}} </li>
                    <li class="list-group-item"><b>Subcategoria:</b> {{$productoactivo->subcategoria_producto}} </li>
                    <li class="list-group-item"><b>Precio:</b> $@php echo number_format($productoactivo->precio_producto); @endphp </li>
                </ul>
                <div class="card-body text-center">
                    <a href="/administracion/productos/desactivar/{{$productoactivo->id}}" class="btn" id="boton_principal">Desactivar</a>
                </div>
              </div>
        </div>
    @endforeach
</div>
<br>
<h2>Servicios Inactivos</h2>
<br>
<div class="row">
    @foreach ($productosdesactivos as $productodesactivo)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$productodesactivo->foto_producto}}" class="card-img-top" width="100%" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>{{$productodesactivo->nombre_producto}}</b></h5>
                    <p class="card-text">{{$productodesactivo->caracteristicas_producto}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Presentacion:</b> {{$productodesactivo->presentacion_producto}} </li>
                    <li class="list-group-item"><b>Categoria:</b> {{$productodesactivo->categoria_producto}} </li>
                    <li class="list-group-item"><b>Subcategoria:</b> {{$productodesactivo->subcategoria_producto}} </li>
                    <li class="list-group-item"><b>Precio:</b> $@php echo number_format($productodesactivo->precio_producto); @endphp </li>
                </ul>
                <div class="card-body text-center">
                    <a href="/administracion/productos/activar/{{$productodesactivo->id}}" class="btn" id="boton_principal">Activar</a>
                </div>
              </div>
        </div>
    @endforeach
</div>


@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection