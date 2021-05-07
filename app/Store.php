<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $table = 'store';
    protected $fillable = ['id','id_storecate','name','slug','image','status','created_at','update_at'];
    public function storecate(){
        return $this->belongsTo('App\StoreCate','id_storecate');
    }
}
