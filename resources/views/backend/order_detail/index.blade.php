@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="main--content">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="font-weight-bold text-red">THÔNG TIN ĐƠN HÀNG</h3>
                            <h3 class="font-weight-bold text-green">Mã đơn hàng:
                                <span class="font-weight-bold">{{ $order->id }}</span>
                            </h3>
                            <h5 class="card-text">Tên khách hàng:
                                <span class="font-weight-bold"> {{ $order->user->name }}</span>
                            </h5>
                            <h5 class="card-text">Số điện thọai:
                                <span class="font-weight-bold"> {{ $order->user->phone }}</h5></span>
                            <h5 class="card-text">Địa chỉ nhận hàng:
                                <span class="font-weight-bold">{{ $order->address }}</span>
                            </h5>
                            <h5 class="card-text">Ngày đặt hàng:
                                <span class="font-weight-bold"> {{ $order->created_at }}</span>
                            </h5>
                            <h5 class="card-text">Trạng thái:
                                <span class="font-weight-bold">
						@if ($order->status == 0)
                                        <span class="badge badge-secondary ">Chưa xử lý</span>
                                    @endif
                                    @if ($order->status == 1)
                                        <span class="badge badge-warning">Đã xử lý</span>
                                    @endif
                                    @if ($order->status == 2)
                                        <span class="badge badge-success">Đang giao hàng</span>
                                    @endif
                                    @if ($order->status == 3)
                                        <span class="badge badge-success">Đã nhận hàng</span>
                                    @endif
                                    @if ($order->status == 4)
                                        <span class="badge badge-danger">Đã hủy hàng</span>
                                    @endif
					</span>
                            </h5>
                            <hr>
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="text-danger" for="">Cập nhật trạng thái</label>
                                    <select name="status" id="input" class="form-control col-6" required="required">
                                        <option value="1">Đã xử lý</option>
                                        <option value="2">Đã Giao hàng</option>
                                        <option value="3">Đã nhận hàng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <select name="filter" data-trigger="selectmenu" data-minimum-results-for-search="-1">
                                    <option value="top-search">Đơn hàng</option>
                                </select>
                            </h3>

{{--                            <div class="dropdown">--}}
{{--                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                                    <i class="fa fa-ellipsis-v"></i>--}}
{{--                                </button>--}}

{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table style--2">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lương</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_details as $value)
                                        <tr>
                                            <td>{{$loop->index +1}}</td>
                                            <td>{{$value->product->name}}</td>
                                            <td>
                                                <img src="{{ url('upload') }}/{{ $value->product->image }}"
                                                     alt="" width="50px">
{{--                                                <img src="../upload/{{$value->product->image}}--}}
                                            </td>
                                            <td>{{number_format($value->price)}} đ</td>
                                            <td>{{$value->quantity}}</td>
                                            <td>{{number_format($value->price*$value->quantity)}} đ</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="font-weight-bold font-size-16">Tổng tiền</td>
                                        <td colspan="5" class="font-weight-bold text-red font-size-16">{{number_format($value->price*$value->quantity)}}đ</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @stop()
