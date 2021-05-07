@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                <div class="col-md-10">.
                    '

                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa cửa hàng</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('store.update',$store->id)}}" method="POST" role="form" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tên cửa hàng</span>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="name" onchange="ChangeToSlug()" value="{{$store->name}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{$store->slug}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <select name="id_storecate" id="input" class="form-control" required="required">
                                    <option value="1">Chọn tên danh mục</option>
                                    <@foreach ($storecate as $value)
                                        <option value="{{$value->id}}" {{($value->id == $store->id_storecate)?'selected':''}}>{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Ảnh</span>
                                    <input type="file" name="file"  class="form-control" >
                                    <img src="{{url('upload')}}/{{$store->image}}" width="150px;">
                                </label>
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>

                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" {{($store['status']==1)?'checked':''}}>
                                        <span class="form-radio-label" >Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="2" class="form-radio-input" {{($store['status']==0)?'checked':''}}>
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Sửa cửa hàng</button>
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
