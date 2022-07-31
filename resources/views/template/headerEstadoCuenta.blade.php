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

            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="red">
               

            </nav>

            
        </div>

        <!-- End Sidebar -->
<br><br>
<br><br>
        <div class="card">
        	<div class="card-body">
        		  <div class="content" >
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