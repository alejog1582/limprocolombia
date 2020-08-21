<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Fecha de Servicio: {{$servicio->fecha_servicio}}</h1>
            </div>
            <p>Hola <b>{{$servicio->funcionaria_asignada->nombre_funcionaria_abreviado}}</b>  te hemos asignado un nuevo servicio: </p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nombre Cliente:</b> {{$servicio->nombre_cliente}}</li>
                <li class="list-group-item"><b>Tipo de Servicio:</b> {{$servicio->tipo_servicio}}</li>
                <li class="list-group-item"><b>Plan:</b> {{$servicio->plan}}</li>
                <li class="list-group-item"><b>Hora de Inicio:</b> {{$servicio->hora_inicio}}</li>
                <li class="list-group-item"><b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}</li>
            </ul>
            <p>
            </b> <br><br>
                Cordialmente,
                <br><br>
        
               <b>LIMPRO COLOMBIA SAS</b>
                <br>
                Tel: 655 62 19 
                <br>
                Cel: 350 459 10 97
                <br>
                <a href="www.limpro.co">www.limpro.co</a> 
            </p>          
        </div>
    </div>    
</div>