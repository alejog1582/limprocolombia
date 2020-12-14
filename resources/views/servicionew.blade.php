@extends('layouts.app')
<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function(e) {
    
    /* Referencias a cada elemento */
    var plan = document.getElementById("plan");
    var kit = document.getElementById("kit_productos");
    var hora_inicio = document.getElementById("hora_inicio");
    var hora_inicio_8 = document.getElementById("hora_inicio_8");
    var valor_4horas = document.getElementById("valor_4horas");
    var valor_8horas = document.getElementById("valor_8horas");
    var valor_total_servicio4 = document.getElementById("valor_total_servicio4");
    var valor_total_servicio8 = document.getElementById("valor_total_servicio8");
    var valor_total_kit1 = document.getElementById("valor_total_kit1");
    var valor_total_kit2 = document.getElementById("valor_total_kit2");
    
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
    
    kit.addEventListener("change", function(e) {
        if (e.target.value === "kit1") {
            valor_total_kit1.hidden = status;
            valor_total_kit2.hidden = !status; 
        }
        if (e.target.value === "kit2") {
            valor_total_kit1.hidden = !status;
            valor_total_kit2.hidden = status;   
        }
        if (e.target.value === "no") {
            valor_total_kit1.hidden = !status;
            valor_total_kit2.hidden = !status;
        }
    
    });
    
    
    });

     
    
    </script>
@section('content')



