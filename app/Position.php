<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{


    public function InvoiceItem()
    {
        return $this->belongsTo('App\Position');
    }

}
