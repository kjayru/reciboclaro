<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPage extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

     public function quiz(){
        return belongsTo(Quiz::class,'category_id','id');
    }
}
