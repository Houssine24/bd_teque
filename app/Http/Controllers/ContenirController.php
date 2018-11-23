<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContenirController extends Controller
{
    public function getContenir()
	{
    	
		$Contenir= DB::select('SELECT * FROM Contenir'); 
 		return view('collection', 
		[
			'Contenir' => $Contenir,
		]); 
	}
}
