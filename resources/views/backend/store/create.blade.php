@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                <div class="col-md-10">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm cửa hàng</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('store.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tên cửa hàng</span>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="name" onchange="ChangeToSlug()" value="{{old('name')}}">
                                </label>
                                @if($errors->has('name'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('name')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{old('slug')}}">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="">Tên hệ thống</label>
                                <select name="id_storecate" id="input" class="form-control" >
                                    <option value="">Chọn tên danh mục</option>
                                    <@foreach ($storecate as $value)
                                        @if (old('id_storecate')==$value->id)
                                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                        @else
                                            <option value="{{$value->id}}" >{{$value->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('id_storecate'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('id_storecate')}}</span>
                                    </div>
                                @endif

                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Ảnh</span>
                                    <input type="file" name="file"  class="form-control" value="{{old('file')}}">
                                </label>
                                @if($errors->has('file'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('file')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>
                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input"  @if(old('status')) checked   @endif>
                                        <span class="form-radio-label"  >Ẩn</span>

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

                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Thêm cửa hàng</button>
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
