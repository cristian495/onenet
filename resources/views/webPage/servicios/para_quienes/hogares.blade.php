@extends('webPage.layout.app')

@section('title', 'Hogares')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">
    <div class="cont_posicion_paginas">
        <a href="{{url('/')}}">Inicio</a> /
        <a href="{{url('/servicios/internet_inalambrico')}}">Servicios</a>/
        <a href="{{url('/servicios/internet_inalambrico#planes')}}">Internet Inalambrico</a>/
        <a style="color: black">Hogares</a>
    </div>
    <section style="" class="hogares_portada row conteiner-fluid">
        <picture class="portada_img">
            <source srcset="{{asset('img/paginaweb/background/hogares-responsive.jpg')}}" media="(max-width: 768px)">
            <!--<source srcset="{{asset('img/paginaweb/background/hogares.jpg')}}">-->
            <source srcset="{{asset('img/paginaweb/background/rosalina-hogares.jpg')}}">
            <img srcset="" alt="internet_para_hogares_onenet">
        </picture>
        <div class="titulos">
            <h3>INTERNET <span style="color:#00CBD3 ">HOGAR</span></h3>
            <h4> Vive conectado con un internet confiable, seguro, y rapido !</h4>
        </div>
    </section>

    <section class="hogares_descripcion">
        <p>
            Pensado para un uso frecuente de internet. Te permite ver videos de alta definición,
            descargar música, chatear, navegar, transferir archivos y trabajar desde tu casa al
            precio más accesible
        </p>
    </section>

    <section class="hogares_planes container-fluid">
        <h4 class="hogares_planes_titulo">Planes</h4>
        @include('webPage.layout.planes')
    </section>



</main>





@endsection