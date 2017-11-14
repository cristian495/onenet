@extends('webPage.layout.app')

@section('title', 'Nosotros')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">
    <section class="quienes_somos row conteiner-fluid">
        <div class="row col-lg-12 col-md-12 col-sm-12 nosotros_titulo_contenedor">
            <h4 class="nosotros_titulo">Quienes somos</h4>
        </div>
        <div class="col-lg-12 nosotros_texto_contenedor">
            <div class="cont_text fadeInUp wow" data-wow-offset="300">
<!--                <img src="{{asset('img/onenet_logo.png')}}" alt=""/>-->
                <strong>ONE NET SAC</strong>, es una empresa nueva orgullosamente
                peruana constituida el 21 de agosto del 2017, dedicada actualmente
                a servir a los hogares y empresas chiclayanas mediante la venta
                de internet inalámbrico. Nuestro principal mercado está constituido
                por los distritos de que conforman el departamento de Lambayeque
                brindándoles un servicio de excelente calidad e insuperables precios.
                Contamos con una sólida experiencia en telecomunicaciones lo cual le
                permitirá convertirnos en la red distribuidora número  uno de la región
                trabajando conjuntamente con un staff sólido y capacitado.

                <br/>
                <br/>
                <strong>ONE NET SAC</strong> es un Operador de Servicios Públicos de Telecomunicaciones,
                que cuenta con la Concesión y Registros ante el Estado Peruano y el MTC,
                para brindar sus servicios en la modalidad de  no conmutado a nivel local.
            </div>


            <h3 style="text-align: center">Misión</h3>
            <div class="cont_text fadeInUp wow" data-wow-offset="300">
                <img style="margin-left: 13px;" src="{{asset('img/paginaweb/icons/mission_onenett.png')}}" alt="mision onenet proveedor de internet"/>

                Distribuir internet inalámbrico a nivel local basado en la competencia
                de nuestros colaboradores, control de procesos y buen servicio de
                atención al cliente.


            </div>

            <h3 style="text-align: center">Visión</h3>
            <div class="cont_text fadeInUp wow" data-wow-offset="300">
                <img src="{{asset('img/paginaweb/icons/vision_onenet.png')}}" alt="vision onenet proveedor de internet"/>
                Lograr que las principales ciudades del norte se conviertan en
                ciudades inteligentes, desarrollando estrategias y fortaleciendo
                nuestros vínculos comerciales con nuestros clientes, respetando
                nuestros valores institucionales y orientados a un servicio post
                venta.
            </div>

            <h3 style="text-align: center">Nuestro Compromiso</h3>
            <div class="cont_text fadeInUp wow" data-wow-offset="300">
                Orientar nuestro trabajo y esfuerzo a resultados para
                satisfacer las necesidades de nuestros clientes cumpliendo
                con sus expectativas y garantizando la eficacia en cada uno
                de nuestros servicios brindados; y enfocando nuestra labor
                al  buen trato de nuestros colaboradores.
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