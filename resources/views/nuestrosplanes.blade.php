@extends('layouts.app')

@section('content')

<div class="container">
<br>
<h1 class="text-center">Nuestros Planes de Limpieza Profesional</h1>
<br>
<div class="row">
    <div class="col-md-6" style="margin-bottom: 1rem">
        <div class="card h-100">
            <a href="/cotizacionew"><img src="https://res.cloudinary.com/dikbf3xct/image/upload/v1597940700/Limpro%20Colombia/Slider%20Carrousel/plan_4_horas.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h2 class="card-title text-center">Plan de Servicio de Limpieza 4 Horas</h2>
                <p class="card-text">En este plan nos enfocamos en actividades especificas y concretas donde las actividades a realizar se adecuen al tiempo contratado. <br><br> Si contratas este plan para el <b>hogar</b> realizamos las siguientes actividades:</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Limpieza* de cocina</li>
                <li class="list-group-item">Limpieza* de habitaciones</li>
                <li class="list-group-item">Limpieza* de baños</li>
                <li class="list-group-item">Limpieza* de Areas Comunes</li>
                <li class="list-group-item">Limpieza* de vidrios y ventanas</li>
                <li class="list-group-item">Planchado (Realizamos el servicio de planchado para servicios contratados en la tarde)</li>
                <li class="list-group-item"><b>* La limpieza de todos los espacios del hogar incluyen barrido y trapeado de piso, limpieza de polvo, limpieza y desinfeccion en superficies.</b> </li>
            </ul>
            <div class="card-body">
                <br>
                <p class="card-text">Si contratas este plan para <b>empresa</b> realizamos las siguientes actividades:</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Limpieza* de cocina o Cocineta</li>
                <li class="list-group-item">Limpieza* de oficinas</li>
                <li class="list-group-item">Limpieza* de baños</li>
                <li class="list-group-item">Limpieza* de Areas Comunes</li>
                <li class="list-group-item">Limpieza* de Recepcion</li>
                <li class="list-group-item">Limpieza* de Salas de Junta</li>
                <li class="list-group-item">Limpieza* de elementos de oficina (Impresoras, archivadores, bibliotecas)</li>
                <li class="list-group-item">Limpieza* de vidrios y ventanas</li>
                <li class="list-group-item"><b>* La limpieza de todos los espacios en oficinas incluyen barrido y trapeado de piso, limpieza de polvo, limpieza y desinfeccion en superficies.</b> </li>
            </ul>
        </div>
    </div>
    <div class="col-md-6" style="margin-bottom: 1rem">
        <div class="card  h-100">
            <a href="/cotizacionew"><img src="https://res.cloudinary.com/dikbf3xct/image/upload/v1597940700/Limpro%20Colombia/Slider%20Carrousel/plan_8_horas.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h2 class="card-title text-center">Plan de Servicio de Limpieza 8 Horas</h2>
                <p class="card-text">En este plan nos especialimos en brindarte un servicio detallado y profundo y ampliamos nuestro tiempo en cada uno de los espacios para dejar tus espacios impecables.<br><br> Si contratas este plan para el <b>hogar</b> realizamos las siguientes actividades:</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Limpieza* de cocina</li>
                <li class="list-group-item">Limpieza* de habitaciones</li>
                <li class="list-group-item">Limpieza* de baños</li>
                <li class="list-group-item">Limpieza* de Areas Comunes</li>
                <li class="list-group-item">Limpieza* de vidrios y ventanas</li>
                <li class="list-group-item">Lavado de Ropa en lavadora</li>
                <li class="list-group-item">Preparacion de alimentos</li>
                <li class="list-group-item">Planchado (Realizamos el servicio de planchado en horas de la tarde como ultima actividad en la ejecucion del servicio)</li>
                <li class="list-group-item"><b>* La limpieza de todos los espacios del hogar incluyen barrido y trapeado de piso, limpieza de polvo, limpieza y desinfeccion en superficies.</b> </li>
            </ul>
            <div class="card-body">
                <br>
                <p class="card-text">Si contratas este plan para <b>empresa</b> realizamos las siguientes actividades:</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Limpieza* de cocina o Cocineta</li>
                <li class="list-group-item">Limpieza* de oficinas</li>
                <li class="list-group-item">Limpieza* de baños</li>
                <li class="list-group-item">Limpieza* de Areas Comunes</li>
                <li class="list-group-item">Limpieza* de Recepcion</li>
                <li class="list-group-item">Limpieza* de Salas de Junta</li>
                <li class="list-group-item">Limpieza* de elementos de oficina (Impresoras, archivadores, bibliotecas)</li>
                <li class="list-group-item">Limpieza* de vidrios y ventanas</li>
                <li class="list-group-item"><b>* La limpieza de todos los espacios en oficinas incluyen barrido y trapeado de piso, limpieza de polvo, limpieza y desinfeccion en superficies.</b> </li>
            </ul>
        </div>
    </div>
</div>
</div>
<br>
@endsection

@section('title')
    Nuestros Planes de Limpieza 
@endsection