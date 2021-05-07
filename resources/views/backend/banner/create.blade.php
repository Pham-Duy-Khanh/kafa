@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="main--content">
            <div class="panel">
                <div class="col-md-10">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm mới banner</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('banner.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tên bannen</span>
                                    <input type="text" name="name" placeholder="Nhập tên tiêu đề" class="form-control" id="name" onchange="ChangeToSlug()" value="{{old('name')}}">
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
                                <label>
                                    <span class="label-text">Ảnh banner</span>
                                    <input type="file" name="file"  class="form-control" >
                                </label>
                                @if($errors->has('file'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('file')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Nội dung trên banner</span>
                                    <textarea type="text" name="content" id="content" class="form-control" rows="3" >{{old('content')}}</textarea>
                                </label>
                                @if($errors->has('content'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('content')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>
                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" @if(old('status')) checked @endif >
                                        <span class="form-radio-label" >Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="0" class="form-radio-input" @if(!old('status')) checked @endif >
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                                @if($errors->has('status'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('status')}}</span>
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Thêm banner</button>
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
