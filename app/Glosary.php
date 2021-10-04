<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glosary extends Model
{
    
    public function term(){
        return $this->belongsTo('App\Term');
    }
}
