<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    public function subCategory(){
        return $this->hasMany('App\Category','parent_id','id');
    }

    public function parentCategory()
    {
        return $this->belongsTo('App\Category','parent_id','id');
    }

    public function categorypage(){
        return $this->hasOne('App\CategoryPage','category_id','id');
    }
    
}
