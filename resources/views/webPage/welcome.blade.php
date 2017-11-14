<!--<!DOCTYPE html>-->
<!--<html lang="es">-->
<!--<body>-->
@extends('webPage.layout.app')

@section('title', 'Inicio')
@section('content')
<!--    <div class="cont_posicion_paginas">-->
<!--        <a>Inicio</a>-->
<!--    </div>-->

    <main class="" style=" max-width: 1760px;margin: auto;">
        <section class="slider row conteiner-fluid">
<!--         -->
                <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line"  data-pause="hover" data-interval="6000"   data-ride="carousel" >

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper For Slides -->
                    <div class="carousel-inner" role="listbox">

                        <!-- Third Slide -->
                        <div class="item active">

                            <!-- Slide Background -->
                            <img src="{{asset('img/paginaweb/slider/browse.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            <div class="bs-slider-overlay"></div>


                                    <!-- Slide Text Layer -->
                                    <div class="slide-text slide_style_left">
                                        <h1 data-animation="animated zoomInRight">Disfruta de un internet de alta velocidad</h1>
                                        <p data-animation="animated fadeInLeft">podrás descargar música,fotos o videos sin límites.<br></p>
                                        <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Conócenos</a>
                                        <a href="" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">Ver planes</a>
                                    </div>
                        </div>



                        <!-- End of Slide -->



                        <!-- Third Slide -->
                        <div class="item">

                            <!-- Slide Background -->

                            <img src="{{asset('img/paginaweb/slider/servers.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            <div class="bs-slider-overlay"></div>
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_right">
                                <h1 data-animation="animated flipInX">El servicio de calidad esta garantizado</h1>
                                <p data-animation="animated lightSpeedIn">Contamos con los mejores equipos wireless,<br>y con un personal altamente capacitado.</p>
                            </div>
<!--                            <div class="slide-text slide_style_right">-->
<!--                                <h1 data-animation="animated zoomInLeft">Beautiful Animations</h1>-->
<!--                                <p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>-->
<!--                                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>-->
<!--                                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>-->
<!--                            </div>-->
                        </div>
                        <!-- End of Slide -->
                        <!-- Second Slide -->
                        <div class="item">

                            <!-- Slide Background -->
                            <img src="{{asset('img/paginaweb/slider/sigue_conectado_onenet.gif')}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            <div class="bs-slider-overlay"></div>
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_center">
                                <h1 data-animation="animated zoomInLeft">Mantente conectado con el mundo</h1>
                                <p data-animation="animated fadeInRight">Escoge el plan que mas se adapte a tus necesidades.</p>
<!--                                <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft"></a>-->
                                <a href="" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">Ver planes</a>


<!--                                <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a>-->
<!--                                <a href="" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a>-->
                            </div>

                        </div>
                        <!-- End of Slide -->



                    </div><!-- End of Wrapper For Slides -->

                    <!-- Left Control -->
                    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <!-- Right Control -->
                    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div> <!-- End  bootstrap-touch-slider Slider -->
        </section>

        <section class="row conteiner-fluid slogan">
            <h3 class="slogan_titulo">OneNet</h3>
