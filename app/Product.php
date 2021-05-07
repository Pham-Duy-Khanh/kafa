<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    protected $guarded = [];
    protected $table = 'product';
    protected $fillable = ['name','id_category','price','discount','image','status','slug','desscaption','quantity','created_at','update_at'];
    public $timestamps = false;
    public function category(){
        return $this->belongsTo('App\Category','id_category');
    }
}
