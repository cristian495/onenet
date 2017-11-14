/*
* FUNCION DE PAGINACION
* */



 /*
* CARGAR CONTENIDO EN CPANEL
* */
function cargarContenido(listado) {
    $("#contenido_principal").fadeOut(305);
    var urlraiz = $("#url_raiz_proyecto").val(),url;
    if (listado == 1) {
        url = urlraiz + "/equipos/antena_emisora";
    }
    if (listado == 2) {
        url = urlraiz + "/paquetes";
    }
    if (listado == 3) {
        url = urlraiz + "/clientes";
    }
    if (listado == 4) {
        url = urlraiz + "/servicio/contratos";
    }
    if (listado == 5) {
        url = urlraiz + "/servicio/cobros/por_cobrar/";
    }
    if (listado == 6) {
        url = urlraiz + "/servicio/cobros/comprobantes/";
    }
    if (listado == 7) {
        url = urlraiz + "/acceso/usuarios/administradores";
    }
    if (listado == 8) {
        url = urlraiz + "/acceso/usuarios/clientes";
    }
    /*PARA LOS CLIENTES*/
    /*if (listado == 9) {
        url = urlraiz + "/acceso/usuarios/clientes";
    }*/
    //PAGOS HECHOS
    if (listado == 10) {
        url = urlraiz + "/consultas/pagoshechos";
    }
    //MENSUALIDADES
    if (listado == 11) {
        url = urlraiz + "/consultas/mensualidades";
    }

/*
    progressJs("#targetElement").start();
    progressJs("#targetElement").increase(35);
    progressJs("#targetElement").increase(50);
    progressJs("#targetElement").increase(80);*/
    //$("#contenido_principal").html($("#cargador_empresa").html());
    $.get(url, function (resul) {
        //progressJs("#targetElement").end();
        $("#contenido_principal").css("display", "none");
        $("#contenido_principal").html(resul);
        $("#contenido_principal").fadeIn(130);
    })

}


/*
* MODAL FORMULARIO
* */
$(document).on("click", ".div_modal", function (e) {
    var capa_formularios =$("#capa_formularios"),
        where_i_am= $("#where_i_am").val();
    $(this).hide();
    capa_formularios.hide();
    $("#"+where_i_am).click();
    capa_formularios.html("");
});

$(document).on("keyup", function (e) {

    if (e.keyCode == 27) {
        var capa_formularios =$("#capa_formularios"),
            where_i_am= $("#where_i_am").val();
        $(".div_modal").hide();
        capa_formularios.hide();
        $("#"+where_i_am).click();
        capa_formularios.html("");
    }
});


