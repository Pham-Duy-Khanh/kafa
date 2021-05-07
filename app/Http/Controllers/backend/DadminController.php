<?php
namespace App\Http\Controllers\backend;
use App\Banner;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Store;
use App\Order;
use Illuminate\Http\Request;
//use http\Env\Request;
//use HttpRequest;
use Auth;
//use App\User;
//use Yaf\Session;


class DadminController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        $product_count = Product::count();
        $user_count = User::count();
        $store_count = Store::count();
        $order_conut = Order::count();
        $orders = Order::all();
        $orders = Order::orderBy('id','DESC')->get();
        if (request()->date_from && request()->date_to){
            $orders = Order::whereBetween('created_at',[request()->date_from,request()->date_to])->get();
        }
        return view('backend.index',compact('product_count','user_count','store_count','orders','banner','order_conut'));
    }

    public function category()
    {
        return view('backend.category');
    }


//    public function dangKy(){
//        return view('backend.dang-ky');
//    }
//    public function post_dang_ky(Request $req){
//        $this->validate($req,[
//            'name'=>'required',
//            'email'=>'required|unique:users',
//            'password'=>'required'
//        ],[
//            'name.required'=>'Tên không được để trống !',
//            'email.required'=>'Email không được để trống !',
//            'email.unique'=>'Email này đã tồn tại',
//            'password.required'=>'Password không được để trống'
//
//        ]);
//        user::create([
//            'name'=>$req->name,
//            'email'=>$req->email,
//            'password'=>bcrypt($req->password)
//        ]);
//        return redirect()->route('login');
//    }
    public function login() {
        return view('backend.login');
    }

    public function postLogin(Request $req){
//        $this->validate($req,[
//            'email' => 'required|email',
//            'password' =>'required'
//        ],[
//            'email.required' => 'Email không được để trống',
//            'email.email' => 'Email không đúng định dạng',
//            'password.required' =>'Mật khẩu không được để trống'
//        ]);

        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('backend.home');
        }
        else{
            return redirect()->back()->with('danger','Đăng nhập thất bại !');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('dang-xuat');
    }
}
