<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlidersItem extends Model
{
    protected $table = 'sliders_item';
    
    public function slider()
    {
        return $this->belongsTo('App\Slider');
    }
}
