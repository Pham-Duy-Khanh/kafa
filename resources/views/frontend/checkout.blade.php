@extends('frontend.main')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 ftco-animate">
                    <form action="" class="billing-form ftco-bg-dark p-3 p-md-5" method="post">
                        @csrf
                        <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="firstname">Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="" value="{{Auth::user()->name}}" name="name">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="text" class="form-control" placeholder="" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" placeholder="" name="phone" value="{{Auth::user()->phone}}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">Địa chỉ</label>
                                    <input type="text" class="form-control" placeholder="" name="address">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="towncity">Note</label>
                                    <input type="text" class="form-control" placeholder="" name="note">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <input type="hidden" name="total_price" value="{{$cart->total_price}}" />
                        </div>
{{--                        <div class="bg-whitesmoke text-center rounded p-4">--}}
{{--                            <a href="" data-sweet-alert="success">--}}
{{--                                <img src="{{asset('public/bankend/assets/img/sweet-alert/example-04.jpg')}}" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <button class="btn btn-outline-success" type="submit" >ĐẶT HÀNG</button>
                    </form><!-- END -->

                </div> <!-- .col-md-8 -->
                <div class="col-xl-8 sidebar ftco-animate" >
                <h3 class="mb-4 billing-heading">Đơn hàng của bạn</h3>
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list">
                            <table class="table">
                                <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>Ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart->items as $c)
                                    <tr class="text-center">
                                        <td class="image-prod">
                                            <img src="{{url('upload')}}/{{$c['image']}}"  width="100px" alt="product">
                                            {{--                                <img  src="{{url('upload')}}/{{$value->image}}" alt="" >--}}
                                        </td>

                                        <td class="product-name">
                                            <h3>{{$c['name']}}</h3>
                                        </td>

                                        <td class="price">{{$c['price']}}</td>
                                        <td class="quantity">{{$c['quantity']}}</td>


                                        <td class="cart-product-price"><strong>${{$c['price'] * $c['quantity']}}</strong></td>
                                    </tr><!-- END TR-->
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Tổng giỏ hàng</h3>
                                <p class="d-flex">
                                    <span>Tổng tạm</span>
                                    <span>{{$cart->total_price}}</span>
                                </p>
                                <p class="d-flex">
                                    <span>Phí ship</span>
                                    <span>$0.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Tổng tiền</span>
                                    <span>{{$cart->total_price}}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-detail ftco-bg-dark p-3 p-md-5">
                                <h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2">Chuyển khoản</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2">Kiểm tra thanh toán</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2">Paypay</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop()
