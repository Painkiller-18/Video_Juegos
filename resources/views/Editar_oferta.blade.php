<!DOCTYPE html>
<html dir="ltr" lang="en">
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
    <title>Panel de Administración</title>
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
<form action = "{{route('guardacambios')}}" method = "POST">
    {{csrf_field()}}
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
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
                        <h4 class="page-title">Modificación de Oferta:</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    <label>ID de Oferta:
                                        @if($errors->first('id_of'))
                                        <p class="text-danger">{{$errors->first('id_of')}}</ide>
                                        @endif
                                        </label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">No.</span>
                                             </div>
                                             <input type="text" value="{{$consulta->id_of}}" name="id_of" id="id_of" class="form-control"  readonly="readonly" aria-label="Amount (to the nearest dollar)">
                                            
                                            </div>
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
                                
                                <!-- Inicia el formulario -->
                                <h3 class="font-weight-bold">Información del Juego</h3>
                                <form class="form-horizontal m-t-30">
                                    <div class="form-group">
                                        <label>Nombre del Juego
                                        @if($errors->first('id_p'))
                                        <p class="text-danger">{{$errors->first('id_p')}}</ide>
                                        @endif
                                        
                                        </label>
                                        <select class="custom-select col-12" name="id_p" id="id_p">
                                            <option value="{{$consulta->id_p}}">{{$consulta->idp}}</option>
                                            @foreach($juegos as $jueg)

                                            <option value="{{$jueg->id_p}}">{{$jueg->nombre}}</option>

                                            @endforeach


                                        </select>
                                    </div>  
                                    <div class="form-group">
                                        <label>Tipo de Producto:
                                        @if($errors->first('idtipo'))
                                        <p class="text-danger">{{$errors->first('idtipo')}}</ide>
                                        @endif
                                        </label>
                                        <select class="custom-select col-12"  name="idtipo" id="idtipo">
                                        <option value="{{$consulta->idtipo}}">{{$consulta->id_tipo}}</option>
                                        @foreach($tipos as $tip)

                                        <option value="{{$tip->idtipo}}">{{$tip->nombre}}</option>

                                        @endforeach                                       
                                        </select>
                                    </div>
                                    <!-- Fecha de Ofertas -->
                <!-- ============================================================== -->
                                    <h3 class="font-weight-bold">Intervalo de Fechas</h3>
                                    <div class="form-group">
                                        <label>Fecha de Inicio:
                                        @if($errors->first('fecha_ini'))
                                        <p class="text-danger">{{$errors->first('fecha_ini')}}</ide>
                                        @endif
                                        </label>
                                        <input type="text" name="fecha_ini"  value="{{$consulta->fecha_ini}}" id="fecha_ini" class="form-control" placeholder="{{$consulta->fecha_ini}}">
                                    </div> 
                                    <div class="form-group">
                                        <label for="example-email">Fecha Final: 
                                            @if($errors->first('fecha_fin'))
                                        <p class="text-danger">{{$errors->first('fecha_fin')}}</ide>
                                        @endif
                                        </label>
                                        <input type="text"  name="fecha_fin" value="{{$consulta->fecha_fin}}" id="fecha_fin" class="form-control" placeholder="">
                                    </div>
                                    <!-- inicia radio-->
            <!-- ============================================================== -->
                                    <h3 class="font-weight-bold">Motivo del Descuento</h3>
                                    <label>Eliga el Motivio del descuento:
                                    @if($errors->first('motivo'))
                                        <p class="text-danger">{{$errors->first('motivo')}}</ide>
                                        @endif
                                    </label>
                                    @if($consulta->motivo=='Accion')
                                    <div class="form-group row p-t-20">
                                        <div class="col-sm-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"  name="motivo" value="Accion" id="customRadio80" checked="">
                                                <label class="custom-control-label"   for="customRadio80">Acción</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"  name="motivo" value="Terror" id="customRadio79">
                                                <label class="custom-control-label" for="customRadio79">Terror</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="motivo" value="Aventura" id="customRadio3">
                                                <label class="custom-control-label" for="customRadio3">Aventura</label>
                                            </div>
                                        </div>
                                    </div>

                                    @elseif($consulta->motivo=='Terror')
                                    <div class="form-group row p-t-20">
                                        <div class="col-sm-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"  name="motivo" value="Accion" id="customRadio80" >
                                                <label class="custom-control-label"   for="customRadio80">Acción</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"  name="motivo" value="Terror" id="customRadio79" checked="">
                                                <label class="custom-control-label" for="customRadio79">Terror</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="motivo" value="Aventura" id="customRadio3">
                                                <label class="custom-control-label" for="customRadio3">Aventura</label>
                                            </div>
                                        </div>
                                    </div>
                                    @else($consulta->motivo=='Aventura')
                                    <div class="form-group row p-t-20">
                                        <div class="col-sm-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"  name="motivo" value="Accion" id="customRadio80" >
                                                <label class="custom-control-label"   for="customRadio80">Acción</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"  name="motivo" value="Terror" id="customRadio79" >
                                                <label class="custom-control-label" for="customRadio79">Terror</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="motivo" value="Aventura" id="customRadio3" checked="">
                                                <label class="custom-control-label" for="customRadio3">Aventura</label>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                   <br>
                                   <!--Inicia checkbox-->
                                   <h3 class="font-weight-bold">Precio y Descuento</h3>
                                   <div class="form-group">
                                        <label>Precio del Juego:
                                        @if($errors->first('precio'))
                                        <p class="text-danger">{{$errors->first('precio')}}</ide>
                                        @endif
                                        </label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">$</span>
                                             </div>
                                             <input type="text" name="precio" id="precio" value="{{$consulta->precio}}"v class="form-control" aria-label="Amount (to the nearest dollar)">
                                            
                                            </div>
                                    </div>

                                         <label>Descuente del:
                                   @if($errors->first('descuento'))
                                        <p class="text-danger">{{$errors->first('descuento')}}</ide>
                                        @endif
                                   </label>       
                                   <div class="form-group row p-t-20">
                                    <div class="col-sm-4">
                                    @if($consulta->descuento=='10%')
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input"  name="descuento" value="10%" id="customCheck100" checked="">
                                            <label class="custom-control-label" for="customCheck100">10%</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="descuento" value="25%" id="customCheck200">
                                            <label class="custom-control-label" for="customCheck200">25%</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="descuento" value="50%" id="customCheck300">
                                            <label class="custom-control-label" for="customCheck300">50%</label>
                                        </div>
                                    </div>
                                </div>
                                    @elseif($consulta->descuento=='25%')
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input"  name="descuento" value="10%" id="customCheck100" >
                                            <label class="custom-control-label" for="customCheck100">10%</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="descuento" value="25%" id="customCheck200" checked="">
                                            <label class="custom-control-label" for="customCheck200">25%</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="descuento" value="50%" id="customCheck300">
                                            <label class="custom-control-label" for="customCheck300">50%</label>
                                        </div>
                                    </div>
                                </div>
                                    @elseif($consulta->descuento=='50%')
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input"  name="descuento" value="10%" id="customCheck100" >
                                            <label class="custom-control-label" for="customCheck100">10%</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="descuento" value="25%" id="customCheck200">
                                            <label class="custom-control-label" for="customCheck200">25%</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="descuento" value="50%" id="customCheck300" checked="">
                                            <label class="custom-control-label" for="customCheck300">50%</label>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <br>
                                <h3 class="font-weight-bold">Estado de Oferta</h3>
                                <div class="col-sm-4">
                                    <label>Se encuentra activa esta oferta ?
                                    @if($errors->first('Activo'))
                                        <p class="text-danger">{{$errors->first('Activo')}}</ide>
                                        @endif
                                    </label>
                                    @if($consulta->Activo=='Si')
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="Activo" value="Si" id="customCheck220" checked="">
                                            <label class="custom-control-label" for="customCheck220">Si</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="Activo" value="No" id="customCheck250">
                                            <label class="custom-control-label" for="customCheck250">No</label>
                                        </div>
                                    </div>
                                    @else($consulta->Activo=='No')
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="Activo" value="Si" id="customCheck220" >
                                            <label class="custom-control-label" for="customCheck220">Si</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="Activo" value="No" id="customCheck250" checked="">
                                            <label class="custom-control-label" for="customCheck250">No</label>
                                        </div>
                                    </div>
                                    @endif
                                    <br>
                                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                                        <button class="btn btn-outline-success me-md-2" type="submit">Aceptar</button>
                                      </div>
                                </form>
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
    </form>
</body>
 
</html>