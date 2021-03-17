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
                                
                 <!-- Button trigger modal -->
                 <p class="text-start">LEGATECH ARCADE, S.A. de C.V. </p>
                 <p class="text-start">Para efectos del presente Aviso de Privacidad, se entenderá por: </p>
                 <p><strong>Aviso de Privacidad:</strong> Se refiere al presente documento, el cual es puesto a disposici&oacute;n del <strong>TITULAR</strong>, previo al tratamiento de sus datos personales, de conformidad con el <em>art&iacute;culo 15</em> de la <em>Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares.</em></p>
<p><strong>Datos personales:</strong> Cualquier informaci&oacute;n concerniente a una persona f&iacute;sica identificada o identificable.</p>
<p><strong>Datos personales sensibles:</strong> Aquellos datos personales que afecten a la esfera m&aacute;s &iacute;ntima del TITULAR, o cuya utilizaci&oacute;n indebida pueda dar origen a discriminaci&oacute;n o conlleve un riesgo grave para &eacute;ste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o &eacute;tnico, estado de salud presente y futuro, informaci&oacute;n gen&eacute;tica, creencias religiosas, filos&oacute;ficas y morales, afiliaci&oacute;n sindical, opiniones pol&iacute;ticas, preferencia sexual.</p>
<p><strong>Derechos ARCO: </strong>Se refiere a los derechos de <em>acceso, cancelaci&oacute;n, rectificaci&oacute;n y oposici&oacute;n</em> con los que cuenta el <strong>TITULAR</strong> en relaci&oacute;n a sus datos personales.</p>
<p><strong>Ley:</strong>&nbsp; Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares y/o su&nbsp; Reglamento.</p>
<p><strong>Responsable:</strong> LEGATECH ARCADE, S.A. de C.V., en su car&aacute;cter de persona moral privada que decide sobre el tratamiento de datos personales.</p>
<p><strong>Titular:</strong> La persona f&iacute;sica a quien corresponden los datos personales.</p>
<p>El presente <strong>Aviso de Privacidad</strong> se pone a disposici&oacute;n del <strong>TITULAR</strong>, en cumplimiento a lo dispuesto por la<strong> </strong>Ley, as&iacute; como dem&aacute;s disposiciones legales aplicables.</p>
<p>Datos de identificaci&oacute;n del Responsable del Tratamiento de los datos personales:</p>
<p>LEGATECH ARCADE, S.A. de C.V. (en lo sucesivo &ldquo;BD&rdquo;), es una sociedad mercantil legalmente constituida de conformidad con las leyes de la Rep&uacute;blica Mexicana, con domicilio fiscal en Monte Pelvoux No. 111, Pisos 8,9 y PH, Col. Lomas de Chapultepec, Ciudad de M&eacute;xico, D.F., C.P. 11000, siendo <strong>RESPONSABLE</strong> del tratamiento de los datos personales&nbsp;que en su caso el <strong>TITULAR</strong>&nbsp;de los datos personales proporcione a BD, en los t&eacute;rminos del consentimiento al presente aviso.</p>
<p>BD con el compromiso de observar los principios de licitud, consentimiento, informaci&oacute;n, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminaci&oacute;n informativa, hace constar en el presente aviso de privacidad lo siguiente:</p>
<p><strong>a)</strong> Sus <strong>datos personales</strong> que ser&aacute;n tratados por BD, incluyendo la obtenci&oacute;n, uso, divulgaci&oacute;n o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposici&oacute;n, son aquellos que usted en su calidad de <strong>TITULAR, </strong>ha proporcionado o proporcionar&aacute; a BD y aquellos a los que BD tiene acceso leg&iacute;timamente por haber sido proporcionados para los fines que m&aacute;s adelante se se&ntilde;alan.</p>
<p>A continuaci&oacute;n se enlistan algunos de los datos personales a que se refiere este apartado:</p>
<ul>
<li>Nombre</li>
<li>Fecha de nacimiento</li>
<li>G&eacute;nero</li>
<li>Informaci&oacute;n de contacto laboral</li>
<li>Tel&eacute;fono</li>
<li>Domicilio</li>
<li>Correo electr&oacute;nico</li>
</ul>
<p><strong>b)</strong> BD hace de su conocimiento que los datos personales del titular ser&aacute;n tratados por BD y/o las empresa&nbsp;matriz, afiliadas o subsidiarias de la misma, encargados que act&uacute;en en nombre de BD y terceros, distintos a BD o al titular de los datos, quienes deber&aacute;n cumplir con el presente <strong>Aviso de Privacidad. </strong></p>
<p><strong>c)</strong> Las <strong>finalidades </strong>del tratamiento de los datos personales del <strong>TITULAR</strong> por parte de BD, son las que se enuncian a continuaci&oacute;n, as&iacute; como todas aquellas que resulten an&aacute;logas:</p>
<p>Contacto comercial, env&iacute;o de publicidad informativa relativa a productos y temas de salud, estad&iacute;sticas de preferencias de consumo, estad&iacute;sticas en materia de administraci&oacute;n de salud en el sector p&uacute;blico y privado, reclutamiento y selecci&oacute;n de personal y contacto laboral.</p>
<p><strong>d)</strong> Al accesar al presente sitio de internet o al tener a la vista el presente Aviso de Privacidad y aceptar su contenido, usted en su car&aacute;cter de <strong>TITULAR</strong> otorga expresamente a BD su consentimiento para la transferencia nacional e internacional de sus datos personalesa los terceros enunciados en el apartado b), siempre que el receptor de los datos asuma las mismas obligaciones asumidas por BD. Asimismo, BD se obliga a transferir solo aquella informaci&oacute;n que sea necesaria para las mismas finalidades con la que se emite el presente aviso.</p>
<p><strong>e)</strong> BD establecer&aacute; y mantendr&aacute; medidas de seguridad, administrativas, t&eacute;cnicas y f&iacute;sicas que permitan proteger los datos personales contra da&ntilde;o, p&eacute;rdida, alteraci&oacute;n, destrucci&oacute;n o el uso, acceso o tratamiento no autorizado. Estas medidas no ser&aacute;n menores a aquellas que mantenga BD para el manejo de su propia informaci&oacute;n.</p>
<p><strong>f)</strong> El titular de sus datos personales, podr&aacute; ejercer los derechos de <em>acceso, cancelaci&oacute;n, rectificaci&oacute;n y oposici&oacute;n</em>, respecto de sus datos (<strong>Derechos ARCO</strong>). El ejercicio de estos derechos se iniciar&aacute; a trav&eacute;s de la presentaci&oacute;n de una solicitud por escrito dirigida a BD mediante el correo electr&oacute;nico que se menciona a continuaci&oacute;n:</p>
<p><a href="mailto:datos_personales@bd.com">legatech_arcade@gamil.com</a></p>
<p>&nbsp;La solicitud deber&aacute; ser presentada por el <strong>TITULAR </strong>o su representante legal, a la direcci&oacute;n antes mencionada, dicha solicitud deber&aacute; contener:</p>
<p>i) El nombre completo del <strong>TITULAR </strong>y domicilio u otro medio para comunicarle la respuesta, incluyendo direcci&oacute;n de correo electr&oacute;nico.</p>
<p>ii) Los documentos que acrediten su identidad o la del representante legal,</p>
<p>iii) La descripci&oacute;n clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos,</p>
<p>iv) Cualquier otro elemento que facilite la localizaci&oacute;n de los datos personales del <strong>TITULAR.</strong></p>
<p>BD comunicar&aacute; al titular en m&aacute;ximo 20 (veinte) d&iacute;as naturales, contados a partir de haber recibido la solicitud de acceso, rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n, la determinaci&oacute;n adoptada, a efecto de que se haga efectiva dentro de los 15 (quince) d&iacute;as naturales siguientes. Estos plazos podr&aacute;n ser ampliados por un periodo igual cuando a discreci&oacute;n de BD, las circunstancias del caso lo justifiquen.</p>
<p>El derecho de acceso procede cuando el titular desee conocer cu&aacute;les de sus datos personales obran en poder de BD y el aviso de privacidad que le es aplicable.</p>
<p>Se dar&aacute; cumplimiento a una solicitud de acceso, poniendo a disposici&oacute;n del <strong>TITULAR</strong> o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotost&aacute;ticas, un CD que contenga dicha informaci&oacute;n, un dispositivo USB o cualquier otro medio que determine BD. La entrega de los datos ser&aacute; gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El <strong>TITULAR</strong> &uacute;nicamente cubrir&aacute; los costos de reproducci&oacute;n en copias u otros formatos.</p>
<p>El <strong>TITULAR</strong> podr&aacute; rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificaci&oacute;n las modificaciones que deban realizarse y aportando a BD la documentaci&oacute;n que sustente su petici&oacute;n. En caso de ser procedente la solicitud del <strong>TITULAR</strong>, BD deber&aacute; informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los t&eacute;rminos del presente <strong>Aviso de Privacidad.</strong></p>
<p>El derecho de cancelaci&oacute;n consiste en la supresi&oacute;n del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podr&aacute;n ser objeto de tratamiento. No proceder&aacute; la cancelaci&oacute;n de los datos personales en los casos previstos por la Ley.</p>
<p>El <strong>TITULAR</strong> tendr&aacute; derecho en todo momento y por causa leg&iacute;tima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, BD no podr&aacute; tratar los datos del <strong>TITULAR.</strong></p>
<p>BD podr&aacute; negar el acceso a los datos personales, o realizar la rectificaci&oacute;n o cancelaci&oacute;n o conceder la oposici&oacute;n cuando el solicitante no sea el <strong>TITULAR</strong> o el representante legal no est&eacute; debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resoluci&oacute;n de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n y cuando la rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n haya sido previamente realizada.</p>
<p><strong>g)</strong> En caso de que se efect&uacute;en cambios al presente <strong>Aviso de Privacidad</strong>, BD los har&aacute; del conocimiento del titular mediante notificaci&oacute;n escrita que ser&aacute; publicada en la p&aacute;gina de Internet <a href="..">www.Legatech_Arcade.com.mx</a>, si resulta procedente, a trav&eacute;s del correo electr&oacute;nico que el <strong>TITULAR</strong> le haya notificado a BD previamente. Si el <strong>TITULAR</strong> est&aacute; de acuerdo con las modificaciones hechas al <strong>Aviso de Privacidad </strong>deber&aacute; entregar el documento que incluya dichas modificaciones, debidamente firmado con atenci&oacute;n a BD dentro de los siguientes 5 d&iacute;as h&aacute;biles.</p>
<p><strong>h) </strong>El consentimiento para el tratamiento de datos personales podr&aacute; ser revocado mediante aviso por escrito, que el <strong>TITULAR</strong> proporcione por escrito, dirigido al corro electr&oacute;nico se&ntilde;alado en el presente <strong>Aviso de Privacidad</strong>, en el cual incluya las razones por las que revoca el consentimiento.</p>
<p><strong>i)</strong> BD dar&aacute; tr&aacute;mite a las solicitudes de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n, labor que estar&aacute; a su, cuyo domicilio f&iacute;sico se encuentra ubicado en la direcci&oacute;n se&ntilde;alada al inicio del presente aviso y cuyo correo electr&oacute;nico para cualquier duda o comentario respecto al presente <strong>Aviso de Privacidad</strong> se ha se&ntilde;alado anteriormente.</p>
<p>Al acezar al presente sitio de internet el<strong> TITULAR</strong> manifiesta conocer el presente <strong>Aviso de Privacidad </strong>&nbsp;y en consecuencia otorga su conocimiento y conformidad con su contenido, asimismo, manifiesta expresamente su aceptaci&oacute;n para que BD lleve a cabo el tratamiento de sus datos personales en los t&eacute;rminos que en el mismo se se&ntilde;alan.</p>

<button type="button" >
Regresar
</button>
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