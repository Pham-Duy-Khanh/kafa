@extends('frontend.main')
@section('content')
    @if(session('alert'))
        <section class="alert alert-success">{{session('alert')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <br>
            <div class="panel-content">
                <button class="btn btn-block btn-info" >
                    <a href="{{route('home')}}">Tiếp tục mua hàng</a>

                </button>
            </div>
        </section>
    @endif

    @stop()
