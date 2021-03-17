<!DOCTYPE html>
<html dir="ltr" lang="es">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Administrador Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('original/assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('/original/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class= "{{asset('preloader')}}">
        <div class="{{asset('lds-ripple')}}">
        <div class="{{asset('lds-pos')}}"></div>
            <div class="{{asset('lds-pos')}}"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                    <a href="{{asset('principal')}}" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Light Logo icon -->
                                <img src="{{asset('/original/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- Light Logo text -->
                                <img src="{{asset('/original/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{asset('/original/assets/images/users/d2.jpg')}}" alt="user" class="rounded-circle"
                                    width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    Mi Perfil</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="{{asset('scroll-sidebar')}}">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{asset('principal')}}"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Registro</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('Juego_ofert')}}"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Oferta de Juegos </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('reportejuegosof')}}"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Reporte</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Reporte de usuarios:</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Inicio</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Contenido de la pagona -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                Usuarios Activos:
                                
                                <!-- Inicia Reporte -->
                               
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <li class="nav-item search-box">
                                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                                    <div class="ml-1 d-none d-sm-block">
                                                        <span>Buscar</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <form class="app-search position-absolute">
                                                <input type="text" class="form-control" placeholder="Buscar">
                                                <a class="srh-btn">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </form>
                                        </li>
                                        </div>
                                        <a href="{{route('Juego_ofert')}}">
                                        <button class="btn btn-success btn-sm" type="button">Nuevo</button>
                                        </a>
                                        @if(Session::has('mensaje'))

                                        <div class="alert alert-success">{{Session::get('mensaje')}}</div>

                                        @endif
                                        
                                        <!-- Inicia Tabla -->
                                        <div class="table-responsive ">
                                            <table class="table table-hover table-responsive-xl">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Clave</th>
                                                        <th scope="col">Juego</th>
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Descuento</th>
                                                        <th scope="col">Precio</th>
                                                        <th scope="col">Estado</th>
                                                        <th scope="col">operaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($consulta as $c)
                                                    <tr>
                                                        <th scope="row">{{$c->id_of}}</th>
                                                        <td>{{$c->id_p}}</td>
                                                        <td>{{$c->idtipo}}</td>
                                                        <td>{{$c->descuento}}</td>
                                                        <td>{{$c->precio}}</td>
                                                        <td>{{$c->Activo}}</td>
                                                        <td><div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                <a href="{{route('editaroferta',['id_of'=>$c->id_of])}}">
                                                                <button class="btn btn-outline-primary btn-sm" type="button">Editar</button>
                                                                </a>
                                                                    @if($c->deleted_at)

                                                                <a href="{{route('activaoferta',['id_of'=>$c->id_of])}}">
                                                                <button class="btn btn-outline-warning btn-sm" type="button">Activar</button>
                                                                </a>
                                                                <a href="{{route('borraoferta',['id_of'=>$c->id_of])}}">
                                                                <button class="btn btn-outline-secondary btn-sm" type="button">Borrar</button>
                                                                </a>
                                                                @else
                                                                <a href="{{route('desactivaoferta',['id_of'=>$c->id_of])}}">
                                                                <button class="btn btn-outline-danger btn-sm" type="button">Desactivar</button>
                                                                </a>
                                                                @endif
                                                              </div> 
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                      <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                                      <li class="page-item"><a class="page-link" href="#">6</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                                    </ul>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Todos los derechos reservados 2021.
                <a href="https://wrappixel.com">UTVT- Ing. Gestión y desarrollo de software.</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('')}}original/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('original/assets/ssets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('original/assets/ssets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('original/assets/ssets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('original/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('original/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('original/dist/js/custom.min.js')}}"></script>
</body>

</html>