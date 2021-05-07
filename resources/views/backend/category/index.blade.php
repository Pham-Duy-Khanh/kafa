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
                <div class="records--list" data-title="Danh sách danh mục" >
                    <div class="container" align="center" style="margin-top: 10px">
                        <button class="btn btn-info" style="text-align: center;">KAFA LÝ THƯỜNG KIỆT (02/11 - 08/11)</button>
                    </div>
                    
                    <table id="recordsListView" id="my-table" style="background-color: pink" >
                        <thead>
                        <tr >
                            <th>STT</th>
                            <th>Mã NV</th>
                            <th>Họ và tên</th>
                            <th>Vị trí</th>
                            <th>T2</th>
                            <th>T3</th>
                            <th>T4</th>
                            <th>T5</th>
                            <th>T6</th>
                            <th>T7</th>
                            <th>CN</th>
                         </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="11" style="text-align:center; ;color: blue">Ca Sáng</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KF285</td>
                                <td>NGUYỄN HỒNG THƠM</td>
                                <td>CHT</td>
                                <td>S</td>
                                 <td>S</td>
                                  <td>S</td>
                                  <td>S</td>
                                  <td>S</td>
                                  <td>S</td>
                                  <td style="color: red">OFF</td>
                            </tr>
                           
                            <tr>
                                <td>2</td>
                                <td>KF946</td>
                                <td>NGUYỄN HÙNG PHƯƠNG</td>
                                <td>TCPV</td>
                                <td>S</td>
                                 <td>S</td>
                                  <td>ST</td>
                                  <td>S</td>
                                  <td>S</td>
                                  <td>S</td>
                                  <td>S</td>
                            </tr>
                            <tr>
                                <td colspan="11" style="text-align:center;color: blue">Ca Chiều</td>
                            </tr>
                           
                            <tr>
                                <td>3</td>
                                <td>KF183</td>
                                <td>BÙI VĂN HẢI</td>
                                <td>PC</td>
                                <td>GC</td>
                                 <td>GC</td>
                                  <td>GC</td>
                                  <td>GC</td>
                                  <td>GC</td>
                                  <td>GC</td>
                                  <td>GC</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>KF148</td>
                                <td>TRẦN NGỌC TOÀN</td>
                                <td>PV</td>
                                <td>C</td>
                                 <td>C</td>
                                 <td>C</td>                                  
                                 <td>C</td>
                                  <td>C</td>
                                  <td>C</td>
                                  <td>C</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>KF952</td>
                                <td>HOÀNG VĂN TÚ</td>
                                <td>PV</td>
                                <td>15h-19h</td>
                                 <td>15h-19h</td>
                                 <td>11h-19h</td>                                  
                                 <td>15h-19h</td>
                                  <td>15h-19h</td>
                                  <td>15h-19h</td>
                                  <td>15h-19h</td>
                            </tr>
                             
                        <!-- @foreach($category as $value)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->slug}}</td>
{{--                                <td>{{$value->created_at}}</span></td>--}}
{{--                                <td>{{$value->update_at}}</span></td>--}}
                                <td><span class="label label-success">{{($value->status==1)?'Ẩn':'Hiện'}}</td>
                                <td>
                                    <div class="dropleft">
                                        <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                        <div class="dropdown-menu">
                                            <form action="{{route('category.destroy',$value->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="dropdown-item">Delete</button>
                                            </form>
                                            @method('PATH')
                                            <a href="{{route('category.edit',$value->id)}}" class="dropdown-item">Edit</a>
                                            {{--                                        <a href="{{route('delete_cate',['id'=>$value->id])}}" class="dropdown-item">Delete</a>--}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach -->
                    </tbody>
                </table> 
                        </tbody>
                    </table>
                    </table>
                </div>

            </div>
        </section>
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
        </footer>
    </main>
    @stop()