<!--            <p class="slogan_texto">Somos una empresa peruana con una solida experiencia en telefcomunicaciones y etamos innovando con un nuevo servicio para que tu hogar y tu empresa vivan conectados a travéz del internet inalambrico de alta velocidad</p>-->
            <p class="slogan_texto wow fadeIn" data-wow-offset="330" data-wow-delay="0s" >
                <span class="fa fa-quote-left" style="    margin-right: 10px;"></span>Somos una empresa peruana con una solida experiencia en
                brindar un servicio de internet inalambrico de calidad.<span class="fa fa-quote-right" style="    margin-left: 10px;"></span>
            </p>
        </section>

        <section class="paquetes">
            <h3 class="paquetes_titulo">
                <span>ELIGE </span><span class="paq_resaltado"> TU PLAN</span>
            </h3>

            <div class="row contenedor_paquetes">
                <!-- Pricing -->

                @include('webPage.layout.planes')
                <!--//End Pricing -->
                <h4 class="planes_vermas col-lg-12 col-md-12 col-sm-12"><a href="">Ver más planes</a></h4>
            </div>
        </section>

        <section class="row conteiner-fluid porque_nosotros">
            <h3 class="porque_nosotros_titulo">
                Nuestros valores Institucionales
            </h3>
            <div class="porque_nosotos_features">
                <div class="fadeInUp wow feature_item" data-wow-delay=".2s" data-wow-offset="355">
                    <img class="feature_item_img" src="{{asset('img/paginaweb/icons/group.png')}}" alt=""/>
                    <h5 class="feature_item_description">Vocación de servicio</h5>
                </div>
                <div class="fadeInUp wow feature_item" data-wow-delay=".2s" data-wow-offset="355">
                    <img class="feature_item_img" src="{{asset('img/paginaweb/icons/business-deal.png')}}" alt=""/>
                    <h5 class="feature_item_description">Compromiso empresarial</h5>
                </div>
                <div class="fadeInUp wow feature_item" data-wow-delay=".2s" data-wow-offset="355">
                    <img class="feature_item_img" src="{{asset('img/paginaweb/icons/profesional.png')}}" alt=""/>
                    <h5 class="feature_item_description">Conducta ética y profesional</h5>
                </div>
                <div  class="fadeInUp wow feature_item" data-wow-delay=".2s" data-wow-offset="355">
                    <img style="width: 29%" class="feature_item_img" src="{{asset('img/paginaweb/icons/ecologico_onenet.png')}}" alt=""/>
                    <h5 class="feature_item_description">Responsabilidad ambiental</h5>
                </div>
            </div>
        </section>
        <section class="row conteiner-fluid marcas">
            <div class="row col-lg-12 background">
                <div class="marcas_titulo">Marcas con las que trabajamos</div>
                <div class=" row col-lg-6 marcas_contenedor">
                    <div class="marca_item  ">
                        <img src="{{asset('img/paginaweb/logos/onenet_cambiumnetwork.png')}}" alt="onenet_ubiquiti"/>
                    </div>
                    <div class="marca_item  ">
                        <img src="{{asset('img/paginaweb/logos/onenet_linksys.png')}}" alt="onenet_ubiquiti"/>
                    </div>
                    <div class="marca_item ">
                        <img src="{{asset('img/paginaweb/logos/onenet_tplink.png')}}" alt="onenet_ubiquiti"/>
                    </div>
                    <div class="marca_item">
                        <img src="{{asset('img/paginaweb/logos/onenet_cisco.png')}}" alt="onenet_ubiquiti"/>-->
                    </div>
                    <div class="marca_item">
                        <img src="{{asset('img/paginaweb/logos/onenet_alfa.png')}}" alt="onenet_ubiquiti"/>
                    </div>
                    <div class="  marca_item">
                        <img src="{{asset('img/paginaweb/logos/onenet_mikrotik.png')}}" alt="onenet_ubiquiti"/>
                    </div>
                    <div class="  marca_item">
                        <img  src="{{asset('img/paginaweb/logos/onenet_ubiquiti.png')}}" alt="onenet_ubiquiti"/>
                    </div>
                    <div class=" marca_item">
                        <img src="{{asset('img/paginaweb/logos/onenet_huawei.png')}}" alt="onenet_huawei"/>
                    </div>
                    <div class=" marca_item">
                        <img src="{{asset('img/paginaweb/logos/onenet_intel.png')}}" alt="onenet_intel"/>
                    </div>

                </div>
            </div>
        </section>
        <section class="row col-lg-12 col-md-12 col-sm-12 promociones" id="promos">
            <h4 class="col-lg-12 col-md-12 col-sm-12 promociones_titulo">
                <span>Promociones</span>
                <a href="" class="ver_promociones">Ver más promociones <span class="fa fa-chevron-right"></span></a>
            </h4>
            <div class="col-lg-12 col-md-12 col-sm-12 promociones_contenedor">
                <div class="item_promocion col-lg-6 col-md-6 col-sm-6">
                    <img class="item_promo_img img-responsive"  src="{{asset('img/paginaweb/publi/browse.gif')}}" alt="publicidad01"/>
                    <h4 class="item_promo_titulo">Moderniza el internet de tu casa y despega</h4>
                    <span class="itema_validez">Valido del 12-04-2017 al 20-08-2017</span>
                    <span class="item_arrow"><span class="fa fa-chevron-right"></span></span>
                    <a class="mascara" href="">
                        <img src="{{asset('img/paginaweb/zoom.png')}}" alt=""/>
                    </a>
                </div>
                <div class="item_promocion col-lg-6 col-md-6 col-sm-6 col-md-offset-6">
                    <img class="item_promo_img img-responsive" style="display: block" src="{{asset('img/paginaweb/publi/sss.jpg')}}" alt="publicidad02"/>
                    <h4 class="item_promo_titulo">Moderniza el internet de tu casa y despega</h4>
                    <span class="itema_validez">Valido del 12-04-2017 al 20-08-2017</span>
                    <span class="item_arrow"><span class="fa fa-chevron-right"></span></span>
                    <a class="mascara" href="">
                        <img src="{{asset('img/paginaweb/zoom.png')}}" alt=""/>
                    </a>
                </div>
            </div>
        </section>
        <section class="row col-lg-12 col-md-12 col-sm-12 caracteristicas_servicio">
            <div class="caracteristica_titulo">
                UNA SERIE DE VENTAJAS<br><span class="titulo_resaltado"> A UN PRECIO ASEQUIBLE</span>
            </div>
            <div class="caracteristica_item col-lg-4 col-md-4 col-sm-12">
                <div class="item_header">
                    <i class="material-design-settings49 header_icon"></i>
                    <h4 class="header_title">Instalacion y configuracion de equipos</h4>
                </div>
                <div class="itema_body">
                    OneNet ofrece el equipamiento y configuraciones necesarias
                    para  garantizar un internet de la mejor calidad con una velocidad
                    óptima.
                </div>
            </div>
            <div class="caracteristica_item col-lg-4 col-md-4 col-sm-12">
                <div class="item_header">
                    <i class="material-design-headset12 header_icon"></i>
                    <h4 class="header_title">Centro de soporte al cliente</h4>
                </div>
                <div class="itema_body">
                    Proporcionamos a  nuestros clientes un soporte gratuito que
                    garantiza la solucion ante cualquier inconveniente con su
                    conexion a internet.
                </div>
            </div>

            <div class="caracteristica_item col-lg-4 col-md-4 col-sm-12">
                <div class="item_header">
                    <i class="material-design-thumb54 header_icon"></i>
                    <h4 class="header_title">Satifaccion del cliente garantizada</h4>
                </div>
                <div class="itema_body">
                    La cantidad de clientes satisfechos de nuestra compañía crece
                    con cada nuevo cliente, creando una garantía de satisfacción
                    para todos los que utilizan nuestros servicios.
                </div>
            </div>
        </section>


    </main>
@endsection

@section('scripts')
    <!--SCRIPTS TOUCH PARA SLIDER-->
    <script src="{{asset('js/paginaweb/slider/touchSwipe.min.js')}}"></script>
    <script src="{{asset('js/paginaweb/slider/bootstrap-touch-slider.js')}}"></script>
    <!--FIN SCRIPTS TOUCH PARA SLIDER-->


    <!--EFCTO SCROLL-->
    <script src="{{asset('js/paginaweb/wow.min.js')}}"></script>
    <!--FIN SCROLL-->

    <script>

        $('#bootstrap-touch-slider').bsTouchSlider();
        new WOW().init();
    </script>
@endsection
<!--</body>-->
<!--</html>-->