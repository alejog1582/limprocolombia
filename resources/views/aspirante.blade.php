@extends('layouts.app')

@section('content')
    
<div class="container">
    <br>
    <h1 class="text-center titulo">Proceso de Vinculacion Laboral</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <p>Gracias por estar interesada en trabajar con nosotros. </p>
        </div>
        <div class="col-md-6">
            <h2 class="text-center titulo">Diligencia el Formulario</h2>
            <br>
            <form action="/aspirante/new" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <select id="tipo_documento" class="form-control" name="tipo_documento" @if ($errors->has('tipo_documento')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="cc">CC</option>
                            <option value="ce">CE</option>
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
                        <label for="numero_documento">Numero de Documento</label>
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
                        <label for="nombre_funcionaria">Nombre Aspirante</label>
                        <input type="text" class="form-control" id="nombre_funcionaria" name="nombre_funcionaria" @if ($errors->has('nombre_funcionaria')) is-invalid @endif>
                        @if ($errors->has('nombre_funcionaria'))
                            @foreach ($errors->get('nombre_funcionaria') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">Correo Electronico</label>
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
                    <div class="form-group col-md-12">
                        <label for="direccion_casa">Direccion Casa</label>
                        <input type="text" class="form-control" id="direccion_casa" name="direccion_casa" @if ($errors->has('direccion_casa')) is-invalid @endif>
                        @if ($errors->has('direccion_casa'))
                            @foreach ($errors->get('direccion_casa') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="barrio_casa">Barrio Casa</label>
                        <input type="text" class="form-control" id="barrio_casa" name="barrio_casa" @if ($errors->has('barrio_casa')) is-invalid @endif>
                        @if ($errors->has('barrio_casa'))
                            @foreach ($errors->get('barrio_casa') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ciudad">Ciudad</label>
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
                    <div class="form-group col-md-4">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" @if ($errors->has('edad')) is-invalid @endif>
                        @if ($errors->has('edad'))
                            @foreach ($errors->get('edad') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="oficio">Cargo de Interes</label>
                        <select id="oficio" class="form-control" name="oficio" @if ($errors->has('oficio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="servicios generales">Servicios Generales</option>
                            <option value="administrativo">Administrativo</option>
                        </select>
                        @if ($errors->has('oficio'))
                            @foreach ($errors->get('oficio') as $error)
                                <h6 id="mensaje_request">
                                    <blockquote>{{ $error }}</blockquote>
                                </h6>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="experiencia_oficio">Experiencia en el Cargo</label>
                        <select id="experiencia_oficio" class="form-control" name="experiencia_oficio" @if ($errors->has('experiencia_oficio')) is-invalid @endif>
                            <option selected disabled>Seleccione una Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        @if ($errors->has('experiencia_oficio'))
                            @foreach ($errors->get('experiencia_oficio') as $error)
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
              </form>
              <br>
        </div>
    </div>    
</div>

@endsection

@section('title')
    Aspitante Limpro Colombia
@endsection