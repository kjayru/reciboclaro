<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    public function pages()
    {
        return $this->belongsToMany('Vendor\tcg\voyager\src\Models\Page');
    }

    public function InvoiceItems()
    {
        return $this->hasMany('App\InvoiceItem');
    }

    public function quiz(){
        return belongsTo(Quiz::class,'category_id','id');
    }
    
}
