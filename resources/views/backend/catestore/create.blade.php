@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                <div class="col-md-9">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm hệ thống cửa hàng</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('storecate.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tên danh mục</span>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="name" onchange="ChangeToSlug()" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <div class="helper">
                                            <span style="color: red">{{$errors->first('name')}}</span>
                                        </div>
                                    @endif
                                </label>

                            </div>

                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{old('slug')}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>

                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" @if(old('status')) checked @endif>
                                        <span class="form-radio-label" >Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="0" class="form-radio-input" @if(!old('status')) checked @endif>
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                                @if($errors->has('status'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('status')}}</span>
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Thêm Hệ Thống Cửa Hàng</button>
                        </form>

                    </div>
                </div>

                <!-- Panel End -->
            </div>
        </section>
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
        </footer>
    </main>
@stop()
