 @extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                <div class="col-md-10">
                    <!-- Panel Start -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm sản phẩm</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tên sản phẩm</span>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="name" onchange="ChangeToSlug()" value="{{old('name')}}">
                                </label>
                                @if($errors->has('name'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('name')}}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <select name="id_category" id="input" class="form-control" >
                                    <option value="">Chọn tên danh mục</option>
                                    <@foreach ($category as $value)
                                        @if (old('id_category')==$value->id)
                                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                        @else
                                            <option value="{{$value->id}}" >{{$value->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('id_category'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('id_category')}}</span>
                                    </div>
                                @endif

                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Giá</span>
                                    <input type="text" name="price"  class="form-control" value="{{old('price')}}">
                                </label>
                                @if($errors->has('price'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('price')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Giá khuyến mãi</span>
                                    <input type="text" name="discount"  class="form-control" value="{{old('discount')}}">
                                </label>
                                @if($errors->has('discount'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('discount')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Ảnh</span>
                                    <input type="file" name="file"  class="form-control" value="{{old('file')}}">
                                </label>
                                @if($errors->has('image'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('image')}}</span>
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
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{old('slug')}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Mô tả</span>
                                    <textarea type="text" name="desscaption" id="desscaption" class="form-control" rows="3" >{{old('desscaption')}}</textarea>
                                </label>
                                @if($errors->has('desscaption'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('desscaption')}}</span>
                                    </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tổng tiền</span>
                                    <input type="text" name="quantity" placeholder="Tổng tiền" class="form-control" value="{{old('quantity')}}" >
                                </label>
                                @if($errors->has('quantity'))
                                    <div class="helper">
                                        <span style="color: red">{{$errors->first('quantity')}}</span>
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Thêm sản phẩm</button>
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
