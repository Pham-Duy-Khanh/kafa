@extends('frontend.main')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Danh sách tin tức</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($blog as $value)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <img  src="{{url('upload')}}/{{$value->image}}" alt="" width="100%">
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a href="#">{{$value->created_at}}</a></div>
                                    {{--                            <div><a href="#">Admin</a></div>--}}
                                    {{--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
                                </div>
                              <h3 class="heading mt-2"><a href="{{route('blog-detail',['id'=>$value->id])}}">{{$value->name}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @stop()
