<header class="row">
    <nav class="row ">
        <div class="row-bordered col-lg-12 nav_contacto">
            <div class="col-lg-10">
                <i class="fa fa-mobile-phone"></i>976 752 478  <i class="fa fa-mobile-phone"></i> 962 510 317  <span style="margin: 0 5px;">|</span>  <i class="fa fa-envelope"></i>informes@onenet.com.pe
            </div>
            <div class="col-lg-2">
                <a href="{{url('/login')}}"><span class="fa fa-user"></span>Login </a>
            </div>
        </div>
    </nav>

    <div class="navbar-header"style="padding-left: 50px">

        <a class="navbar-brand" href=""><img src="{{ asset('img/paginaweb/onenet_logo.jpg')}}" alt="logo_onenet">
        </a>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div style="    padding-left: 28px;" id="navbar1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" style="font-size: 19px;">
                    <li  {{ (Request::is('/') ? 'class=actived' : '') }}><a href="{{url('/')}}">Inicio</a></li>
                    <li {{ (Request::is('nosotros') ? 'class=actived' : '') }}> <a href="{{url('/nosotros')}}">Nosotros</a></li>
                    <li class="dropdown <?php
                    if(Request::is('servicios/internet_inalambrico')
                        or Request::is('servicios/internet_inalambrico/hogares')
                        or Request::is('servicios/internet_inalambrico/pymes')
                        or Request::is('servicios/internet_inalambrico/internet_dedicado')
                        or Request::is('servicios/promociones')
                        or Request::is('servicios/cobertura'))
                    {
                        echo 'actived';
                    }

                    ?>" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servicios <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown <?php
                            if(Request::is('servicios/internet_inalambrico'))
                            {
                                echo 'actived';
                            }

                            ?>"><a href="{{url('/servicios/internet_inalambrico')}}">Internet Inalambrico</a></li>
                            <li class="divider"></li>
                            <!--                                <li class="dropdown-header">Pormociones</li>-->
                            <li class="<?php
                            if(Request::is('servicios/internet_inalambrico/hogares')
                                or Request::is('servicios/internet_inalambrico/pymes')
                                or Request::is('servicios/internet_inalambrico/internet_dedicado'))
                            {
                                echo 'actived';
                            }

                            ?>"><a href="{{url('/servicios/internet_inalambrico#planes')}}">Planes de internet</a></li>
                            <li class="
                                <?php
                                if(Request::is('servicios/promociones'))
                                {
                                    echo 'actived';
                                }

                                ?>"><a href="{{url('/servicios/promociones')}}">Promociones</a></li>
                            <li
                                class="
                                <?php
                                if(Request::is('servicios/cobertura'))
                                {
                                    echo 'actived';
                                }

                                ?>"><a href="{{url('/servicios/cobertura')}}">Cobertura</a></li>
                        </ul>
                    </li>
                    <li {{ (Request::is('contactenos') ? 'class=actived' : '') }}><a href="{{url('/contactenos')}}">Contactenos</a></li>

                </ul>
<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                    <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>-->
<!--                    <li><a href="#"><span class=""></span> Login</a></li>-->
<!--                </ul>-->
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
</header>