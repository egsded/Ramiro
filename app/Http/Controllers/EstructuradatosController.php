<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstructuradatosController extends Controller
{
    function num($n){
    	if($n<100){
    		return $n."</br>".$this->num($n+1);
    	}else{
    		return 100;
    	}
    }
    function secuencia(){
    	return $this->num(0);
    }
    /*-------------------------------------------------------------------------------------------------*/
    function binario($bin,$minu){
    	if($bin>0){
    		if($bin%2==1){
    			$minu= "1".$minu;
    			return $this->binario($bin/2-0.5,$minu);
    		}else{
    			$minu= "0".$minu;
    			return $this->binario($bin/2,$minu);
    		}
    	}else{
    		return  $minu;
    	}
    }
    function secbinario($bin){
    	return $this->binario($bin,'');
    }
    /*-------------------------------------------------------------------------------------------------*/

    function nombres($nombre,$nu){
        $arreglonombre=array("andrea","saul","carolin","diego","alicia","mauricio","estefania","miriam","pifi","roberto");
    	if($nombre==$arreglonombre[$nu]){
    		return "Este nombre pertenece a la posición: ".($nu+1)." del arreglo";
    	}
    	else{
    		return $this->nombres($nombre,$nu+1);
    	}
    }
    function secnombre($nombre){
    	return $this->nombres($nombre,0);
    }
    /*-------------------------------------------------------------------------------------------------*/
    function numerinis($x,$y,$final){
        $arreglonum=array(36,84,35,86,23,85,96,9,24,15);
        if($x<10){
        /*return*/ $final=$final.$arreglonum[$x]." ".$arreglonum[$y]."</br>";
        return $this->numerinis($x+1,$y-1,$final);
        }else{
            return $final;
        }
    }
    function listnum(){
        return $this->numerinis(0,9,"");
    }
    /*-------------------------------------------------------------------------------------------------*/
    function serieanime($x,$y,$numero){
        if($y<$numero){
            return $this->serieanime($y,$x+$y,$numero);
        }else{
            return $x;
        }
    }
    function cserie($numero){
        return $this->serieanime(0,1,$numero);
    }
    /*-------------------------------------------------------------------------------------------------*/
    function mayor($x,$can){
        #$arreglonum=array(10,20,40,60,80,100,200,300,900,800,700,600,500,400);
        $arreglonum=array(57,89,19,94,62,74,35,47,86,47,34,52,25,64,75,70,64);
        if($can<17){
            if($arreglonum[$can]>$x){
                return $this->mayor($arreglonum[$can],$can+1);
            }else{
                return $this->mayor($x,$can+1);
            }
        }else{
            return $x;
        }
    }
    function cmayor(){
        return $this->mayor(0,0);
    }
    /*-------------------------------------------------------------------------------------------------*/
    function menor($x,$can){
        #$arreglonum=array(10,20,40,60,80,100,200,300,900,800,700,600,500,400);
        $arreglonum=array(57,89,19,94,62,74,35,47,86,47,34,52,25,64,75,70,64);
        if($can<17){
            if($arreglonum[$can]<$x){
                return $this->menor($arreglonum[$can],$can+1);
            }else{
                return $this->menor($x,$can+1);
            }
        }else{
            return $x;
        }
    }
    function cmenor(){
        return $this->menor(100,0);
    }
    /*-------------------------------------------------------------------------------------------------*/
    function pala($letras,$x,$y,$fin){
        $arraybus=array(' ','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',);
        if($letras[$x]=='1'){
            return $fin;
        }else{
            if($letras[$x]==$arraybus[$y]){
            return $this->pala($letras,$x+1,0,$fin.' '.$y);
        }else{
            return $this->pala($letras,$x,$y+1,$fin);
        }
        }
    }
    function cpalabra($palabrota){
        $array=str_split($palabrota.'1');
        return $this->pala($array,0,0,'');
    }
    /*-------------------------------------------------------------------------------------------------*/
    function pala1($letras,$x,$fin){
        $arraybus=array(' ','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',);
        if($letras[$x]=='a'){
            return $fin;
        }else{
            /*if($letras[$x]==0){
                $y=$letras[$x+1];
                $fin=$fin.$arraybus[$letras[$y]];
            }else{
                $y=$letras[$x].$letras[$x+1];
                $fin=$fin.$arraybus[$letras[$y]];
            }*/
            $fin=$fin.$arraybus[$letras[$x]];
                                        #  1
                                         # |
                                        # \ /
            return $this->pala1($letras,$x+1,$fin);
        }
    }
    function cnumeros($palabrota){
        $array=str_split($palabrota.'a');
        return $this->pala1($array,0,'');
    }
    /*-------------------------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------------------------*/
    #EXAMEN
    /*-------------------------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------------------------*/
    function buno($decimal,$res){
        $arreglo=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
        if($decimal>0){
            if($decimal>15){
                $x=$decimal%16;
                $y=$decimal-$x;
                return $this->buno($y/16,$arreglo[$x].$res);
            }else{
                return $this->buno(0,$arreglo[$decimal].$res);
            }
        }else{
            return $res;
        }
    }
    function auno($decimal){
        return $this->buno($decimal,'');
    }
    /*-------------------------------------------------------------------------------------------------*/
    function bdos($arreglo,$i,$narreglo,$x/*,$ar*/){
        $contar=count($arreglo);
        if($x<19){
            if($arreglo[$i]==$x){
                #$narreglo[$ar]=$arreglo[$i];
                return $this->bdos($arreglo,0,$arreglo[$i].' '.$narreglo,$x+1/*,$ar+1*/);
            }else{
                if($i<$contar-1){
                return $this->bdos($arreglo,$i+1,$narreglo,$x/*,$ar*/);}
                else{ return $this->bdos($arreglo,0,$narreglo,$x+1/*,$ar*/);}
            }
        }else{
            return $narreglo;
        }
    }
    function ados(){
        $arreglo=array(-1,-2,-3,6,-4,8,3,18,6,4,2/*2,1,5*/);
        return $this->bdos($arreglo,0,'',-4/*,0*/);
    }
    /*-----------------------------------------------------------------------------------------------*/
    function btres($arreglo,$i,$sum){
        if($i<11){
            return $this->btres($arreglo,$i+1,$sum=$sum+$arreglo[$i]);
        }else{
            return $sum;
        }
    }
    function atres(){
        $arreglo=array(-1,-2,-3,6,-4,8,3,18,6,4,2);
        return $this->btres($arreglo,0,0);
    }
    /*------------------------------------------------------                 -------------------------------------------*/
    function pregunta(){
        $x="La recursividad cumple el mismo objetivo que un ciclo en programación, la diferencia es que en este el ciclo es correspondiente a repetir la función, para ello, la condición se pone dentro de la función";
        return $x;
    }
}
