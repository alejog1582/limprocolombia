<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Fecha de Servicio: {{$servicio->fecha_servicio}}</h1>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nombre Cliente:</b> {{$servicio->nombre_cliente}}</li>
                <li class="list-group-item"><b>Tipo de Servicio:</b> {{$servicio->tipo_servicio}}</li>
                <li class="list-group-item"><b>Ciudad del Servicio:</b> {{$servicio->ciudad}}</li>
                <li class="list-group-item"><b>Plan:</b> {{$servicio->plan}}</li>
                <li class="list-group-item"><b>Metodo de Pago:</b> {{$servicio->metodo_pago}}</li>
                <li class="list-group-item"><b>Hora de Inicio:</b> {{$servicio->hora_inicio}}</li>
                <li class="list-group-item"><b>Direccion:</b> {{$servicio->direccion_servicio}} {{$servicio->detalle_direccion}}</li>
                <li class="list-group-item"><b>Emaill:</b> {{$servicio->celular_contacto}}</li>
                <li class="list-group-item"><b>Celular:</b> {{$servicio->email}}</li>
            </ul>            
        </div>
    </div>    
</div>