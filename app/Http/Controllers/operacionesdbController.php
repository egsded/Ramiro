<?php

namespace App\Http\Controllers;
#use App\Modelos\Contacto;
use Carbon \ Carbon;
use App\Telefono;
use Illuminate\Http\Request;
use App\Contacto;
use App\Carro;
use App\Usuario;
use App\bici;
use App\portador;
use App\clases\Produccion;


class operacionesdbController extends Controller
{
    #k no pase de 50kg
    /*function contruct(){
        $this->middleware("authe",["except"=>"iniciarsesion"]);
    }*/
    function viewinici(){
        return view("inicio");
    }
    function devolverrcontacto(){
    	$cont=	Contacto::find(1);
    	return $cont;
    }
    function viewregstrarcontacto(){
    	return view("formularios");
    }
    function viewalterarcontacto(){
    	return view("formularioalterar");
    }
    function vieweliminarcontacto(){
        $contactos=Contacto::all();
    	return view("formularioeliminar", compact("contactos"));
    }
    function registrarcontacto(Request $request){
    	$cont=new Contacto();
        $cont->Cliente=$request->Cliente;
        $cont->apellidop=$request->apellidop;
        $cont->apellidom=$request->apellidom;
        $cont->correo=$request->correo;
        $cont->facebook=$request->facebook;
        $cont->save();
        return back()->with("Mensaje", "Se guardó información correctamente");
    }
    function eliminarcontacto(Request $request){
        $cont=Contacto::destroy($request->idcontacto);
        return back();
    }
    function alterarcontacto(Request $request){
    	$cont=new Contacto();
        $cont->Cliente=$request->Cliente;
        $cont->apellidop=$request->apellidop;
        $cont->apellidom=$request->apellidom;
        $cont->correo=$request->correo;
        $cont->facebook=$request->facebook;
        $cont->save();
        return $cont;
    }
    function viewregistrartelefono(){
    	$contactos= Contacto::all();
    	return view("formulariotelefono",compact("contactos"));
    }
    function registrartelefono(Request $r){
    	$numero=$r->input("telefono");
    	$id=$r->input("idcontacto");
    	$con= Contacto::find($id);
    	$t=new Telefono();
    	$t->telefo=$numero;
    	$con->telefonos()->save($t);
    	#return back()->with("contacto",$con);
    }
    function viewregistrarcontactocarro(Request $request){
    	$contactos=Contacto::all();
    	$carros=Carro::all();
    	return view("formulariomuchosamuchos", compact("contactos","carros"));
    }
    function registrarcontactocarro(Request $request){	 
        $this->validate($request, 
            ["idcontacto"=>"required","idcarro"=>"required"],
            ["idcontacto.required"=>"Selecciona un contacto", 
            "idcarro.required"=>"Selecciona un carro"]);
    	#/contacto = Contacto::find($request->input("idcontacto"));
        $carros=Carro::all();
        $contactos=Contacto::all();
        $contactos = Contacto::find($request->input("idcontacto"));
        $carros = Carro::find($request->input("idcarro"));
        $estatus=$request->input("status");
    	$contactos->Carro()->save($carros,["estatus"=>$estatus]);
    	return back()->with("Mensaje", "listo");
    }
    function viewregistrarcarro(){
    	$carro=Carro::all();
    	return view("registracarro", compact("carro"));
    }
    function registrarcarro(Request $request){
    	$car=new Carro();
    	$car->marca=$request->marca;
    	$car->modelo=$request->modelo;
    	$car->save();
    	return back()->with("Mensaje", "auto añadido");
    }
    function viewusuarito(){
        return view("iniciosesion");
    }
    function usuarito(Request $request){
        $usr=$request->get("usuario");
        $cntr=$request->get("contraseña");
        $usrdb=Usuario::where("usuario","=",$usr)->where("contraseña","=",$cntr)->first();
        if(!$usrdb){
            return back()->with("Mensaje","UPS!!... te equivocaste en la contraseña o en el usuario iriota >:v");
        }else{
            return back()->with("Mensaje", "succesful");
        }
        session(["usuario"=>$usrdb]);
        #$usuario=$request->input("usuario");
        #$contraseña=$request->input("contraseña");
        //$contacto = Contacto::find($contacto="{{$contacto->id}}" @if($contacto==$contactos->id||$contraseña==$usuarios->contraseña||$usuario==$usuarios->usuario)selected="true" @endif);
        #return "bienvenido";
    }
    function horario(){
        //return printf ( " Ahora mismo es: % s " , Carbon :: now ('America/Monterrey') -> toDateTimeString ());
        return $internetWillBlowUpOn  =  Carbon :: create ( 2038 , 01 , 19 , 3 , 14 , 7 , ' GMT ' );
    }
    /*-------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------*/
    function entrada(){
        return back('/menubicis');
    }
    function __construct(){
        $this->middleware('hora'/*,["except"=>"menuexam"]*/);
    }
    function menuexam(){
        return view("formulariomenuexamen");
    }
    function viewbicicletas(){
        $bicicletas=bici::all();
        return view("formulariobicis", compact("bicicletas"));
    }
    function regbici(Request $request){
        $bici=new bici();
        $bici->marca=$request->get("marca");
        $bici->modelo=$request->get("modelo");
        $bici->save();
        return back();
    }
    function viewportador(){
        $portador=portador::all();
        return view("formularioportador", compact("portador"));
    }
    function regport(Request $request){
        $port=new portador();
        $port->nombre=$request->get("nombre");
        $port->edad=$request->get("edad");
        $port->save();
        return back();
    }
    function viewportadorbici(Request $request){
        $portadores=portador::all();
        $bicis=bici::all();
        return view("formulariorelacionbiciportador", compact("portadores","bicis"));
    }
    function regportadorbici(Request $request){   
        $bicis=bici::all();
        $portadores=portador::all();
        $portadores = portador::find($request->input("idportador"));
        $bicis = bici::find($request->input("idbici"));
        $horario=$request->input("hora");
        $portadores->bici()->save($bicis,["horario"=>$horario]);
        return back();
    }
    function eliminarbici(Request $request){
        $cont=portador::destroy($request->idportador);
        return back();
    }
    function bicicletasasignadas(){
        $portadores=portador::has('bici')->get();
        $bicicletas=bici::has('portador')->get();
        return view("formulariobicisasignadas", compact('portadores','bicicletas'));
    }
    function bicicletasinasignar(){
        $portadores=portador::doesnthave('bici')->get();
        return view("formularioclientessinbici", compact('portadores'));
    }
    function marcadebici(){
        $users = portador::whereHas('bici', function($q){
            $q->where('marca', '=', 'ferrary');
        })->get();
        return view("formulariomodeloespecifico", compact('users'));
    }
    function maydeedad(){
        $users = portador::whereHas('bici', function($q){
            $q->where('edad', '>=', '18');
        })->get();
        return view("formulario18", compact('users'));
    }
}
