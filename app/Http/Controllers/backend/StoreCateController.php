<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\StoreCate;
use Illuminate\Http\Request;

class StoreCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storecate = StoreCate::orderby('id','DESC')->get();
        return view('backend.catestore.index',compact('storecate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storecate = StoreCate::orderby('id','DESC')->get();
        return view('backend.catestore.create',compact('storecate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        StoreCate::create($req->all());
        return  redirect()->route('storecate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreCate  $storeCate
     * @return \Illuminate\Http\Response
     */
    public function show(StoreCate $storeCate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreCate  $storeCate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storecate = StoreCate::find($id);
        return view('backend.catestore.edit',compact('storecate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreCate  $storeCate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $storecate = StoreCate::find($id);
        $storecate->update([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'status'=>$req->status


        ]);
        return redirect()->route('storecate.index')->with('success','Sửa thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreCate  $storeCate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StoreCate::find($id)->delete();
        return redirect()->back()->with('success','Xóa thành công !');
    }
}
