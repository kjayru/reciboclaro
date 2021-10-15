<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function categorypages(){
        return $this->hasMany(CategoryPage::class,'category_id','id');
    }
    public function Quiz(){
        return $this->belongsTo(Quiz::class);
    }
}
