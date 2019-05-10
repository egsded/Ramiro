<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Cliente;
use App\Marmoleria\Categoria;
use App\Marmoleria\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Marmoleria\Venta;
use App\Marmoleria\Saldo;
use Carbon\Carbon;
use Session;

class MarmoleriaClientes extends Controller
{
    public function __construct()
    {
        $this->middleware('authe');
    }
    
    public function viewverclientes()
    {
        $clientes = DB::table('clientes')
        ->join('localidades', 'clientes.localidades_id', '=', 'localidades.id')
        ->select('clientes.id', 'clientes.nombre', 'clientes.correo', 'clientes.telefono', 'localidades.localidad')
        ->get();
		return view('Marmoleria.Clientes.verclientes', compact('clientes'));
	}

    public function viewclientesborrados()
    {
        $clientesbr = DB::table('clientes_borrados')->select('clientes_borrados.nombre', 'clientes_borrados.usuario', 'clientes_borrados.fecha_ingreso')->get();
        return view('Marmoleria.Clientes.verclientesborrados', compact('clientesbr'));
    }

    public function viewclientesmodificados()
    {
        $clientesmd = DB::table('clientes_modificados')->select('clientes_modificados.nombre', 'clientes_modificados.usuario', 'clientes_modificados.fecha_ingreso')->get();
        return view('Marmoleria.Clientes.verclientesmodificados', compact('clientesmd'));
    }

    public function viewclientesingresados()
    {
        $clientesin = DB::table('clientes_trigger')->select('clientes_trigger.nombre', 'clientes_trigger.estatus', 'clientes_trigger.telefono', 'clientes_trigger.fecha_ingreso')->get();
        return view('Marmoleria.Clientes.verclientesingresados', compact('clientesin'));
    }

    public function viewregistrarclientes()
    {
        $localidades = DB::table('localidades')->get();
        $categorias = DB::table('categoria')->get();
        $productos = DB::table('productos')->get();
        $formapago = DB::table('forma_pago')->get();
    	return view('Marmoleria.Clientes.registrarclientes', compact('localidades', 'categorias', 'productos', 'formapago'));
    }

    public function registrarclientes(Request $request)
    {
       $this->validate(request(), [
            'nombreCliente' => 'required|string',
            'correo' => 'required|string',
            'telefono' => 'required|string',
            'idcategoria' => 'required|string',
            'idlocalidad' => 'required|string',
            'idfpago' => 'required|string',
        ],[
            'nombreCliente.required' => 'Ingrese un Nombre',
            'correo.required' => 'Ingrese un Correo',
            'telefono.required' => 'Ingrese un Teléfono',
            'idcategoria.required' => 'Seleccione una Categoria',
            'idlocalidad.required' => 'Seleccione una Localidad',
            'idfpago.required' => 'Seleccione una forma de pago',
        ]);
        $client = $request->get('nombreCliente');
        
        //dd($cliente[$clientex-1]->id);
        
        if ($client)
        {
            $localidad = $request->idlocalidad;
            $producto = $request->idproductos;
            $oraciones = $request->oracion;
            $letra = str_split($oraciones);
            $contar = count($letra);
            $precioracion = 0;
            if($contar > 1)
            {
                for ($i=1; $i <= $contar; $i++) { 
                   $precioracion = $precioracion + 4;
                }
            }
            //dd($precioracion);
            
            $monto = DB::table('localidades') //Consulta para obtener el monto de la localidad seleccionada
            ->select('localidades.monto')
            ->where('localidades.id', '=', $localidad)
            ->get();
            $precio =DB::table('productos') //Consulta para obtener el precio del producto seleccionado
            ->select('productos.presio')
            ->where('productos.id', '=', $producto)
            ->get();
            //dd($producto);

            $cantidad = $request->cantidad;
            Session::put('consulta', $monto);
            Session::put('cantidad', $cantidad);
            Session::put('oracion', $precioracion);
            $monto = Session::get('consulta');
            $oracion = Session::get('oracion');
            $precios = $precio[0]->presio;
            //dd($precios);

            $clientes = new Cliente();
            $clientes->nombre = $request->nombreCliente;
            $clientes->correo = $request->correo;
            $clientes->telefono = $request->telefono;
            $clientes->estatus = "activo";
            $clientes->localidades_id1 = $request->idlocalidad;
            $clientes->save();

            $cliente = DB::table('clientes')->get();
            $clientex = count($cliente);
            $clienteid = $cliente[$clientex-1]->id;

            $saldos = new Saldo();
            if(Session::get('oracion'))
            {
                $saldos->saldo_restante = ($cantidad * $precios) + $monto[0]->monto + $oracion;
            }
            else
            {
                $saldos->saldo_restante = ($cantidad * $precios) + $monto[0]->monto;
            }
            $saldos->clientes_id = $clienteid;
            $saldos->save();

            $saldo= DB::table('saldos')->get();
            $saldox = count($saldo);
            $saldoid = $saldo[$saldox-1]->id;

            $ventas = new Venta();
            $ventas->monto = $precios;
            //dd($precios);
            $ventas->cantidad = $cantidad;
            $ventas->monto_extra = $monto[0]->monto;
            $ventas->oracion = $oracion;
            $ventas->total = ($cantidad * $precio[0]->presio) + $monto[0]->monto + $oracion;
            $ventas->forma_pago = $request->idfpago;
            $ventas->saldos_id = $saldoid;
            $ventas->localidades_id = $request->idlocalidad;
            $ventas->save();
        }

        return redirect::to('/seleccionarClientes');
    }

