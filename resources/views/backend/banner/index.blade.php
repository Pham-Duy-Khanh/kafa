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
                <div class="records--list" data-title="Danh sách banner" >
                    <table id="recordsListView" id="my-table" >
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên banner</th>
                            <th>Đường dẫn</th>
                            <th>Ảnh banner</th>
{{--                            <th>Nội dung banner</th>--}}
                            <th>Trạng thái</th>
                            <th  class="not-sortable">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banner as $value)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->slug}}</td>
                                <td><img src="../upload/{{$value->image}}"></td>
{{--                                <td>{{$value->content}}</td>--}}
                                <td><span class="label label-success">{{($value->status==1)?'Ẩn':'Hiện'}}</td>
                                <td>
                                    <div class="dropleft">
                                        <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu">
                                            @method('PATH')
                                            <a href="{{route('banner.edit',$value->id)}}" class="dropdown-item">Edit</a>
                                            <form action="{{route('banner.destroy',$value->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="dropdown-item">Delete</button>
                                            </form>

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
