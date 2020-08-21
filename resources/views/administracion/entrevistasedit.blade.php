@extends('layouts.app')

@section('content')

<div class="container">

    <br>
    @if ($funcionaria->fecha_vinculacion <> null)
        <h1 class="text-center">Gestion Funcionaria ID: {{ $funcionaria->id }}</h1>
    @endif
    @if ($funcionaria->fecha_vinculacion == null)
        <h1 class="text-center">Gestion Entrevista ID: {{ $funcionaria->id }}</h1>
    @endif    
    <br>
    <a class="btn" id="boton_principal" href="/administracion">Regresar</a>
    <br><br>
    <div class="row">
        <div class="col-sm-12 text-center">
            <img width="20%" src="{{ $funcionaria->url_foto }}" alt="">
        </div>
    </div>
    <br><br>
    <form action="/administracion/entrevistasedit/save" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id_funcionaria" value="{{ $funcionaria->id }}">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tipo_documento">Tipo de Documento</label>
                <select  id="tipo_documento" class="form-control" name="tipo_documento" @if ($errors->has('tipo_documento')) is-invalid @endif>
                    @if ( $funcionaria->tipo_documento	== 'cc')
                        <option selected value="cc">CC</option>                        
                    @endif                                          
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
                <input value="{{ $funcionaria->numero_documento }}" type="text" class="form-control" id="numero_documento" name="numero_documento" @if ($errors->has('numero_documento')) is-invalid @endif>
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
                <input value="{{ $funcionaria->nombre_funcionaria }}" type="text" class="form-control" id="nombre_funcionaria" name="nombre_funcionaria" @if ($errors->has('nombre_funcionaria')) is-invalid @endif>
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
                <input value="{{ $funcionaria->email }}" type="email" class="form-control" id="email" name="email" @if ($errors->has('email')) is-invalid @endif>
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
                <input value="{{ $funcionaria->celular_contacto }}" type="text" class="form-control" id="celular_contacto" name="celular_contacto" @if ($errors->has('celular_contacto')) is-invalid @endif>
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
                <input value="{{ $funcionaria->fijo_contacto }}" type="text" class="form-control" id="fijo_contacto" name="fijo_contacto">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="direccion_casa">Direccion Casa</label>
                <input value="{{ $funcionaria->direccion_casa }}" type="text" class="form-control" id="direccion_casa" name="direccion_casa" @if ($errors->has('direccion_casa')) is-invalid @endif>
                @if ($errors->has('direccion_casa'))
                    @foreach ($errors->get('direccion_casa') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="barrio_casa">Barrio Casa</label>
                <input value="{{ $funcionaria->barrio_casa }}" type="text" class="form-control" id="barrio_casa" name="barrio_casa" @if ($errors->has('barrio_casa')) is-invalid @endif>
                @if ($errors->has('barrio_casa'))
                    @foreach ($errors->get('barrio_casa') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="ciudad">Ciudad</label>
                <input value="{{ $funcionaria->ciudad }}" type="text" class="form-control" id="ciudad" name="ciudad" @if ($errors->has('ciudad')) is-invalid @endif>
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
                <input value="{{ $funcionaria->edad }}" type="text" class="form-control" id="edad" name="edad" @if ($errors->has('edad')) is-invalid @endif>
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
                    @if ( $funcionaria->oficio	== 'servicios generales')
                        <option selected value="servicios generales">Servicios Generales</option>
                        <option value="administrativo">Administrativo</option>
                    @endif
                    @if ( $funcionaria->oficio	== 'administrativo')
                        <option selected value="administrativo">Administrativo</option>
                        <option value="servicios generales">Servicios Generales</option>
			        @endif                    
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
                    @if ( $funcionaria->experiencia_oficio	== 'si')
                        <option selected value="si">Si</option>
                        <option value="no">No</option>
                    @endif
                    @if ( $funcionaria->experiencia_oficio	== 'no')
                        <option selected value="no">No</option>
                        <option value="si">Si</option>
			        @endif                    
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
        <hr>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nombre_funcionaria_abreviado">Nombre Abreviado</label>
                <input value="{{ $funcionaria->nombre_funcionaria_abreviado }}" type="text" class="form-control" id="nombre_funcionaria_abreviado" name="nombre_funcionaria_abreviado" @if ($errors->has('nombre_funcionaria_abreviado')) is-invalid @endif>
                @if ($errors->has('nombre_funcionaria_abreviado'))
                    @foreach ($errors->get('nombre_funcionaria_abreviado') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input value="{{ $funcionaria->fecha_nacimiento }}" type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" @if ($errors->has('fecha_nacimiento')) is-invalid @endif>
                @if ($errors->has('fecha_nacimiento'))
                    @foreach ($errors->get('fecha_nacimiento') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_expedicion_cedula">Fecha de Expedicion Cedula</label>
                <input value="{{ $funcionaria->fecha_expedicion_cedula }}" type="date" class="form-control" id="fecha_expedicion_cedula" name="fecha_expedicion_cedula" @if ($errors->has('fecha_expedicion_cedula')) is-invalid @endif>
                @if ($errors->has('fecha_expedicion_cedula'))
                    @foreach ($errors->get('fecha_expedicion_cedula') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>        
        </div> 
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="tipo_sangre">Tipo de Sangre</label>
                <input value="{{ $funcionaria->tipo_sangre }}" type="text" class="form-control" id="tipo_sangre" name="tipo_sangre" @if ($errors->has('tipo_sangre')) is-invalid @endif>
                @if ($errors->has('tipo_sangre'))
                    @foreach ($errors->get('tipo_sangre') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="eps">Eps</label>
                <input value="{{ $funcionaria->eps }}" type="text" class="form-control" id="eps" name="eps" @if ($errors->has('eps')) is-invalid @endif>
                @if ($errors->has('eps'))
                    @foreach ($errors->get('eps') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="pension">Pension</label>
                <input value="{{ $funcionaria->pension }}" type="text" class="form-control" id="pension" name="pension" @if ($errors->has('pension')) is-invalid @endif>
                @if ($errors->has('pension'))
                    @foreach ($errors->get('pension') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>        
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cuenta_ahorro">Banco Cuenta de Ahorro</label>
                <input value="{{ $funcionaria->cuenta_ahorro }}" type="text" class="form-control" id="cuenta_ahorro" name="cuenta_ahorro" @if ($errors->has('cuenta_ahorro')) is-invalid @endif>
                @if ($errors->has('cuenta_ahorro'))
                    @foreach ($errors->get('cuenta_ahorro') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="numero_cuenta_ahorro">Numero de cuenta de ahorro</label>
                <input value="{{ $funcionaria->numero_cuenta_ahorro }}" type="text" class="form-control" id="numero_cuenta_ahorro" name="numero_cuenta_ahorro" @if ($errors->has('numero_cuenta_ahorro')) is-invalid @endif>
                @if ($errors->has('numero_cuenta_ahorro'))
                    @foreach ($errors->get('numero_cuenta_ahorro') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="operador_celular">Operador Celular</label>
                <input value="{{ $funcionaria->operador_celular }}" type="text" class="form-control" id="operador_celular" name="operador_celular" @if ($errors->has('operador_celular')) is-invalid @endif>
                @if ($errors->has('operador_celular'))
                    @foreach ($errors->get('operador_celular') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>        
        </div>
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="cocina">Cocina</label>
                <select id="cocina" class="form-control" name="cocina" @if ($errors->has('cocina')) is-invalid @endif>
                @if ( $funcionaria->cocina	== 'si')
                    <option selected value="si">Si</option>
                    <option value="no">No</option>
                @endif
                @if ( $funcionaria->cocina	== 'no')
                    <option selected value="no">No</option>
                    <option value="si">Si</option>
                @endif                                 
                </select>
                @if ($errors->has('cocina'))
                    @foreach ($errors->get('cocina') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif                
            </div><div class="form-group col-md-1">
                <label for="cafeteria">Greca</label>
                <select id="cafeteria" class="form-control" name="cafeteria" @if ($errors->has('cafeteria')) is-invalid @endif>
                @if ( $funcionaria->cafeteria	== 'si')
                    <option selected value="si">Si</option>
                    <option value="no">No</option>
                @endif
                @if ( $funcionaria->cafeteria	== 'no')
                    <option selected value="no">No</option>
                    <option value="si">Si</option>
                @endif                                       
                </select>
                @if ($errors->has('cafeteria'))
                    @foreach ($errors->get('cafeteria') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif                
            </div>
            <div class="form-group col-md-2">
                <label for="plancha">Plancha</label>
                <select id="plancha" class="form-control" name="plancha" @if ($errors->has('plancha')) is-invalid @endif>
                @if ( $funcionaria->plancha	== 'si')
                    <option selected value="si">Si</option>
                    <option value="no">No</option>
                @endif
                @if ( $funcionaria->plancha	== 'no')
                    <option selected value="no">No</option>
                    <option value="si">Si</option>
                @endif                                       
                </select>
                @if ($errors->has('plancha'))
                    @foreach ($errors->get('plancha') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif                
            </div>
            <div class="form-group col-md-2">
                <label for="tratamiento_pisos">T. Pisos</label>
                <select id="tratamiento_pisos" class="form-control" name="tratamiento_pisos" @if ($errors->has('tratamiento_pisos')) is-invalid @endif>
                @if ( $funcionaria->tratamiento_pisos	== 'si')
                    <option selected value="si">Si</option>
                    <option value="no">No</option>
                @endif
                @if ( $funcionaria->tratamiento_pisos	== 'no')
                    <option selected value="no">No</option>
                    <option value="si">Si</option>
                @endif                                       
                </select>
                @if ($errors->has('tratamiento_pisos'))
                    @foreach ($errors->get('tratamiento_pisos') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif                
            </div>
            <div class="form-group col-md-2">
                <label for="productos_aseo">Prod. Aseo</label>
                <select id="productos_aseo" class="form-control" name="productos_aseo" @if ($errors->has('productos_aseo')) is-invalid @endif>
                @if ( $funcionaria->productos_aseo	== 'si')
                    <option selected value="si">Si</option>
                    <option value="no">No</option>
                @endif
                @if ( $funcionaria->productos_aseo	== 'no')
                    <option selected value="no">No</option>
                    <option value="si">Si</option>
                @endif                                       
                </select>
                @if ($errors->has('productos_aseo'))
                    @foreach ($errors->get('productos_aseo') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif                
            </div>
            <div class="form-group col-md-2">
                <label for="manipulacion_alimentos">Manip. Alimentos</label>
                <select id="manipulacion_alimentos" class="form-control" name="manipulacion_alimentos" @if ($errors->has('manipulacion_alimentos')) is-invalid @endif>
                @if ( $funcionaria->manipulacion_alimentos	== 'si')
                    <option selected value="si">Si</option>
                    <option value="no">No</option>
                @endif
                @if ( $funcionaria->manipulacion_alimentos	== 'no')
                    <option selected value="no">No</option>
                    <option value="si">Si</option>
                @endif                                       
                </select>
                @if ($errors->has('manipulacion_alimentos'))
                    @foreach ($errors->get('manipulacion_alimentos') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif                
            </div>
            <div class="form-group col-md-2">
                <label for="fecha_manipulacion_alimentos">Fecha Manp. Alimentos</label>
                <input value="{{ $funcionaria->fecha_manipulacion_alimentos }}" type="date" class="form-control" id="fecha_manipulacion_alimentos" name="fecha_manipulacion_alimentos">                
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="talla_uniforme">Talla Uniforme</label>
                <input value="{{ $funcionaria->talla_uniforme }}" type="text" class="form-control" id="talla_uniforme" name="talla_uniforme" @if ($errors->has('talla_uniforme')) is-invalid @endif>
                @if ($errors->has('talla_uniforme'))
                    @foreach ($errors->get('talla_uniforme') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-2">
                <label for="talla_zapato">Talla Zapatos</label>
                <input value="{{ $funcionaria->talla_zapato }}" type="text" class="form-control" id="talla_zapato" name="talla_zapato" @if ($errors->has('talla_zapato')) is-invalid @endif>
                @if ($errors->has('talla_zapato'))
                    @foreach ($errors->get('talla_zapato') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-2">
                <label for="experiencia_tiempo">Tiempo de Experiencia</label>
                <input value="{{ $funcionaria->experiencia_tiempo }}" type="text" class="form-control" id="experiencia_tiempo" name="experiencia_tiempo" @if ($errors->has('experiencia_tiempo')) is-invalid @endif>
                @if ($errors->has('experiencia_tiempo'))
                    @foreach ($errors->get('experiencia_tiempo') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-3">
                <label for="nombre_acudiente">Nombre Acudiente</label>
                <input value="{{ $funcionaria->nombre_acudiente }}" type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente" @if ($errors->has('nombre_acudiente')) is-invalid @endif>
                @if ($errors->has('nombre_acudiente'))
                    @foreach ($errors->get('nombre_acudiente') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-3">
                <label for="celular_acudiente">Celular acudiente</label>
                <input value="{{ $funcionaria->celular_acudiente }}" type="text" class="form-control" id="celular_acudiente" name="celular_acudiente" @if ($errors->has('celular_acudiente')) is-invalid @endif>
                @if ($errors->has('celular_acudiente'))
                    @foreach ($errors->get('celular_acudiente') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="trabajo_anterior">Trabajos Anteriores</label>
                <textarea class="form-control" id="trabajo_anterior" rows="4" name="trabajo_anterior" @if ($errors->has('trabajo_anterior')) is-invalid @endif>{{ $funcionaria->trabajo_anterior }}</textarea>
                @if ($errors->has('trabajo_anterior'))
                    @foreach ($errors->get('trabajo_anterior') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="experiencia_laboral">Experiencia Laboral</label>
                <textarea class="form-control" id="experiencia_laboral" rows="4" name="experiencia_laboral" @if ($errors->has('experiencia_laboral')) is-invalid @endif>{{ $funcionaria->experiencia_laboral }}</textarea>
                @if ($errors->has('experiencia_laboral'))
                    @foreach ($errors->get('experiencia_laboral') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fortalezas">Fortalezas</label>
                <textarea class="form-control" id="fortalezas" rows="4" name="fortalezas" @if ($errors->has('fortalezas')) is-invalid @endif>{{ $funcionaria->fortalezas }}</textarea>
                @if ($errors->has('fortalezas'))
                    @foreach ($errors->get('fortalezas') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="debilidades">Debilidades</label>
                <textarea class="form-control" id="debilidades" rows="4" name="debilidades" @if ($errors->has('debilidades')) is-invalid @endif>{{ $funcionaria->debilidades }}</textarea>
                @if ($errors->has('debilidades'))
                    @foreach ($errors->get('debilidades') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="hijos">Numero de Hijos</label>
                <textarea class="form-control" id="hijos" rows="4" name="hijos" @if ($errors->has('hijos')) is-invalid @endif>{{ $funcionaria->hijos }}</textarea>
                @if ($errors->has('hijos'))
                    @foreach ($errors->get('hijos') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="conformacion_familia">Conformacion de Familia</label>
                <textarea class="form-control" id="conformacion_familia" rows="4" name="conformacion_familia" @if ($errors->has('conformacion_familia')) is-invalid @endif>{{ $funcionaria->conformacion_familia }}</textarea>
                @if ($errors->has('conformacion_familia'))
                    @foreach ($errors->get('conformacion_familia') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="tipo_vivienda">Tipo de Vivienda</label>
                <input value="{{ $funcionaria->tipo_vivienda }}" type="text" class="form-control" id="tipo_vivienda" name="tipo_vivienda" @if ($errors->has('tipo_vivienda')) is-invalid @endif>
                @if ($errors->has('tipo_vivienda'))
                    @foreach ($errors->get('tipo_vivienda') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="tiempo_libre">Tiempo Libre</label>
                <input value="{{ $funcionaria->tiempo_libre }}" type="text" class="form-control" id="tiempo_libre" name="tiempo_libre" @if ($errors->has('tiempo_libre')) is-invalid @endif>
                @if ($errors->has('tiempo_libre'))
                    @foreach ($errors->get('tiempo_libre') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="disponibilidad_tiempo">Disponibilidad para trabajar</label>
                <input value="{{ $funcionaria->disponibilidad_tiempo }}" type="text" class="form-control" id="disponibilidad_tiempo" name="disponibilidad_tiempo" @if ($errors->has('disponibilidad_tiempo')) is-invalid @endif>
                @if ($errors->has('disponibilidad_tiempo'))
                    @foreach ($errors->get('disponibilidad_tiempo') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>        
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="estudios">Estudios</label>
                <textarea class="form-control" id="estudios" rows="4" name="estudios" @if ($errors->has('estudios')) is-invalid @endif>{{ $funcionaria->estudios }}</textarea>
                @if ($errors->has('estudios'))
                    @foreach ($errors->get('estudios') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="antecedentes_medicos">Antecedentes medicos</label>
                <textarea class="form-control" id="antecedentes_medicos" rows="4" name="antecedentes_medicos" @if ($errors->has('antecedentes_medicos')) is-invalid @endif>{{ $funcionaria->antecedentes_medicos }}</textarea>
                @if ($errors->has('antecedentes_medicos'))
                    @foreach ($errors->get('antecedentes_medicos') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="concepto_entrevista">Concepto Entrevista</label>
                <textarea class="form-control" id="concepto_entrevista" rows="4" name="concepto_entrevista" @if ($errors->has('concepto_entrevista')) is-invalid @endif>{{ $funcionaria->concepto_entrevista }}</textarea>
                @if ($errors->has('concepto_entrevista'))
                    @foreach ($errors->get('concepto_entrevista') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="fecha_entrevista">Fecha de Entrevista</label>
                <input value="{{ $funcionaria->fecha_entrevista }}" class="form-control" id="fecha_entrevista" type="date" name="fecha_entrevista" @if ($errors->has('fecha_entrevista')) is-invalid @endif>
                @if ($errors->has('fecha_entrevista'))
                    @foreach ($errors->get('fecha_entrevista') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="antecedentes">Antecedentes Judiciales</label>
                <textarea class="form-control" id="antecedentes" rows="4" name="antecedentes" @if ($errors->has('antecedentes')) is-invalid @endif>{{ $funcionaria->antecedentes }}</textarea>
                @if ($errors->has('antecedentes'))
                    @foreach ($errors->get('antecedentes') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="referencias_laborales">Referencias Laborales</label>
                <textarea class="form-control" id="referencias_laborales" rows="4" name="referencias_laborales" @if ($errors->has('referencias_laborales')) is-invalid @endif>{{ $funcionaria->referencias_laborales }}</textarea>
                @if ($errors->has('referencias_laborales'))
                    @foreach ($errors->get('referencias_laborales') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="examenes_medicos">Examenes Medicos</label>
                <textarea class="form-control" id="examenes_medicos" rows="4" name="examenes_medicos" @if ($errors->has('examenes_medicos')) is-invalid @endif>{{ $funcionaria->examenes_medicos }}</textarea>
                @if ($errors->has('examenes_medicos'))
                    @foreach ($errors->get('examenes_medicos') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="visita_domiciliaria">Visita Domiciliaria</label>
                <textarea class="form-control" id="visita_domiciliaria" rows="4" name="visita_domiciliaria" @if ($errors->has('visita_domiciliaria')) is-invalid @endif>{{ $funcionaria->visita_domiciliaria }}</textarea>
                @if ($errors->has('visita_domiciliaria'))
                    @foreach ($errors->get('visita_domiciliaria') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="url_foto">URL Foto</label>
                <input value="{{ $funcionaria->url_foto }}" type="text" class="form-control" id="url_foto" name="url_foto" @if ($errors->has('url_foto')) is-invalid @endif>
                @if ($errors->has('url_foto'))
                    @foreach ($errors->get('url_foto') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_vinculacion">Fecha de Vinculacion</label>
            <input value="{{ $funcionaria->fecha_vinculacion }}" type="date" class="form-control" id="fecha_vinculacion" name="fecha_vinculacion" @if ($errors->has('fecha_vinculacion')) is-invalid @endif>
                @if ($errors->has('fecha_vinculacion'))
                    @foreach ($errors->get('fecha_vinculacion') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_dotacion">Fecha de Dotacion</label>
                <input value="{{ $funcionaria->fecha_dotacion }}" type="date" class="form-control" id="fecha_dotacion" name="fecha_dotacion" @if ($errors->has('fecha_dotacion')) is-invalid @endif>
                @if ($errors->has('fecha_dotacion'))
                    @foreach ($errors->get('fecha_dotacion') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>        
        </div>
        @if ($funcionaria->estado == 'exfuncionaria')
            <a href="/administracion" class="btn" id="boton_principal">Aceptar</a>
        @endif
        @if ($funcionaria->estado <> 'exfuncionaria')
            <button type="submit" class="btn" id="boton_principal">Guardar</button>
        @endif
        <br><br>
      </form>

</div>
@endsection

