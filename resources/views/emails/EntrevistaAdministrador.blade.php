<div class="container">
    <img src="http://www.limpro.co/images/logo_500.png" alt="..." width="100px"  class="img-thumbnail">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Nombre de Aspirante: {{$funcionaria->nombre_funcionaria}}</h1>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Tipo de Documento:</b> {{$funcionaria->tipo_documento}}</li>
                <li class="list-group-item"><b>Barrio:</b> {{$funcionaria->barrio_casa}}</li>
                <li class="list-group-item"><b>Ciudad:</b> {{$funcionaria->ciudad}}</li>
                <li class="list-group-item"><b>Cargo de Interes:</b> {{$funcionaria->oficio}}</li>
                <li class="list-group-item"><b>Edad:</b> {{$funcionaria->edad}}</li>
                <li class="list-group-item"><b>Experiencia:</b> {{$funcionaria->experiencia_oficio}}</li>
                <li class="list-group-item"><b>Emaill:</b> {{$funcionaria->celular_contacto}}</li>
                <li class="list-group-item"><b>Celular:</b> {{$funcionaria->email}}</li>
            </ul>            
        </div>
    </div>    
</div>