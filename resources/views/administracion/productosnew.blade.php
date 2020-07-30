@extends('layouts.app')


@section('content')
<div class="row">
	<div class="col-sm-12">
        <br>
		<h2 class="text-center">Crear Nuevo Producto</h2>
	</div>
</div>




<div class="row">
    <div class="col-sm-12">
        <form action="/administracion/productos/new/save" method="POST">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre_producto">Nombre de Producto</label>
				    <input type="text" id="nombre_producto" name="nombre_producto" class="form-control  @if ($errors->has('nombre_producto')) is-invalid	@endif">
				    @if ($errors->has('nombre_producto'))
					    @foreach ($errors->get('nombre_producto') as $error)
						    <div class="invalid-feedback">{{ $error }}</div>
					    @endforeach
				    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="foto_producto">URL Imagen</label>
				    <input type="text" id="foto_producto" name="foto_producto" class="form-control  @if ($errors->has('foto_producto')) is-invalid	@endif">
				    @if ($errors->has('foto_producto'))
					    @foreach ($errors->get('foto_producto') as $error)
						    <div class="invalid-feedback">{{ $error }}</div>
					    @endforeach
				    @endif
                </div> 
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="descripcion_producto">Descripcion de Producto</label>
				    <textarea name="descripcion_producto" id="descripcion_producto" class="form-control @if ($errors->has('descripcion_producto')) is-invalid	@endif" rows="12"></textarea>
				    @if ($errors->has('descripcion_producto'))
					    @foreach ($errors->get('descripcion_producto') as $error)
						    <div class="invalid-feedback">{{ $error }}</div>
					    @endforeach
				    @endif            
                </div>                
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="categoria_producto">Categoria de Producto</label>
				    <select onchange="getval(this)" id="categoria_producto" class="form-control @if ($errors->has('categoria_producto')) is-invalid	@endif" name="categoria_producto">
  					    <option selected disabled>Elige una Categoria</option>
      					<option value="kits">Kits</option>
  	    				<option value="aseo liquido">Aseo Liquido</option>
  		    			<option value="jabones">Jabones</option>
  			    		<option value="aseo">Aseo</option>
  				    	<option value="telas">Telas</option>
  					    <option value="aseo manual">Aseo Manual</option>
  	    				<option value="bolsas">Bolsas</option>
                        <option value="guantes">Guantes</option>
                        <option value="desechables">Desechables</option>
                        <option value="higienicos">Higienicos</option>
                        <option value="cafeteria">Cafeteria</option>
                        <option value="desinfeccion">Desinfeccion</option>
		    		</select>
			    	@if ($errors->has('categoria_producto'))
				    	@foreach ($errors->get('categoria_producto') as $error)
					    	<div class="invalid-feedback">{{ $error }}</div>
					    @endforeach
				    @endif
                </div>
                <div class="form-group col-sm-6">
                    <label for="subcategoria_producto">Subcategoria</label>
                    <input type="text" class="form-control" id="subcategoria_producto" name="subcategoria_producto">
                   
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="valor_producto">Valor de Producto</label>
				    <input type="number" id="valor_producto" name="valor_producto" class="form-control @if ($errors->has('valor_producto')) is-invalid	@endif">
				    @if ($errors->has('valor_producto'))
					@foreach ($errors->get('valor_producto') as $error)
						<div class="invalid-feedback">{{ $error }}</div>
					@endforeach
				@endif
                </div>
                <div class="form-group col-md-6">
                    <label for="presentacion_producto">Presetacion del Producto</label>
                    <input type="text" class="form-control" id="presentacion_producto" name="presentacion_producto">
                </div>
            </div>               
            <button type="submit" class="btn" id="boton_principal">Guardar</button>
            <br><br>
          </form>
    </div>
</div>

@endsection