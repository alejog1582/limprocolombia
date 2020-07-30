<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionaria;
use App\Servicio;
use App\Calificacione;

class hojadevidaController extends Controller
{
    public function hojadevida($id){
        $funcionaria = Funcionaria::find($id);
        $calificaciones = Calificacione::all();
        $servicios = Servicio::all();
        $numero_servicios = 0;
		$calificaciones_malas = 0;
		$calificaciones_buenas = 0;
		$suma_calificacion = 0;
		$resultado_calificacion =0;
        return view('hojadevida', [
            'funcionaria' => $funcionaria,	
            'calificaciones' => $calificaciones,
			'servicios'=>$servicios,
			'numero_servicios'=> $numero_servicios,
			'calificaciones_malas' => $calificaciones_malas,
			'calificaciones_buenas' => $calificaciones_buenas,
			'suma_calificacion' => $suma_calificacion,
			'resultado_calificacion' => $resultado_calificacion,		
		]);
	}
	public function calificaciones($id){
        $funcionaria = Funcionaria::find($id);
        $calificaciones = Calificacione::all();
        
        return view('calificaciones', [
            'funcionaria' => $funcionaria,	
            'calificaciones' => $calificaciones,
				
		]);
    }
}
