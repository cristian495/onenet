@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>ONE</b>NET</a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>
                    <div style="margin:0 0 0 0; padding:0 0 0 0;">Hubo unos problemas</div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg">Registro de usuarios</p>
                <form action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="nombre completo..." name="name" value="{{ old('name') }}" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>


                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="correo..." name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="contraseña..." name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="confirme contraseña..." name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-10">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Acepto los terminos</button>
                            </div>
                        </div><!-- /.col -->

                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                        </div><!-- /.col -->
                    </div>
                </form>



                <a href="{{ url('/login') }}" class="text-center">Ya tengo una cuenta</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

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