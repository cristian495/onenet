<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>O</b>NT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>One</b>Net</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Activa la navegación</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->

                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->

                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->

                </li>
                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu" id="user_menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ Gravatar::get($user->email) }}" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            @if (Auth::user()->tipo_usuario == '1')
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            @elseif(Auth::user()->tipo_usuario == '0')
                                <span class="hidden-xs">{{ session('cliente_session')->nombre }}</span>
                            @endif

                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                                <p>

                                    @if (Auth::user()->tipo_usuario == '1')
                                        {{ Auth::user()->name }}
                                    @elseif(Auth::user()->tipo_usuario == '0')
                                        {{ session('cliente_session')->nombre }}
                                    @endif


                                    <small>
                                        Sesion Iniciada {{ date('d') .' de ' . date('M'). ' del ' . date('Y')}}
                                    </small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/settings') }}" class="btn btn-default btn-flat">Mi Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                       Salir
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="submit" value="logout" style="display: none;">
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