    public function viewseleccionarclientes()
    {
    	$localidades = DB::table('localidades')->get();
        $clientes = DB::table('clientes')
        ->join('localidades', 'clientes.localidades_id1', '=', 'localidades.id')
        ->select('clientes.id', 'clientes.nombre', 'clientes.correo', 'clientes.telefono', 'localidades.localidad')
        ->get();
    	return view('Marmoleria.Clientes.seleccionarclientes', compact('clientes', 'localidades')); 
    }

    public function viewactualizarclientes($id)
    {
        $clientes = Cliente::findOrFail($id);
        //dd($id);
        $saldos = Saldo::find($id);
        $localidades = DB::table('localidades')->get();
        $categoria = DB::table('categoria')->get();
        $productos = DB::table('productos')->get();
        $formapago = DB::table('forma_pago')->get();
        
    	return view('Marmoleria.Clientes.actualizarclientes', compact('localidades', 'categoria', 'productos', 'formapago', 'clientes', 'saldos'));
    }

    public function actualizarclientes(Request $request, $id)
    {
        $clientes = Cliente::findOrFail($id);
         $this->validate(request(), [
            'nombreCliente' => 'required|string',
            'correo' => 'required|string',
            'telefono' => 'required|string',
            'idlocalidad' => 'required|string',
            'idfpago' => 'required|string',
        ],[
            'nombreCliente.required' => 'Ingrese un Nombre',
            'correo.required' => 'Ingrese un Correo',
            'telefono.required' => 'Ingrese un Teléfono',
            'idlocalidad.required' => 'Seleccione una Localidad',
            'idfpago.required' => 'Seleccione una forma de pago',
        ]);
    	
    	 
            $client = $request->get('nombreCliente');
        
        //dd($cliente[$clientex-1]->id);
        
        
            $localidad = $request->idlocalidad;
            $producto = $request->idproductos;
            $oraciones = $request->oracion;
            $letra = str_split($oraciones);
            $contar = count($letra);
            $precioracion = 0;
            if($contar > 1)
            {
                for ($i=1; $i <= $contar; $i++) { 
                   $precioracion = $precioracion + 4;
                }
            }
            //dd($precioracion);
            
            $monto = DB::table('localidades') //Consulta para obtener el monto de la localidad seleccionada
            ->select('localidades.monto')
            ->where('localidades.id', '=', $localidad)
            ->get();
            $precio =DB::table('productos') //Consulta para obtener el precio del producto seleccionado
            ->select('productos.presio')
            ->where('productos.id', '=', $producto)
            ->get();
            //dd($producto);

            $cantidad = $request->cantidad;
            Session::put('consulta', $monto);
            Session::put('cantidad', $cantidad);
            Session::put('oracion', $precioracion);
            $monto = Session::get('consulta');
            $oracion = Session::get('oracion');
            $precios = $precio[0]->presio;
            //dd($precios);

            
            $clientes->nombre = $request->nombreCliente;
            $clientes->correo = $request->correo;
            $clientes->telefono = $request->telefono;
            $clientes->estatus = "activo";
            $clientes->localidades_id1 = $request->idlocalidad;
            $clientes->save();

            $cliente = DB::table('clientes')->get();
            $clientex = count($cliente);
            $clienteid = $cliente[$clientex-1]->id;

            
            


    	return redirect::to('/seleccionarClientes');
    }

    public function eliminarcliente()
    {
    	$clientes = Cliente::destroy($id);
        return Redirect::to('/seleccionarClientes');
    }

    public function selectCategoria($id)
    {
        return Producto::where('categoria_id', $id)->get();
    }

    public function viewsaldocliente($id)
    {
        $popo = Saldo::where('clientes_id', $id)->get();
        // dd ($popo);
        return view('Marmoleria.Clientes.saldoclientes', compact('popo'));
    }

    public function saldocliente(Request $request, $id)
    {
        $saldo = Saldo::findOrFail($id);
        $saldo->saldo_restante = $request->saldo;
        $saldo->save();
    }
}
