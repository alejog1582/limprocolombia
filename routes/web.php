<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::mixin(new \Laravel\Ui\AuthRouteMethods());
Route::auth(['verify' => true]);

Route::get('/', 'PagesController@home');

Route::get('/aspirante',  'FuncionariasController@aspirante');
Route::post('/aspirante/new',  'FuncionariasController@newfuncionaria');

Route::get('/cotizacion',  'PagesController@cotizacion');

//Mi Cuenta
Route::get('/micuenta', 'ClienteController@miCuenta');
Route::get('/micuenta/selfuncionario/save', 'ClienteController@selFuncionarioSave');
Route::get('/micuenta/calificar/new', 'ClienteController@calificarNew');
Route::get('/micuenta/calificar/new/save', 'ClienteController@calificarNewSave');

Auth::routes();

Route::get('/micuenta', 'HomeController@index')->name('micuenta');

//Administracion

Route::group(['middleware' => 'admin'], function () {

Route::get('/administracion', 'AdministracionController@inicio');
Route::get('/administracion/aspirantes', 'AdministracionController@aspirantes');
Route::get('/administracion/entrevista/{id}', 'AdministracionController@entrevistanew');
Route::post('/administracion/entrevista/save',  'AdministracionController@entrevistasave');
Route::get('/administracion/entrevistas', 'AdministracionController@entrevistas');
Route::get('/administracion/entrevistas/{id}', 'AdministracionController@entrevistasedit');
Route::post('/administracion/entrevistasedit/save',  'AdministracionController@entrevistaseditsave');
Route::get('/administracion/entrevistas/descartar/{id}', 'AdministracionController@entrevistasdescartar');
Route::get('/administracion/funcionarias', 'AdministracionController@funcionarias');
Route::get('/administracion/funcionarias/desvincular/{id}', 'AdministracionController@desvincular');
Route::post('/administracion/funcionarias/desvincular/save',  'AdministracionController@desvincularsave');
Route::get('/administracion/exfuncionarias', 'AdministracionController@exfuncionarias');
Route::get('/administracio/cuponnew', 'AdministracionController@cuponnew');
Route::get('/administracio/cupongestion', 'AdministracionController@cupongestion');
Route::post('/administracio/cupongestion/desactivar/{id}', 'AdministracionController@cupongestiondesctivar');
Route::post('/administracio/cupongestion/activar/{id}', 'AdministracionController@cupongestionactivar');
Route::post('/administracio/cuponnew/save', 'AdministracionController@cuponnewsave');
Route::get('/administracion/servicios/solicitados', 'AdministracionController@serviciosSolicitados');
Route::post('/administracion/servicios/solicitados/asignacion/{id}', 'AdministracionController@asignacionFuncionariaServicio');
Route::get('/administracion/servicios/asignados', 'AdministracionController@serviciosAsignados');
Route::get('/administracion/servicios/realizados', 'AdministracionController@serviciosRealizados');
Route::post('/administracion/servicios/solicitados/cambioestado/{id}', 'AdministracionController@cambioEstadoServicio');
Route::get('/administracion/callificacionesmales', 'AdministracionController@calificacionesMalas');
Route::get('/administracion/callificacionesbuenas', 'AdministracionController@calificacionesBuenas');
Route::get('/administracion/cotizacionesrecibidas', 'AdministracionController@cotizacionesRecibidas');
Route::post('/administracion/cotizacionesrecibidaschange/{id}', 'AdministracionController@cotizacionesRecibidaschange');
Route::get('/administracion/cotizacionesrealizadas', 'AdministracionController@cotizacionesRealizadas');
Route::post('/administracion/cotizacionesrealizadaschange/{id}', 'AdministracionController@cotizacionesRealizadaschange');
Route::post('/administracion/cotizacionesrealizadaschangegestion/{id}', 'AdministracionController@cotizacionesrealizadaschangegestion');
Route::post('/administracion/cotizacionesrealizadaschangesave/{id}', 'AdministracionController@cotizacionesrealizadaschangesave');
Route::get('/administracion/cotizacionesgestionadas', 'AdministracionController@cotizacionesgestionadas');
Route::get('/administracion/productos', 'AdministracionController@productos');
Route::get('/administracion/productos/new', 'AdministracionController@productosnew');
Route::post('/administracion/productos/new/save', 'AdministracionController@productosnewsave');
Route::get('/administracion/productos/desactivar/{id}', 'AdministracionController@productosdesactivar');
Route::get('/administracion/productos/activar/{id}', 'AdministracionController@productosactivar');
Route::get('/administracion/pedidos', 'AdministracionController@pedidos');
Route::get('/administracion/pedidos/changepagado/{id}', 'AdministracionController@pedidochangepagado');
Route::get('/administracion/pedidos/changedespachado/{id}', 'AdministracionController@changedespachado');
Route::get('/administracion/pedidos/changeprocesado/{id}', 'AdministracionController@changeprocesado');
Route::get('/administracion/pedidosprocesados', 'AdministracionController@pedidosprocesados');
});
//Servicios

Route::get('/servicionew', 'ServiciosController@servicionew');
Route::post('/servicionew/save', 'ServiciosController@servicionewsave');

//Calificacion

Route::get('/calificacionservicio/{id}', 'CalificacionesController@calificacionnew');
Route::post('/seleccion/savecalificacion', 'CalificacionesController@SaveCalificacion');

//hoja de vida

Route::get('/hojadevida/{id}', 'hojadevidaController@hojadevida');
Route::get('/calificaciones/{id}', 'hojadevidaController@calificaciones');

//Cotizacionn

Route::get('/cotizacionew', 'CotizacionesController@cotizacionew');
Route::post('/cotizacionew/save', 'CotizacionesController@cotizacionewsave');

//Tienda

Route::get('/tienda', 'TiendaController@tienda');
Route::post('/tienda/agregar/{id}', 'TiendaController@agregar');
Route::post('/tienda/eliminarproducto', 'TiendaController@eliminar');
Route::get('/tienda/limpiarcarrito', 'TiendaController@limpiar');
Route::get('/tienda/finalizarcompra', 'TiendaController@finalizarcompra');
Route::post('/tienda/pedido', 'TiendaController@pedido');