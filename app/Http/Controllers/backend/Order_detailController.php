<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Order_detail;
use App\Order;
use Illuminate\Http\Request;

class Order_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $order=Order::find($id);
        $order_details=Order_detail::where('id_order','=',$id)->get();
        return view('backend.order_detail.index',compact('order','order_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Order_detail $order_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_detail $order_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $order=Order::find($id);
        $order->update([
            'status'=>$req->status,
        ]);
        return redirect()->route('order_backend')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_detail $order_detail)
    {
        //
    }
}
