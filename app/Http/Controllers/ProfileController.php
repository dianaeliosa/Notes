<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($edad, $nombre){
    	return view('profile', [
		'edad' => $edad,
		'nombre' => $nombre,
	]);
    }
}
