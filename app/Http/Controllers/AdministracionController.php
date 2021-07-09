<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionaria;
use App\Canje;
use App\Servicio;
use App\Calificacione;
use App\Cotizacione;
use App\Producto;
use App\Pedido;
use App\Http\Requests\EntrevistaRequest;
use App\Http\Requests\DesvincularRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\AsignacionCliente;
use App\Mail\AsignacionFuncionaria;
use App\Mail\CalificacionCliente;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ServiciosCargue;

class AdministracionController extends Controller
{
    public function inicio() {
		return view('administracion.paneldecontrol');
	}

	public function aspirantes() {
		$funcionarias = Funcionaria::all();
		return view('administracion.aspirantes', [
			'funcionarias' => $funcionarias,			
		]);
	}

	public function entrevistanew($id) {
		$funcionaria = Funcionaria::find($id);
		return view('administracion.entrevistanew', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function entrevistasave(EntrevistaRequest $request) {

		$funcionaria = Funcionaria::find($request->id_funcionaria);

		$funcionaria->tipo_documento = $request->tipo_documento;
        $funcionaria->numero_documento = $request->numero_documento;
        $funcionaria->nombre_funcionaria = $request->nombre_funcionaria;
        $funcionaria->edad = $request->edad;
        $funcionaria->email = $request->email;
        $funcionaria->celular_contacto = $request->celular_contacto;
        $funcionaria->fijo_contacto = $request->fijo_contacto;
        $funcionaria->direccion_casa = $request->direccion_casa;
		$funcionaria->barrio_casa = $request->barrio_casa;
		$funcionaria->ciudad = $request->ciudad;
		$funcionaria->oficio = $request->oficio;
		$funcionaria->experiencia_oficio = $request->experiencia_oficio;
		$funcionaria->nombre_funcionaria_abreviado = $request->nombre_funcionaria_abreviado;
		$funcionaria->fecha_nacimiento = $request->fecha_nacimiento;
		$funcionaria->tipo_sangre = $request->tipo_sangre;
		$funcionaria->fecha_expedicion_cedula = $request->fecha_expedicion_cedula;
		$funcionaria->eps = $request->eps;
		$funcionaria->pension = $request->pension;
		$funcionaria->operador_celular = $request->operador_celular;
		$funcionaria->cuenta_ahorro = $request->cuenta_ahorro;
		$funcionaria->numero_cuenta_ahorro = $request->numero_cuenta_ahorro;
		$funcionaria->talla_uniforme = $request->talla_uniforme;
		$funcionaria->talla_zapato = $request->talla_zapato;
		$funcionaria->experiencia_tiempo = $request->experiencia_tiempo;
		$funcionaria->cocina = $request->cocina;
		$funcionaria->cafeteria = $request->cafeteria;
		$funcionaria->plancha = $request->plancha;
		$funcionaria->tratamiento_pisos = $request->tratamiento_pisos;
		$funcionaria->productos_aseo = $request->productos_aseo;
		$funcionaria->manipulacion_alimentos = $request->manipulacion_alimentos;
		$funcionaria->fecha_manipulacion_alimentos = $request->fecha_manipulacion_alimentos;
		$funcionaria->nombre_acudiente = $request->nombre_acudiente;
		$funcionaria->celular_acudiente = $request->celular_acudiente;
		$funcionaria->trabajo_anterior = $request->trabajo_anterior;
		$funcionaria->experiencia_laboral = $request->experiencia_laboral;
		$funcionaria->fortalezas = $request->fortalezas;
		$funcionaria->debilidades = $request->debilidades;
		$funcionaria->hijos = $request->hijos;
		$funcionaria->conformacion_familia = $request->conformacion_familia;
		$funcionaria->tipo_vivienda = $request->tipo_vivienda;
		$funcionaria->estudios = $request->estudios;
		$funcionaria->tiempo_libre = $request->tiempo_libre;
		$funcionaria->disponibilidad_tiempo = $request->disponibilidad_tiempo;
		$funcionaria->antecedentes_medicos = $request->antecedentes_medicos;
		$funcionaria->concepto_entrevista = $request->concepto_entrevista;
		$funcionaria->fecha_entrevista = $request->fecha_entrevista;
		$funcionaria->estado = 'entrevistada';

		$funcionaria->save();

		
		return view('administracion.entrevistasave', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function entrevistas() {
		$funcionarias = Funcionaria::where('estado', 'entrevistada')->get();
		return view('administracion.entrevistas', [
			'funcionarias' => $funcionarias,			
		]);
	}

	public function entrevistasedit($id) {
		$funcionaria = Funcionaria::find($id);
		return view('administracion.entrevistasedit', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function entrevistaseditsave(EntrevistaRequest $request) {

		
		$funcionaria = Funcionaria::find($request->id_funcionaria);

		$funcionaria->tipo_documento = $request->tipo_documento;
        $funcionaria->numero_documento = $request->numero_documento;
        $funcionaria->nombre_funcionaria = $request->nombre_funcionaria;
        $funcionaria->edad = $request->edad;
        $funcionaria->email = $request->email;
        $funcionaria->celular_contacto = $request->celular_contacto;
        $funcionaria->fijo_contacto = $request->fijo_contacto;
        $funcionaria->direccion_casa = $request->direccion_casa;
		$funcionaria->barrio_casa = $request->barrio_casa;
		$funcionaria->ciudad = $request->ciudad;
		$funcionaria->oficio = $request->oficio;
		$funcionaria->experiencia_oficio = $request->experiencia_oficio;
		$funcionaria->nombre_funcionaria_abreviado = $request->nombre_funcionaria_abreviado;
		$funcionaria->fecha_nacimiento = $request->fecha_nacimiento;
		$funcionaria->tipo_sangre = $request->tipo_sangre;
		$funcionaria->fecha_expedicion_cedula = $request->fecha_expedicion_cedula;
		$funcionaria->eps = $request->eps;
		$funcionaria->pension = $request->pension;
		$funcionaria->operador_celular = $request->operador_celular;
		$funcionaria->cuenta_ahorro = $request->cuenta_ahorro;
		$funcionaria->numero_cuenta_ahorro = $request->numero_cuenta_ahorro;
		$funcionaria->talla_uniforme = $request->talla_uniforme;
		$funcionaria->talla_zapato = $request->talla_zapato;
		$funcionaria->experiencia_tiempo = $request->experiencia_tiempo;
		$funcionaria->cocina = $request->cocina;
		$funcionaria->cafeteria = $request->cafeteria;
		$funcionaria->plancha = $request->plancha;
		$funcionaria->tratamiento_pisos = $request->tratamiento_pisos;
		$funcionaria->productos_aseo = $request->productos_aseo;
		$funcionaria->manipulacion_alimentos = $request->manipulacion_alimentos;
		$funcionaria->fecha_manipulacion_alimentos = $request->fecha_manipulacion_alimentos;
		$funcionaria->nombre_acudiente = $request->nombre_acudiente;
		$funcionaria->celular_acudiente = $request->celular_acudiente;
		$funcionaria->trabajo_anterior = $request->trabajo_anterior;
		$funcionaria->experiencia_laboral = $request->experiencia_laboral;
		$funcionaria->fortalezas = $request->fortalezas;
		$funcionaria->debilidades = $request->debilidades;
		$funcionaria->hijos = $request->hijos;
		$funcionaria->conformacion_familia = $request->conformacion_familia;
		$funcionaria->tipo_vivienda = $request->tipo_vivienda;
		$funcionaria->estudios = $request->estudios;
		$funcionaria->tiempo_libre = $request->tiempo_libre;
		$funcionaria->disponibilidad_tiempo = $request->disponibilidad_tiempo;
		$funcionaria->antecedentes_medicos = $request->antecedentes_medicos;
		$funcionaria->concepto_entrevista = $request->concepto_entrevista;
		$funcionaria->fecha_entrevista = $request->fecha_entrevista;
		$funcionaria->antecedentes = $request->antecedentes;
		$funcionaria->referencias_laborales = $request->referencias_laborales;
		$funcionaria->examenes_medicos = $request->examenes_medicos;
		$funcionaria->visita_domiciliaria = $request->visita_domiciliaria;
		$funcionaria->url_foto = $request->url_foto;
		$funcionaria->fecha_dotacion = $request->fecha_dotacion;
		$funcionaria->fecha_vinculacion = $request->fecha_vinculacion;
		
				
		if ($request->fecha_vinculacion <> null) {
			$funcionaria->estado = 'funcionaria';
		}else{
			$funcionaria->estado = 'entrevistada';
		}

		$funcionaria->save();

		
		return view('administracion.entrevistasave', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function entrevistasdescartar($id) {
		$funcionaria = Funcionaria::find($id);

		$funcionaria->estado = 'descartada';

		$funcionaria->save();
		
		return view('administracion.entrevistasave', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function entrevistasdescartadas() {
		$funcionarias = Funcionaria::where('estado', 'descartada')->get();
				
		return view('administracion.entrevistasdescartadas', [
			'funcionarias' => $funcionarias,			
		]);
	}

	public function funcionarias() {
		$funcionarias = Funcionaria::where('estado', 'funcionaria')->get();
		$calificaciones = Calificacione::all();
		$servicios = Servicio::all();
		$numero_servicios = 0;
		$calificaciones_malas = 0;
		$calificaciones_buenas = 0;
		$suma_calificacion = 0;
		$resultado_calificacion =0;
		return view('administracion.funcionarias', [
			'funcionarias' => $funcionarias,
			'calificaciones' => $calificaciones,
			'servicios'=>$servicios,
			'numero_servicios'=> $numero_servicios,
			'calificaciones_malas' => $calificaciones_malas,
			'calificaciones_buenas' => $calificaciones_buenas,
			'suma_calificacion' => $suma_calificacion,
			'resultado_calificacion' => $resultado_calificacion,
		]);
	}

	public function personalactivo() {
		$funcionarias = Funcionaria::where('estado', 'funcionaria')->get();
		return view('administracion.personalactivo', [
			'funcionarias' => $funcionarias,
		
		]);
	}

	public function desvincular($id) {
		$funcionaria = Funcionaria::find($id);

		return view('administracion.desvincular', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function desvincularsave(DesvincularRequest $request) {
		$funcionaria = Funcionaria::find($request->id_funcionaria);

		$funcionaria->motivo_desvinculacion = $request->motivo_desvinculacion;
		$funcionaria->fecha_desvinculacion = $request->fecha_desvinculacion;
		$funcionaria->estado = 'exfuncionaria';

		$funcionaria->save();
		
		return view('administracion.entrevistasave', [
			'funcionaria' => $funcionaria,			
		]);
	}

	public function exfuncionarias() {
		$funcionarias = Funcionaria::where('estado', 'exfuncionaria')->get();
		return view('administracion.exfuncionarias', [
			'funcionarias' => $funcionarias,			
		]);
	}

	public function cuponnew() {
		
		return view('administracion.cuponnew');

	}
	
	public function cuponnewsave(Request $request){

        $canje = Canje::create([
			'codigo_canje' => $request->input('codigo_canje'),
			'valor_canje' => $request->input('valor_canje'),
			'email' => $request->input('email'),
			'estado' => 'activo',
			
        ]);
        
        $canje->save();

        return view('administracion.cuponnewsave', [
            'canje' => $canje,
        ]);
    }
	
	public function cupongestion() {
		$cuponeactivos = Canje::where('estado', 'activo')->get();
		$cuponedesactivos = Canje::where('estado', 'desactivo')->get();
		$cuponecanjeados = Canje::where('estado', 'canjeado')->get();
		return view('administracion.cupongestion', [
			'cuponeactivos' => $cuponeactivos,
			'cuponedesactivos' => $cuponedesactivos,
			'cuponecanjeados' => $cuponecanjeados,
		]);

	}

	public function cupongestiondesctivar($id) {
		$cupon = Canje::find($id);

		$cupon->estado = 'desactivo';

		$cupon->save();

		return view('administracion.cuponchangeestado', [
			'cupon' => $cupon,
			
		]);

	}

	public function cupongestionactivar($id) {
		$cupon = Canje::find($id);

		$cupon->estado = 'activo';

		$cupon->save();

		return view('administracion.cuponchangeestado', [
			'cupon' => $cupon,
			
		]);

	}

	public function serviciosSolicitados() {
		$servicios = Servicio::where('estado', 'solicitado')->get();
		return view('administracion.serviciosSolicitados', [
			'servicios' => $servicios,
	    ]);

	}

		

	public function asignacionFuncionariaServicio(Request $request) {
		$servicio = Servicio::find($request->id_funcionaria);

		$servicio->id_funcionaria_asignada = $request->id_funcionaria_asignada;
		$servicio->estado = 'asignado';

		$servicio->save();
		
		Mail::to($servicio->funcionaria_asignada->email)->send(new AsignacionFuncionaria($servicio));
		

		if ($servicio->metodo_pago <> 'plan') {
			Mail::to($servicio->email)->send(new AsignacionCliente($servicio));
		}

		
		return view('administracion.asignacionServicio', [
			'servicio' => $servicio,			
		]);
	}

	public function descartarServicio($id) {
		$servicio = Servicio::find($id);

		$servicio->estado = 'descartado';

		$servicio->save();
		
		return view('administracion.cambioEstadoServicio', [
			'servicio' => $servicio,			
		]);
	}

	public function serviciosAsignados() {
		$servicios = Servicio::where('estado', 'asignado')->get();
		return view('administracion.serviciosAsignados', [
            'servicios' => $servicios,
        ]);

	}

	public function cambioEstadoServicio(Request $request) {
		$servicio = Servicio::find($request->id_funcionaria);

		$servicio->estado = 'realizado';

		$servicio->save();
		
		if ($servicio->metodo_pago <> 'plan') {
			Mail::to($servicio->email)->send(new CalificacionCliente($servicio));
		}
		return view('administracion.cambioEstadoServicio', [
			'servicio' => $servicio,			
		]);
	}

	public function serviciosRealizados() {
		$servicios = Servicio::where('estado', 'realizado')->orWhere('estado', 'calificado')->get();
		return view('administracion.serviciosRealizados', [
            'servicios' => $servicios,
        ]);

	}

	public function serviciosDescartados() {
		$servicios = Servicio::where('estado', 'descartado')->get();
		return view('administracion.serviciosDescartados', [
            'servicios' => $servicios,
        ]);

	}

	public function serviciosCargue() {
		return view('administracion.serviciosCargue');

	}

	public function serviciosCargueSave(Request $request) {

		$file = $request->file('file');

		Excel::import(new ServiciosCargue, $file);

		return back()->with('message', 'Cargue Exitoso');

	}

	public function serviciosConsulta(Request $request) {
		$id_servicio_consulta = $request->id_servicio_consulta;
		$servicios = Servicio::where('id', '>=', $id_servicio_consulta)->get();
		
		return view('administracion.serviciosconsulta', [
			'servicios' => $servicios,
			'id_servicio_consulta' => $id_servicio_consulta,

		]);
	}

	public function actualizacionidfuncionaria(Request $request) {
		$id_servicio = $request->id_servicio;
		$id_funcionaria_actualizada = $request->id_funcionaria_actualizada;
		$servicio = Servicio::find($id_servicio);

		$servicio->id_funcionaria_asignada = $id_funcionaria_actualizada;
		
		$servicio->save();		
		
		return back();
	}

	public function calificacionesMalas() {
		$calificaciones = Calificacione::where('cal_total', '<', 3)->get();
		
		return view('administracion.calificacionesMalas', [
			'calificaciones' => $calificaciones,			
		]);
	}
	public function calificacionesBuenas() {
		$calificaciones = Calificacione::where('cal_total', '>=', 3)->orderBy('created_at', 'desc')->get();
		
		return view('administracion.calificacionesBuenas', [
			'calificaciones' => $calificaciones,			
		]);
	}
	public function cotizacionesRecibidas() {
		$cotizaciones = Cotizacione::where('estado', 'solicitado')->get();
		
		return view('administracion.cotizacionesRecibidas', [
			'cotizaciones' => $cotizaciones,			
		]);
	}

	public function cotizacionesRecibidaschange($id) {
		$cotizacion = Cotizacione::find($id);

		$cotizacion->estado = 'realizado';

		$cotizacion->save();
		
		return view('administracion.cotizacionchange', [
			'cotizacion' => $cotizacion,			
		]);
	}

	public function cotizacionesRealizadas() {
		$cotizaciones = Cotizacione::where('estado', 'realizado')->get();
		
		return view('administracion.cotizacionesRealizado', [
			'cotizaciones' => $cotizaciones,			
		]);
	}

	public function cotizacionesRealizadaschange($id) {
		$cotizacion = Cotizacione::find($id);

		return view('administracion.cotizacionesRealizadochange', [
			'cotizacion' => $cotizacion,			
		]);
	}
	public function cotizacionesrealizadaschangegestion(Request $request) {
		$cotizacion = Cotizacione::find($request->id);
		

		$cotizacion->observacion = $request->observacion;

		$cotizacion->save();
		
		return view('administracion.cotizaciongestion', [
			'cotizacion' => $cotizacion,			
		]);
	}	
	public function cotizacionesrealizadaschangesave($id) {
		$cotizacion = Cotizacione::find($id);
		
		$cotizacion->estado = 'gestionada';

		$cotizacion->save();
		
		return view('administracion.cotizacionchange', [
			'cotizacion' => $cotizacion,			
		]);
	}
	public function cotizacionesgestionadas() {
		$cotizaciones = Cotizacione::where('estado', 'gestionada')->get();
		
		return view('administracion.cotizacionesgestionadas', [
			'cotizaciones' => $cotizaciones,			
		]);
	}
	public function productos() {
		
		$productosactivos = Producto::where('estado_producto', 'activo')->get();
		$productosdesactivos = Producto::where('estado_producto', 'desactivo')->get();
		return view('administracion.productos', [
			'productosactivos' => $productosactivos,
			'productosdesactivos' => $productosdesactivos,			
		]);
	}
	public function productosnew() {
		
		return view('administracion.productosnew');
	}
	public function productosnewsave(Request $request) {

		$producto = Producto::create([
			'nombre_producto' => $request->input('nombre_producto'),
			'foto_producto' => $request->input('foto_producto'),
			'caracteristicas_producto' => $request->input('descripcion_producto'),
			'presentacion_producto' => $request->input('presentacion_producto'),
			'precio_producto' => $request->input('valor_producto'),
			'categoria_producto' => $request->input('categoria_producto'),
			'subcategoria_producto' => $request->input('subcategoria_producto'),
			'estado_producto' => 'activo',
		]);
		
		return view('administracion.productonewsave', [
			'producto' => $producto,			
		]);
	}
	public function productosdesactivar($id) {

		$producto = Producto::find($id);
		
		$producto->estado_producto = 'desactivo';

		$producto->save();
		
		return view('administracion.productochangeestado', [
			'producto' => $producto,			
		]);
	}
	public function productosactivar($id) {

		$producto = Producto::find($id);
		
		$producto->estado_producto = 'activo';

		$producto->save();
		
		return view('administracion.productochangeestado', [
			'producto' => $producto,			
		]);
	}
	public function pedidos() {
		$pedidosptepagos = Pedido::where('estado', 'pendiente de pago')->get();
		$pedidospagos = Pedido::where('estado', 'pagado')->get();
		$pedidosdespachados = Pedido::where('estado', 'despachado')->get();
		return view('administracion.pedidos', [
			'pedidosptepagos' => $pedidosptepagos,
			'pedidospagos' => $pedidospagos,
			'pedidosdespachados' => $pedidosdespachados,
		]);
	}
	public function pedidochangepagado($id) {

		$pedido = Pedido::find($id);
		
		$pedido->estado = 'pagado';

		$pedido->save();
		
		return view('administracion.pedidochangeestado', [
			'pedido' => $pedido,			
		]);
	}
	public function changedespachado($id) {

		$pedido = Pedido::find($id);
		
		$pedido->estado = 'despachado';

		$pedido->save();
		
		return view('administracion.pedidochangeestado', [
			'pedido' => $pedido,			
		]);
	}
	public function changeprocesado($id) {

		$pedido = Pedido::find($id);
		
		$pedido->estado = 'procesado';

		$pedido->save();
		
		return view('administracion.pedidochangeestado', [
			'pedido' => $pedido,			
		]);
	}
	public function pedidosprocesados() {
		$pedidosprocesados = Pedido::where('estado', 'procesado')->get();
		return view('administracion.pedidosprocesados', [
			'pedidosprocesados' => $pedidosprocesados,			
		]);
	}
}
