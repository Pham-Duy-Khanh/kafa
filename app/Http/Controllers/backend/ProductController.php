<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $product = Product::orderBy('id', 'DESC')->get();
        return view('backend.product.index',compact('product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::orderBy('id', 'DESC')->get();
        return view('backend.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if($req->has('file')){
            $file = $req->file;
            $file_name =$file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);

        }
        $this->validate($req, [
            'name'=>'required|unique:product',
            'id_category'=>'required',
            'price'=>'required|numeric',
            'discount'=>'required|numeric',
//            'image'=>'required',
            'status'=>'required',
            'desscaption'=>'required',
            'quantity'=>'required|numeric'
        ],[
            'name.required'=>'Tên sản phẩm không được để trống !',
            'name.unique'=>'Tên sản phẩm đã tồn tại !',
            'id_category.required'=>'Tên danh mục không được để trống !',
            'price.required'=>'Giá sản phẩm không được để trống !',
            'price.numeric'=>'Sai định dạng giá sản phẩm !',
            'discount.required'=>'Giá khuyến mãi không được để trống !',
            'discount.numeric'=>'Sai định dạng giá khuyến mãi !',
//            'image.required'=>'Ảnh sản phẩm không được để trống !',
            'status.required'=>'Trạng thái không được để trống !',
            'desscaption.required'=>'Mô tả không được để trống !',
            'quantity.required'=>'Tổng tiền không được để trống !',
            'quantity.numeric'=>'Sai định dạng tổng tiền !'



        ]);
        Product::create([
            'name'=>$req->name,
            'id_category'=>$req->id_category,
            'price'=>$req->price,
            'discount'=>$req->discount,
            'image'=>$file_name,
            'status'=>$req->status,
            'slug'=>$req->slug,
            'desscaption'=>$req->desscaption,
            'quantity'=>$req->quantity

        ]);

        return redirect()->route('product.index')->with('danger','Thêm mới thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('backend.product.edit',compact('category','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $product = Product::find($id);
        if($req->has('file')){
            $file = $req->file;
            $file_name =$file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);

        }else{
            $file_name = $product->image;
        }
        $product->update([
            'name'=>$req->name,
            'id_category'=>$req->id_category,
            'price'=>$req->price,
            'discount'=>$req->discount,
            'image'=>$file_name,
            'status'=>$req->status,
            'slug'=>$req->slug,
            'desscaption'=>$req->desscaption,
            'quantity'=>$req->quantity

        ]);
        return redirect()->route('product.index')->with('danger ','Sửa  thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('danger ','Xóa thành công !');
    }
}
