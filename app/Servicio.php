<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $guarded = [];

    public function funcionaria_asignada() {
		return $this->belongsTo('App\Funcionaria', 'id_funcionaria_asignada');
    }
    public function calificacion() {
      return $this->belongsTo('App\Calificacione', 'id_calificacion');
    }
    
}
