<?php

namespace App;
use App\Product;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $guarded = [];
    protected $table = 'order_details';
    protected $fillable = ['id_order','id_product','price','quantity','created_at','updated_at'];
    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
