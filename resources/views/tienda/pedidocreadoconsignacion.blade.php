@extends('layouts.app')

@section('content')
<div class="row text-center" >
	<div class="col-12 container-titulo">
		<div class="card">
		  <div class="card-header header-tarjeta-confirmacion">
		    Pedido Realizado Con Exito
		  </div>
		  <div class="card-body">
		    <h3 class="card-title">El Numero De Pedido Es: <span style="color: red"><b>	{{  $pedido->id }}</b></span></h3>
		   
		    <p class="card-text">A continuacion encontraras las cuentas disponibles para consignar el valor de tu compra:</p>
		    <div class="row text-center header-tabla">
		    	<div class="col-4">
		    		Banco
		    	</div>
		    	<div class="col-4">
		    		Tipo
		    	</div>
		    	<div class="col-4">
		    		Numero
		    	</div>
		    </div>
		    <div class="row text-center body-tabla">
		    	<div class="col-4">
		    		Davivienda
		    	</div>
		    	<div class="col-4">
		    		Ahorros
		    	</div>
		    	<div class="col-4">
		    		004470467319
		    	</div>
		    </div>
		    <div class="row text-center body-tabla">
		    	<div class="col-4">
		    		Bancolombia
		    	</div>
		    	<div class="col-4">
		    		Ahorros
		    	</div>
		    	<div class="col-4">
		    		03118262548
		    	</div>
		    </div>
		    <br>
		    <p class="card-text">Recuerda enviar el soporte del pago al correo <a href="mailto:pagos@labobadita.com">pagos@labobadita.com</a> con el numero de pedido en el asunto. El pedido no se procesara hasta haber recibido el pago.</p>
			
		  </div>
		</div>
	</div>
</div>
@endsection