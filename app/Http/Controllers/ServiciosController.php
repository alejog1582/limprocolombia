<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Canje;
use App\Http\Requests\ServicioRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServicioCliente;
use App\Mail\ServicioAdministrador;
use App\User;

class ServiciosController extends Controller
{
    public function servicionew(){
        $user = \Auth::user();
        return view('servicionew', [
			'user' => $user,
		]);
    }

    public function servicionewsave(ServicioRequest $request) {
        
        $plan = $request->plan;
        $kit = $request->kit_productos;
        $valor_plan = null;
        $hora_inicio = null;
        $canje_usuario = $request->canje;
        $servicio = null;
        $canjes = Canje::all();  
        $canje_validacion = false;
        $valor_canje = null;
        $signature = null;
        $tax = null;
        $taxReturnBase = null;
        $valor_kit = null;
            
        if ($plan == '4') {
            $valor_plan = 54000;
            $hora_inicio = $request->hora_inicio;
        }
        if ($plan == '8') {
            $valor_plan = 79000;
            $hora_inicio = '8 am';
        }
        if ($kit == 'kit1') {
            $valor_kit = 30000;
        }
        if ($kit == 'kit2') {
            $valor_kit = 50000;
        }
        if ($canje_usuario == null) {
            if ($valor_kit <> null) {
                $valor_plan = $valor_plan + $valor_kit;
            }
            $servicio = Servicio::create([
                'ciudad'=> $request->input('ciudad'),
                'tipo_servicio'=> $request->input('tipo_servicio'),
                'fecha_servicio' => $request->input('fecha_servicio'),
                'plan' => $plan,
                'valor_plan' => $valor_plan,
                'hora_inicio' => $hora_inicio, 
                'lugar_servicio' => $request->input('lugar_servicio'),
                'tipo_documento' => $request->input('tipo_documento'),
                'numero_documento' => $request->input('numero_documento'),
                'nombre_cliente' => $request->input('nombre_cliente'),
                'direccion_servicio' => $request->input('direccion_servicio'),
                'detalle_direccion' => $request->input('detalle_direccion'),
                'email' => $request->input('email'),
                'celular_contacto' => $request->input('celular_contacto'),
                'fijo_contacto' => $request->input('fijo_contacto'),
                'metodo_pago' => $request->input('metodo_pago'),
                'kit_productos' => $request->input('kit_productos'),
                'canje' => $request->input('canje'),
                'observacion' => $request->input('observacion'),
                'estado' => 'solicitado',
            ]);

            $servicio->save();


        }

        if ($canje_usuario <> null) {

            foreach ($canjes as $canje) {
                if ($canje_usuario == $canje->codigo_canje) {
                    if ($canje->estado == 'activo') {
                        $canje_validacion = true;
                        $valor_canje = $canje->valor_canje;
                        $canje->save();
                    }
                }
            }
        
        
        if ($canje_validacion == true) {
            if ($valor_kit <> null) {
                $valor_plan = $valor_plan - $valor_canje + $valor_kit;
            } else {
                $valor_plan = $valor_plan - $valor_canje;
            }
            
            $servicio = Servicio::create([
                'ciudad'=> $request->input('ciudad'),
                'tipo_servicio'=> $request->input('tipo_servicio'),
                'fecha_servicio' => $request->input('fecha_servicio'),
                'plan' => $plan,
                'valor_plan' => $valor_plan,
                'hora_inicio' => $hora_inicio, 
                'lugar_servicio' => $request->input('lugar_servicio'),
                'tipo_documento' => $request->input('tipo_documento'),
                'numero_documento' => $request->input('numero_documento'),
                'nombre_cliente' => $request->input('nombre_cliente'),
                'direccion_servicio' => $request->input('direccion_servicio'),
                'detalle_direccion' => $request->input('detalle_direccion'),
                'email' => $request->input('email'),
                'celular_contacto' => $request->input('celular_contacto'),
                'fijo_contacto' => $request->input('fijo_contacto'),
                'metodo_pago' => $request->input('metodo_pago'),
                'kit_productos' => $request->input('kit_productos'),
                'canje' => $request->input('canje'),
                'observacion' => $request->input('observacion'),
                'estado' => 'solicitado',
            ]);
    
            $servicio->save();

            foreach ($canjes as $canje) {
                if ($canje_usuario == $canje->codigo_canje) {
                    if ($canje->estado == 'activo') {
                        $canje->servicio_canjeado = $servicio->id;
                        $canje->estado = 'canjeado';
                        $canje->save();
                    }
                }
            }

            }else{

                return view('servicionewerrorvalidacion');
            }

        }    

        
        
        if ($servicio->metodo_pago == 'payu') {

            $signature = md5('pelM5RXl2Q988ukhrdc15P0jKP~765646~ServicioId'.$servicio->id.'~'.$valor_plan.'~COP');
            $tax = round($valor_plan * 0.0169794459338695);
            $taxReturnBase = round($valor_plan * 0.0893655049151028);
            
            Mail::to($servicio->email)->send(new ServicioCliente($servicio));
            Mail::to('notificaciones@limprocolombia.com')->send(new ServicioAdministrador($servicio));

            return view('servicionewsavepayu', [
                'servicio' => $servicio,
                'signature'	=> $signature,	
                'tax' => $tax,
                'taxReturnBase' => $taxReturnBase,
            ]);
        }

        if ($servicio->metodo_pago == 'consignacion') {

            Mail::to($servicio->email)->send(new ServicioCliente($servicio));
            Mail::to('notificaciones@limprocolombia.com')->send(new ServicioAdministrador($servicio));

            return view('servicionewsaveconsignacion', [
                'servicio' => $servicio,			
            ]);
        }

        if ($servicio->metodo_pago == 'plan') {

            Mail::to('notificaciones@limprocolombia.com')->send(new ServicioAdministrador($servicio));

            return view('servicionewsaveplan', [
                'servicio' => $servicio,			
            ]);
        }
	}
}
