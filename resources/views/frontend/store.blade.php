@extends('frontend.main')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">DANH SÁCH CỬA HÀNG</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="sidebar-box ftco-animate">
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
                        <br><br>
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
                                    <img class="blog-img mr-4"  src="{{url('upload')}}/{{$value->image}}" alt="" width="150px">
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

                    </div>
                </div>
            </div>
            <div class="col-md-9">

                <div class="row">
                    @foreach($store as $value)
                        <div class="col-md-4 text-center">
                            <div class="menu-entry">
                                <img src="{{url('upload')}}/{{$value->image}}" width="200px">
                                <div class="text text-center pt-4">
                                    <h3><a href="#">{{$value->name}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

    @stop()
