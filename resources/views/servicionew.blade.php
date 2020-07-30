@extends('layouts.app')

@section('content')

<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(e) {

/* Referencias a cada elemento */
var plan = document.getElementById("plan");
var hora_inicio = document.getElementById("hora_inicio");
var hora_inicio_8 = document.getElementById("hora_inicio_8");
var valor_4horas = document.getElementById("valor_4horas");
var valor_8horas = document.getElementById("valor_8horas");
var valor_total_servicio4 = document.getElementById("valor_total_servicio4");
var valor_total_servicio8 = document.getElementById("valor_total_servicio8");

/*Listener para los cambios en el select*/
plan.addEventListener("change", function(e) {
  var status = e.target.value === "4";
  hora_inicio.hidden = !status;
  hora_inicio_8.hidden = status;
  valor_4horas.hidden = !status;
  valor_8horas.hidden = status;
  valor_total_servicio4.hidden = !status;
  valor_total_servicio8.hidden = status;


});

plan.addEventListener("change", function(e) {
  var status = e.target.value === "8";
  hora_inicio.hidden = status;
  hora_inicio_8.hidden = !status;
  valor_4horas.hidden = status;
  valor_8horas.hidden = !status;
  valor_total_servicio4.hidden = status;
  valor_total_servicio8.hidden = !status;  
});

});

</script>

