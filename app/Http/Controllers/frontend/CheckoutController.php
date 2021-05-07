<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Order_detail;
use App\Category;
use App\Helper\CartHelper;
use App\Banner;
use App\Blog;
use App\Product;
use App\Store;
use App\StoreCate;
use App\User;
use Auth;
use Mail;


class CheckoutController extends Controller
{

    public function index(){
        $banner = Banner::all();
        return view('frontend.checkout',compact('banner'));
    }
    public function success(){
        $banner = Banner::all();
        return view('frontend.success',compact('banner'));
    }
    public function submit_form(Request $req, CartHelper $cart){
        $c_id = Auth::user()->id;
        $c_phone = Auth::user()->phone;
        $c_email = Auth::user()->email;
        $c_name = Auth::user()->name;
        if ($order = Order::create([
            'id_user'=> $c_id,
            'phone'=>$c_phone,
            'total_price' =>$req->total_price,
               'address' =>$req->address,
              'note' =>$req->note,
              'status' =>$req->status,
        ])){
            $id_order = $order->id;
            foreach ($cart->items as $id_product => $item){
                $quantity = $item['quantity'];
                $price = $item['price'];
                Order_detail::create([
                    'id_order'=>$order->id,
                      'id_product'=>$id_product,
                      'price'=>$price,
                     'quantity'=>$quantity,
                ]);
            }
            Mail::send('email.order',[
                'c_name'=>$c_name,
                'c_phone'=>$c_phone,
                'c_email'=>$c_email,
                'order'=>$order,
                'items'=>$cart->items,
                'address'=>$req->address,
            ],function ($mail) use($c_email,$c_name,$c_phone){
                $mail->to($c_email,$c_name,$c_phone);
                $mail->from('phuong.nh.930@aptechlearning.edu.vn');
                $mail->subject('Hóa đơn điện tử đơn hàng !');
            });
            session(['cart'=>'']);
            $alert='Đặt hàng thành công! Vui lòng check email đơn hàng !';
            return redirect()->route('checkout.success')->with('alert',$alert);


        }else{
            return redirect()->back()->with('error','that bai');
        }
//        $cart=(\Cart::content());
//        $order=Order::create([
//            'id_user' =>$req->id_user,
//            'total_price' =>$req->total_price,
//            'address_ship' =>$req->address,
//            'note' =>$req->note,
//            'status' =>$req->status,
//        ]);
//        foreach ($cart as $key => $value) {
//            Order_detail::create([
//                'id_order'=>$order->id,
//                'id_product'=>$value->id,
//                'price'=>$value->price,
//                'quantity'=>$value->qty,
//            ]);
//        }

    }
}
