@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                <div class="col-md-10">.
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa sản phẩm</h3>
                    </div>

                    <div class="panel-content">
                        <form action="{{route('product.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>

                                    <span class="label-text">Tên sản phẩm</span>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="name" onchange="ChangeToSlug()" value="{{$product->name}}">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <select name="id_category" id="input" class="form-control" required="required">
                                    <option value="1">Chọn tên danh mục</option>
                                    <@foreach ($category as $value)
                                        <option value="{{$value->id}}" {{($value->id == $product->id_category)?'selected':''}}>{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Giá</span>
                                    <input type="number" name="price"  class="form-control" value="{{$product->price}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Giá khuyến mãi</span>
                                    <input type="number" name="discount"  class="form-control" value="{{$product->discount}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Ảnh</span>
                                    <input type="file" name="file"  class="form-control" >
                                    <img src="{{url('upload')}}/{{$product->image}}" width="150px;">
                                </label>
                            </div>
                            <div class="form-group">
                                <span class="label-text">Trạng thái</span>

                                <div class="form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="1" class="form-radio-input" {{($product['status']==1)?'checked':''}}>
                                        <span class="form-radio-label" >Ẩn</span>
                                    </label>

                                    <label class="form-radio">
                                        <input type="radio" name="status" value="0" class="form-radio-input" {{($product['status']==0)?'checked':''}}>
                                        <span class="form-radio-label">Hiện</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Đường dẫn đẹp</span>
                                    <input type="text" name="slug" placeholder="Đường dẫn đẹp" class="form-control" id="slug" value="{{$product->slug}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Mô tả</span>
                                    <textarea name="desscaption" id="desscaption" class="form-control" rows="3" required="required">{{$product->desscaption}}</textarea>
                                </label>
                            </div>


                            <div class="form-group">
                                <label>
                                    <span class="label-text">Tổng tiền</span>
                                    <input type="text" name="quantity" placeholder="Tổng tiền" class="form-control" value="{{$product->quantity}}" >
                                </label>
                            </div>

                            <button type="submit" class="btn btn-sm btn-rounded btn-success">Sửa sản phẩm</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
        </footer>
    </main>
    @stop()
