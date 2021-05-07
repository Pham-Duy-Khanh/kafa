@extends('backend.main')
@section('admin')
    <main class="main--container">
        <section class="content">
            <div class="panel">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('success')}}</strong>
                    </div>
                @endif
                <div class="records--list" data-title="Danh sách hệ thống cửa hàng" >
                    <table id="recordsListView" id="my-table" >
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th class="not-sortable">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($storecate as $value)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->slug}}</td>
                                <td><span class="label label-success">{{($value->status==1)?'Ẩn':'Hiện'}}</td>
                                <td>
                                    <div class="dropleft">
                                        <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                        <div class="dropdown-menu">
                                            <form action="{{route('storecate.destroy',$value->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="dropdown-item">Delete</button>
                                            </form>
                                            @method('PATH')
                                            <a href="{{route('storecate.edit',$value->id)}}" class="dropdown-item">Edit</a>
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
