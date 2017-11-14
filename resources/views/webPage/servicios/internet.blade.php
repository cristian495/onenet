@extends('webPage.layout.app')

@section('title', 'Internet')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">
    <div class="cont_posicion_paginas">
        <a href="{{url('/')}}">Inicio</a> /
        <a href="{{url('/servicios/internet_inalambrico')}}">Servicios</a> /
        <a style="color: black">Internet Inalambrico</a>
    </div>
    <section style="" class="servicios_portada row conteiner-fluid">
        <h3>Internet al alcance de todos</h3>
        <h4> Confiable, seguro, y rapido ...</h4>
    </section>

    <section style="" class="servicios_instalacion row conteiner-fluid">
        <div class="item_servicios_instalacion">
            <div class="cont_ins_img">
                <img src="{{asset('img/paginaweb/icons/contrato.png')}}" alt="" class="instalacion_imagen"/>
                <span class="num_paso">1</span>

            </div>
            <h4 class="instalacion_titulo">
                Firma del Contrato
            </h4>
            <p class="instalacion_descripcion">
                Llevamos a cabo la firma del contrato por la cantidad
                de tiempo deseada.
            </p>
        </div>

        <div class="item_servicios_instalacion">
            <div class="cont_ins_img">
                <img src="{{asset('img/paginaweb/icons/pago.png')}}" alt="" class="instalacion_imagen"/>
                <span class="num_paso">2</span>
            </div>
            <h4 class="instalacion_titulo">
                Pago de cuota
            </h4>
            <p class="instalacion_descripcion">
                Se cancela el costo de la primera mensualidad por el servicio de internet.
            </p>
        </div>

        <div class="item_servicios_instalacion">
            <div class="cont_ins_img">
                <img src="{{asset('img/paginaweb/icons/configuracion_equipos.png')}}" alt="" class="instalacion_imagen"/>
                <span class="num_paso">3</span>
            </div>
            <h4 class="instalacion_titulo">
                Instalación
            </h4>
            <p class="instalacion_descripcion">
                Efectuamos la instalación y configuración en un máximo plazo de 48 horas.
            </p>
        </div>
    </section>







    <section id="planes" style="" class="servicios_paraquienes row conteiner-fluid">
        <h4><span class="paq_resaltado"> Velocidad</span> que se adapta a tus necesidades.</h4>

        <div class="contenedor_paraquienes">

            <div  class="item_servicios_paraquienes">
                <img class="img_paraquienes" src="{{asset('img/paginaweb/servicio/hogares.jpg')}}" alt="onenet_para_hogares"/>
                <div class="paraquienes_titulo">
                    HOGARES
                </div>
                <a  class="mascaraa" href="{{url('/servicios/internet_inalambrico/hogares')}}" >
                    <img src="{{asset('img/paginaweb/zoom.png')}}" alt=""/>
                </a>
            </div>

            <div  class="item_servicios_paraquienes">
                <img  class="img_paraquienes" src="{{asset('img/paginaweb/servicio/pymes.jpg')}}" alt="onenet_para_pymes"/>
                <div class="paraquienes_titulo">
                    PYMES
                </div>
                <a  class="mascaraa" href="{{url('/servicios/internet_inalambrico/pymes')}}">
                    <img src="{{asset('img/paginaweb/zoom.png')}}" alt=""/>
                </a>
            </div>

            <div  class="item_servicios_paraquienes">
                <img class="img_paraquienes" src="{{asset('img/paginaweb/servicio/instituciones.jpg')}}" alt="onenet_para_instituciones"/>
                <div class="paraquienes_titulo">
                    INSTITUCIONES
                </div>
                <a  class="mascaraa" href="{{url('/servicios/internet_inalambrico/internet_dedicado')}}">
                    <img src="{{asset('img/paginaweb/zoom.png')}}" alt=""/>
                </a>
            </div>



        </div>
    </section>



    <section  class="internet_planes row conteiner-fluid" style="">
        <h4 style="    text-align: center;font-size: 25px;width: 90%;margin: 30px auto 20px auto;">
            <span class="paq_resaltado">Nuestros planes</span> más populares.
        </h4>
        @include('webPage.layout.planes')
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