/*
* CARGAR FORMULARIO RESPECTIVO
* */
function cargar_formulario(arg, id) {
    //saldra el dominio del proyecto seguido de un "/" ejem: localhost:8000/
    var capa_formularios =$("#capa_formularios"),
        urlraiz = $("#url_raiz_proyecto").val(),
        where_i_am = $("#where_i_am").val(),
        url;

    $("#capa_modal").show();
    capa_formularios.show();

    var screenTop = $(document).scrollTop();
    capa_formularios.css('top', screenTop);
    //capa_formularios.html($("#cargador_empresa").html());


    switch (where_i_am) {
        case 'section_antena_emisora':
            /*
             * ANTENAS EMISORAS
             * */
            if (arg == 'form_nueva_antena') {
                 miurl = urlraiz + "/equipos/form_nueva_antena";
            }
            if (arg == 'mostrar_detalles') {
                 miurl = urlraiz + "/equipos/detalles_antena_emisora/" + id + "";
            }
            if (arg == 'form_editar_antena') {
                miurl = urlraiz + "/equipos/editar_antena_emisora/" + id + "";
            }
            break;

        case 'section_paquete':
            /*
            * PAQUETES
            * */
            if (arg == 'form_nuevo_paquete') {
                 miurl = urlraiz + "/form_nuevo_paquete";
            }
            if (arg == 'mostrar_detalles') {
                miurl = urlraiz + "/detalles_paquete/" + id + "";
            }
            if (arg == 'form_editar_paquete') {
                 miurl = urlraiz + "/form_editar_paquete/" + id + "";
            }
            break;
        case 'section_cliente':
            /*
             * INGRESO
             * */
            if (arg == 'form_nuevo_cliente') {
                miurl = urlraiz + "/form_nuevo_cliente";
            }
            if (arg == 'mostrar_detalles') {
                miurl = urlraiz + "/detalles_cliente/" + id + "";
            }
            if (arg == 'form_editar_cliente') {
                miurl = urlraiz + "/form_editar_cliente/" + id + "";
            }
            break;
        case 'section_contrato':
            /*
             * INGRESO
             * */
            if (arg == 'form_nuevo_contrato') {
                miurl = urlraiz + "/servicio/form_nuevo_contrato";
            }
            if (arg == 'mostrar_detalles') {
                miurl = urlraiz + "/servicio/detalles_contrato/" + id + "";
            }

            if (arg == 'form_editar_contrato') {
                miurl = urlraiz + "/servicio/form_editar_contrato/" + id + "";
            }
            break;
        case 'section_comprobante':
            /*
             * COMRPOBANTES
             * */
            if (arg == 'form_nuevo_comprobante') {
                miurl = urlraiz + "/servicio/cobros/form_nuevo_comprobante";
            }
            if (arg == 'mostrar_detalles') {
                miurl = urlraiz + "/servicio/cobros/detalles_comprobante/" + id + "";
            }
            break;

        case 'section_usuarios_admin':
            /*
             * USUARIOS
             * */
            if (arg == 'form_newadmin') {
                miurl = urlraiz + "/acceso/usuarios/form_nuevo_admin";
            }
            if (arg == 'form_editar_useradmin') {
                miurl = urlraiz + "/acceso/usuarios/form_editar_admin/" + id + "";
            }
            break;

        case 'section_usuarios_cliente':
            /*
             * USUARIOS
             * */
            /*if (arg == 'form_newadmin') {
                miurl = urlraiz + "/acceso/usuarios/form_nuevo_admin";
            }*/
            if (arg == 'form_editar_userclient') {
                miurl = urlraiz + "/acceso/usuarios/form_editar_client/" + id + "";
            }
            break;
        case 'section_consultas_pagos':
            /*
             * USUARIOS
             * */
            /*if (arg == 'form_newadmin') {
             miurl = urlraiz + "/acceso/usuarios/form_nuevo_admin";
             }*/
            if (arg == 'mostrar_detalles') {
                miurl = urlraiz + "/consultas/mostrar_detalle_pago/" + id + "";
            }
            break;

    }


    $.ajax({
        url: miurl,
        type: 'GET'
    }).done(function (resul) {
        $("#capa_formularios").html(resul);

    }).fail(function () {
        $("#capa_formularios").html('<span>...Ha ocurrido un error, revise su conexión y vuelva a intentarlo...</span>');
    });

}



