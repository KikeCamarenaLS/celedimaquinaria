<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Terrenos y Edificaciones del Valle de México.</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{url('/images')}}/logo_mini.ico" type="image/x-icon"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts and icons -->
    <script src="{{url('/assets')}}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:100,200,300,400,500,600,700,800,900"]},
            custom: {"families":["Flaticon", "LineAwesome"], urls: ['{{url('/assets')}}/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/assets')}}/css/ready.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{url('/assets')}}/css/demo.css">
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header">
                <!--
                    Tip 1: You can change the background color of the logo header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
                -->
                <a href="{{url('/home')}}" class="big-logo">
                    <img src="{{url('/assets/LogosTerreno/logo_mini.png')}}" alt="logo img" class="logo-img">
                </a>
                <a href="{{url('/home')}}" class="logo" >
                     <img src="{{url('/assets/LogosTerreno/NombreTerreno.png')}}" width="140px" alt="logo img" class="logo-img">
                    
                   
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="la la-bars"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="red">
                <!--
                    Tip 1: You can change the background color of the navbar header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
                -->
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button class="btn btn-minimize btn-rounded">
                            <i class="la la-navicon"></i>
                        </button>
                    </div>
                    <!--<div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search ml-md-3 mr-md-3">
                            <div class="input-group">
                                <input type="text" placeholder="Search ..." class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-search">
                                        <i class="la la-search search-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>-->
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                       <!-- <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="flaticon-search-1"></i>
                            </a>
                        </li>-->


                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"  > <img src="{{url('/assets')}}/img/profile.png" alt="image profile" width="36" class="img-circle"></a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img src="{{url('/assets')}}/img/profile.png" alt="image profile"></div>
                                        <div class="u-text">
                                            <h4> {{ Auth::user()->name }} </h4>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                            <a href="{{url('/miperfil')}}" class="btn btn-rounded btn-danger btn-sm">Mi perfil</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!--<div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>-->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    Salir
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <!--
                Tip 1: You can change the background color of the sidebar using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
                Tip 2: you can also add an image using data-image attribute
            -->
            <div class="sidebar-background"></div>
            <div class="sidebar-wrapper scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="photo">
                            <img src="{{url('/assets')}}/img/profile.png" alt="image profile">
                        </div>
                        <div class="info" style="word-wrap: break-word; ">
                             <div data-toggle="collapse" href="#collapseExample" aria-expanded="true" style="word-wrap: break-word; color:black;">

                                <b>{{ Auth::user()->name }}</b>
                            </div>
                                 <div data-toggle="collapse" href="#collapseExample" aria-expanded="true" style="word-break:break-all; display: flex; color: black;">
                                 <span class="user-leve2" style="word-break:break-all; display: flex;">{{ Auth::user()->email }}</span>

                         </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="{{url('/home')}}">
                                <i class="flaticon-home"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="la la-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Menú</h4>
                        </li>

                        @can('Administrador')
                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#usuario_collapse">
                                <i class="flaticon-users"></i>
                                <p>Usuarios sistema</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="usuario_collapse">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/nuevo_usuario')}}">
                                            <span class="sub-item">Nuevo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/listado_usuario')}}">
                                            <span class="sub-item">Listado</span>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="{{url('/rolesypermisos')}}">
                                            <span class="sub-item">Roles y permisos</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Bitacora_collapse">
                                <i class="la la-book"></i>
                                <p>Bitacora</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Bitacora_collapse">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/bitacoraView')}}">
                                            <span class="sub-item">Buscar</span>
                                        </a>
                                    </li>
                                    

                                </ul>
                            </div>
                        </li>
                        


                        @endcan


                         @can('Personal')

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#personal_captura">
                                <i class="la la-plus-square"></i>
                                <p>Captura de Pagos </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="personal_captura">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/nueva_captura')}}">
                                            <span class="sub-item">Nueva Captura</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/reporte_captura')}}">
                                            <span class="sub-item">Listado</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         @endcan

                         @can('Recursos Humanos')

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#rh">
                                <i class="la la-group"></i>
                                <p>Admin. de personal </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="rh">
                                <ul class="nav nav-collapse">
                                    <li>
                                       <!-- <a href="{{url('/nueva_captura/adpers')}}">-->
                                         <a href="{{url('/nuevo_usuario')}}">
                                            <span class="sub-item">Nuevo Personal</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/reporte_captura/adpers')}}">
                                            <span class="sub-item">Listado</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/AgregarDatos/personal')}}">
                                            <span class="sub-item">Archivero Personal</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                         @endcan

                         @can('Ejecutivo de proyectos')
                         <li class="nav-item ">
                            <a data-toggle="collapse" href="#Inventarios">
                                <i class="la la-money"></i>
                                <p>Inventarios </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Inventarios">
                                <ul class="nav nav-collapse">

                                  
                                    <li>
                                        <a href="{{url('/Captura/proyectos')}}">
                                            <span class="sub-item">Captura de Productos</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Ventas">
                                <i class="la la-money"></i>
                                <p>Ventas </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Ventas">
                                <ul class="nav nav-collapse">

                                    <li>
                                        <a href="{{url('/ventalotesView16')}}">
                                            <span class="sub-item">Venta de Lotes(Mapas)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/ventalotesViewSinMapas')}}">
                                            <span class="sub-item">Venta de Lotes(Sin Mapas)</span>
                                        </a>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                        </li>

                         @endcan

                          @can('Clientes')

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Clientes">
                                <i class="la la-pencil-square-o"></i>
                                <p>Clientes </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Clientes">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/alta_de_clientes')}}">
                                            <span class="sub-item">Alta de Clientes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/reporte_captura')}}">
                                            <span class="sub-item">Actualización y Modificación</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         @endcan

                         @can('Cobranza')

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Cobranza">
                                <i class="la la-plus-square"></i>
                                <p>Cobranza </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Cobranza">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/cobranza_contratos')}}">
                                            <span class="sub-item">Contratos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/actualiza_contratos')}}">
                                            <span class="sub-item">Actualización y Modificación Contratos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         @endcan
                         <li class="nav-item ">
                            <a data-toggle="collapse" href="#notificaciones">
                                <i class="la la-plus-square"></i>
                                <p>Notificaciones </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="notificaciones">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/notificaciones')}}">
                                            <span class="sub-item">Notificaciones</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>




                    



                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-header">

                         @yield('content_header')
                    </div>



                     @yield('content')






                </div>
            </div>

        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{url('/assets')}}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{url('/assets')}}/js/core/popper.min.js"></script>
    <script src="{{url('/assets')}}/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{url('/assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{url('/assets')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{url('/assets')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="{{url('/assets')}}/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="{{url('/assets')}}/js/plugin/chart.js/chart.min.js"></script>

    <!-- Chart Circle -->
    <script src="{{url('/assets')}}/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="{{url('/assets')}}/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{url('/assets')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('/assets')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="{{url('/assets')}}/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="{{url('/assets')}}/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="{{url('/assets')}}/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="{{url('/assets')}}/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="{{url('/assets')}}/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="{{url('/assets')}}/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="{{url('/assets')}}/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="{{url('/assets')}}/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Ready Pro JS -->
    <script src="{{url('/assets')}}/js/ready.min.js"></script>

    <script>

        function ActivarDesplegable (){
            $(".dropdown-menu").dropdown('toggle')
        }
    </script>


     @yield('jscustom')

</body>
</html>