@extends('frontend.main')
@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
{{--                <h2 class="mb-4">DANH SÁCH SẢN PHẨM</h2>--}}
                <div class="search--box">
                    <form action="{{route('search')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Bạc sỉu đá..." name="key">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-rounded btn-info"><i class="fa fa-search mr-1"></i>Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>DANH MỤC SP</h3>
                            @foreach($category as $value)
                            <li>
                                <a href="{{route('cate-pro',['id'=>$value->id])}}">{{$value->name}}<span>@if ($value->product->count() != 0)
                                            {{ $value->product->count() }}
                                        @endif</span></a>
                            </li>
                            @endforeach
                        </div>

                        <br><br>
                        <div class="blogs">
                            <h3>Tin tức</h3>
                            @foreach($blog as $value)
                            <div class="block-21 mb-4 d-flex">
                                <img class="blog-img mr-4"  src="{{url('upload')}}/{{$value->image}}" alt="" width="100px">
                                <div class="text">
                                    <h6 class="heading" style="font-size: 10px"><a href="{{route('blog-detail',['id'=>$value->id])}}">{{$value->name}}</a></h6>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span>{{$value->created_at}}</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <br><br>
                        <div class="categories">
                            <h3>HỆ THỐNG CỬA HÀNG</h3>
                            @foreach($storecate as $value)
                                <li>
                                    <a href="{{route('cate-store',['id'=>$value->id])}}">{{$value->name}}<span>@if ($value->store->count() != 0)
                                                {{ $value->store->count() }}
                                            @endif</span></a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                    @foreach($product as $value)
                        <div class="col-md-4 text-center">
                            <div class="menu-entry">
                                <img src="{{url('upload')}}/{{$value->image}}" width="200px">
                                <div class="text text-center pt-4">
                                    <h3><a href="#">{{$value->name}}</a></h3>
                                    <p>  @if ($value->discount > 0)
                                        <div class="pro-price">
                                            <del> <span class="old-price">{{ number_format($value->price) }}đ</span></del>
                                            <span class="new-price" style="color: white">{{ number_format($value->price - ($value->price * $value->discount) / 100) }}đ</span>

                                        </div>
                                    @else
                                        <div class="pro-price">
                                            <span class="new-price" style="color: white">{{ number_format($value->price) }}đ</span>
                                        </div>
                                        @endif</p>
                                        <a href="{{route('product-detail',['id'=>$value->id])}}" class="btn btn-primary btn-outline-primary">Xem chi tiết</a>
                                        <a href="{{route('add-cart',['id'=>$value->id])}}" class="btn btn-primary btn-outline-success">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
{{--                <div class="row mt-10">--}}
{{--                    <div class="col text-center">--}}
{{--                        <div class="block-27">--}}
{{--                            <ul>--}}
{{--                                <li> {!!$product->render()!!}</li>--}}
{{--                                <li>{{$product->links()}}</li>--}}
{{--                                {{ $product->fragment('foo')->links() }}--}}
{{--                               <li>{{ $product->links() }}</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-5">--}}
{{--                    <div class="col text-center">--}}
{{--                        <div class="block-27">--}}
{{--                            <ul>--}}
{{--                                <li>{{$product->links()}}</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                    <ul class="pagination justify-content-center">--}}
{{--                        <li class="page-item">--}}
{{--                            <a href="#" class="page-link">--}}
{{--                                <i class="fa fa-angle-left"></i>--}}
{{--                                Prev--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">{{$product->links()}}</li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a href="#" class="page-link">--}}
{{--                                Next--}}
{{--                                <i class="fa fa-angle-right"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 mb-4">--}}

{{--                    <ul class="pagination pagination-circular justify-content-center">--}}
{{--                        <li class="page-item">--}}
{{--                            <a href="#" class="page-link border-0">--}}
{{--                                <i class="fa fa-angle-left"></i>--}}
{{--                                Prev--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">{{$product->links()}}</a></li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a href="#" class="page-link border-0">--}}
{{--                                Next--}}
{{--                                <i class="fa fa-angle-right"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}


{{--            </div>--}}
                <div class="col-lg-3 col-md-6 mb-4" style="text-align: center">
                    <ul class="pagination pagination-circular justify-content-center">
                        <li class="page-item">
{{--                            <a href="#" class="page-link">--}}
{{--                                <i class="fa fa-angle-left"></i>--}}
{{--                            </a>--}}
                        </li>
                        <li class="page-item" >{{$product->render()}}</li>

                        <li class="page-item">
{{--                            <a href="#" class="page-link">--}}
{{--                                <i class="fa fa-angle-right"></i>--}}
{{--                            </a>--}}
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</section>
@stop()