/*
* ENVIAR FORMULARIO AL CONTROLADOR
* */
$(document).on("submit", ".formentrada", function (e) {
    e.preventDefault();

    var where_i_am = $("#where_i_am").val(),
        quien = $(this).attr("id"),
        formu = $(this),
        varurl = "",
        div_resul= "",
        reset = false,
        capa_formularios = $("#capa_formularios"),
        formData = new FormData($("#" + quien + "")[0]);
        //data = formu.serialize();



    switch (where_i_am) {
        case 'section_antena_emisora':
            /*
             * ANTENAS EMISORAS
             * */
            if (quien == "f_crear_antena_emisora") {
                 varurl = $(this).attr("action");
                 div_resul = "msj";
                reset = true;
            }

            if (quien == "f_editar_antena_emisora") {
                 varurl = $(this).attr("action");
                 div_resul = "msj";
            }
            break;

        case 'section_paquete':
            /*
             * PAQUETES
             * */
            if (quien == "f_crear_paquete") {
                 varurl = $(this).attr("action");
                 div_resul = "msj";
                reset = true;
            }

            if (quien == "f_editar_paquete") {
                 varurl = $(this).attr("action");
                 div_resul = "msj";
            }
            break;
        case 'section_cliente':
            /*
             * INGRESO
             * */
            if (quien == "f_crear_cliente") {
                varurl = $(this).attr("action");
                div_resul = "msj";
                reset = true;
            }

            if (quien == "f_editar_cliente") {
                varurl = $(this).attr("action");
                div_resul = "msj";
            }
            break;
        case 'section_contrato':
            /*
             * CONTRATO
             * */
            if (quien == "f_crear_contrato") {
                varurl = $(this).attr("action");
                div_resul = "msj";
                reset = true;
            }

            if (quien == "f_editar_contrato") {
                varurl = $(this).attr("action");
                div_resul = "msj";
            }
            break;
        case 'section_comprobante':
            /*
             * COMPROBANTES
             * */
            if (quien == "f_crear_comprobante") {
                varurl = $(this).attr("action");
                div_resul = "msj";
                reset = true;
            }


            break;
        case'section_usuarios_admin':
            /*
             * USUARIOS
             * */
            if (quien == "f_crear_user_admin") {
                 varurl = $(this).attr("action");
                 div_resul = "msj";
            }

            if (quien == "f_editar_user_admin") {
                varurl = $(this).attr("action");
                div_resul = "msj";
            }
            break;
        case 'section_usuarios_cliente':
            /*
             * USUARIOS
             * */
            if (quien == "f_editar_user_client") {
                varurl = $(this).attr("action");
                div_resul = "msj";
            }


            break;

    }


    //$("#" + div_resul + "").html($("#cargador_empresa").html());

    $.ajax({
        // la URL para la pesticións
        type: 'POST',
        url: varurl,
        dataType: 'html',
        async: false,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,

        success: function (resul) {
            /*var screenTop = $(document).scrollTop();
            capa_formularios.css('top', screenTop);*/
            oTable.ajax.reload();
            mensaje(div_resul,resul,60000);



            if(reset){
                 $('#' + quien + '').trigger("reset");

                if($('.selects_contrato')){
                    $('.selects_contrato').val('').selectpicker('refresh');
                    initialValues();
                }

                if($('.selects_comprobante')){
                    $('#contenido_men').empty();
                }
            }


        },
        error: function (data) {
            // $("#" + div_resul + "").html('ha ocurrido un error, revise su conexion e intentelo nuevamente');
            var lista_errores = "";

            //console.log(data);
            var errors = $.parseJSON(data.responseText);
            var titulo = "<br/><div class='rechazado'><label style='color:#FA206A'>Existen Errores de Validacion</label>";
            $.each(errors, function (index, value) {
                lista_errores += '<ul><li style="color:#FA206A;" >' + value + '</li></ul>';
            });
            var footer = "</div>";
            var htmlmensaje = titulo + lista_errores + footer;

            mensaje(div_resul,data,10000);
            $("#" + div_resul + "").html(htmlmensaje);
        }

    });



});



/*
* MOSTRAR MODAL DE ELIMINACION
* */
function showModalDelete($id){
    var capa_modal_delete =$("#modal_delete"),
        urlraiz = $("#url_raiz_proyecto").val(),
        where_i_am = $("#where_i_am").val(),
        url;

    switch(where_i_am){
        case 'section_contrato':
            miurl = urlraiz + "/servicio/form_modal_delete/" + $id + "";
            break;

        case 'section_usuarios_admin':
            miurl = urlraiz + "/acceso/usuarios/form_modal_delete_admin/" + $id + "";
            break;
        case 'section_usuarios_cliente':
            miurl = urlraiz + "/acceso/usuarios/form_modal_delete_client/" + $id + "";
            break;

        case 'section_antena_emisora':
            miurl = urlraiz + "/equipos/form_modal_delete_/" + $id + "";
            break;

        case 'section_paquete':
            miurl = urlraiz + "/paquetes/form_modal_delete_paquete/" + $id + "";
            break;
        case 'section_cliente':
            miurl = urlraiz + "/clientes/form_modal_delete_cliente/" + $id + "";
            break;

    }


    //var modal = $("#modal-delete-"+$id+"");
    capa_modal_delete.modal('show');
    $.ajax({
        url: miurl,
        type: 'GET'
    }).done(function (resul) {
        capa_modal_delete.html(resul);

    }).fail(function () {
        $("#capa_formularios").html('<span>...Ha ocurrido un error, revise su conexión y vuelva a intentarlo...</span>');
    });

}

/*
* ELIMINAR UN REGISTRO
* */
function eliminarRegistro($id)
{
    var where_i_am= $("#where_i_am").val(),
        urlraiz=$("#url_raiz_proyecto").val(),
        modal = $("#modal_delete"),
        form = modal.find('form'),
        action = form.attr('action'),
        url = urlraiz+"/"+action+"/"+$id+""

        $.ajax({
            url: url,
            success: function (resul) {
                modal.modal('hide');
                oTable.ajax.reload();
               //$('#'+where_i_am+"").click();
            },
            error: function (data) {
                alert(data);
            }
        })
}


