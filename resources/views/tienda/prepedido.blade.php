@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div class="col-sm-12">
        <br>
        <h1 class="titulo-principal">Mis Productos Seleccionados</h1>
        <br>
	</div>
</div>
<div class="row">
	@foreach ($cart_items as $cart_items)
		@foreach ($productos as $producto)
			@if ($producto->id == $cart_items->id)
				<div class="col-12 col-md-3">
					<div class="card text-center">
					    <div class="card-header">
					        <img class="card-img-top" src="{{ $producto->foto_producto }}" alt="">
					    </div>
					    <div class="card-body">
					        <h3 class="card-title titulo-producto">{{ $producto->nombre_producto }}</h3>
					    </div>
					    <div class="card-footer">
					        <b><p>Unidades: {{ $cart_items->qty }}</p>
					        Valor Unidad: $ @php echo number_format($producto->precio_producto); @endphp</b>
					    </div>
					</div>
				</div>
			@endif
		@endforeach
	@endforeach
</div>
<br>
<div class="row text-center">
	<div class="col-12">
		<div class="alert alert-success" role="alert" id="subtotal-productos-seleccionados">
  			<b>Valor Total de la compra: {{ Cart::subtotal() }}</b>
		</div>
	</div>
</div>
<div class="row text-center">
	<div class="col-12 container-titulo">
		<h2 class="titulo-principal">Formulario de Envio</h2>
	</div>
</div>
<br>
<div class="row">
	<div class="col-12 container-form">
		<form action="/tienda/pedido" method="post">
			{{ csrf_field() }}
		  <div class="form-row">
			  <div class="form-group col-md-4">
			  	<label for="direccion_envio">Direccion de Envio</label>
			    <input type="text" name="direccion_envio" class="form-control @if ($errors->has('direccion_envio')) is-invalid	@endif" id="direccion_envio" placeholder="Calle 181c # 9 30">
			    @if ($errors->has('direccion_envio'))
					@foreach ($errors->get('direccion_envio') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			  </div>
			  <div class="form-group col-md-4">
			    <label for="info_adicional_direccion">Apto/Casa/Oficina</label>
			    <input type="text" name="info_adicional_direccion" class="form-control @if ($errors->has('info_adicional_direccion')) is-invalid	@endif" id="info_adicional_direccion" placeholder="Oficina 503">
			    @if ($errors->has('info_adicional_direccion'))
					@foreach ($errors->get('info_adicional_direccion') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			  </div>
			  <div class="form-group col-md-4">
			    <label for="barrio">Barrio</label>
			    <input type="text" name="barrio" class="form-control @if ($errors->has('barrio')) is-invalid	@endif" id="barrio" placeholder="Cedritos">
			    @if ($errors->has('barrio'))
					@foreach ($errors->get('barrio') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			  </div>
		  </div>
		  <div>
		  	<div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="fecha_entrega">Fecha de Entrega</label>
			    <input type="date" name="fecha_entrega" class="form-control @if ($errors->has('fecha_entrega')) is-invalid	@endif" id="fecha_entrega" placeholder="Cedritos">
			    @if ($errors->has('fecha_entrega'))
					@foreach ($errors->get('fecha_entrega') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			  </div>
			  <div class="form-group col-md-6">
			    <label for="hora_entrega">Hora de Entrega</label>
			    <input type="time" name="hora_entrega" class="form-control  @if ($errors->has('hora_entrega')) is-invalid	@endif" id="hora_entrega" placeholder="7:00 am">
			    @if ($errors->has('hora_entrega'))
					@foreach ($errors->get('hora_entrega') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			  </div>
			</div>
		  </div>
          <div class="form-row">
		    <div class="form-group col-md-6">
                <label for="tipo_documento">Tipo de Documento Cliente</label>
                <select id="tipo_documento" class="form-control" name="tipo_documento" @if ($errors->has('tipo_documento')) is-invalid @endif>
                    <option selected disabled>Seleccione una Opcion</option>
                    <option value="cc">CC</option>
                    <option value="ce">CE</option> 
                    <option value="nit">NIT</option>                         
                    <option value="ps">Pasaporte</option>  
                </select>
                @if ($errors->has('tipo_documento'))
                    @foreach ($errors->get('tipo_documento') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
		    </div>
		    <div class="form-group col-md-6">
		      <label for="identificacion_cliente">Numero de Identificacion</label>
		      <input type="text" name="identificacion_cliente" class="form-control  @if ($errors->has('identificacion_cliente')) is-invalid	@endif" id="identificacion_cliente" placeholder="">
		      @if ($errors->has('identificacion_cliente'))
					@foreach ($errors->get('identificacion_cliente') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
		    </div>		    
		  </div>
          <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="nombre_contacto">Nombre de contacto por novedad</label>
		      <input type="text" name="nombre_contacto" class="form-control  @if ($errors->has('nombre_contacto')) is-invalid	@endif" id="nombre_contacto" placeholder="Ana Lozano">
		      @if ($errors->has('nombre_contacto'))
					@foreach ($errors->get('nombre_contacto') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
		    </div>
		    <div class="form-group col-md-4">
		      <label for="celular_contacto">Celular de contacto por Novedad</label>
		      <input type="text" name="celular_contacto" class="form-control  @if ($errors->has('celular_contacto')) is-invalid	@endif" id="nombre_contacto" id="celular_contacto" placeholder="3213857042">
		      @if ($errors->has('celular_contacto'))
					@foreach ($errors->get('celular_contacto') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
		    </div>
		    <div class="form-group col-md-4">
		      <label for="email_contacto">Email</label>
		      <input type="email" name="email_contacto" class="form-control  @if ($errors->has('email_contacto')) is-invalid	@endif" id="nombre_contacto" id="email_contacto" placeholder="example@gmail.com">
		      @if ($errors->has('email_contacto'))
					@foreach ($errors->get('email_contacto') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
		    </div>
		  </div>
		  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label for="forma_pago">Forma de Pago</label>
			      <select id="forma_pago" name="forma_pago" class="form-control  @if ($errors->has('forma_pago')) is-invalid	@endif" id="nombre_contacto">
                    <option disabled selected>Seleccione su forma de pago</option>
                    <option value="consignacion">Consignacion Bancaria</option>
			        <option value="payu">PayU</option>
			      </select>
			      @if ($errors->has('forma_pago'))
					@foreach ($errors->get('forma_pago') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			    </div>
			    <div class="form-group col-md-4">
			      <label for="codigopromocional">Codigo Promocional</label>
			      <input type="text" name="codigo_promocional" class="form-control  @if ($errors->has('codigo_promocional')) is-invalid	@endif" id="nombre_contacto" id="codigopromocional" placeholder="345637">
			      @if ($errors->has('codigo_promocional'))
					@foreach ($errors->get('codigo_promocional') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
			    </div>
			</div>
		  <div class="form-group">
		    <div class="form-check">
		      <input name="privacidad" class="form-check-input @if ($errors->has('privacidad')) is-invalid	@endif" type="checkbox" id="privacidad">
		      @if ($errors->has('privacidad'))
					@foreach ($errors->get('privacidad') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
		      <label class="form-check-label" for="privacidad">
		      	He leído y acepto la <a href="/privacidad">Politica de Privacidad</a>
		      </label>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-lg" id="boton_principal">Hacer Pedido</button>
		</form>
	</div>
</div>
<br>
@endsection