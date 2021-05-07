<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $category=Category::orderBy('id', 'DESC')->get();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('backend.category.create',compact('category'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'name'=>'required|unique:category',
            'status'=>'required'
//            'update_at'=>'required',
//            'created_at'=>'required'
        ],[
            'name.required'=>'Tên danh mục không được để trống!',
            'name.unique'=>'Tên danh mục đã tồn tại!',
            'status.required'=>'Trạng thái không được để trống!'
//            'update_at.required'=>'Ngày cập nhật không được để trống!',
//            'created_at.required'=>'Ngày khởi tạo không được để trống!'
        ]);
        Category::create($req->all());
        return  redirect()->route('category.index')->with('success','Thêm mới thành công !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'status'=>$req->status
        ]);
        return redirect()->route('category.index')->with('success','Sửa thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success','Xóa thành công !');
    }
}
