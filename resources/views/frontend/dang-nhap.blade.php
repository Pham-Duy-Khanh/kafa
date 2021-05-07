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
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/perfect-scrollbar.min.css')}}">
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

<div class="wrapper">
    <!-- Login Page Start -->
    <div class="m-account-w" src="{{asset('public/assets/img/kf.jpg')}}">
        <div class="m-account">
            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <!-- Login Content Start -->
                                    <div class="m-account--content-w" src="{{asset('public/assets/img/kf.jpg')}}">
                                        <div class="m-account--content">
                                            <h2 class="h2">Don't have an account?</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <a href="{{route('dang_ky')}}" class="btn btn-rounded">Register Now</a>
                                        </div>
                                    </div>
                                    <!-- Login Content End -->
                                </div>

                <div class="col-md-6">
                    <!-- Login Form Start -->
                    <div class="m-account--form-w">
                        <div class="m-account--form">
                            <!-- Logo Start -->
                            <div class="logo">
                                <img src="{{asset('public/backend/assets/img/logo.png')}}" alt="" >
                            </div>
                            <!-- Logo End -->
                            @if(Session::has('danger'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{Session::get('danger')}}</strong>
                                </div>
                            @endif
                            <form action="" method="post">
                                @csrf
                                <label class="m-account--title">Login to your account</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-user"></i>
                                        </div>

                                        <input type="text" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
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

                                <div class="m-account--actions">
                                    <a href="#" class="btn-link">Forgot Password?</a>

                                    <button type="submit" class="btn btn-rounded btn-info">Login</button>
                                </div>

                                <div class="m-account--alt">
                                    <p><span>OR LOGIN WITH</span></p>

                                    <div class="btn-list">
                                        <a href="#" class="btn btn-rounded btn-warning">Facebook</a>
                                        <a href="#" class="btn btn-rounded btn-warning">Google</a>
                                    </div>
                                </div>

                                <div class="m-account--footer">
                                    <p>&copy; 2018 ThemeLooks</p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End -->
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
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<!-- Page Level Scripts -->

</body>
</html>
