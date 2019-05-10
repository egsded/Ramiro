<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Cliente;
use App\Marmoleria\Producto;
use App\Marmoleria\Venta;
use App\Marmoleria\Localidad;
use App\Marmoleria\Saldo;
use App\Marmoleria\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaVentas extends Controller
{
    public function viewverventas(){
        $ventas = DB::table('clientes')
        ->join('ventas', 'ventas.clientes_id', '=', 'clientes.id')
        ->join('localidades', 'clientes.localidades_id', '=', 'localidades.id')
        ->join('estados', 'localidades.estados_id', '=', 'estados.id')
        ->select('ventas.id', 'clientes.nombre', 'ventas.monto', 'ventas.cantidad', 'ventas.monto_extra', 'ventas.total', 'ventas.oracion', 'localidades.localidad', 'estados.estado')
        ->get();
        return view('Marmoleria.Ventas.verventas', compact('ventas'));
    }

    public function viewregistrarventas(Request $r){
        $id = $r->produ;
    	$productos = Producto::where('id', $id)->get();
        $estados = $r->estado;
        $localidad = Localidad::where('estados_id', $estados)->get();
        $cliente = $r->cliente;
        $pagos = DB::table('forma_pago')->get();
    	return view('Marmoleria.Ventas.registrarventas', compact('productos', 'localidad', 'cliente', 'pagos'));
    }

    public function estadocliente($id){
        $productos = Producto::where('id', $id)->get();
        $estados = Estado::all();
        // return $estados;
        return view('Marmoleria.Ventas.estado', compact('productos', 'estados'));
    }

    public function registrarventas(Request $request){
        $ventas = new Venta();
        $bool=false;
        $cliente= $request->telefono;
        $localidad= Localidad::where('id', $request->localidad)->get();
        $clientesinis = Cliente::all();
        foreach ($clientesinis as $sinis) {
            $var=$sinis->id;
            $tel = $sinis->telefono;
            $cant=$request->cantidad;
            $mon = $request->monto;
            $monex=$localidad[0]->monto;
            $tot = $cant * $mon + $monex;
            if($cliente==$tel){
                return $tel;
                $varid = Cliente::where('telefono', $var)->get();
                $saldo = Saldo::where('clientes_id', $varid[0]->id)->get();
                $x=$saldo->saldo_restante;
                $saldo[0]->saldo_restante= $x + $tot;
                $bool=true;
                $saldo[0]->save();
            }
        }
        if($bool==false){
            $clientenu = new Cliente();
            $clientenu->nombre = $request->cliente;
            $clientenu->correo = $request->correo;
            $clientenu->telefono = $request->telefono;
            $clientenu->estatus = "activo";
            $clientenu->localidades_id1 = $request->localidad;
            $clientenu->save();
            $idtmp = Cliente::where('correo', $request->correo)->get();
            $saldo = new Saldo();
            $saldo->saldo_restante= $tot;
            $saldo->clientes_id=$idtmp[0]->id;
            $saldo->save();
        }
        $idven = Saldo::where('clientes_id', $idtmp[0]->id)->get();
        $ventas->monto = $request->monto;
        $ventas->cantidad = $request->cantidad;
        $ventas->monto_extra = $monex;
        $ventas->total = $tot;
        $ventas->forma_pago = $request->pago;
        $ventas->saldos_id = $idven[0]->id;
        $ventas->localidades_id = $request->localidad;
    	$ventas->save();
    	return redirect::to('/seleccionarCategoria');
    }

    public function viewseleccionarventas(){
        $ventas = DB::table('clientes')
        ->join('ventas', 'ventas.clientes_id', '=', 'clientes.id')
        ->join('localidades', 'clientes.localidades_id', '=', 'localidades.id')
        ->join('estados', 'localidades.estados_id', '=', 'estados.id')
        ->select('ventas.id', 'clientes.nombre', 'ventas.monto', 'ventas.cantidad', 'ventas.monto_extra', 'ventas.total', 'ventas.oracion', 'localidades.localidad', 'estados.estado')
        ->get();
    	return view('Marmoleria.Ventas.seleccionarventas', compact('ventas'));
    }

    public function viewactualizarventas($id){
         $ventas = Venta::findOrFail($id);
        $clientes = DB::table('clientes')->get();
    	$venta = DB::table('clientes')
        ->join('ventas', 'ventas.clientes_id', '=', 'clientes.id')
        ->select('ventas.id', 'clientes.nombre', 'ventas.monto', 'ventas.cantidad', 'ventas.monto_extra', 'ventas.total', 'ventas.oracion')
        ->where('ventas.id', "=", $id)
        ->get();
    	return view('Marmoleria.Ventas.actualizarventas', compact('venta', 'ventas', 'clientes')); 
    }

    public function actualizarventas(Request $request, $id){
    	$ventas = Venta::findOrFail($id);
    	$ventas->monto = $request->monto;
    	$ventas->cantidad = $request->cantidad;
    	$ventas->monto_extra = $request->monto_extra;
    	$ventas->total = $request->total;
    	$ventas->oracion = $request->oracion;
    	$ventas->clientes_id = $request->cliente;
    	$ventas->save();

    	return redirect::to('/verVentas');
    }

    public function eliminarventa(){
    	$ventas = Venta::destroy($id);
        return Redirect::to('/verVentas');
    }
}
