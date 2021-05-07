@extends('backend.main')
@section('admin')
<main class="main--container">
    <section class="content">
        <div class="panel">
            @if(Session::has('danger '))
                <div class="alert alert-danger ">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('danger ')}}</strong>
                </div>
            @endif
            <div class="records--list" data-title="Danh sách sản phẩm" >
                <table id="recordsListView" id="my-table" >
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Đường dẫn</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Giá KM</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th class="not-sortable">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $value)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$value->category->name}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->slug}}</td>
                            <td><img src="../upload/{{$value->image}}"></td>
                            <td>{{$value->price}}</span></td>
                            <td>{{$value->discount}}</span></td>
                            <td>{{$value->quantity}}</td>

                            <td><span class="label label-success">{{($value->status==1)?'Ẩn':'Hiện'}}</td>
                            <td>
                                <div class="dropleft">
                                    <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                    <div class="dropdown-menu">
                                        <form action="{{route('product.destroy',$value->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="dropdown-item">Delete</button>
                                        </form>
                                        @method('PATH')
                                        <a href="{{route('product.edit',$value->id)}}" class="dropdown-item">Edit</a>
                                        {{--                                        <a href="{{route('delete_cate',['id'=>$value->id])}}" class="dropdown-item">Delete</a>--}}
                                    </div>
                                </div>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Main Content Start -->
    <footer class="main--footer main--footer-light">
        <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
    </footer>
</main>
    @stop()
