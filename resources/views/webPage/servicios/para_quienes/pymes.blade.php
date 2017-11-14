@extends('webPage.layout.app')

@section('title', 'Pymes')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">
    <div class="cont_posicion_paginas">
        <a href="{{url('/')}}">Inicio</a> /
        <a href="{{url('/servicios/internet_inalambrico')}}">Servicios</a>/
        <a href="{{url('/servicios/internet_inalambrico#planes')}}">Internet Inalambrico</a>/
        <a style="color: black">Pymes</a>
    </div>
    <section style="" class="pymes_portada row conteiner-fluid">
        <picture >
<!--            <source srcset="{{asset('img/background/hogares-responsive.png')}}" media="(max-width: 1200px)">-->

            <!--<source srcset="{{asset('img/paginaweb/background/reuniones.jpg')}}">-->

            <source srcset="{{asset('img/paginaweb/background/rosalina-empresa.jpg')}}">
            <img class="portada_img" srcset="" alt="internet_para_pymes_onenet">
        </picture>
        <div class="pymes_titulos">
            <h3>INTERNET <span style="color:#00CBD3 ">PYMES</span></h3>
            <h4> Vive conectado con un internet confiable, seguro, y rapido !</h4>
        </div>
    </section>
    <section class="pymes_descripcion">
        <p>
            Ideado para que puedas realizar tus tareas diarias en poco tiempo.
            Te permite administrar tus cámaras, tu negocio, tu trabajo en tiempo real
            sin moverte de tu casa.
        </p>
    </section>







    <section class="pymes_caracteristicas container-fluid" >
        <h4 class="pymes_planes_titulo">Características</h4>
        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_desc">
                <h4>Acceso inalambrico</h4>
                <hr/>
                <p class="descripcion">
                    La movilidad es un requisito para operaciones rápidas y
                    servicios dinámicos que agreguen valor a sus empleados y clientes.
                    Obtenga acceso inalámbrico de alta densidad y haga la diferencia
                </p>
            </div>
            <div class="cont_img">
                <img style="    width: 195px;" src="{{asset('img/paginaweb/pymes/wifi.png')}}" alt="internet_acceso_inalambrico_pymes_onenet"/>
            </div>
        </div>

        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/pymes/point_to_point.png')}}" alt=""/>
            </div>
            <div class="cont_desc">
                <h4>Conexión entre sedes</h4>
                <hr/>
                <p class="descripcion">
                    Interconecta locales anexos con el local central de la empresa,
                    manteniendo la comunicación de datos, voz y video en tiempo real y en toda la red.
                    Interconecta todos tus locales vía medios físicos (fibra óptica) y/o
                    inalámbricos.
                </p>
            </div>
        </div>

        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_desc">
                <h4>Mejora tu productividad</h4>
                <hr/>
                <p class="descripcion">
                    Has de internet tu mejor herramienta para mejorar la productividad de tu empresa,
                    podrás comunicarte con proveedores, empleados o clientes mediante correos electronicos,
                    gestionar el marketing online, consultar información para ayudar en la toma de decisiones,
                    y mucho mas.
                </p>
            </div>
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/pymes/mejora_productividad.jpg')}}" alt=""/>
            </div>
        </div>
<!--        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">-->
<!--            <div class="cont_img">-->
<!--                <img src="{{asset('img/pymes/caracteristica.jpg')}}" alt=""/>-->
<!--            </div>-->
<!--            <div class="cont_desc">-->
<!--                <h4>Contactibilidad mediante correos</h4>-->
<!--                <hr/>-->
<!--                <p class="descripcion">-->
<!--                    Podrás mantenerte siempre en contacto con tus clientes, em-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/alta_velocidad.jpg')}}" alt="velocidad_necesario_para_tu_empresa_onenet"/>
            </div>
            <div class="cont_desc">
                <h4>Velocidad que necesitas</h4>
                <hr/>
                <p class="descripcion">
                    Te ofrecemos la posibilidad de poder ampliar tus velocidades de internet
                    según la demanda de tu empresa, desde 6Mbps HASTA 16Mbps de ancho de banda.
                </p>
            </div>
        </div>
    </section>

    <section style="" class="servicios_instalacion row conteiner-fluid">
        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_cotizar">
            Solicitar cotización
        </a>


        <div class="modal fade" id="modal_cotizar" tabindex="-1" role="dialog" aria-labelledby="modal_cotizar" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-close"></span>
                        </button>
                        <h4 class="modal-title" id="modal_cotizar_label">Solicite una cotización</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="cli_cotiza_nombre" class="col-form-label">Nombre * :</label>
                                <input type="text" required class="form-control" id="cli_cotiza_nombre" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="cli_cotiza_apellido" class="col-form-label">Apellido * :</label>
                                <input type="text"  required class="form-control" id="cli_cotiza_apellido" placeholder="Ingrese su apellido">
                            </div>
                            <div class="form-group">
                                <label for="cli_cotiza_correo" class="col-form-label">Correo electronico * :</label>
                                <input type="email" required class="form-control" id="cli_cotiza_correo" placeholder="Ingrese su correo">
                            </div>
                            <div class="form-group">
                                <label for="cli_cotiza_empresa" class="col-form-label">Empresa * :</label>
                                <input type="email" required class="form-control" id="cli_cotiza_empresa" placeholder="Ingrese el nombre de su empresa">
                            </div>
                            <div class="form-group">
                                <label for="servicio_requerido" class="col-form-label">Servicio requerido * :</label>
                                <select class="form-control" name="servicio_requerido" id="servicio_requerido">
                                    <option  value="internet_pymes" selected>Internet para pymes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message * :</label>
                                <textarea class="form-control" id="message-text" placeholder="Escriba un mensaje"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection


@section('scripts')

<!--EFCTO SCROLL-->
<script src="{{asset('js/paginaweb/wow.min.js')}}"></script>
<!--FIN SCROLL-->

<script>
    new WOW().init();
</script>
@endsection