<?php

namespace App\Http\Controllers\frontend;
use App\Category;
use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Blog;
use App\Product;
use App\Store;
use App\StoreCate;
use App\User;
use Mail;
use Auth;
use App\Order;
use App\Order_detail;
use Yaf\Session;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function index(){
        $storecate = StoreCate::all();
        $store = Store::all();
        $blog = Blog::all();
        $category = Category::all();
        $banner = Banner::where('status',0)->get();
//        $product = Product::where('status',)->get();
        $product = Product::where('status',0)->orderby('id','DESC')->paginate(12);
        return view('frontend.index',compact('product','banner','category','blog','storecate','store'));
    }
    public function logout(){
        Auth::logout();
//        return view('frontend.index');
        return redirect()->route('home');
    }

    public function dang_ky(){
        return view('frontend.dang_ky');
    }
    public function post_dangky(Request $req){
        $this->validate($req,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required'
        ],[
            'name.required'=>'Tên không được để trống !',
            'email.required'=>'Email không được để trống !',
            'email.unique'=>'Email này đã tồn tại',
            'password.required'=>'Password không được để trống'

        ]);
        user::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password)
        ]);
        return redirect()->route('dang-nhap');
    }

    public function dangNhap(){
        return view('frontend.dang-nhap');
    }
    public function post_dangnhap(Request $req){

//        dd($req->all());
//          dd(Auth::attempt($req->only('email','password')));
        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('home');
        }
        else{
            echo'that bai';
        }

    }
    public function product($id){
        $banner = Banner::all();
        $storecate = StoreCate::all();
        $store = Store::all();
        $blog = Blog::all();
        $category = Category::all();
        $product = Product::where('id_category',$id)->get();
        return view('frontend.product',compact('product','category','blog','store','storecate','banner'));
    }
    public function store($id){
        $banner = Banner::all();
        $storecate = StoreCate::all();
        $store = Store::where('id_storecate',$id)->get();
        $blog = Blog::all();
        $category = Category::all();
        $product = Product::where('id_category',$id)->get();
        return view('frontend.store',compact('product','category','blog','store','storecate','banner'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function post_contact(Request $req){
        Mail::send('email.contact',[
            'name'=>$req->name,
            'content'=>$req->content,
        ],function ($mail) use($req){
            $mail->to('ph1911ij@gmail.com',$req->name);
            $mail->from($req->email);
            $mail->subject('Test mail');
        });

    }
    public  function blog(){
        $banner = Banner::all();
        $blog = Blog::orderBy('id', 'DESC')->get();
        return view('frontend.blog',compact('blog','banner'));
    }
    public function blogdetail($id){
        $banner = Banner::all();
        $blog = Blog::find($id);
        return view('frontend.blog-detail',compact('blog','banner'));

    }
    public function productDetail(CartHelper $cart,$id){
        $banner = Banner::all();
        $product = Product::all();
        $product = Product::find($id);
        $cart->add($product);
        return view('frontend.product-detail',compact('product','banner'));
    }
    public function danhmuc(){
        $banner = Banner::all();
        $category = Category::all();
        return view('frontend.category',compact('banner','category'));
    }
    public function get_search(Request $req){
        $storecate = StoreCate::all();
        $store = Store::all();
        $blog = Blog::all();
        $category = Category::all();
        $banner = Banner::where('status',1)->get();
        $listProducts = Product::where('name','like','%'.$req->keyword .'%')->where('status',1)->get();
        $product = Product::where('status',0)->orderby('id','DESC')->paginate(12);
        return view('frontend.index',compact('listProducts','storecate','store','category','category','blog','banner','product'));

    }
    public function order(){
//        $order = Order::orderBy('id', 'DESC')->get();
        $orders=Order::orderBy('id','DESC')->where('id_user','=',Auth::user()->id)->get();
        // $order_detail=Order::where('id_order','=',$order->id)->get();
        return view('frontend.don_hang',compact('orders'));
    }
    public function order_detail($id){
        $order=Order::find($id);
        $order_details=Order_detail::where('id_order','=',$id)->get();
        // dd($order_details);
        return view('frontend.don_hang_chi_tiet',compact('order_details','order'));
    }
    public function post_order_detail(Request $request, $id){
        $order=Order::find($id);
        $order->update([
            'status'=>$request->status,
        ]);
        // dd($order->status);
        return redirect()->route('order-frontend',$id)->with('success','Hủy hàng thành công');
    }


}
