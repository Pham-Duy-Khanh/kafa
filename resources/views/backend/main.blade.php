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
    <link rel="icon" href="{{asset('public/backend/favicon.png')}}" type="image/png">

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
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/sweetalert-overrides.css')}}">

</head>
<body>

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Navbar Start -->
    <header class="navbar navbar-fixed">
        <!-- Navbar Header Start -->
        <div class="navbar--header">
            <!-- Logo Start -->
            <a href="index.html" class="logo">
                <img src="{{asset('public/backend/assets/img/logokafa.jpg')}}" alt="" width="">
            </a>
            <!-- Logo End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->
        </div>
        <!-- Navbar Header End -->

        <!-- Sidebar Toggle Button Start -->
        <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
            <i class="fa fa-bars"></i>
        </a>
        <!-- Sidebar Toggle Button End -->

        <!-- Navbar Search Start -->
        <div class="navbar--search">
            <form action="{{route('search')}}" method="get">
                <input type="search" name="keyword" class="form-control" placeholder="Search Something..." required>
                <button class="btn-link"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Navbar Search End -->

        <div class="navbar--nav ml-auto">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bell"></i>
                        <span class="badge text-white bg-blue">7</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa fa-envelope"></i>
                        <span class="badge text-white bg-blue">4</span>
                    </a>
                </li>

                <!-- Nav Language Start -->
                <li class="nav-item dropdown nav-language">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <img src="{{asset('public/backend/assets/img/flags/us.png')}}" alt="">
                        <span>English</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <img src="{{asset('public/backend/assets/img/flags/de.png')}}" alt="">
                                <span>German</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="{{asset('public/backend/assets/img/flags/fr.png')}}" alt="">
                                <span>French</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="{{asset('public/backend/assets/img/flags/us.png')}}" alt="">
                                <span>English</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Nav Language End -->

                <!-- Nav User Start -->
                <li class="nav-item dropdown nav--user online">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <img src="{{asset('public/backend/assets/img/user.jpg')}}" alt="" class="rounded-circle">
                        <span>{{Auth::user()->name}}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
                        <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
                        <li><a href="{{route('dang-xuat')}}"><i class="fa fa-power-off"></i>Logout</a></li>
                    </ul>
                </li>
                <!-- Nav User End -->
            </ul>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Sidebar Start -->
    <aside class="sidebar" data-trigger="scrollbar">
        <!-- Sidebar Profile Start -->
        <div class="sidebar--profile">
            <div class="profile--img">
                <a href="profile.html">
                    <img src="{{asset('public/backend/assets/img/user.jpg')}}" alt="" class="rounded-circle">
                </a>
            </div>

            <div class="profile--name">
                <a href="profile.html" class="btn-link">{{Auth::user()->name}}</a>
            </div>

            <div class="profile--nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="profile.html" class="nav-link" title="User Profile">
                            <i class="fa fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="lock-screen.html" class="nav-link" title="Lock Screen">
                            <i class="fa fa-lock"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mailbox_inbox.html" class="nav-link" title="Messages">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dang-xuat')}}" class="nav-link" title="Logout">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar Profile End -->

        <!-- Sidebar Navigation Start -->
        <div class="sidebar--nav">
            <ul>
                <li>
                    <ul>
                        <li class="active">
                            <a href="{{route('backend.home')}}">
                                <i class="fa fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-list-alt"></i>
                                <span>Qu???n l?? danh m???c</span>
                            </a>

                            <ul>
                                <li><a href="{{route('category.index')}}">Danh s??ch danh m???c</a></li>
                                <li><a href="{{route('category.create')}}">Th??m danh m???c</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-th-list"></i>
                                <span>Qu???n l?? s???n ph???m</span>
                            </a>

                            <ul>
                                <li><a href="{{route('product.index')}}">Danh s??ch s???n ph???m</a></li>
                                <li><a href="{{route('product.create')}}">Th??m s???n ph???m</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-newspaper"></i>
                                <span>Qu???n l?? banner</span>
                            </a>

                            <ul>
                                <li><a href="{{route('banner.index')}}">Danh s??ch banner</a></li>
                                <li><a href="{{route('banner.create')}}">Th??m banner</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-wpforms"></i>
                                <span>Qu???n l?? tin t???c</span>
                            </a>

                            <ul>
                                <li><a href="{{route('blog.index')}}">Danh s??ch tin t???c</a></li>
                                <li><a href="{{route('blog.create')}}">Th??m tin t???c</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-home"></i>
                                <span>Qu???n l?? h??? th???ng</span>
                            </a>

                            <ul>
                                <li><a href="{{route('storecate.index')}}">Danh s??ch h??? th???ng</a></li>
                                <li><a href="{{route('storecate.create')}}">Th??m h??? th???ng</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-home"></i>
                                <span>Qu???n l?? c???a h??ng</span>
                            </a>

                            <ul>
                                <li><a href="{{route('store.index')}}">Danh s??ch c???a h??ng</a></li>
                                <li><a href="{{route('store.create')}}">Th??m c???a h??ng</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cart-plus"></i>
                                <span>Qu???n l?? h??a ????n</span>
                            </a>

                            <ul>
                                <li><a href="{{route('order_backend')}}">Danh s??ch h??a ????n</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Layouts</a>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Page Layouts</span>
                            </a>

                            <ul>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="page-light.html">Page Light</a></li>
                                <li><a href="sidebar-light.html">Sidebar Light</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-th-list"></i>
                                <span>Footers</span>
                            </a>

                            <ul>
                                <li><a href="footer-light.html">Footer Light</a></li>
                                <li><a href="footer-dark.html">Footer Dark</a></li>
                                <li><a href="footer-transparent.html">Footer Transparent</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Components</a>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-newspaper"></i>
                                <span>UI Elements</span>
                            </a>

                            <ul>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="progress-bars.html">Progress Bars</a></li>
                                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="ui-slider.html">UI Slider</a></li>
                                <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-wpforms"></i>
                                <span>Form</span>
                            </a>

                            <ul>
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Apps and Charts</a>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-envelope"></i>
                                <span>Mailbox</span>
                            </a>

                            <ul>
                                <li><a href="mailbox_inbox.html">Inbox</a></li>
                                <li><a href="mailbox_compose.html">Compose</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="far fa-calendar-alt"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <i class="far fa-comments"></i>
                                <span>Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="contacts.html">
                                <i class="far fa-address-book"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="notes.html">
                                <i class="far fa-sticky-note"></i>
                                <span>Notes</span>
                            </a>
                        </li>
                        <li>
                            <a href="todo-list.html">
                                <i class="fa fa-tasks"></i>
                                <span>Todo List</span>
                            </a>
                        </li>
                        <li>
                            <a href="search-results.html">
                                <i class="fa fa-search"></i>
                                <span>Search Results</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Extra</a>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-file"></i>
                                <span>Extra Pages</span>
                            </a>

                            <ul>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="404.html">404 Error</a></li>
                                <li><a href="500.html">500 Error</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar Navigation End -->

        <!-- Sidebar Widgets Start -->
        <div class="sidebar--widgets">
            <div class="widget">
                <h3 class="h6 widget--title">Information Summary</h3>

                <!-- Summary Widget Start -->
                <div class="summary--widget">
                    <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                        <p class="summary--title">Daily Traffic</p>
                        <p class="summary--stats">307.512</p>
                    </div>

                    <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                        <p class="summary--title">Average Usage</p>
                        <p class="summary--stats">2,371,527</p>
                    </div>

                    <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                        <p class="summary--title">Disk Usage</p>
                        <p class="summary--stats">37.5%</p>
                    </div>

                    <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                        <p class="summary--title">CPU Usage</p>
                        <p class="summary--stats">37.05-32</p>
                    </div>

                    <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                        <p class="summary--title">Memory Usage</p>
                        <p class="summary--stats">37.05%</p>
                    </div>
                </div>
                <!-- Summary Widget End -->
            </div>
        </div>
        <!-- Sidebar Widgets End -->
    </aside>
    <!-- Sidebar End -->

    <!-- Main Container Start -->

    <!-- Main Container End -->

    @yield('admin')


    <!-- Main Footer End -->

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
<script src="{{asset('public/backend/assets/js/sweetalert.min.js')}}"></script>
<script src="{{asset('public/backend/assets/js/sweetalert-init.js')}}"></script>
{{--<script>--}}
{{--    CKEDITOR.replace('desscaption');--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function(){--}}
{{--        $("my-table").DataTable();--}}
{{--    })--}}
{{--</script>--}}
<script>
    function ChangeToSlug()
    {
        var title, slug;

        //L???y value t??? input
        title = document.getElementById("name").value;
        // alert(title);

        //?????i ch??? hoa th??nh ch??? th?????ng
        slug = title.toLowerCase();

        //?????i k?? t??? c?? d???u th??nh kh??ng d???u
        slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
        slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
        slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
        slug = slug.replace(/??|???|???|???|???/gi, 'y');
        slug = slug.replace(/??/gi, 'd');
        //X??a c??c k?? t??? ?????t bi???t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
        slug = slug.replace(/ /gi, "-");
        //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
        //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox c?? id ???slug???

        document.getElementById('slug').value = slug;
    }
</script>

<!-- Page Level Scripts -->

</body>
</html>
