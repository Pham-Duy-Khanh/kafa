<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name','slug','status','created_at','update_at'];
    public $timestamps = false;
    public function product(){
        // return $this->hasMany(Product::class);
        return $this->hasMany(Product::class, 'id_category', 'id');
    }
}
