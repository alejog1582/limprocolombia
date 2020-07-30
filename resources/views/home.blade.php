@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h1 class="text-center titulo">Bienvenid@ a tu cuenta {{ $user->name }}</h1>
    <br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#servicio_activos">Servicios Activos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#historial_servicios">Historial de Servicios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Solicitar Servicio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/servicionew">Aseo</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    
    <div class="row" id="servicio_activos">
        <h2>Servicios Activos</h2>
    </div>
    <div class="row">
        @if ($activos == false)
            <p>No tiene servicios activos en el momento. Solicita un nuevo servicio</p>    
        @endif
        @if ($activos == true)
            @foreach ($serviciossolicitados as $servicio)
            <br>
                @if ($servicio->email == $user->email)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-center card_principal">
                                <b>Cliente:</b> {{$servicio->nombre_cliente}} ||
                                <b>ID:</b> {{$servicio->id}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}
                                        </div>                        
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Fecha de Servicio:</b> {{$servicio->fecha_servicio}}</div>
                                        <div class="col-md-6">
                                            <b>Hora de Inicio:</b> {{$servicio->hora_inicio}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Plan:</b> {{$servicio->plan}} Horas</div>
                                        <div class="col-md-6">
                                            <b>Metodo de Pago:</b> {{$servicio->metodo_pago}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Valor:</b> {{$servicio->valor_plan}}</div>
                                        <div class="col-md-6">
                                            <b>Kit de Productos:</b> {{$servicio->kit_productos}}</div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Requerimiento Especial:</b> {{$servicio->observacion}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <b>Funcionaria Asignada:</b> Pendiente de Asignacion
                                        </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>        
                        <br>
                    </div>
                @endif
            @endforeach

            @foreach ($serviciosasignados as $servicio)
            <br>
                @if ($servicio->email == $user->email)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-center card_principal">
                                <b>Cliente:</b> {{$servicio->nombre_cliente}} ||
                                <b>ID:</b> {{$servicio->id}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}
                                        </div>                        
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Fecha de Servicio:</b> {{$servicio->fecha_servicio}}</div>
                                        <div class="col-md-6">
                                            <b>Hora de Inicio:</b> {{$servicio->hora_inicio}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Plan:</b> {{$servicio->plan}} Horas</div>
                                        <div class="col-md-6">
                                            <b>Metodo de Pago:</b> {{$servicio->metodo_pago}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Valor:</b> {{$servicio->valor_plan}}</div>
                                        <div class="col-md-6">
                                            <b>Kit de Productos:</b> {{$servicio->kit_productos}}</div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Requerimiento Especial:</b> {{$servicio->observacion}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <b>Funcionaria Asignada:</b> {{ $servicio->funcionaria_asignada->nombre_funcionaria }}
                                        </div>
                                        <div class="form-group col-md-4 text-center">
                                            <a type="submit" href="/hojadevida/{{ $servicio->funcionaria_asignada->id }}" class="btn" id="boton_principal">Ver Hoja de Vida</a>                                            
                                        </div>
                                    </div>
                                    </form>
                                </li>
                            </ul>
                        </div>        
                        <br>
                    </div>
                @endif
            @endforeach

            @foreach ($serviciosrealizados as $servicio)
            <br>
                @if ($servicio->email == $user->email)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-center card_principal">
                                <b>Cliente:</b> {{$servicio->nombre_cliente}} ||
                                <b>ID:</b> {{$servicio->id}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}
                                        </div>                        
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Fecha de Servicio:</b> {{$servicio->fecha_servicio}}</div>
                                        <div class="col-md-6">
                                            <b>Hora de Inicio:</b> {{$servicio->hora_inicio}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Plan:</b> {{$servicio->plan}} Horas</div>
                                        <div class="col-md-6">
                                            <b>Metodo de Pago:</b> {{$servicio->metodo_pago}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Valor:</b> {{$servicio->valor_plan}}</div>
                                        <div class="col-md-6">
                                            <b>Kit de Productos:</b> {{$servicio->kit_productos}}</div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Requerimiento Especial:</b> {{$servicio->observacion}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <b>Funcionaria Asignada:</b> {{ $servicio->funcionaria_asignada->nombre_funcionaria }}
                                        </div>
                                        <div class="form-group col-md-4 text-center">
                                            <a href="/calificacionservicio/{{$servicio->id}}" type="submit" class="btn" id="boton_principal">Calificar Servicio</a>                                            
                                        </div>
                                    </div>
                                    </form>
                                </li>
                            </ul>
                        </div>        
                        <br>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
    <br>
    <a type="button" id="boton_principal" class="btn btn-lg btn-block" href="/servicionew">Solicitar un Servcio Nuevo</a>
    <br>
    <div class="row">
        <h2 id="historial_servicios">Historial Servicio</h2>
    </div>
    <br>
    <div class="row">
        @if ($historial == false)
            <p>No tiene historial de servicios. Solicita un nuevo servicio</p>    
        @endif
        @if ($historial == true)
            @foreach ($servicioscalificados as $servicio)
            <br>
                @if ($servicio->email == $user->email)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center card_principal">
                                <b>Cliente:</b> {{$servicio->nombre_cliente}} ||
                                <b>ID:</b> {{$servicio->id}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}
                                        </div>                        
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Fecha de Servicio:</b> {{$servicio->fecha_servicio}}</div>
                                        <div class="col-md-6">
                                            <b>Hora de Inicio:</b> {{$servicio->hora_inicio}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Plan:</b> {{$servicio->plan}} Horas</div>
                                        <div class="col-md-6">
                                            <b>Metodo de Pago:</b> {{$servicio->metodo_pago}}
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item card_secundaria">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Funcionaria Asignada:</b> {{ $servicio->funcionaria_asignada->nombre_funcionaria }}
                                        </div>
                                        <div class="col md-6">
                                            <b>Calificacion Dada:</b> {{ $servicio->calificacion->cal_total }} <a style="font-size: 32px; color:#22c7c0" href="#!">&#9733;</a>
                                        </div>
                                    </div>
                                    </form>
                                </li>
                            </ul>
                        </div>        
                        <br>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>

@endsection
