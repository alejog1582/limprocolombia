<?php

namespace App\Http\Controllers;

use App\Funcionaria;
use App\Http\Requests\AspiranteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntrevistaAspirante;
use App\Mail\EntrevistaAdministrador;

class FuncionariasController extends Controller
{
    public function aspirante(){
        return view('aspirante');
    }

    public function newfuncionaria(AspiranteRequest $request){

        $funcionaria = Funcionaria::create([
			'tipo_documento' => $request->input('tipo_documento'),
			'numero_documento' => $request->input('numero_documento'),
			'nombre_funcionaria' => $request->input('nombre_funcionaria'),
			'edad' => $request->input('edad'),
			'email' => $request->input('email'),
			'celular_contacto' => $request->input('celular_contacto'),
			'fijo_contacto' => $request->input('fijo_contacto'),
            'direccion_casa' => $request->input('direccion_casa'),
            'barrio_casa' => $request->input('barrio_casa'),
            'ciudad' => $request->input('ciudad'),
            'oficio' => $request->input('oficio'),
			'experiencia_oficio' => $request->input('experiencia_oficio'),
			'estado' => 'aspirante',
        ]);

        
        
        $funcionaria->save();

        Mail::to($funcionaria->email)->send(new EntrevistaAspirante($funcionaria));
        Mail::to('notificaciones@limprocolombia.com')->send(new EntrevistaAdministrador($funcionaria));

        return view('aspirantenew', [
            'funcionaria' => $funcionaria,
        ]);
    }
}
