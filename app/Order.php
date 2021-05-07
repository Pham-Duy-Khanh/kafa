<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $table = 'orders';
    protected $fillable = ['id_user','total_price','address','note','status','created_at','updated_at'];
    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}
