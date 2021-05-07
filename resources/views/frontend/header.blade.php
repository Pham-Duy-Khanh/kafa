<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">kafa<small>coffee</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">tin tức</a></li>
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">sản phẩm</a></li>


                @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{Auth::user()->name}}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{route('order-frontend')}}">Quản lý đơn hàng</a>
                            <a class="dropdown-item" href="#">Cập nhật thông tin</a>
                            <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a href="{{route('dang-nhap')}}" class="nav-link">Login</a></li>
                @endif

                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Liên hệ</a></li>
                <li class="nav-item cart"><a href="{{route('show-cart')}}" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>{{$cart->total_quantity}}</small></span></a></li>
            </ul>
        </div>
    </div>
</nav>
