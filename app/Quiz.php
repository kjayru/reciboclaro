<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function parent(){
        return $this->hasMany(Quiz::class,'parent_id','id');
    }
}
