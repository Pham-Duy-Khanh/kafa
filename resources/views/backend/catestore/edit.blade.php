@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                <div class="col-md-9">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa hệ thống cửa hàng</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('storecate.update',$storecate->id)}}" method="POST" role="form">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tên danh mục</span>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="name" onchange="ChangeToSlug()" value="{{$storecate->name}}">
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{$storecate->slug}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>

                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" {{($storecate['status']==1)?'checked':''}}>
                                        <span class="form-radio-label">Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="0" class="form-radio-input" {{($storecate['status']==0)?'checked':''}}>
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Sửa danh mục</button>
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
