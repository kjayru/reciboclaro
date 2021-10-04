<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    

    public function slideritems()
    {
        return $this->hasMany('App\SliderItem');
    }

    public function slidersitems()
    {
        return $this->hasMany('App\SlidersItem');
    }
    public function pages()
    {
        return $this->belongsToMany('Vendor\tcg\voyager\src\Models\Page');
    
    }

   

}
