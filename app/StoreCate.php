<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreCate extends Model
{
    protected $table = 'storecate';
    protected $fillable = ['name','status','slug','created_at','updated_at'];
    public $timestamps = false;
    public function store(){
//         return $this->hasMany(Product::class);
        return $this->hasMany(Store::class, 'id_storecate', 'id');
    }
}
