@extends('layouts.app')

@section('content')
    
<div class="container">
    <br>
<h1 class="text-center">Desvincular Funcionaria: {{ $funcionaria->nombre_funcionaria }} </h1>
    <br>
    
    <form action="/administracion/funcionarias/desvincular/save" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id_funcionaria" value="{{ $funcionaria->id }}">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="motivo_desvinculacion">Motivo de Desvinculacion</label>
                <textarea class="form-control" id="motivo_desvinculacion" rows="4" name="motivo_desvinculacion" @if ($errors->has('motivo_desvinculacion')) is-invalid @endif></textarea>
                @if ($errors->has('motivo_desvinculacion'))
                    @foreach ($errors->get('motivo_desvinculacion') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="fecha_desvinculacion">Fecha de Desvinculacion</label>
                <input class="form-control" id="fecha_desvinculacion" type="date" name="fecha_desvinculacion" @if ($errors->has('fecha_desvinculacion')) is-invalid @endif>
                @if ($errors->has('fecha_desvinculacion'))
                    @foreach ($errors->get('fecha_desvinculacion') as $error)
                        <h6 id="mensaje_request">
                            <blockquote>{{ $error }}</blockquote>
                        </h6>
                    @endforeach
                @endif
            </div>                                            
        </div>
        
        <button type="submit" class="btn" id="boton_principal">Guardar</button>
        <br><br>
      </form>



</div>

@endsection

