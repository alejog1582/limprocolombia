<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacione;
use App\Http\Requests\CotizacionRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\CotizacionCliente;
use App\Mail\CotizacionAdministrador;


class CotizacionesController extends Controller
{
    public function cotizacionew(){
        return view('cotizacionew');
    }

    public function cotizacionewsave(CotizacionRequest $request){
        
        $cotizacion = Cotizacione::create([
            'tipo_servicio' => $request->input('tipo_servicio'),
            'lugar_servicio' => $request->input('lugar_servicio'),
            'plan' => $request->input('plan'),
            'periodicidad' => $request->input('periodicidad'),
            'nombre_cliente' => $request->input('nombre_cliente'),
            'email' => $request->input('email'),
            'celular_contacto' => $request->input('celular_contacto'),
            'fijo_contacto' => $request->input('fijo_contacto'),
            'ciudad' => $request->input('ciudad'),
            'barrio' => $request->input('barrio'),
            'observacion' => $request->input('observacion'),
            'estado' => 'solicitado',
        ]);

        $cotizacion->save();

        Mail::to($cotizacion->email)->send(new CotizacionCliente($cotizacion));
        Mail::to('notificaciones@limprocolombia.com')->send(new CotizacionAdministrador($cotizacion));

        return view('cotizacionewsave');
    }
}
