<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Funcionaria;
use App\Calificacione;
use App\Http\Requests\CalificacionRequest;

class CalificacionesController extends Controller
{
    public function calificacionnew($id){
        $servicio = Servicio::find($id);
        return view('calificaciones.calificacionnew', [
			'servicio' => $servicio,			
		]);
    }
    public function SaveCalificacion(CalificacionRequest $request) {
		$id_servicio = $request->input('id_servicio');
		$calidad = $request->input('calidad');
		$puntualidad = $request->input('puntualidad');
		$pp = $request->input('pp');
		$amabilidad = $request->input('amabilidad');
		$cal_total = ($calidad + $puntualidad + $pp + $amabilidad) / 4;
		$calificacion = Calificacione::create([
			'id_empleado' => $request->input('id_funcionario'),
			'id_servicio' => $request->input('id_servicio'),
			'cal_calidad_servicio' => $request->input('calidad'),
			'cal_puntualidad' => $request->input('puntualidad'),
			'cal_presentacion_personal' => $request->input('pp'),
			'cal_amabilidad' => $request->input('amabilidad'),
			'cal_total' => $cal_total,
			'comentario' => $request->input('comentario'),

		]);

		$id_calificacion = $calificacion->id;

		$servicio = Servicio::find($id_servicio);

        $servicio->id_calificacion = $id_calificacion;
        $servicio->estado = 'calificado';

		$servicio->save();

		return view('calificaciones.resultadocalificacion', [
			'calificacion' => $calificacion,
			'cal_total' => $cal_total,
		]);
	}
}
