<head>
    <meta charset="UTF-8">
    <title>Administracion - OneNet</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .login-page, .register-page {
            background-image: url('../img/paginaweb/background/login_background.jpg');
            background-size: cover;
        }
        .login-box-body, .register-box-body {
            border-radius: 7px;
        }
        .dataTables_filter {
            display: none;
            visibility: hidden;
            position: absolute;
            left: -9999;
        }
        fieldset.scheduler-border {
            border: solid 1px #B9BDBF !important;
            padding: 0 10px 10px 20px;
            border-bottom: none;
            margin-bottom: 30px;
        }

        legend.scheduler-border {
            width: auto !important;
            padding:0 4px;
            border: none;
            color: #7B7E7F;
            font-size: 18px;
        }
        .msj{
            display: none;
        }
        .formulario_check{
            cursor: pointer;
        }
    </style>

</head>
