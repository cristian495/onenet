<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    @if (Auth::user()->tipo_usuario == '1')
                        <p>{{ Auth::user()->name }}</p>
                    @elseif(Auth::user()->tipo_usuario == '0')
                        <p> {{session('cliente_session')->nombre}}</p>
                    @endif



                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>-->
<!--              <span class="input-group-btn">-->
<!--                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu del sistema</li>
            <!-- Optionally, you can add icons to the links -->
            @if(Auth::user()->tipo_usuario == '1')

            <li class="active">
                <a href="#"><i class='fa fa-link '></i> <span>Equipos</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li onclick="cargarContenido(1)"><a href="#">Antenas Emisoras</a></li>
                </ul>
            </li>
            <li onclick="cargarContenido(2)">
                <a href="#"><i class='fa fa-link'></i> <span>Paquetes</span></a>
            </li>
            <li onclick="cargarContenido(3)">
                <a href="#"><i class='fa fa-link'></i> <span>Clientes</span></a>
            </li>
            <li>
                <a href="#"><i class='fa fa-link'></i> <span>Servicio</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li onclick="cargarContenido(4)">
                        <a href="#"><span>Contratos</span></a>
                    </li>
                    <li>
                        <a href="#"><i class='fa fa-link'></i> <span>Cobros</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li onclick="cargarContenido(5)"><a href="#">Por cobrar</a></li>
                            <li onclick="cargarContenido(6)"><a href="#">Comprobantes</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='fa fa-link'></i> <span>Acceso</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li onclick="cargarContenido(7)">
                        <a href="#"><span>Administradores</span></a>
                    </li>
                    <li onclick="cargarContenido(8)">
                        <a href="#"><span>Clientes</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Reporte 01</a></li>
                    <li><a href="#">Reporte 02</a></li>
                    <li><a href="#">Reporte 03</a></li>
                </ul>
            </li>
            @elseif(Auth::user()->tipo_usuario == 0)
            <li class="active treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Consultas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
<!--                    <li onclick="cargarContenido(9)"><a href="#">Mi contrato</a></li>-->
                    <li onclick=""><a href="#">Mi contrato</a></li>
                    <li onclick="cargarContenido(10)"><a href="#">Mis pagos hechos</a></li>
                    <li onclick="cargarContenido(11)"><a href="#">Mensualidades</a></li>
                </ul>
            </li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
