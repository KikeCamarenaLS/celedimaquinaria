
<!DOCTYPE html>

<style type="text/css">
    
    .img-responsive {
      display: block;
      max-width: 100%;
      height: auto;
    }


</style>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Terrenos y Edificaciones del Valle de México.</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{url('/images')}}/logo_mini.ico" type="image/x-icon"/>

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
</head>
<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <div align="center"></div>
            <h6 class="text-center"> Sistema de Control  </h6>
            <h6 class="text-center">Administrativo</h6>
            <div class="login-form">



                @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('color') }}" role="alert">
                   {{ Session::get('message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                @endif

                
                 <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="form-group form-floating-label">
                    <input id="email" name="email" type="text" class="form-control input-border-bottom" value="{{ old('email') }}"required>
                    <label for="email" class="placeholder">Usuario</label>

                   

                </div>

                 @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    
                <div class="form-group form-floating-label">
                    <input  id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Contraseña</label>
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>
                <!--<div class="row form-sub m-0">
                    <div class="col col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme">Remember Me</label>
                        </div>
                    </div>
                    <div class="col col-md-6 login-forget">
                        <a href="#" class="link">Forget Password ?</a>
                    </div>
                </div>-->
                <div class="form-action">
                    <button type="submit"  class="btn btn-primary btn-rounded btn-login">
                        Acceder
                    </button>

                </div>
                <!--<div class="login-account">
                    <span class="msg">¿Aún no tienes una cuenta?</span>
                    <a href="#" id="show-signup" class="link">Registrate</a>
                </div>-->
            </form>
            </div>
        </div>

        <!--<div class="container container-signup animated fadeIn">
            <div align="center"><img class="img-responsive " src="{{url('/assets/img/SeguridadCiudadana__compacto.png')}}"></div>
            <h5 class="text-center"> Policía Auxiliar </h5>
            <h6 class="text-center">Registro</h6>
            <div class="login-form">

                <form id="register_form" method="POST" action="{{ route('register') }}">
                    @csrf

                <div class="form-group form-floating-label">
                    <input  id="name" name="name" type="text" class="form-control input-border-bottom" required>
                    <label for="name" class="placeholder">Nombre</label>
                </div>
                <div class="form-group form-floating-label">
                    <input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
                    <label for="email" class="placeholder">Correo</label>
                </div>
                <div class="form-group form-floating-label">
                    <input  id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Password</label>
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>
                <div class="form-group form-floating-label">
                    <input  id="password-confirm" name="password-confirm" type="password" class="form-control input-border-bottom" required>
                    <label for="password-confirm" class="placeholder">Confirmar Password</label>
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>
            
                <div class="form-action">
                    <a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancelar</a>
                   
                    <button type="submit"  class="btn btn-primary btn-rounded btn-login">
                        Registrar
                    </button>

                </div>
             </form>
            </div>
        </div>-->
    </div>
    <script src="{{url('/assets')}}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{url('/assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{url('/assets')}}/js/core/popper.min.js"></script>
    <script src="{{url('/assets')}}/js/core/bootstrap.min.js"></script>
    <script src="{{url('/assets')}}/js/ready.js"></script>
</body>
</html>

<script type="text/javascript">
    
    $("#register_form").on('submit', function(e){

         e.preventDefault();

      });


</script>
