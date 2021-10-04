<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model
{
    
    public function slider()
    {
        return $this->belongsTo('App\Slider');
    }
}
