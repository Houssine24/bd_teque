<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{
    public function getCollection()
	{

		return view('collection', 
		[
			'Collection' => Collection::all()
		]); 
	}
}
