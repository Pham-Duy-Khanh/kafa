@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="main--content">
            <div class="panel">
                <div class="col-md-10">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa mới tin tức</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('blog.update',$blog->id)}}" method="POST" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>
                                    @method('PUT')
                                    @csrf
                                    <span class="label-text">Tiêu đề tin tức</span>
                                    <input type="text" name="name" placeholder="Nhập tên tiêu đề" class="form-control" id="name" onchange="ChangeToSlug()" value="{{$blog->name}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{$blog->slug}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Ảnh</span>
                                    <input type="file" name="file"  class="form-control" >
                                    <img src="{{url('upload')}}/{{$blog->image}}" width="150px">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Nội dung bài viết</span>
                                    <textarea type="text" name="content" id="content" class="form-control" rows="3" required="required">{{$blog->content}}</textarea>
                                </label>
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>
                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" {{($blog['status']==1)?'checked':''}} >
                                        <span class="form-radio-label" >Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="2" class="form-radio-input" {{($blog['status']==2)?'checked':''}}>
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Sửa tin tức</button>
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
