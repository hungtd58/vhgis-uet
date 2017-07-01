<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NamePlace extends Model
{
    //
    protected $table = "name_places";
    public function place()
    {
        return $this->belongsTo('App\Place', 'place_id', 'id');
    }
}
