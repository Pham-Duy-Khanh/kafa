<?php

namespace App\Http\Controllers\frontend;
use App\Banner;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Helper\CartHelper;

class CartController extends Controller

{


    public function show(){
        $banner = Banner::all();
        $product = Product::where('status',2)->get();
        return view('frontend.cart',compact('product','banner'));
    }
    public function add(CartHelper $cart, $id){
        $banner = Banner::all();
        $product = Product::find($id);
        $cart->add($product);
        return redirect()->route('show-cart');
    }
    public function update(CartHelper $cart,Request $req){
        $id = $req->id;
        $quantity = $req->qty;
        $cart->update($id,$quantity);
        return redirect()->route('show-cart');
//        return redirect()->back()->with('success','Cập nhật item thành công');
    }
    public function delete(CartHelper $cart,$id){
        $cart->delete($id);
        return redirect()->route('show-cart');
    }
}
