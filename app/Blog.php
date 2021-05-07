<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['name','slug','image','content','status','created_at','updated_at'
    ];
    public $timestamps = false;

}
