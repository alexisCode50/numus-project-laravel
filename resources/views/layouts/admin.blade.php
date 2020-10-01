<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>


    <!-- Styles Css -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="page-top">

        <div id="wrapper">
        
            @auth
                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                    <div class="sidebar-brand-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Secciones
                    </div>

                    
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">
                        <i class="fas fa-fw fa-layegrr-oup"></i>
                        <span>Propiedades</span></a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="/admin/location">
                        <i class="fas fa-fw fa-layegrr-oup"></i>
                        <span>Localizaciones</span></a>
                    </li>

                    
                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler Sidebar -->
                    <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
                <!-- End of Sidebar -->
            @endauth

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @auth
                        <!-- Start of Navbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                            </button>
                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                            </ul>
                        </nav>
                        <!-- End of Navbar -->
                    @endauth
                    <div class="container-fluid">
                        @yield('admin')
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/datatables-demo.js')}}"></script>
</body>
</html>
