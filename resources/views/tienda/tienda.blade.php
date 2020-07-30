@extends('layouts.app')

@section('content')

<br>
<h1 class="text-center">Tienda Limpro Colombia</h1>
<a class="btn" id="boton_principal" href="/">Regresar</a>
<br><br>



<div class="row">
    <div class="col-sm-12">
      <h2>Mi Carrito de Compras</h2>
    </div>
  </div>
  
<div class="row">
    <div class="col-md-2">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#productoscarro" aria-expanded="false" aria-controls="productoscarro">
            Mi Carro<i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </button>
    </div>    
</div>
  
<div class="collapse" id="productoscarro">
    <div class="card card-body">
        <div class="row text-center header-tabla">
            <div class="col-3">
                <b>Prod.</b>
            </div>
            <div class="col-3">
                <b>Cant.</b>
            </div>
            <div class="col-4">
                <b>Precio</b>
            </div>
            <div class="col-1">
                <i class="far fa-trash-alt img-100"></i>
            </div>
        </div>
  
        @foreach (Cart::content() as $row)
        <div class="row text-center body-tabla">
            <div class="col-3">
                {{ $row->name }}
            </div>
            <div class="col-3">
                {{ $row->qty }}
            </div>
            <div class="col-4">
                @php echo number_format( $row->price ); @endphp
            </div>
            <div class="col-1">
                <form action="/tienda/eliminarproducto" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="Cart_Item_rowId" value="{{ $row->rowId }}">
                    <button class="btn btn-danger">X</button>
                </form>
            </div>
        </div>
        @endforeach
        <br>
        <div class="row total-carrito">
            <div class="col-md-6 text-center">
                <a href="/tienda/finalizarcompra" class="btn btn-success">Finalizar Compra</a>
            </div>
            <div class="col-md-3 text-center">
                <b>Total: ${{ Cart::subtotal() }}</b>
            </div>
            <div class="col-md-3 text-center">
                <a href="/tienda/limpiarcarrito" class="btn btn-danger">Limpiar Carro</a>
            </div>
        </div>
    </div>
</div>
<br>











<div class="row">
    @foreach ($productosactivos as $productoactivo)
        <div class="col-md-3">
            <div class="card">
                <img src="{{$productoactivo->foto_producto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>{{$productoactivo->nombre_producto}}</b></h5>
                    <p class="card-text">{{$productoactivo->caracteristicas_producto}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Presentacion:</b> {{$productoactivo->presentacion_producto}} </li>
                    <li class="list-group-item"><b>Precio:</b> $@php echo number_format($productoactivo->precio_producto); @endphp </li>
                </ul>
                <div class="card-body text-center">
                    <form action="/tienda/agregar/{{$productoactivo->id}}" method="post">
                    {{ csrf_field() }}
                        <input type="hidden" value="{{ $productoactivo->id }}" name="id_producto">
                        <input type="hidden" value="{{ $productoactivo->nombre_producto }}" name="nombre_producto">
                        <input type="hidden" value="1" name="cantidad">
                        <input type="hidden" value="{{ $productoactivo->precio_producto }}" name="valor_producto">
                        <button class="btn btn-general" id="boton_principal" >Agregar al Carro</button>
                    </form>
                    </div>
                </div>
        </div>
    @endforeach
</div>


@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection