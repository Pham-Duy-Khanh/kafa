@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="main--content">
            <div class="panel">
                @if(Session::has('danger '))
                    <div class="alert alert-danger ">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('danger ')}}</strong>
                    </div>
                @endif
                <div class="col-md-10">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa mới banner</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('banner.update',$banner->id)}}" method="POST" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>
                                    @method('PUT')
                                    @csrf
                                    <span class="label-text">Tên bannen</span>
                                    <input type="text" name="name" placeholder="Nhập tên tiêu đề" class="form-control" id="name" onchange="ChangeToSlug()" value="{{$banner->name}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{$banner->slug}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Ảnh banner</span>
                                    <input type="file" name="file"  class="form-control" >
                                    <img src="{{url('upload')}}/{{$banner->image}}" width="50px">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Nội dung trên banner</span>
                                    <textarea type="text" name="content" id="content" class="form-control" rows="3" >{{$banner->content}}</textarea>
                                </label>
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>
                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" {{($banner['status']==1)?'checked':''}}  >
                                        <span class="form-radio-label" >Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="0" class="form-radio-input" {{($banner['status']==0)?'checked':''}}>
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Sửa banner</button>
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
