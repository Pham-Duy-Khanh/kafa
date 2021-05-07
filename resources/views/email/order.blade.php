<h2>Đơn hàng đã sẵn sàng để giao đến quý khách {{$c_name}} !</h2>
<h3 style="background: #0e90d2;color: white;text-align: center">KIỂM TRA TRẠNG THÁI CỦA ĐƠN HÀNG</h3>
<h4 style="color: #0e90d2">THÔNG TIN ĐƠN HÀNG / Mã đơn hàng: {{$order->id}} / Ngày đặt:{{$order->created_at}}</h4>
<div class="row">
    <div class="col-md-6">
        <h4>Thông tin thanh toán</h4>
        {{$c_name}}<br>
        {{$c_email}}
    </div>
    <div class="col-md-6">
        <h4>Địa chỉ giao hàng</h4>
        {{$c_name}}<br>
        {{$c_phone}}<br>
        {{$address}}
    </div>

</div>

<hr>
<h4 style="color: #0e90d2">CHI TIẾT ĐƠN HÀNG</h4>
<table class="table" border="2" cellpadding="10" cellspacing="0" width="600">
    <thead class="thead-primary">
    <tr class="text-center">
        <th>STT</th>
        <th>Tên SẢN PHẨM</th>
        <th>SỐ LƯỢNG</th>
        <th>ĐƠN GIÁ</th>
        <th>TỔNG TẠM</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cart->items as $c)
        <tr class="text-center">
            <td>{{$loop->index +1}}</td>
            <td class="product-name"><h3>{{$c['name']}}</h3></td>
            <td class="quantity">{{$c['quantity']}}</td>
            <td class="price">{{$c['price']}}</td>
            <td class="cart-product-price"><strong>${{$c['price'] * $c['quantity']}}</strong></td>
        </tr>

    @endforeach
    <tr>
        <td class=""><h3 class="font-weight-bold text-green">Tổng tiền</h3></td>
        <td colspan="4"><h3 class="font-weight-bold text-green">{{ number_format($order->total_price) }} đ</h3></td>
    </tr>
    </tbody>
</table>
<h3>KAFA cảm ơn quý khách !</h3>
