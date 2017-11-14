@extends('webPage.layout.app')

@section('title', 'Instituciones')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">
    <div class="cont_posicion_paginas">
        <a href="{{url('/')}}">Inicio</a> /
        <a href="{{url('/servicios/internet_inalambrico')}}">Servicios</a>/
        <a href="{{url('/servicios/internet_inalambrico#planes')}}">Internet Inalambrico</a>/
        <a style="color: black">Internet dedicado</a>
    </div>
    <section style="" class="pymes_portada row conteiner-fluid">
        <picture >
            <!--            <source srcset="{{asset('img/background/hogares-responsive.png')}}" media="(max-width: 1200px)">-->
            <!--<source srcset="{{asset('img/paginaweb/background/instituciones.jpg')}}">-->
            <source srcset="{{asset('img/paginaweb/background/rosalina-dedicado.jpg')}}">
            <img class="portada_img" srcset="" alt="internet_para_pymes_onenet">
        </picture>
        <div class="pymes_titulos">
            <h3>INTERNET <span style="color:#00CBD3 ">INSTITUCIONES</span></h3>
            <h4> Vive conectado con un internet confiable, seguro, y rapido !</h4>
        </div>
    </section>
    <section class="pymes_descripcion">
        <p>
            Si tu empresa o negocio utiliza internet para funcionar<br/>
            Te ofrecemos una conexión PTP (Punto A Punto). Ideado para transferir achivos,
            descargar contenidos, VOIP, monitoreo de cámaras en tiempo real, etc.
        </p>
    </section>







    <section class="pymes_caracteristicas container-fluid" style="width: 86%">
        <h4 class="pymes_planes_titulo">Características</h4>
        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_desc">
                <h4>Navegación segura</h4>
                <hr/>
                <p class="descripcion">
                    La conectividad actual requiere mucho más que un Internet veloz.
                    Necesita protección. Por eso, el Internet Dedicado de OnetNet
                    no solo te garantiza la mayor velocidad, también te ofrece conexión segura
                    y un acceso completo a todas sus herramientas
                </p>
            </div>
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/internet_seguro_onenet.jpg')}}" alt="internet_seguro_con_onenet"/>
            </div>
        </div>

        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/alta_velocidad.jpg')}}" alt="alta_velocidad_internet_onenet"/>
            </div>
            <div class="cont_desc">
                <h4>Máxima velocidad</h4>
                <hr/>
                <p class="descripcion">
                    Te ofrecemos la posibilidad de poder ampliar tus velocidades de internet
                    según la demanda de tu institucion, con hasta 200 mbps de ancho de banda a través de
                    fibra óptica.
                </p>
            </div>
        </div>

        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_desc">
                <h4>Soporte técnico</h4>
                <hr/>
                <p class="descripcion">
                    Te brindamos un soporte técnico especializado y asesoria las 24 horas del día.
                </p>
            </div>
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/soporte_tecnico.jpg')}}" alt="soporte_tecnico_especializado_onenet"/>
            </div>
        </div>
        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/acceso_instantaneo.jpg')}}" alt="accede_apps_internet_onenet"/>
            </div>
            <div class="cont_desc">
                <h4>Acceso inmediato</h4>
                <hr/>
                <p class="descripcion">
                    Fácil acceso a las aplicaciones diarias como servicios de e-mail,
                    gestión de catálogos de productos vía web, videos streaming y video conferencia.
                </p>
            </div>
        </div>
        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_desc">
                <h4>Velocidad que necesitas</h4>
                <hr/>
                <p class="descripcion">
                    Brindamos una alta disponibiliad de servicio: 99,95%, con
                    anchos de banda de subida y bajada nacional e internacional garantizados al 100%
                </p>
            </div>
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/ncesaria_velocidad.jpg')}}" alt="velocidad_que_necesitas_onenet"/>
            </div>
        </div>
        <div class="pymes_caracteristicas_item wow fadeInUp" data-wow-offset="200">
            <div class="cont_img">
                <img src="{{asset('img/paginaweb/dedicado/cobertura.jpg')}}" alt="Buena_cobertura_en_chiclayo_onenet"/>
            </div>
            <div class="cont_desc">
                <h4>Buena cobertura garatizada</h4>
                <hr/>
                <p class="descripcion">
                    Conexiones  a los diferentes distritos de la provincia y acceso local respaldado.
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
                                    <option  value="internet_pymes" selected>Internet dedicado</option>
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