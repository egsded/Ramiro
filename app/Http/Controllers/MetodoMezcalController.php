<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Alumno;
use Session;


//3
//backstretch
//Intervention Image
class MetodoMezcalController extends Controller
{
    public function viewregistraralumnos()
    {
        return view('EjercicioEstructuraDatos.registraralumnos');
    }

    public function registraralumnos(Request $request)
    {
        $Alumnos = Session::get('alumnos');
        $Alumnos = new Alumno();
        $Alumnos->nombre = $request->get("nombreAlumno");
        $Alumnos->edad = $request->get("edad");
        $Alumnos->sexo = $request->get("sexo");
        Session::push('alumnos', $Alumnos);
        Session::save('alumnos', $Alumnos);
        $Alumnos = Session::get('alumnos');
        //$Alumnos = session()->flush();
        //dd($Alumnos);
        return view('/EjercicioEstructuraDatos.veralumnos', compact('Alumnos'));
    }

    public function viewveralumnos(){
        $Alumnos = Session::get('alumnos');
        return view('EjercicioEstructuraDatos.veralumnos', compact('Alumnos'));
    }

    
    public function ordenarAlumnos($Alumnos){
        //$Alumnos = session()->flush();
        //GNOME
        for($i = 1; $i < count($Alumnos); $i++)
            for($j = $i - 1; $j >= 0; $j--)
                if($Alumnos[$i]->edad > $Alumnos[$j]->edad){
                    $aux = $Alumnos[$j];
                    $Alumnos[$j] = $Alumnos[$i];
                    $Alumnos[$i] = $aux;
                    $i = $i - 1;
                }
        return view('EjercicioEstructuraDatos.verresultado', compact('Alumnos'));

    }

    public function showmetodoGnomeEdad()
    {
        $Alumnos = Session::get('alumnos');
        $Alumnos = Collection::make($Alumnos);
        return $this->ordenarAlumnos($Alumnos);
    }



///////////////////////////////////////////////////////


public function ordenarAlumnosNombre($Alumnos)
    {
        //dd($Alumnos);
        //dd(($Alumnos->sexo) = "F");

        for($i = 1; $i < count($Alumnos); $i++)
            for($j = $i - 1; $j >= 0; $j--)
                if($Alumnos[$i]->nombre > $Alumnos[$j]->nombre){
                    $aux = $Alumnos[$j];
                    $Alumnos[$j] = $Alumnos[$i];
                    $Alumnos[$i] = $aux;
                    $i = $i - 1;
                }
        return view('EjercicioEstructuraDatos.verresultado', compact('Alumnos'));
    }


    public function showordenarAlumnosNombre()
    {
        $Alumnos = Session::get('alumnos');
        $Alumnos = Collection::make($Alumnos);
        return $this->ordenarAlumnosNombre($Alumnos);
    }


/////////////////////////////////////////////////////////


    public function ordenarAlumnosSexo($Alumnos)
    {
        //dd($Alumnos);
        //dd(($Alumnos->sexo) = "F");

        for($i = 1; $i < count($Alumnos); $i++)
            for($j = $i - 1; $j >= 0; $j--)
                if($Alumnos[$i]->sexo > $Alumnos[$j]->sexo){
                    $aux = $Alumnos[$j];
                    $Alumnos[$j] = $Alumnos[$i];
                    $Alumnos[$i] = $aux;
                    $i = $i - 1;
                }
        return view('EjercicioEstructuraDatos.verresultado', compact('Alumnos'));
    }


    public function showmetodoGnomeSexo()
    {
        $Alumnos = Session::get('alumnos');
        $Alumnos = Collection::make($Alumnos);
        return $this->ordenarAlumnosSexo($Alumnos);
    }


    
    

}