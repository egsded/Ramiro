<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlmarmolera extends Controller
{
    function web(){
    	return view("/marmolera/formulariomenu");
    }
    function somos(){
    	return view("/marmolera/formularioquienessomos");
    }
}
