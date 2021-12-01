<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard - Genius</title>
    @yield('estilo')
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('plugins/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> --}}


    {{-- <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') }}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}


    <script src="https://kit.fontawesome.com/2ead8049d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <b class="logo-icon">

                            <img src="img/logo-compan.jpg" alt="Logo" width="40" style="background-color: white;">
                        </b>

                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="img/logo-text.jpg" alt="homepage" width="100px" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <a href="{{ route('home') }}" style="margin-left: 20px; font-size: 16px"><span class="text-white font-medium">Inicio</span></a>

                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Buscar" class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <li>
                            {{-- <a class="profile-pic" href="#">
                                <img src="img/user-solid.png" alt="user-img" width="20">
                                <span class="text-white font-medium">{{ Auth::user()->name }}</span>
                            </a> --}}
                        <li class="nav-item dropdown" style="margin-inline-end: 50px; ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/user-solid.png" alt="user-img" width="20">
                                <span class="text-white font-medium" style="font-size: 16px">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-right: 300px">
                                <li><a class="dropdown-item" href="{{ route('vista.passwd')}}">Cambiar Contraseña</a></li>
                                {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Cerrar Session</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        {{-- <a class="profile-pic" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="dropdown-item">
                            <span class="text-white font-medium">{{ __('Logout') }}</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form> --}}
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('perfil.user') }}" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('perfil.user') }}" aria-expanded="false">

                                <i class="fas fa-users"></i>
                                <span class="hide-menu">Empleados</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('ventas') }}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Ventas</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inventario.home') }}" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Iventario</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="rw-lg-3 col-md-4 rw-sm-4 rw-xs-12">
                        <a href="{{ route('formulario.venta') }}" class="btn btn-primary">Registrar Venta</a>
                        <a href="{{ route('inventario.form') }}" class="btn btn-primary ms-2">Registrar
                            Inventario</a>
                    </div>

                    {{-- <div class="rw-lg-9 col-sm-8 rw-md-8 rw-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>

                        </div>
                    </div> --}}
                </div>

            </div>

            <div class="container-fluid">

                @yield('contenido')

            </div>

            <footer class="footer text-center"> 2021 © Company <strong>Genius</strong></a>
            </footer>
        </div>
    </div>

    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

    @yield('editar')
    <!-- <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('js/waves.js') }}"></script>

    <script src="{{ asset('js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('plugins/bower_components/chartist/dist/chartist.min.js') }}"></script>
    {{-- <script src="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script> --}}
    <script src="{{ asset('js/pages/dashboards/dashboard1.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.js') }}"> </script>
        <script src="{{ asset('js/bootstrap.min.js') }}"> </script> --}}
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js">
        < /scri <
        script src = "https://kit.fontawesome.com/2ead8049d9.js"
        crossorigin = "anonymous" >
    </script>

</body>

</html>
