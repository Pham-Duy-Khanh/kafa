@include('frontend.header.header-link-href')
@include('frontend.header')
<!-- END nav -->
<section class="ftco-counter ftco-bg-dark img" id="section-counter"
         style="background-image: url('{{asset('public/frontend/images/bg_2.jpg')}}');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
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
                                <td class="product-remove"><a href="{{route('delete-cart',['id'=>$c['id']])}}"><span
                                            class="icon-close"></span></a></td>

                                <td class="image-prod">
                                    <img src="{{url('upload')}}/{{$c['image']}}" width="100px" alt="product">
                                    {{--                                <img  src="{{url('upload')}}/{{$value->image}}" alt="" >--}}
                                </td>

                                <td class="product-name">
                                    <h3>{{$c['name']}}</h3>
                                </td>

                                <td class="price">{{$c['price']}}</td>

                                <td class="quantity">
                                    <form action="{{route('update')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$c['id']}}">
                                        <div class="quantity">
                                            <input type="number" class="quantity form-control input-number" name="qty"
                                                   id="pro_qty" value="{{$c['quantity']}}" min="1" max="100">
                                        </div>
                                    </form>
                                </td>

                                <td class="cart-product-price"><strong>{{$c['price'] * $c['quantity']}}đ</strong></td>
                            </tr><!-- END TR-->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>TỔNG GIỎ HÀNG</h3>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        <span>{{$cart->total_price}}đ</span>
                    </p>
                </div>
                <p class="text-center"><a href="{{route('checkout')}}" class="btn btn-primary py-3 px-4">Kiểm tra đơn
                        hàng</a></p>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer.footer-contact')

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>
@include('frontend.footer.footer-script')