<div class="container">
    
    <br>
    <h1 class="text-center titulo">Solicitar Servicio de Limpieza</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <form action="/servicionew/save" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tipo_servicio">Tipo de Servicio</label>
                        <select id="tipo_servicio" class="form-control" name="tipo_servicio" @if ($errors->has('tipo_servicio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="limpieza">Servicio de Limpieza</option>    
                            <option value="desinfeccion">Desinfeccion</option>
                        </select>
                        @if ($errors->has('tipo_servicio'))
                            @foreach ($errors->get('tipo_servicio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ciudad">Ciudad para el Servicio</label>
                        <select id="ciudad" class="form-control" name="ciudad" @if ($errors->has('ciudad')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="bogota">Bogota</option>    
                            <option value="medellin">Medellin</option>
                        </select>
                        @if ($errors->has('ciudad'))
                            @foreach ($errors->get('ciudad') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>                     
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fecha_servicio">Selecciona Fecha de Servicio</label>
                        <input type="date" class="form-control" id="fecha_servicio" name="fecha_servicio" @if ($errors->has('fecha_servicio')) is-invalid @endif>
                        @if ($errors->has('fecha_servicio'))
                            @foreach ($errors->get('fecha_servicio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lugar_servicio">Servicio de Casa o Empresa</label>
                        <select id="lugar_servicio" class="form-control" name="lugar_servicio" @if ($errors->has('lugar_servicio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="empresa">Empresa</option>    
                            <option value="casa">Casa</option>
                        </select>
                        @if ($errors->has('lugar_servicio'))
                            @foreach ($errors->get('lugar_servicio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div> 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plan">Plan</label>
                        <select id="plan" class="form-control" name="plan" @if ($errors->has('plan')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="4">4 Horas</option>    
                            <option value="8">8 Horas</option>
                        </select>
                        @if ($errors->has('plan'))
                            @foreach ($errors->get('plan') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                        <p hidden id="valor_4horas">El valor del servicio es de $59.000</p>
                        <p hidden id="valor_8horas">El valor del servicio es de $79.000</p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="hora_inicio">Hora Inicio</label>
                        <div hidden id="hora_inicio_8" >El servicio inicia a las 8 am</div>
                        <select hidden id="hora_inicio" class="form-control" name="hora_inicio" @if ($errors->has('hora_inicio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="8 am">8 A.M</option>    
                            <option value="1 pm">1 P.M</option>
                        </select>
                        @if ($errors->has('hora_inicio'))
                            @foreach ($errors->get('hora_inicio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
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
                        <label for="numero_documento">Numero de Documento Cliente</label>
                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" @if ($errors->has('numero_documento')) is-invalid @endif>
                        @if ($errors->has('numero_documento'))
                            @foreach ($errors->get('numero_documento') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nombre_cliente">Nombre Cliente</label>
                        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" @if ($errors->has('nombre_cliente')) is-invalid @endif>
                        @if ($errors->has('nombre_cliente'))
                            @foreach ($errors->get('nombre_cliente') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">Correo Electronico Cliente</label>
                        <input type="email" class="form-control" id="email" name="email" @if ($errors->has('email')) is-invalid @endif>
                        @if ($errors->has('email'))
                            @foreach ($errors->get('email') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="celular_contacto">Celular de Contacto</label>
                        <input type="text" class="form-control" id="celular_contacto" name="celular_contacto" @if ($errors->has('celular_contacto')) is-invalid @endif>
                        @if ($errors->has('celular_contacto'))
                            @foreach ($errors->get('celular_contacto') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fijo_contacto">Numero Fijo de Contacto</label>
                        <input type="text" class="form-control" id="fijo_contacto" name="fijo_contacto">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="direccion_servicio">Direccion del Servicio</label>
                        <input type="text" class="form-control" id="direccion_servicio" name="direccion_servicio" @if ($errors->has('direccion_servicio')) is-invalid @endif>
                        @if ($errors->has('direccion_servicio'))
                            @foreach ($errors->get('direccion_servicio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="detalle_direccion">Detalle Direccion</label>
                        <input type="text" class="form-control" id="detalle_direccion" name="detalle_direccion" @if ($errors->has('detalle_direccion')) is-invalid @endif>
                        @if ($errors->has('detalle_direccion'))
                            @foreach ($errors->get('detalle_direccion') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="metodo_pago">Metodo de Pago</label>
                        <select id="metodo_pago" class="form-control" name="metodo_pago" @if ($errors->has('metodo_pago')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="consignacion">Consignacion o Transferencia </option>
                            <option value="payu">PayU</option>                            
                        </select>
                        @if ($errors->has('metodo_pago'))
                            @foreach ($errors->get('metodo_pago') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="kit_productos">Adquirir Kit de Productos</label>
                        <select id="kit_productos" class="form-control" name="kit_productos" @if ($errors->has('kit_productos')) is-invalid @endif>
                            <option selected value="no">No</option>
                            <option value="kit 1">Kit 1</option>
                            <option value="kit 2">Kit 2</option>                            
                        </select>
                        @if ($errors->has('kit_productos'))
                            @foreach ($errors->get('kit_productos') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="canje">Canjea Codigo</label>
                        <input type="text" class="form-control" id="canje" name="canje" @if ($errors->has('canje')) is-invalid @endif>
                        @if ($errors->has('canje'))
                            @foreach ($errors->get('canje') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>          
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="observacion">Requerimiento Especial</label>
                        <textarea class="form-control" id="motobservacionvo_desvinculacion" rows="4" name="observacion" @if ($errors->has('observacion')) is-invalid @endif></textarea>
                        @if ($errors->has('observacion'))
                            @foreach ($errors->get('observacion') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>                
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <p hidden id="valor_total_servicio4">Valor Total del Servicio: $59.000</p>
                        <p hidden id="valor_total_servicio8">Valor Total del Servicio: $79.000</p>
                    </div>                
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label>
                            <input type="checkbox" class="filled-in @if ($errors->has('privacidad')) is-invalid @endif" name="privacidad" />
                            <span><a href="/politica/privacidad" target="_blank">Acepto los terminos y condiciones</a></span>
                            @if ($errors->has('privacidad'))
                                @foreach ($errors->get('privacidad') as $error)
                                    <h6 id="mensaje_request">
                                        <blockquote>{{ $error }}</blockquote>
                                    </h6>
                                @endforeach
                            @endif
                        </label>       
                    </div>                
                </div>                     
                <button type="submit" class="btn" id="boton_principal">Enviar</button>
                <br><br>
              </form>
        </div>
    </div>
    
    
</div>    

@endsection

@section('title')
    Cotizacion Servicio de Limpieza
@endsection