<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeupController extends Controller
{
public function maquillaje($tipo, $color, $precio){
	return view('maquillaje', [
	'tipo' =>	$tipo,
	'color' => $color,
	'precio' => $precio,

	]);


	}
}
