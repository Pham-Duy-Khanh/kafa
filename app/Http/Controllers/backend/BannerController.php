<?php

namespace App\Http\Controllers\backend;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::orderBy('id', 'DESC')->get();
        return view('backend.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = Banner::orderBy('id', 'DESC')->get();
        return view('backend.banner.create',compact('banner'));
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
        $this->validate($req,[
            'name'=>'required|unique:banner',
            'slug'=>'required|unique:banner',
            'content'=>'required',
            'status'=>'required'
        ],[
            'name.required'=>'Tiêu đề banner không được để trống !',
            'name.unique'=>'Tiêu đề đã tồn tại',
            'slug.required' =>'Đường dẫn không được để trống !',
            'slug.unique' =>'Đường dẫn đã tồn tại 1',
            'content.required'=>'Nội dung không được để trống !',
            'status.required'=>'Trạng thái không được để trống !'
        ]);
        Banner::create([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'image'=>$file_name,
            'content'=>$req->content,
            'status'=>$req->status

        ]);
//         Blog::create($req->all());
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $banner = Banner::find($id);
        if($req->has('file')){
            $file = $req->file;
            $file_name =$file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);

        }else{
            $file_name = $banner->image;
        }
        $banner->update([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'image'=>$file_name,
            'content'=>$req->content,
            'status'=>$req->status
        ]);
        return redirect()->route('banner.index')->with('danger ','Sửa  thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->back()->with('danger ','Xóa thành công !');
    }
}
