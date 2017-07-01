<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $table = "places";

    public function namePlaceHistory(){
    	return $this->hasMany('App\NamePlace', 'id', 'place_id');
    }
}
