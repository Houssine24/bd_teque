<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
	protected $table = 'Collection';
    protected $primaryKey = 'id_collection';

    
    public function les_bandes_dessinees()
    {
    	return $this->belongsToMany('App\Bd', 'Contenir', 'id_collection', 'id_bd');
    }
}