/*
* BUSCAR MEDIANTE SELECT
* */

$(document).on("change", ".search", function (e) {
//$('.search').on('click',function(e){
   var quien = $(this).attr('id'),
       idForSearch =  $(this).val(),
       urlraiz = $("#url_raiz_proyecto").val(),url;



       switch(quien){
           //miurl = urlraiz + "/form_editar_paquete/" + id + "";
           case 'search_cliente':
               if(idForSearch != ""){
                   var  dni = $('#contrato_dni'),
                       idcliente = $('#idcliente'),
                       telefono = $('#contrato_telefono'),
                       direccion = $('#contrato_direccion');

                   url = urlraiz +"/servicio/search_cliente/"+idForSearch+"";
               }else{
                   $('#contrato_dni').val("");
                   $('#idcliente').val("");
                   $('#contrato_telefono').val("");
                   $('#contrato_direccion').val("");
                   return;
               }
               break;

           case 'search_paquete':
               if(idForSearch != ""){
                   var  idpaquete= $('#idpaquete'),
                        costo_paquete = $('#costo_paquete'),
                        megas_descarga = $('#megas_descarga'),
                        megas_subida = $('#megas_subida');

                   url = urlraiz+"/servicio/search_paquete/"+idForSearch+"";
               }else{
                   $('#idpaquete').val("");
                   $('#costo_paquete').val("");
                   $('#megas_descarga').val("");
                   $('#megas_subida').val("");
                   return;
               }
               break;

           case 'search_antena':
               if(idForSearch != ""){
                   var idantena= $('#idantena'),
                       mac_antena = $('#mac_antena'),
                       ip_antena = $('#ip_antena');

                   url = urlraiz+"/servicio/search_antena/"+idForSearch+"";
               }else{
                   $('#idantena').val("");
                   $('#mac_antena').val("");
                   $('#ip_antena').val("");
                   return;
               }
               break;
       }


       $.ajax({
           url: url,
           type: 'GET'
       })
           .done(function(data) {
               // var inputsVal = $.parseJSON(data.responseText);

               switch(quien)
               {
                   case 'search_cliente':
                       dni.val(data.dni);
                       idcliente.val(data.idcliente);
                       telefono.val(data.telefono);
                       direccion.val(data.direccion);
                       break;

                   case 'search_paquete':
                       idpaquete.val(data.idpaquete);
                       costo_paquete.val(data.precio_mensual).change();
                       megas_descarga.val(data.megas_bajada);
                       megas_subida.val(data.megas_subida);
                       break;

                   case 'search_antena':
                       idantena.val(data.idantena_emisora);
                       mac_antena.val(data.mac);
                       ip_antena.val(data.ip);
                       break;
               }
           })
           .fail(function() {
               console.log("error");
           })

});



/*
 * OPTENER CLIENTES CON CONTRATO
 * *//*
$(document).on('change','.cliente_con_contrato',function(){
    var idForSearch =  $(this).val(),
        urlraiz = $("#url_raiz_proyecto").val(),url='';

    if(idForSearch != ""){
        var  dni = $('#contrato_dni'),
            idcliente = $('#idcliente'),
            telefono = $('#contrato_telefono'),
            direccion = $('#contrato_direccion');

        url = urlraiz +"/servicio/search_cli_contrato/"+idForSearch+"";
    }else{
        $('#contrato_dni').val("");
        $('#idcliente').val("");
        $('#contrato_telefono').val("");
        $('#contrato_direccion').val("");
        return;
    }

    $.ajax({
        url: url,
        type: 'GET'
    })
        .done(function(data) {
            dni.val(data.dni);
            idcliente.val(data.idcliente);
            telefono.val(data.telefono);
            direccion.val(data.direccion);
        })
        .fail(function() {
            console.log("error");
        })
});*/


/*
* OPTENER LAS RESPECTIVAS MENSUALIDADES POR PAGAR DEL CLIENTE
* */
function plantillaMensualidades(data,i){
    var fila="";

    fila = "<div class='form-check col-lg-4 col-md-12 col-sm-12'>";
    fila += "<label for="+data[0][i].idmensualidad+" class='formulario_check'>";
    fila += "<input  class='chk_cuota form-check-input' name='mensualidades[]' type='checkbox' value="+data[0][i].idmensualidad+" id="+data[0][i].idmensualidad+">";
    fila += "cuota nº <span id='num_cuota'>"+data[0][i].num_cuota+"</span> - <span id='fecha_pago'>"+data[0][i].fecha_pago+"</span>";
    fila += " <input type='hidden' id='costo_cuota' value="+data[0][i].costo+">";
    fila += "</label>";
    fila += "</div>";
    return fila;
}

