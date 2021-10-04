<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layer extends Model
{


    public function InvoiceItem()
    {
        return $this->belongsTo('App\Position');
    }

    
}