<div class="container">
    
    <br>
    <h1 class="text-center titulo">Solicitar Servicio de Limpieza</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <br><br><br><br>
            <div class="card">
                <img src="https://res.cloudinary.com/dikbf3xct/image/upload/v1597351714/Limpro%20Colombia/Slider%20Carrousel/nuevo_servicio.jpg" class="card-img" alt="Servicio de Limpieza">
            </div>
            <br>
            <!-- <h2 class="text-center">Siempre te ofrecemos mas...</h2>
            <br>
            <p><i class="fas fa-check-circle" style="color: #22c7c0"></i> Un servicio de limpieza profesional con la garantia que quedes satisfecho.
            <br> 
            <i class="fas fa-check-circle" style="color: #22c7c0"></i> Por cada 10 servicios con tarifa exporadica solicitados, te damos un servicio gratis.
            <br> 
            <i class="fas fa-check-circle" style="color: #22c7c0"></i> Recibe descuentos en tus servicios con nuestro plan de referidos.
            <br> 
            <i class="fas fa-check-circle" style="color: #22c7c0"></i> Personal 100% confiable, reservado y profesional en cada uno de nuestros servicios.
        </p>--> 
        <br><br><br>
        <div class="row">
            <h2 class="text-center">Incluye nuestro kit de limpieza a tu servicio</h2>
            <div class="col-md-6" style="margin-bottom: 1rem">
                <div class="card h-100 text-center ">
                    <div class="card-header card_principal">
                      Kit 1
                    </div>
                    <div class="card-body card_secundaria">
                        <h5 class="card-title">Limpieza Basica</h5>
                        <p class="card-text">Recomendado para espacios menores de 70 metros cuadrados. El kit esta comupesto por: 1 Clorox, 1 Limpiavidrios, 3 Paños para limpiar, 1 producto limpiapisos (Baldosa o piso laminado). </p>

                    </div>
                    <div class="card-footer card_principal">
                        Valor $ 30.000
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 1rem" >
                <div class="card h-100 text-center">
                    <div class="card-header card_principal">
                      Kit 2
                    </div>
                    <div class="card-body card_secundaria">
                        <h5 class="card-title">Limpieza Profunda</h5>
                        <p class="card-text">Recomendado para espacios mayores de 70 metros cuadrados. El kit esta comupesto por: 1 Clorox, 1 desengrasante, 1 Limpiavidrios, 3 Paños para limpiar, 1 producto limpiapisos (Baldosa o piso laminado), jabon en polvo. </p>
                    </div>
                    <div class="card-footer card_principal">
                        Valor $ 50.000
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <br>
            <h2 class="text-center">Diligencia el formulario</h2>
            <br>
            <form action="/servicionew/save" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tipo_servicio"><b>Tipo de Servicio</b></label>
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
                        <label for="ciudad"><b>Ciudad del Servicio</b></label>
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
                        <label for="fecha_servicio"><b>Fecha del Servicio</b></label>
                        <input data-date-dates-disabled="
                        2020/08/07,
                        2020/08/17,
                        2020/10/12,
                        2020/11/02,
                        2020/11/16,
                        2020/12/08,
                        2020/12/15,
                        2020/12/25,
                        2021/01/01,
                        2021/01/11,
                        2021/03/22,
                        2021/04/01,
                        2021/04/02,
                        2021/05/01,
                        2021/05/17"
                        data-date-format="yyyy/mm/dd" type="text" placeholder="Selecciona Fecha del Servicio" class="form-control" id="fecha_servicio" name="fecha_servicio" data-provide="datepicker"  data-date-days-of-week-disabled=",0" data-date-today-highlight="true" data-date-week-start="1" data-date-autoclose="true"  @if ($errors->has('fecha_servicio')) is-invalid @endif>
                        @if ($errors->has('fecha_servicio'))
                            @foreach ($errors->get('fecha_servicio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lugar_servicio"><b>Lugar del Servicio</b></label>
                        <select id="lugar_servicio" class="form-control" name="lugar_servicio" @if ($errors->has('lugar_servicio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="empresa">Empresa</option>    
                            <option value="casa">Hogar</option>
                            <option value="local">Local</option>
                            <option value="bodega">Bodega</option>
                            <option value="edificio">Edificio (Areas Comunes)</option>
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
                        <label for="plan"><b>Plan</b></label>
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
                        <br>
                        <h5 hidden id="valor_4horas" style="color:#00258e">El valor del servicio es de $45.000</h4>
                        <h5 hidden id="valor_8horas" style="color:#00258e">El valor del servicio es de $70.000</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="hora_inicio"><b>Hora Inicio</b></label>
                        <h5 hidden id="hora_inicio_8" style="color:#00258e">El servicio inicia a las 8 am</h5>
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
                        <label for="tipo_documento"><b>Tipo de Identificacion Cliente</b></label>
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
                        <label for="numero_documento"><b>Numero de Identificacion Cliente</b></label>
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
                        <label for="nombre_cliente"><b>Nombre Cliente</b></label>
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
                        <label for="email"><b>Correo Electronico</b></label>
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
                        <label for="celular_contacto"><b>Celular</b></label>
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
                        <label for="fijo_contacto"><b>Fijo (Opcional)</b></label>
                        <input type="text" class="form-control" id="fijo_contacto" name="fijo_contacto">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="direccion_servicio"><b>Direccion del Servicio</b></label>
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
                        <label for="detalle_direccion"><b>Detalle Direccion (Opcional)</b></label>
                        <input placeholder="int 7 apto 501" type="text" class="form-control" id="detalle_direccion" name="detalle_direccion" @if ($errors->has('detalle_direccion')) is-invalid @endif>
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
                    @if (Auth::check())
                        @if ($user->email == 'alejog1582@gmail.com')
                            <div class="form-group col-md-4">
                                <label for="metodo_pago"><b>Metodo de Pago</b></label>
                                <select id="metodo_pago" class="form-control" name="metodo_pago" @if ($errors->has('metodo_pago')) is-invalid @endif>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="plan">Plan </option>
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
                        @else
                        <div class="form-group col-md-4">
                            <label for="metodo_pago"><b>Metodo de Pago</b></label>
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
                        @endif
                    @else
                        <div class="form-group col-md-4">
                            <label for="metodo_pago"><b>Metodo de Pago</b></label>
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
                    @endif

                    



                    <div class="form-group col-md-4">
                        <label for="kit_productos"><b>Adquirir Kit de Productos</b></label>
                        <select id="kit_productos" class="form-control" name="kit_productos" @if ($errors->has('kit_productos')) is-invalid @endif>
                            <option selected value="no">No</option>
                            <option value="kit1">Kit 1 ($30.000)</option>
                            <option value="kit2">Kit 2 ($50.000)</option>                            
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
                        <label for="canje"><b>Canjea Codigo</b></label>
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
                        <label for="observacion"><b>Requerimiento Especial</b> </label>
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
                        <h5 hidden id="valor_total_servicio4" style="color:#00258e">Valor del Servicio: $45.000</h5>
                        <h5 hidden id="valor_total_servicio8" style="color:#00258e">Valor del Servicio: $70.000</h5>
                        <h5 hidden id="valor_total_kit1" style="color:#00258e">Valor del Kit 1: $30.000</h5>
                        <h5 hidden id="valor_total_kit2" style="color:#00258e">Valor del Kit 2: $50.000</h5>
                    </div>                
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label>
                            <input type="checkbox" class="filled-in @if ($errors->has('privacidad')) is-invalid @endif" name="privacidad" />
                            <span><a href="/politicasyprivacidad" target="_blank">Acepto los terminos y condiciones</a></span>
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
    Nuevo Servicio de Limpieza
@endsection