<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BdController extends Controller
{
    public function getBD()
	{
    	
		$Bd= DB::select('SELECT * FROM Bd'); 
		return view('consulter', 
		[
			'Bd' => $Bd,
		]); 
	}

	public function getRecupid()
    {
         $Bd = DB::select('SELECT * FROM Bd WHERE id_bd ="'.$_GET['info'].'"');
        return view('consulter', ['Bd' => $Bd]);
    }
}
