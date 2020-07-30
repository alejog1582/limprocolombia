<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();
        $servicios = Servicio::all();
        $serviciossolicitados = Servicio::where('estado', 'solicitado')->get();
        $serviciosasignados = Servicio::where('estado', 'asignado')->get();
        $serviciosrealizados = Servicio::where('estado', 'realizado')->get();
        $servicioscalificados = Servicio::where('estado', 'calificado')->get();
        $activos = false;
		$historial = false;
        foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->estado == 'solicitado' ) {
					$activos = true;					
                }
                if ($servicio->estado == 'asignado' ) {
					$activos = true;					
                }
                if ($servicio->estado == 'realizado' ) {
					$activos = true;					
                }
			}
        }

        foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->estado == 'calificado' or 'cancelado') {
					$historial = true;					
                }                
			}
        }
        
        return view('home', [
			'user' => $user,
            'serviciossolicitados' => $serviciossolicitados,
            'serviciosasignados' => $serviciosasignados,
            'serviciosrealizados' => $serviciosrealizados,
            'servicioscalificados' => $servicioscalificados,
            'activos' => $activos,
            'historial' => $historial,            
		]);
    }
}
