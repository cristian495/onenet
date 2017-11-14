@extends('webPage.layout.app')

@section('title', 'Nosotros')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">
    <section>
        <div class="mapa" id="map" ></div>
    </section>
    <section class="row col-lg-12">
        <h3 style="text-align: center;" class="contactenos_titulo">Envíenos un correo electrónico con cualquier pregunta o consulta, o utilice nuestros datos de contacto.</h3>
        <div class="form_info_onenet">
            <div class="info_empresa">
                <div class="info_empresa_item">
                    <h4 class="item_titulo">
                        Dirección
                    </h4>
                    <ul>
                        <li><span class="fa fa-home"></span> Mz k lote 4 urb. 3 de octubre Chiclayo - Chiclayo - Lambayeque</li>
                    </ul>
                </div>

                <div class="info_empresa_item">
                    <h4 class="item_titulo">
                        Teléfonos
                    </h4>
                    <ul>
                        <li><span class="fa fa-phone"></span><span style="font-size: 17px" class="fa fa-whatsapp"></span> 976752478 </li>
                        <li><span class="fa fa-phone"></span><span style="font-size: 17px" class="fa fa-whatsapp"></span> 962510317 </li>
                    </ul>
                </div>

                <div class="info_empresa_item">
                    <h4 class="item_titulo">
                        E-mail
                    </h4>
                    <ul>
                        <li><span class="fa fa-envelope"></span> informes@onenet.com.pe </li>
                    </ul>
                </div>

                <div class="info_empresa_item">
                    <h4 class="item_titulo">
                        RUC
                    </h4>
                    <ul>
                        <li><span class="fa fa-id-card-o"></span>20602445004 </li>
                    </ul>
                </div>
            </div>
            <div class="cont_formulario">
                <form action="" class="formulario">
                    <div class="cont_input">
                        <label class="label_input" for="">TU NOMBRE *:</label>
                        <input class="input_input" required type="text" placeholder="Escriba su nombre"/>
                    </div>
                    <div class="cont_input">
                        <label class="label_input" for="">DIRECCIÓN DE EMAIL *:</label>
                        <input class="input_input" required type="email" placeholder="Escriba su mail"/>
                    </div>
                    <div class="cont_input">
                        <label class="label_input" for="">NÚMERO DE TELÉFONO :</label>
                        <input class="input_input"  type="text" placeholder="Escriba su número de teléfono"/>
                    </div>
                    <div class="cont_input">
                        <label class="label_input" for="">TU MENSAJE *:</label>
                        <textarea name="" id="" required class="input_input" cols="30" rows="10"
                                  placeholder="Escriba un mensaje"></textarea>
                    </div>
                    <div class="cont_input_btn">
                        <input class="input_input_btn" type="submit" value="Enviar"/>
                    </div>
                </form>
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



    function initMap() {
        var latlng = new google.maps.LatLng(-6.7784183,  -79.8839025);
        var draggable = true;
        var myOptions = {
                            zoom: 17,
                            center: latlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            draggable: draggable,
                            zoomControl: true,
                            mapTypeControl: false,
                            streetViewControl: false,
                            scrollwheel: false
                        };
        var map = new google.maps.Map(document.getElementById("map"), myOptions);

        var marker = new google.maps.Marker({
            position: latlng, map: map
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm1ZqSRdgqDpY2XPEwJb835I71SftfeYA&callback=initMap"
        async defer>
</script>
@endsection