$(document).on('change','.men_de_cliente',function(){
    var idForSearch =  $(this).val(),
        idcontratoSearch = $('#search_cliente option').filter(':selected').next().val(),
        urlraiz = $("#url_raiz_proyecto").val(),
        url='',
        contenedor_cuotas=$('#contenido_men');

    if(idForSearch != ""){
        var id_cuota = $('#id_cuota'),
            num_cuota = $('#num_cuota'),
            fecha_pago = $('#fecha_cuota'),
            costo = $('#costo_cuota');

        url = urlraiz +"/servicio/search_men_cliente/"+idForSearch+"/"+idcontratoSearch;
    }else{
        $('#id_cuota').val("");
        $('#num_cuota').val("");
        $('#fecha_cuota').val("");
        $('#costo_cuota').val("");
        contenedor_cuotas.empty();
        document.getElementById('comprobante_total').textContent=0;
        $('#comprobante_table').empty();
        return;
    }

    $.ajax({
        url: url,
        type: 'GET',
        success: function(data){
            var length = data[0].length,cuotas='';
            //console.log(data);

            id_cuota.text(data.idmensualidad);
            num_cuota.text(data.num_cuota);
            fecha_pago.text(data.fecha_pago);
            costo.text(data.costo);


            for(var i=0;i<length;i++){
                //cuotas += "<tr><td>"+data[0][i].idmensualidad+"</td><td>"+data[0][i].num_cuota+"</td><td>"+data[0][i].fecha_pago+"</td><td>"+data[0][i].costo+"</td><td>";
                cuotas += plantillaMensualidades(data,i);
            }
            /* console.log(length);
             console.log(cuotas);*/
            contenedor_cuotas.empty();
            contenedor_cuotas.append(cuotas);
            /*for (dataRow in data.datos) {
             contenedor_cuotas.append('<tr><td>'
             + dataRow.idmensualidad
             + '</td><td>'
             + dataRow.num_cuota
             + '</td><td>'
             + dataRow.fecha_pago
             + '</td><td>'
             + dataRow.costo+'</td>');
             }
             */

            /*  $.each (function(key,data){
             contenedor_cuotas.append('<tr><td>'
             + key.idmensualidad
             + '</td><td>'
             + key.num_cuota
             + '</td><td>'
             + key.fecha_pago
             + '</td><td>'
             + key.costo+'</td>');
             })*/



        },
        error: function(data){
            contenedor_cuotas.html(data.responseText);
        }

    });
});




 function mensaje(contenedor,mensaje,tiempo)
{
    $('#'+contenedor+'').html(mensaje);
    $('#'+contenedor+'').fadeIn(300);
    setTimeout(function(){
        $('#'+contenedor+'').fadeOut(400);
    },tiempo);
    //console.log(mensaje);
}













$(document).on('click','.chk_cuota',function(){

    var id_mensualidad = $(this).val(),
        body_table= $('#comprobante_table'),
        target_total = document.getElementById('comprobante_total'),
        cuotas_suma = parseFloat(document.getElementById('comprobante_total').textContent),
        costo_cuota=$(this).siblings('#costo_cuota').val(),total,total_input= $('#total_pago');

    if(body_table.text()=="") cuotas_suma = 0  ;

    if($(this).is(':checked')){
        var num_cuota = $(this).siblings('#num_cuota').text(),
            fecha_pago=$(this).siblings('#fecha_pago').text(),
            concepto;


        concepto = "<tr id='"+id_mensualidad+"'><td>Mensualidad Nº "+num_cuota+" - "+ fecha_pago+"</td><td>"+costo_cuota+"<td></tr>";


        body_table.append(concepto);
        cuotas_suma += parseFloat(costo_cuota);

        target_total.textContent = cuotas_suma;
        total_input.val(cuotas_suma) ;

        /*console.log(num_cuota);
        console.log(fecha_pago);
        console.log(costo_cuota);
        console.log(id_mensualidad);*/
    } else {


        body_table.find('#'+id_mensualidad).remove();
        cuotas_suma -= parseFloat(costo_cuota);
        target_total.textContent = cuotas_suma;
        total_input.val(cuotas_suma);
    }
});