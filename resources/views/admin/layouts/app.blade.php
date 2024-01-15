<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>


    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/bundles/jquery-selectric/selectric.css')}}">

    <link rel="stylesheet"
        href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/prism/prism.css') }}">

    <!-- Template CSS -->
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/admin/image/logo.png') }}' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>
        body {
            font-size: 12px !important;
        }
    </style>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar"
                                class="nav-link nav-link-lg
                                        collapse-btn"> <i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                            <span class="badge headerBadge1">
                                6 </span> </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar
                                                text-white">
                                        {{-- <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle"> --}}
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                            Deo</span>
                                        <span class="time messege-text">Please check your mail !!</span>
                                        <span class="time">2 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        {{-- <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle"> --}}
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Request for leave
                                            application</span>
                                        <span class="time">5 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        {{-- <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle"> --}}
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                            Ryan</span> <span class="time messege-text">Your payment invoice is
                                            generated.</span> <span class="time">12 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        {{-- <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle"> --}}
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                            Smith</span> <span class="time messege-text">hii John, I have upload
                                            doc
                                            related to task.</span> <span class="time">30
                                            Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        {{-- <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle"> --}}
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                            Joshi</span> <span class="time messege-text">Please do as specify.
                                            Let me
                                            know if you have any query.</span> <span class="time">1
                                            Days Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        {{-- <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle"> --}}
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Client Requirements</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"
                                class="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                        class="dropdown-item-icon bg-primary text-white"> <i
                                            class="fas
                                                    fa-code"></i>
                                    </span> <span class="dropdown-item-desc"> Template update is
                                        available now! <span class="time">2 Min
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white">
                                        <i class="far
                                                    fa-user"></i>
                                    </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                            Sugiharto</b> are now friends <span class="time">10 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-success text-white"> <i
                                            class="fas
                                                    fa-check"></i>
                                    </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                        moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                            Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-danger text-white"> <i
                                            class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                        clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i
                                            class="fas
                                                    fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Otika
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/user.png') }}"
                                class="user-img-radious-style">

                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Admin</div>
                            {{-- <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                                            fa-user"></i> Profile
                  </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                    Activities
                  </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                    Settings
                  </a> --}}
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ url('dashboard') }}">
                            <img alt="image" src="{{ asset('assets/admin/image/logo.png') }}"
                                class="header-logo" /> </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="fas fa-laptop-code"></i><span>Dashboard</span></a>
                        </li>


                        {{-- <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#"><span>Child</span></a></li>

                            </ul>
                        </li> --}}

                        <li class="dropdown {{ request()->routeIs('admin.car.index','admin.car.create','admin.carType.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.car.index') }}" class="nav-link">
                                <i class="fas fa-car"></i><span>Add Car</span></a>
                        </li>

                        <li class="dropdown {{ request()->routeIs(['admin.carType.index', 'admin.carType.create','admin.carType.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.carType.index') }}" class="nav-link">
                                <i class="fas fa-car"></i><span>Add Car Types</span></a>
                        </li>


                        <li class="dropdown {{ request()->routeIs(['admin.feature.index', 'admin.feature.create','admin.feature.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.feature.index') }}" class="nav-link">
                                <i class="fa fa-key menu-icon"></i><span>Add Features</span></a>
                        </li>



                        <li class="dropdown {{ request()->routeIs(['admin.addon.index', 'admin.addon.create','admin.addon.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.addon.index') }}" class="nav-link">
                                <i class="fa fa-plus menu-icon"></i><span>Add Addon</span></a>
                        </li>


                        <li class="dropdown {{ request()->routeIs(['admin.blog.index', 'admin.blog.create','admin.blog.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.blog.index') }}" class="nav-link">
                                <i class="fa fa-blog menu-icon"></i><span>Add Blog</span></a>
                        </li>
                        
                        <li class="dropdown {{ request()->routeIs(['admin.about-us.index', 'admin.about-us.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.about-us.index') }}" class="nav-link">
                                <i class="fa fa-info-circle menu-icon"></i><span>About Us</span>
                            </a>
                        </li>
                        
                        <li class="dropdown {{ request()->routeIs(['admin.privacy-policy.index', 'admin.privacy-policy.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.privacy-policy.index') }}" class="nav-link">
                               <i class="fas fa-file-alt"></i><span>Privacy Policy</span>
                            </a>
                        </li>
                        
                        
                        <li class="dropdown {{ request()->routeIs(['admin.term.index', 'admin.term.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.term.index') }}" class="nav-link">
                                <i class="fas fa-book menu-icon"></i><span>Term And Condition</span>
                            </a>
                        </li>
                        
                        
                        <li class="dropdown {{ request()->routeIs(['admin.policy.index', 'admin.policy.create','admin.policy.edit']) ? 'active' : '' }}">
                            <a href="{{ route('admin.policy.index') }}" class="nav-link">
                                <i class="fas fa-plus-circle"></i><span>Add Policy</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('admin.revervation.index') }}" class="nav-link">
                                <i class="fas fa-calendar-alt"></i><span>Revervation</span></a>
                        </li>
                        <li class="dropdown {{ request()->routeIs(['admin.feedback.index']) ? 'active' : '' }}">
                            <a href="{{ route('admin.feedback.index') }}" class="nav-link">
                                <i class="fa fa-comments menu-icon"></i><span>Feedback</span></a>
                        </li>
                        <li class="dropdown">
                            <li class="dropdown {{ request()->routeIs(['admin.contacts.index']) ? 'active' : '' }}">
                            <a href="{{ route('admin.contacts.index') }}" class="nav-link">
                                <i class="fa fa-phone menu-icon"></i><span>Contact Query</span></a>
                        </li>

                        <li class="dropdown">
                            <li class="dropdown {{ request()->routeIs(['admin.subscribers.index']) ? 'active' : '' }}">
                            <a href="{{ route('admin.subscribers.index') }}" class="nav-link">
                                <i class="fa fa-envelope menu-icon"></i><span>Email Subscription</span></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->

            @yield('content')
            <footer class="main-footer">
                <div class="footer-left">

                </div>
                <div class="footer-right">
                </div>
            </footer>

        </div>
    </div>


    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/toastr.js') }}"></script>
    <script src="{{ asset('assets/bundles/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/sweetalert.js') }}"></script>
    <script src="{{asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('assets/bundles/summernote/summernote-bs4.js')}}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->

    <!-- Custom JS File -->


    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
    <script src="{{ asset('assets/bundles/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>

    <script src="{{ asset('assets/js/page/widget-chart.js') }}"></script>


</body>




</html>
