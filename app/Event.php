<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = "events";
    public function place()
    {
        return $this->belongsTo('App\Place', 'place_id', 'id');
    }
}
