<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondicionController extends Controller
{



    public function condicion($a){

    	$val = "";


    	if($a==5){

			$val = "true";

		} else {

			$val = "false";

		}


    	return view('condicion',[
    		"a" => $val
		]);
    }
}
