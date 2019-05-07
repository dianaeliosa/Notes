<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeupController extends Controller
{
    public function index($tipo, $color, $precio) 
    {
    	return view('Maquillaje', [
		'tipo' => $tipo,
		'color' => $color,
		'precio' => $precio,
	]);

    }
}
