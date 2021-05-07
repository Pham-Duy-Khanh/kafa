@extends('frontend.main')
@section('content')
{{--    <div class="breadcrumb-area bg-12 text-center">--}}
{{--        <div class="container">--}}
{{--            <h1>Đơn hàng</h1>--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ul class="breadcrumb">--}}
{{--                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Breadcrumb Area End -->
    <!-- Cart Area Start -->
{{--    <div class="cart-area table-area pt-50 pb-95">--}}
{{--        <div class="container">--}}
{{--            @if (Session::has('success'))--}}
{{--                <div class="alert bg-green text-white alert-dismissible fade show" role="alert">--}}
{{--                    {{ Session::get('success') }}--}}
{{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                        <span aria-hidden="true">×</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if ($orders->count()>0)--}}
{{--                <div class="table-responsive bg-white">--}}
{{--                    <table class="table product-table text-center">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th class="table-image">Mã đơn hàng</th>--}}
{{--                            <th class="table-p-name">Tổng tiền</th>--}}
{{--                            <th class="">Ngày đặt</th>--}}
{{--                            <th class="table-p-price">Trạng thái</th>--}}
{{--                            <th class="table-p-qty">Xem chi tiết</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach ($orders as $order)--}}
{{--                            <tr>--}}
{{--                                <td class="table-p-name">--}}
{{--                                    {{ $order->id }}--}}
{{--                                </td>--}}
{{--                                <td class="table-p-name">--}}
{{--                                    {{ number_format($order->total_price) }} đ--}}
{{--                                </td>--}}
{{--                                <td class="table-p-name">--}}
{{--                                    {{ $order->created_at }}--}}
{{--                                </td>--}}
{{--                                <td class="table-p-price">--}}
{{--                                    @if ($order->status == 0)--}}
{{--                                        <span class="badge badge-pill badge-soft-secondary  font-size-12">Chưa xử lý</span>--}}
{{--                                    @endif--}}
{{--                                    @if ($order->status == 1)--}}
{{--                                        <span class="badge badge-pill badge-soft-warning font-size-12">Đã xử lý</span>--}}
{{--                                    @endif--}}
{{--                                    @if ($order->status == 2)--}}
{{--                                        <span class="badge badge-pill badge-soft-success font-size-12">Đang giao hàng</span>--}}
{{--                                    @endif--}}
{{--                                    @if ($order->status == 3)--}}
{{--                                        <span class="badge badge-pill badge-soft-success font-size-12">Đã nhận hàng</span>--}}
{{--                                    @endif--}}
{{--                                    @if ($order->status == 4)--}}
{{--                                        <span class="badge badge-pill badge-soft-danger font-size-12">Đã hủy hàng</span>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td class="table-remove">--}}
{{--                                   <a href="{{ route('order-detail-frontend', ['id'=>$order->id]) }}"><i class="fa fa-eye btn" style="background: red"></i></a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            @else--}}
{{--                <div class="" role="alert">--}}
{{--                    <h4>--}}
{{--                        <strong>Bạn chưa mua gì</strong>--}}
{{--                        , quay lại <strong><a href="{{ route('home') }}">shop</a></strong> để tiếp tục mua hàng.--}}
{{--                    </h4>--}}
{{--                    <a href="{{ route('home') }}" class="btn btn-green text-white btn-lg">Quay lại</a>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
        <!-- Cart Area End -->

        <section class="ftco-section ftco-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list">
                            <table class="table">
                                <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>Mã đơn hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Trạng thái</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td class="table-p-name">
                                        {{ $order->id }}
                                    </td>
                                    <td class="table-p-name">
                                        {{ number_format($order->total_price) }} đ
                                    </td>
                                    <td class="table-p-name">
                                        {{ $order->created_at }}
                                    </td>
                                    <td class="table-p-price">
                                        @if ($order->status == 0)
                                            <span class="badge badge-pill badge-soft-secondary  font-size-12" >Chưa xử lý</span>
                                        @endif
                                        @if ($order->status == 1)
                                                <span class="badge badge-pill badge-soft-warning font-size-12" style="color: yellow">Đã xử lý</span>
                                            @endif
                                            @if ($order->status == 2)
                                                <span class="badge badge-pill badge-soft-success font-size-12" style="color: #1a712c">Đang giao hàng</span>
                                            @endif
                                            @if ($order->status == 3)
                                                <span class="badge badge-pill badge-soft-success font-size-12" style="color: #0e90d2">Đã nhận hàng</span>
                                            @endif
                                            @if ($order->status == 4)
                                                <span class="badge badge-pill badge-soft-danger font-size-12" style="color: red">Đã hủy hàng</span>
                                            @endif
                                    </td>
                                    <td class="table-remove">
                                        <a href="{{ route('order-detail-frontend', ['id'=>$order->id]) }}"><i class="fa fa-eye btn btn-outline-success" ></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @stop()
