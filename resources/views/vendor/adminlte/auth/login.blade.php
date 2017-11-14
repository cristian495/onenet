@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')

    <body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>
                    <div style="margin:0 0 0 0; padding:0 0 0 0;">Hubo unos problemas</div>
                    <br/>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login-box-body">
                <div class="login-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('img/paginaWeb/onenet_logo.png')}}" alt="logo_iniciar_sesion_onenet"/>
                    </a>
                </div><!-- /.login-logo -->
                <p class="login-box-msg"> Inicio de sesión </p>
                <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<!--                    <login-input-field-->
<!--                            name="{{ config('auth.providers.users.field','email') }}"-->
<!--                            domain="{{ config('auth.defaults.domain','') }}"-->
<!--                    ></login-input-field>-->
                    <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="nombre de usuario..." name="name"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="contraseña..." name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="checkbox icheck">
                                <label style="display: flex">
                                    <input style=" display:none;" type="checkbox" name="remember">
                                    <span style="margin-left: 10px;">Recordarme</span>
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
                        </div><!-- /.col -->
                    </div>
                </form>



                <a href="{{ url('/password/reset') }}">Olvidé mi contraseña</a><br>
                <a href="{{ url('/register') }}" class="text-center">Registrarme</a>

            </div><!-- /.login-box-body -->

        </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    </body>

@endsection