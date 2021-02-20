<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/new images/favicon.ico" />

    <!-- Title -->
    <title>Jobping</title>
    <link rel="stylesheet" href="{{asset('/assets/fonts/fonts/font-awesome.min.css')}}">

    <!-- Sidemenu Css -->
    <link href="{{asset('/assets/plugins/toggle-sidebar/sidemenu.css')}}" rel="stylesheet" />


    <!-- Bootstrap Css -->
    <link href="{{asset('/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/admin-custom.css')}}" rel="stylesheet" />

    <!-- c3.js Charts Plugin -->
    <link href="{{asset('/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

    <!-- Morris.js Charts Plugin -->
    <link href="{{asset('/assets/plugins/morris/morris.css')}}" rel="stylesheet" />
    <!-- Data table css -->
    <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/jquery.dataTables.min.css')}}" rel="stylesheet" />


    <!-- Slect2 css -->
    <link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />



    <link href="{{asset('assets/plugins/fileuploads/css/dropify.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom scroll bar css-->
    <link href="{{asset('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <!---Font icons-->
    <link href="{{asset('/assets/css/icons.css')}}" rel="stylesheet" />

    <!-- Color-Skins -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('/assets/color-skins/color-skins/color10.css')}}" />
    <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" />
</head>

<body class="app sidebar-mini">
    <!--Loader-->
    <!-- <div id="global-loader">
        <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="">
    </div> -->
    <div class="page">
        <div class="page-main">
            <div class="app-header1 header py-1 d-flex">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a class="header-brand" href="{{url('/admin')}}">
                            <img src="
                            {{$auth->role==='A'?asset('assets/new images/jobping1.png'):asset('/images/company/'.$auth->company_img)}}
                            " class="header-brand-img" alt="{{$auth->name}}">
                        </a>
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                        <div class="header-navicon">
                            <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <div class="header-navsearch">
                            <a href="#" class=" "></a>
                            <form class="form-inline mr-auto">
                                <div class="nav-search">
                                    <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon full-screen-link">
                                    <i class="fe fe-maximize-2" id="fullscreen-button"></i>
                                </a>
                            </div>
                            <!-- <div class="dropdown d-none d-md-flex country-selector">
                                <a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
                                    <img src="../assets/images/us_flag.jpg" alt="img"
                                        class="avatar avatar-xs mr-1 align-self-center">
                                    <div>
                                        <strong class="text-dark">English</strong>
                                    </div>
                                </a>
                                <div class="language-width dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/french_flag.jpg" alt="flag-img"
                                            class="avatar  mr-3 align-self-center">
                                        <div>
                                            <strong>French</strong>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/germany_flag.jpg" alt="flag-img"
                                            class="avatar  mr-3 align-self-center">
                                        <div>
                                            <strong>Germany</strong>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/italy_flag.jpg" alt="flag-img"
                                            class="avatar  mr-3 align-self-center">
                                        <div>
                                            <strong>Italy</strong>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/russia_flag.jpg" alt="flag-img"
                                            class="avatar  mr-3 align-self-center">
                                        <div>
                                            <strong>Russia</strong>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/spain_flag.jpg" alt="flag-img"
                                            class="avatar  mr-3 align-self-center">
                                        <div>
                                            <strong>Spain</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class=" nav-unread badge badge-danger  badge-pill">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item text-center">You have 4 notification</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div>
                                            <strong>2 new Messages</strong>
                                            <div class="small text-muted">17:50 Pm</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div>
                                            <strong> 1 Event Soon</strong>
                                            <div class="small text-muted">19-10-2019</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-comment-o"></i>
                                        </div>
                                        <div>
                                            <strong> 3 new Comments</strong>
                                            <div class="small text-muted">05:34 Am</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div>
                                        <div>
                                            <strong> Application Error</strong>
                                            <div class="small text-muted">13:45 Pm</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">See all Notification</a>
                                </div>
                            </div> -->
                            <!-- <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class=" nav-unread badge badge-warning  badge-pill">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/users/male/41.jpg" alt="avatar-img"
                                            class="avatar brround mr-3 align-self-center">
                                        <div>
                                            <strong>Blake</strong> I've finished it! See you so.......
                                            <div class="small text-muted">30 mins ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/users/female/1.jpg" alt="avatar-img"
                                            class="avatar brround mr-3 align-self-center">
                                        <div>
                                            <strong>Caroline</strong> Just see the my Admin....
                                            <div class="small text-muted">12 mins ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/users/male/18.jpg" alt="avatar-img"
                                            class="avatar brround mr-3 align-self-center">
                                        <div>
                                            <strong>Jonathan</strong> Hi! I'am singer......
                                            <div class="small text-muted">1 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <img src="../assets/images/users/female/18.jpg" alt="avatar-img"
                                            class="avatar brround mr-3 align-self-center">
                                        <div>
                                            <strong>Emily</strong> Just a reminder that you have.....
                                            <div class="small text-muted">45 mins ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all Messages</a>
                                </div>
                            </div> -->
                            <!-- <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon" data-toggle="dropdown">
                                    <i class="fe fe-grid"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  app-selector">
                                    <ul class="drop-icon-wrap">
                                        <li>
                                            <a href="#" class="drop-icon-item">
                                                <i class="icon icon-speech text-dark"></i>
                                                <span class="block"> E-mail</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="drop-icon-item">
                                                <i class="icon icon-map text-dark"></i>
                                                <span class="block">map</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="drop-icon-item">
                                                <i class="icon icon-bubbles text-dark"></i>
                                                <span class="block">Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="drop-icon-item">
                                                <i class="icon icon-user-follow text-dark"></i>
                                                <span class="block">Followers</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="drop-icon-item">
                                                <i class="icon icon-picture text-dark"></i>
                                                <span class="block">Photos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="drop-icon-item">
                                                <i class="icon icon-settings text-dark"></i>
                                                <span class="block">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all</a>
                                </div>
                            </div> -->
                            <div class="dropdown ">
                                <a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
                                    <img src="{{asset('/images/company/'.$auth->company_img)}}" alt="" class="avatar avatar-md brround">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                    <a class="dropdown-item" href="{{url('/admin/profile')}}">
                                        <i class="dropdown-icon icon icon-user"></i> My Profile
                                    </a>
                                    <!-- <a class="dropdown-item" href="emailservices.html">
                                        <i class="dropdown-icon icon icon-speech"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="editprofile.html">
                                        <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                    </a> -->
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                        <i class="dropdown-icon icon icon-power"></i> Log out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar doc-sidebar">
                <div class="app-sidebar__user clearfix">
                    <div class="dropdown user-pro-body">
                        <div>
                            <img src="{{asset('/images/company/'.$auth->company_img)}}" alt="" class="avatar avatar-lg brround">
                            <a href="{{url('/admin/profile')}}" class="profile-img">
                                <span class="fa fa-pencil" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="user-info">
                            <h2>{{$auth->name}}</h2>
                            <span>{{$auth->role==='A'?'Admin':'Company'}}</span>
                        </div>
                    </div>
                </div>
                <ul class="side-menu">
                    @if ($auth->role == 'A')
                    <li class="slide {{$dash}}">
                        <a class="side-menu__item" href="{{url('/admin')}}">
                            <i class="side-menu__icon fa fa-tachometer"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li class="slide {{$quiz}}">
                        <a class="side-menu__item" href="{{url('admin/topics')}}">
                            <i class="side-menu__icon fa fa-gear"></i>
                            <span class="side-menu__label">Quiz</span>
                        </a>
                    </li>
                    <li class="slide {{$questions}}">
                        <a class="side-menu__item" href="{{url('admin/questions')}}">
                            <i class="side-menu__icon fa fa-question-circle-o"></i>
                            <span class="side-menu__label">Questions</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{url('admin/glink')}}">
                            <i class="side-menu__icon fa fa-link"></i>
                            <span class="side-menu__label">Generate Link</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{url('/admin/company')}}">
                            <i class="side-menu__icon fa fa-building"></i>
                            <span class="side-menu__label">Companies</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{url('/admin/interncompany')}}">
                            <i class="side-menu__icon fa fa-building-o"></i>
                            <span class="side-menu__label">Intern Companies</span>
                        </a>
                    </li>
                    <li class="slide {{$users}}">
                        <a class="side-menu__item" href="{{url('/admin/users')}}">
                            <i class="side-menu__icon fa fa-graduation-cap"></i>
                            <span class="side-menu__label">Students</span>
                        </a>
                    </li>
                    <li class="slide {{$all_re}}">
                        <a class="side-menu__item" href="{{url('/admin/all_reports')}}">
                            <i class="side-menu__icon fa fa-file-text-o"></i>
                            <span class="side-menu__label">Students Report</span>
                        </a>
                    </li>
                    @elseif ($auth->role == 'C')
                    <li class="slide {{$dash}}">
                        <a class="side-menu__item" href="{{url('/admin')}}">
                            <i class="side-menu__icon fa fa-tachometer"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li class="slide {{$quiz}}">
                        <a class="side-menu__item" href="{{url('admin/topics')}}">
                            <i class="side-menu__icon fa fa-gear"></i>
                            <span class="side-menu__label">Quiz</span>
                        </a>
                    </li>
                    <li class="slide {{$questions}}">
                        <a class="side-menu__item" href="{{url('admin/questions')}}">
                            <i class="side-menu__icon fa fa-question-circle-o"></i>
                            <span class="side-menu__label">Questions</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{url('admin/glink')}}">
                            <i class="side-menu__icon fa fa-link"></i>
                            <span class="side-menu__label">Generate Link</span>
                        </a>
                    </li>
                    </li>
                    <li class="slide {{$all_re}}">
                        <a class="side-menu__item" href="{{url('/admin/all_reports')}}">
                            <i class="side-menu__icon fa fa-file-text-o"></i>
                            <span class="side-menu__label">Students Report</span>
                        </a>
                    </li>
                    @endif

                </ul>
            </aside>

            <div class="app-content">
                <div class="side-app">
                    @if (Session::has('added'))
                    <div class="alert alert-success sessionmodal">
                        {{session('added')}}
                    </div>
                    @elseif (Session::has('updated'))
                    <div class="alert alert-info sessionmodal">
                        {{session('updated')}}
                    </div>
                    @elseif (Session::has('deleted'))
                    <div class="alert alert-danger sessionmodal">
                        {{session('deleted')}}
                    </div>
                    @elseif (Session::has('error'))
                    <div class="alert alert-danger sessionmodal">
                        {{session('error')}}
                    </div>
                    @elseif (Session::has('errors'))
                    <div class="alert alert-danger sessionmodal">
                        @foreach(session('errors') as $error)
                        {{$error}}
                        @endforeach
                    </div>
                    @endif
                    <div class="page-header">
                        <h4 class="page-title">{{$page_header}}</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div>

        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2020 <a href="#">JobDcodetech</a>. All rights
                        reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div>

    <script src="{{asset('/assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendors/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendors/selectize.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendors/circle-progress.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

    <!-- Fullside-menu Js-->
    <script src="{{asset('/assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>


    <!--Morris.js Charts Plugin -->
    <script src="{{asset('/assets/plugins/morris/raphael-min.js')}}"></script>
    <script src="{{asset('/assets/plugins/morris/morris.js')}}"></script>

    <!-- Input Mask Plugin -->
    <script src="{{asset('/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

    <!-- Index Scripts -->
    <script src="{{asset('/assets/js/morris.js')}}"></script>
    <!-- Data tables -->
    <script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable.js')}}"></script>

    <!-- Select2 js -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

    <!-- Inline js -->
    <script src="{{asset('assets/js/select2.js')}}"></script>
    <script src="{{asset('assets/js/formelements.js')}}"></script>

    <!-- file uploads js -->
    <script src="{{asset('assets/plugins/fileuploads/js/dropify.js')}}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{asset('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!--Counters -->
    <script src="{{asset('/assets/plugins/counters/counterup.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/counters/waypoints.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/counters/numeric-counter.js')}}"></script>

    <script src="{{asset('/assets/plugins/echarts/echarts.js')}}"></script>
    <script src="{{asset('/assets/plugins/echarts/echarts.js')}}"></script>
    <script src="{{asset('/assets/js/index1.js')}}"></script>



    <!-- Custom Js-->
    <script src="{{asset('/assets/js/admin-custom.js')}}"></script>

    <!-- CHARTJS CHART -->
    <script src="{{asset('/assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('/assets/plugins/chart/utils.js')}}"></script>

    @yield('scripts')
</body>

</html>