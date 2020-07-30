<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Nueva Cotizacion Solicitada ID: {{$cotizacion->id}}</h1>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Tipo Servicio:</b> {{$cotizacion->tipo_servicio}}</li>
                <li class="list-group-item"><b>Lugar del Servicio:</b> {{$cotizacion->lugar_servicio}}</li>
                <li class="list-group-item"><b>Plan:</b> {{$cotizacion->plan}}</li>
                <li class="list-group-item"><b>Periodicidad</b> {{$cotizacion->periodicidad}}</li>
                <li class="list-group-item"><b>Nombre del Solicitante:</b> {{$cotizacion->nombre_cliente}}</li>
                <li class="list-group-item"><b>Email:</b> {{$cotizacion->email}}</li>
                <li class="list-group-item"><b>Celular:</b> {{$cotizacion->celular_contacto}}</li>
                <li class="list-group-item"><b>Ciudad:</b> {{$cotizacion->ciudad}}</li>
                <li class="list-group-item"><b>Barrio:</b> {{$cotizacion->barrio}}</li>
                <li class="list-group-item"><b>Observciones:</b> {{$cotizacion->observacion}}</li>
            </ul>            
        </div>
    </div>    
</div>