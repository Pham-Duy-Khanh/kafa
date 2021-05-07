<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Store;
use Illuminate\Http\Request;
use App\StoreCate;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storecate = StoreCate::all();
        $store = Store::orderby('id','DESC')->get();
        return view('backend.store.index',compact('store','storecate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storecate = StoreCate::all();
        return view('backend.store.create',compact('storecate'));
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
//        $this->validate($req, [
//            'name'=>'required|unique:product',
//            'id_category'=>'required',
//            'price'=>'required|numeric',
//            'descount'=>'required|numeric',
//            'file'=>'required',
//            'status'=>'required',
//            'desscaption'=>'required',
//            'quantity'=>'required|numeric'
//        ],[
//            'name.required'=>'Tên sản phẩm không được để trống !',
//            'name.unique'=>'Tên sản phẩm đã tồn tại !',
//            'id_category.required'=>'Tên danh mục không được để trống !',
//            'price.required'=>'Giá sản phẩm không được để trống !',
//            'price.numeric'=>'Sai định dạng giá sản phẩm !',
//            'descount.required'=>'Giá khuyến mãi không được để trống !',
//            'descount.numeric'=>'Sai định dạng giá khuyến mãi !',
//            'file.required'=>'Ảnh sản phẩm không được để trống !',
//            'status.required'=>'Trạng thái không được để trống !',
//            'desscaption.required'=>'Mô tả không được để trống !',
//            'quantity.required'=>'Tổng tiền không được để trống !',
//            'quantity.numeric'=>'Sai định dạng tổng tiền !'
//
//
//
//        ]);
        Store::create([
            'name'=>$req->name,
            'id_storecate'=>$req->id_storecate,
            'image'=>$file_name,
            'status'=>$req->status,
            'slug'=>$req->slug
        ]);

        return redirect()->route('store.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storecate = StoreCate::all();
        $store = Store::find($id);
        return view('backend.store.edit',compact('storecate','store'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $store = Store::find($id);
        if($req->has('file')){
            $file = $req->file;
            $file_name =$file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);

        }else{
            $file_name = $store->image;
        }
        $store->update([
            'name'=>$req->name,
            'id_storecate'=>$req->id_storecate,
            'image'=>$file_name,
            'status'=>$req->status,
            'slug'=>$req->slug

        ]);
        return redirect()->route('store.index')->with('danger ','Sửa  thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Store::find($id)->delete();
        return redirect()->back()->with('danger ','Xóa thành công !');
    }
}
