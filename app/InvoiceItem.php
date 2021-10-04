<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    
    public function positions()
    {
        return $this->hasMany('App\Position');
    }

    public function layers()
    {
        return $this->hasMany('App\Layer');
    }
}
