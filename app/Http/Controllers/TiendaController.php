<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Producto;
use App\Pedido;
use App\Http\Requests\PedidoRequest;

class TiendaController extends Controller
{
    public function tienda(){

        $productosactivos = Producto::where('estado_producto', 'activo')->get();

        return view('tienda.tienda', [
			'productosactivos' => $productosactivos,						
		]);
    }
    public function agregar(Request $request) {
		$carro = Cart::add($request->id_producto, $request->nombre_producto, $request->cantidad, $request->valor_producto);
		return redirect('/tienda');
    }
    public function eliminar(Request $request) {
		$rowId = $request->Cart_Item_rowId;
		Cart::remove($rowId);
		return redirect('/tienda');
	}
	public function limpiar() {
		Cart::destroy();
		return redirect('/tienda');
	}
	public function finalizarcompra() {
		$cart_items = Cart::content();
		$productos = Producto::all();
		return view('tienda.prepedido', [
			'cart_items' => $cart_items,
			'productos' => $productos,
		]);
	}
	public function pedido(PedidoRequest $request) {
		$cart_items = Cart::content();
		$subtotal = Cart::subtotal();
		$total = str_replace(',', "", $subtotal);
		foreach ($cart_items as $cart_item) {
			$pedido = Pedido::create([
				'id_producto' => $cart_item->id,
				'nombre_producto' => $cart_item->name,
				'cantidades' => $cart_item->qty,
				'estado' => 'pendiente de pago',
				'direccion_envio' => $request->input('direccion_envio'),
				'apto_casa_oficina' => $request->input('info_adicional_direccion'),
				'barrio' => $request->input('barrio'),
				'fecha_entrega' => $request->input('fecha_entrega'),
				'hora_entrega' => $request->input('hora_entrega'),
				'tipo_documento' => $request->input('tipo_documento'),
				'identificacion_cliente' => $request->input('identificacion_cliente'),
				'nombre_contacto' => $request->input('nombre_contacto'),
				'celular_contacto' => $request->input('celular_contacto'),
				'email_contacto' => $request->input('email_contacto'),
				'medio_pago' => $request->input('forma_pago'),
				'valor_producto' => $cart_item->price,
				'valor_pedido' => $total,
				'codigo_promocional' => $request->input('codigo_promocional'),
			]);
		}
		
		if ($request->forma_pago == 'consignacion') {
			Cart::destroy();
			return view('tienda.pedidocreadoconsignacion', [
				'pedido' => $pedido,								
			]);
		}
		if ($request->forma_pago == 'payu') {
			Cart::destroy();
			$descripcion = 'Productos Personalizados';
			$apiKeyPayU = '4Vj8eK4rloUd272L48hsrarnUA';
			$merchantId = '508029';
			$referenceCode = "labobadita" . $pedido->id;
			$amount = $pedido->valor_pedido;
			$currency = 'COP';
			$presignature = $apiKeyPayU . '~' . $merchantId . '~' . $referenceCode . '~' . $amount . '~' . $currency;
			$signature = md5($presignature);
			return view('pedidos.creadopayu', [
				'personalizable' => $personalizable,
				'pedido' => $pedido,
				'referenceCode' => $referenceCode,
				'signature' => $signature,
				'descripcion' => $descripcion,
				'rebaja' => $rebaja,
				'estado_descuento' => $estado_descuento,
				'valor_final' => $valor_final,
				'descuento_rebaja' => $descuento_rebaja,
			]);
		}

	}
}
