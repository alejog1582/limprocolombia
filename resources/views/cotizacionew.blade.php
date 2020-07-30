@extends('layouts.app')

@section('content')

<div class="container">
    
    <br>
    <h1 class="text-center titulo">Solicitar una Cotizacion</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <form action="/cotizacionew/save" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tipo_servicio">Servicio de Interes</label>
                        <select id="tipo_servicio" class="form-control" name="tipo_servicio" @if ($errors->has('tipo_documento')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="servicio de limpieza">Servicio de limpieza</option>
                            <option value="todero">Todero</option>
                            <option value="limpieza y todero">Limpieza y Todero</option> 
                            <option value="jardineria">Jardineria</option>                         
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
                        <label for="lugar_servicio">Lugar del Servicio</label>
                        <select id="lugar_servicio" class="form-control" name="lugar_servicio" @if ($errors->has('lugar_servicio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="empresa">Empresa</option>    
                            <option value="casa">Casa</option>
                            <option value="local comercial">Local Comercial</option>
                            <option value="fabrica">Fabrica</option>
                            <option value="bodega">Bodega</option>
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
                        <label for="plan">Plan de su interes</label>
                        <select id="plan" class="form-control" name="plan" @if ($errors->has('plan')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="4">4 Horas</option>    
                            <option value="8">8 Horas</option>
                            <option value="48">Cotizar los dos Planes</option>
                        </select>
                        @if ($errors->has('plan'))
                            @foreach ($errors->get('plan') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="periodicidad">Periodicidad del Servicio</label>
                        <select id="periodicidad" class="form-control" name="periodicidad" @if ($errors->has('periodicidad')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="1">1 Vez por Semana</option>    
                            <option value="2">2 Vez por Semana</option>
                            <option value="3">3 Vez por Semana</option>
                            <option value="4">4 Vez por Semana</option>
                            <option value="lv">De Lunes a Viernes</option>
                            <option value="ls">De Lunes a Sabado</option>
                        </select>
                        @if ($errors->has('periodicidad'))
                            @foreach ($errors->get('periodicidad') as $error)
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
                        <label for="ciudad">Ciudad donde desean el Servicio</label>
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
                    <div class="form-group col-md-6">
                        <label for="barrio">Barrio</label>
                        <input type="text" class="form-control" id="barrio" name="barrio">
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