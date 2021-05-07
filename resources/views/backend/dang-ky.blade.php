<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - DAdmin</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/perfect-scrollbar.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/morris.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/jquery-jvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/horizontal-timeline.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/ion.rangeSlider.skinFlat.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/style.css')}}">

    <!-- Page Level Stylesheets -->

</head>
<body>

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Register Page Start -->
    <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
        <div class="m-account">
            <div class="row no-gutters flex-row-reverse">
                <div class="col-md-6">

                    <!-- Register Content Start -->
                    <div class="m-account--content-w" data-bg-img="assets/img/account/content-bg.jpg">
                        <div class="m-account--content">
                            <h2 class="h2">Have an account?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="{{route('login')}}" class="btn btn-rounded">Login Now</a>
                        </div>
                    </div>
                    <!-- Register Content End -->
                </div>

                <div class="col-md-6">
                    <!-- Register Form Start -->
                    <div class="m-account--form-w">
                        <div class="m-account--form">
                            <!-- Logo Start -->
                            <div class="logo">
                                <img src="{{asset('public/assets/img/logo.png')}}" alt="">
                            </div>
                            <!-- Logo End -->

                            <form action="#" method="post" role="form">
                                @csrf
                                <label class="m-account--title">Create your account</label>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-user"></i>
                                        </div>

                                        <input type="text" name="name" placeholder="Username" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-envelope"></i>
                                        </div>

                                        <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-key"></i>
                                        </div>

                                        <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>

                                {{--                                    <div class="form-group pt-3">--}}
                                {{--                                        <label class="form-check">--}}
                                {{--                                            <input type="checkbox" name="checkbox" value="1" class="form-check-input">--}}
                                {{--                                            <span class="form-check-label">I agree all statements in <a href="#">terms of service</a></span>--}}
                                {{--                                        </label>--}}
                                {{--                                    </div>--}}

                                <div class="m-account--actions">
                                    <button type="submit" class="btn btn-block btn-rounded btn-info">Register</button>
                                </div>

                                <div class="m-account--footer">
                                    <p>&copy; 2018 ThemeLooks</p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Register Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Register Page End -->
</div>
<!-- Wrapper End -->

<!-- Scripts -->
<script src="{{asset('public/backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/raphael.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/morris.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/select2.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/jquery-jvectormap-world-mill.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/horizontal-timeline.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/jquery.steps.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/dropzone.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/datatables.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/main.js')}}"></script>

<!-- Page Level Scripts -->

</body>
</html>

