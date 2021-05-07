<?php

namespace App\Http\Controllers\backend;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderBy('id', 'DESC')->get();
        return view('backend.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::orderBy('id', 'DESC')->get();
        return view('backend.blog.create',compact('blog'));
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
            'name'=>'required|unique:blog',
            'content'=>'required',
            'status'=>'required'
        ],[
            'name.required'=>'Tin tức không được để trống !',
            'name.unique'=>'Tin tức đã tồn tại !',
            'content.required'=>'Nội dung không được để trống !',
            'status.required'=>'Trạng thái không được để trống !'
        ]);
        Blog::create([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'image'=>$file_name,
            'content'=>$req->content,
            'status'=>$req->status

        ]);
//         Blog::create($req->all());
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $blog = Blog::find($id);
        if($req->has('file')){
            $file = $req->file;
            $file_name =$file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);

        }else{
            $file_name = $blog->image;
        }
        $blog->update([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'image'=>$file_name,
            'content'=>$req->content,
            'status'=>$req->status
        ]);
        return redirect()->route('blog.index')->with('danger ','Sửa  thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->with('danger','Xóa thành công !');
    }
}
