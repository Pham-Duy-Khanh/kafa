@extends('frontend.main')
@section('content')



    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <!-- .col-md-8 -->
                <div class="col-xl-4 ftco-animate">
                    <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Thông tin đơn hàng</h3>
                        <p class="d-flex">
                            <span>Đơn hàng</span>
                            <span>{{ $order->id }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Số điện thoại</span>
                            <span>{{$order->user->phone}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Địa chỉ nhận hàng</span>
                            <span>{{$order->address}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Ngày đặt hàng</span>
                            <span>{{$order->created_at}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Trạng thái</span>
                            <span>
                                @if ($order->status == 0)
                                    <span class="badge badge-pill badge-soft-secondary  font-size-12">Chưa xử lý</span>
                                @endif
                                @if ($order->status == 1)
                                    <span class="badge badge-pill badge-soft-warning font-size-12">Đã xử lý</span>
                                @endif
                                @if ($order->status == 2)
                                    <span class="badge badge-pill badge-soft-success font-size-12">Đang giao hàng</span>
                                @endif
                                @if ($order->status == 3)
                                    <span class="badge badge-pill badge-soft-success font-size-12">Đã nhận hàng</span>
                                @endif
                                @if ($order->status == 4)
                                    <span class="badge badge-pill badge-soft-danger font-size-12">Đã hủy hàng</span>
                                @endif
                            </span>
                        </p>
                        <hr>
                        @if($order->status<3)
                            <p>
                            <form action="" method="post">
                                @csrf
                                <input type="hidden" name="status" value="4">
{{--                                <a href="#"class="btn btn-primary py-3 px-4">Hủy đơn hàng</a>--}}
                                <button class="btn btn-primary py-3 px-4" type="submit" >Hủy đơn hàng</button>
                            </form>

                            </p>


                        @endif
{{--                        <p class="d-flex total-price">--}}
{{--                            <span>Tổng tiền</span>--}}
{{--                            <span>{{$cart->total_price}}</span>--}}
{{--                        </p>--}}
                    </div>
                </div>
                <div class="col-xl-8 sidebar ftco-animate" >
{{--                    <h3 class="mb-4 billing-heading">Đơn hàng của bạn</h3>--}}
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list">
                            <table class="table">
                                <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>SẢN PHẨM</th>
                                    <th>ẢNH</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>GÍA</th>
                                    <th>TỔNG TIỀN</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($order_details as $item)
                                    <tr>
                                        <td>{{ $item->product->name }}</td>
                                        <td>
                                            <img
                                                 src="{{ url('upload') }}/{{ $item->product->image }}"
                                                 alt="" width="100px">
                                        </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ number_format($item->price) }} đ</td>
                                        <td>{{ number_format($item->price*$item->quantity) }} đ </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class=""><h3 class="font-weight-bold text-green">TỔNG TIỀN</h3></td>
                                    <td colspan="3"><h3 class="font-weight-bold text-green">{{ number_format($order->total_price) }} đ</h3></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @stop()
