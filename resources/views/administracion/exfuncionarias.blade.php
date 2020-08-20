@extends('layouts.app')

@section('content')

<div class="container">
<br>
<h1 class="text-center">Exfuncionarias Limpro Colombia</h1>
<a class="btn" id="boton_principal" href="/administracion">Regresar</a>
<br><br>



<div class="row">
    <div class="accordion" id="accordionExample">
        @foreach ($funcionarias as $funcionaria)
        <div class="col-md-6">    
        @if ($funcionaria->estado == 'exfuncionaria')
                <div class="card card_secundaria">
                    <div class="card-header card_principal" id="headingOne">
                        <h2 class="">
                            <button class="btn btn-link card_principal" type="button" data-toggle="collapse" data-target="#collapseOne{{$funcionaria->id}}" aria-expanded="true" aria-controls="collapseOne">
                                <b>Nombre:</b> {{ $funcionaria->nombre_funcionaria }} || <b>CC:</b> {{ $funcionaria->numero_documento }} || <b>ID:</b> {{ $funcionaria->id }}
                            </button>
                        </h2>
                    </div>          
                    <div id="collapseOne{{$funcionaria->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><b>Fecha de Vinculacion:</b> {{ $funcionaria->fecha_vinculacion }}</div>
                                <div class="col-md-6"><b>Fecha Desvinculacion:</b> {{ $funcionaria->fecha_desvinculacion }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm"><b>Motivo Desvinculacion:</b> {{ $funcionaria->motivo_desvinculacion }}</div>                                                            
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <a href="/administracion/entrevistas/{{$funcionaria->id}}" type="button" class="btn" id="boton_principal">Ver</a>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            
            
                <br>
                
                @endif    
            </div>    
    @endforeach
            </div>
</div>

</div>

@endsection

