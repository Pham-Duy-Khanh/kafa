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
                    <div class="panel-body">
                        <h3 class="font-weight-bold text-secondary">TÌM KIẾM ĐƠN HÀNG</h3>
                        <form action="" method="get" class="form-inline" role="form">

                            <div class="form-group">
                                <input type="date" class="form-control" name="date_from" id="" placeholder="Input ...">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_to" id="" placeholder="Input ...">
                            </div>
                            <button class="btn btn-rounded btn-outline-danger">Tìm kiếm</button>
                        </form>
                    </div>
                <div class="records--list" data-title="Danh sách hóa đơn" >
                    <table id="recordsListView" id="my-table" >
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên khách hàng</th>
                            <th>Tổng tiền</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Ngày đặt</th>
                            <th>Trạng thái</th>
                            <th class="not-sortable">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{number_format($order->total_price)}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->created_at}}</span></td>
                                <td>
                                    @if ($order->status == 0)
                                        <span class="badge badge-secondary ">Chưa xử lý</span>
                                    @endif
                                    @if($order->status == 1)
                                        <span class="badge badge-warning">Đã xử lý</span>
                                    @endif
                                    @if($order->status == 3)
                                        <span class="badge badge-primary ">Đã nhận hàng</span>
                                    @endif
                                    @if($order->status == 4)
                                        <span class="badge badge-danger">Đã hủy hàng</span>
                                @endif

                                </td>
                                <td class="text-center">
                                    <a href="{{route('order_detail_backend',$order->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chi tiết đơn hàng"><i class="mdi mdi-eye btn-info btn"></i></a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4">
                    <!-- Sweet Alert -->
                    <div class="bg-whitesmoke text-center rounded p-4">
                        <a href="" data-sweet-alert="success" >
                            <img src="{{asset('public/backend/assets/img/sweet-alert/example-04.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4">
                    <!-- Sweet Alert -->
                    <div class="bg-whitesmoke text-center rounded p-4">
                        <a href="#" data-sweet-alert="info">
                            <img src="{{asset('public/backend/assets/img/sweet-alert/example-05.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4">
                    <!-- Sweet Alert -->
                    <div class="bg-whitesmoke text-center rounded p-4">
                        <a href="#" data-sweet-alert="warning">
                            <img src="{{asset('public/backend/assets/img/sweet-alert/example-06.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4">
                    <!-- Sweet Alert -->
                    <div class="bg-whitesmoke text-center rounded p-4">
                        <a href="#" data-sweet-alert="error">
                            <img src="{{asset('public/backend/assets/img/sweet-alert/example-07.jpg')}}" alt="">
                        </a>
                    </div>
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
