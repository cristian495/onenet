<form id="f_crear_contrato" method="post" action="servicio/crear_contrato" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}


    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Datos del cliente</legend>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre <span class="obligatorio ">*</span></label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="hidden" value="" id="idcliente" name="cliente"/>
                        <select data-live-search="true"  id="search_cliente"
                                class="search selects_contrato form-control">
                            <option value="">: : Seleccionar cliente</option>
                            @foreach($clientes as $cliente)
                            <option value="{{ $cliente->idcliente}}">{{$cliente->nombre_apellido}}</option>
                            @endforeach
                        </select>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-search"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="dni">DNI <span class="obligatorio ">*</span></label>
                    <input type="text" readonly required value=""  class="form-control" id="contrato_dni"
                           placeholder="DNI..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="precio">Teléfono <span class="obligatorio ">*</span></label>
                    <input type="tel" readonly required value="{{old('telefono')}}"  class="form-control" id="contrato_telefono"
                           placeholder="Teléfono..."/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="precio">Dirección <span class="obligatorio ">*</span></label>
                    <input type="text" readonly value="{{old('direccion')}}"  class="form-control" id="contrato_direccion"
                           placeholder="Dirección..."/>

                </div>
            </div>
        </div>
    </fieldset>





    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Datos del servicio</legend>
        <div class="row">


            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Paquete <span class="obligatorio ">*</span></label>
                    <input type="hidden" id="idpaquete" name="idpaquete" value=""/>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <select data-live-search="true" id="search_paquete"
                                class="search selects_contrato form-control">
                            <option value="">: : Seleccionar paquete</option>
                            @foreach($paquetes as $paquete)
                            <option value="{{ $paquete->idpaquete}}">{{$paquete->nombre}}</option>
                            @endforeach
                        </select>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-search"></span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Costo del paquete <span class="obligatorio ">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div style="cursor: pointer" class="input-group-addon">S/.</div>
                        <input readonly name="costo_paquete" type="text" class="form-control" id="costo_paquete"/>
                        <div style="cursor: pointer" class="input-group-addon">Nuevos Soles</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="mbdesc">Mbps de descarga <span class="obligatorio ">*</span></label>
                    <input type="text" readonly required value="" placeholder="Megas de descarga..." id="megas_descarga"  class="form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="mbsub">Mbps de subida <span class="obligatorio ">*</span></label>
                    <input type="text" readonly required value="" placeholder="Megas de subida..." id="megas_subida" class="form-control"/>
                </div>
            </div>







            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="inicio_contrato">Fecha inicio Contrato <span class="obligatorio ">*</span></label>
                    <input  type="text" id="inicio_contrato" class="no_reset form-control" name="fecha_inicio_contrato"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="duracion_contrato">Duración del contrato <span class="obligatorio ">*</span></label>
                    <select name="duracion_contrato"  id="duracion_contrato" class="form-control">
                        <option value="">: : Seleccionar duracion contrato</option>
                        <option value="1">1 año</option>
                        <option value="2">2 años</option>
                        <option value="3">3 años</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="fin_contrato">Fin del contrato <span class="obligatorio ">*</span></label>
                    <input readonly type="text" id="fin_contrato" class="no_reset form-control" name="fecha_fin_contrato"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="fecha_pago">Fecha de pago <span class="obligatorio ">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="cont_fecha_desc">
                            <input  readonly type="number" value="" name="fecha_pago_servicio" class="no_reset form-control" id="fecha_pago"/><span class="desc">De cada mes</span>
                        </div>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-calendar"></span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="fecha_corte">Fecha de corte <span class="obligatorio ">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="cont_fecha_desc">
                            <input readonly type="number" value="" name="fecha_corte" class="no_reset form-control" id="fecha_corte"/><span class="desc">De cada mes</span>
                        </div>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-calendar"></span></div>
                    </div>
                </div>
            </div>


        </div>
    </fieldset>






    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Datos de instalación</legend>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="my_checkbox">
                    <div class="checkbox">
                        <input checked type="checkbox"   id="checkbox_torre">
                        <label for="checkbox_torre" id="lblcbotorre">Torre</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Torre emisora <span class="obligatorio ">*</span></label>
                    <input type="hidden" value="" name="idantena_emisora" id="idantena"/>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-search"></span></div>
                        <select data-live-search="true" id="search_antena"
                                class="torre search selects_contrato form-control" >

                            <option value="">: : Seleccionar antena</option>
                            @foreach($antenas_emisoras as $antena_emisora)
                            <option value="{{ $antena_emisora->idantena_emisora}}">{{$antena_emisora->essid}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="mac_antena">MAC <span class="obligatorio ">*</span></label>
                    <input type="text" readonly required value="" placeholder class="torre form-control" id="mac_antena"
                           placeholder="MAC..."/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="ip_antena">IP <span class="obligatorio ">*</span></label>
                    <input type="text" readonly required value=""  id="ip_antena" class="torre form-control" placeholder="IP..."/>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="my_checkbox">
                    <div class="checkbox">
                        <input checked type="checkbox"  id="checkbox_ap">
                        <label for="checkbox_ap" id="lbl_ch_ap">Access Point</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text"   value="" name="marca_ap" class="ap form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text"   value="" name="modelo_ap" class="ap form-control"/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Serie</label>
                    <input type="text"   value="" name="serie_ap" class="ap form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">MAC</label>
                    <input type="text"   value="" name="mac_ap" class="ap form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">IP</label>
                    <input type="text"   value="" name="ip_ap" class="ap form-control"/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Usuario</label>
                    <input type="text"   value="" name="usuario_ap" class="ap form-control"/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Contraseña</label>
                    <input type="text"   value="" name="contrasenia_ap" class="ap form-control"/>
                </div>
            </div>




            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="my_checkbox">
                    <div class="checkbox">
                        <input checked type="checkbox" name="checkbox_router" id="checkbox_router">
                        <label for="checkbox_router" id="lblcborouter">Router</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text"   value="" name="marca_router" class="router form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text"   value="" name="modelo_router" class="router form-control"/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Serie</label>
                    <input type="text"   value="" name="serie_router" class="router form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">MAC</label>
                    <input type="text"   value="" name="mac_router" class="router form-control"/>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">IP</label>
                    <input type="text"   value="" name="ip_router" class="router form-control"/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Usuario</label>
                    <input type="text"   value="" name="usuario_router" class="router form-control"/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="marca">Contraseña</label>
                    <input type="text"   value="" name="contrasenia_router" class="router form-control"/>
                </div>
            </div>
            <div style="margin-top: 3em" class=" col-lg-12 col-sm-8 col-md-8 col-xs-12">
                <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                    <label for=""><b>Costo de Instalación</b><span class="obligatorio">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div style="cursor: pointer" class="input-group-addon">S/.</div>
                        <input type="text" value="1" required="" name="costo_instalacion" id="costo_instalacion" class="form-control"/>
                        <div style="cursor: pointer" class="input-group-addon">Nuevos Soles</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                    <label for=""><b>Costo del Access Point</b><span class="obligatorio">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div style="cursor: pointer" class="input-group-addon">S/.</div>
                        <input type="text" value="300" required="" name="costo_ap" id="costo_ap" class="form-control"/>
                        <div style="cursor: pointer" class="input-group-addon">Nuevos Soles</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                    <label for=""><b>Tipo de pago del AP</b><span class="obligatorio">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <label class="radio-inline">
                            <input required name="tipo_pago_ap" type="radio" id="contado" value="contado" /> Al contado
                        </label>
                        <label class="radio-inline">
                            <input required name="tipo_pago_ap" type="radio" id="mensual" value="mensual" /> Mensualmente
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset id="field_mens" class="scheduler-border" style="display: none">
        <legend class="scheduler-border">Primera Mensualidad</legend>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <label for="nombre" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Tipo de comprobante<span class="obligatorio ">*</span></label>
                <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                    <select required name="tipo_comprobante" id="" class="form-control">
                        <option value="">: : Seleccione un comprobante</option>
                        <option value="boleta">Boleta</option>
                        <option value="factura">Factura</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <label for="serie_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Serie de comprobante</label>
                <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                    <input type="text" name="serie_comprobante" class="form-control"/>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <label for="num_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Número de comprobante<span class="obligatorio ">*</span></label>
                <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                    <input type="text" name="num_comprobante" class="form-control"/>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="form-group">
                    <label for="nombre" class="col-lg-2 col-sm-2 col-md-2 col-xs-2"style="color: #03639D; font-weight: bold">Nº de Cuota<span class="obligatorio "></span></label>
                    <label for="nombre" style=" font-weight: bold"class="col-lg-2 col-sm-2 col-md-2 col-xs-2">01<span class="obligatorio "></span></label>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="form-group">
                    <label for="nombre" class="col-lg-2 col-sm-2 col-md-2 col-xs-2"style="color: #03639D; font-weight: bold">Fecha de cuota<span class="obligatorio "></span></label>
                    <label id="cuota_mes" for="nombre" style=" font-weight: bold"class="col-lg-4 col-sm-4 col-md-4 col-xs-4">Elija fecha inicio de contrato</label>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="form-group">
                    <label for="nombre" class="col-lg-2 col-sm-2 col-md-2 col-xs-2"style="color: #03639D; font-weight: bold">Total<span class="obligatorio "></span></label>
                    <label id="t_tot" for="nombre" style=" font-weight: bold"class="col-lg-4 col-sm-4 col-md-4 col-xs-4">--.--</label>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover ">
                    <thead style="background-color:#03639D;color: white">
                        <th>Concepto</th>
                        <th>Precio</th>
                    </thead>

                    <tbody>
                        <tr>
                            <th>Instalación</th>
                            <th id="t_ins"> </th>
                        </tr>
                        <tr>
                            <th>Access Point</th>
                            <th id="t_acc"></th>
                        </tr>
                        <tr>
                            <th>Mensualidad</th>
                            <th id="t_men"></th>
                            <input type="hidden" value="" id="input_total" name="total_pago"/>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </fieldset>


    <div class="row">
        <div id="msj" class="msj col-lg-12 col-sm-12 col-md-6 col-xs-12"></div>
        <div class="col-lg-12 col-sm-12 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>

</form>

<script>

    $('.selects_contrato').selectpicker();

    var allLbl = $('#lbl_ch_ap,#lblcborouter,#lblcbotorre');
    allLbl.on('click',function(e){

        switch ($(this).attr('id')){

            case 'lblcbotorre':

                var cboTorre = $('#checkbox_torre');
                var inptsTorre =$('.torre');

                if(cboTorre.is(':checked')){
                    inptsTorre.attr('disabled',true);
                }else{
                    inptsTorre.attr('disabled',false);
                }

                break;
            case 'lbl_ch_ap':
                var cboAp = $('#checkbox_ap');
                var inptsAp =$('.ap');


                if(cboAp.is(':checked')){
                    inptsAp.attr('disabled',true);
                }else{
                    inptsAp.attr('disabled',false);

                }
                break;
            case 'lblcborouter':
                var cboRouter = $('#checkbox_router');
                var inptsRouter =$('.router');

                if(cboRouter.is(':checked')){
                    inptsRouter.attr('disabled',true);
                }else{
                    inptsRouter.attr('disabled',false);
                    //checkbox.attr('checked',true)
                }
                break;
        }
    });


    function initialValues(){
        var inicioContrato =$('#inicio_contrato');
        inicioContrato.datetimepicker({
           /* dateFormat: "dd/mm/yyyy",
            timeFormat: "HH:mm:ss P",*/
            format:'DD/MM/YYYY hh:mm:ss a',
           showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
        inicioContrato.datetimepicker('update', new Date());

        fechaHoy = moment().date();
        fechaCorte = moment(moment()).add(1,'days').date();

        $('#fecha_pago').val(fechaHoy);
        $('#fecha_corte').val(fechaCorte);
    }



    $(document).on('change','#inicio_contrato,#duracion_contrato',function(){

        var duracionContrato = parseInt($('#duracion_contrato').val()),
            inicioContrato = $('#inicio_contrato').val(),
            diaInicioContrato = moment(inicioContrato,'DD.MM.YYYY hh:mm:ss a').date(),
            diaCorte = moment(inicioContrato,'DD.MM.YYYY hh:mm:ss a').add(1,'days').date();

        if(duracionContrato > 0)
        {
           finContrato = moment(inicioContrato,'DD.MM.YYYY hh:mm:ss a').add(duracionContrato,'years').format('DD/MM/YYYY hh:mm:ss a');
            $('#fin_contrato').val(finContrato);
            $('#fecha_pago').val(diaInicioContrato);
            $('#fecha_corte').val(diaCorte);
            $('#cuota_mes').text(moment($('#inicio_contrato')).format('DD/MM/YYYY'));
        }

    });

    $(document).on('change','#inicio_contrato,#costo_paquete,#costo_ap,#costo_instalacion,#duracion_contrato,#mensual,#contado',function(){
        var p = parseInt($('#costo_paquete').val()),
            a = parseInt($('#costo_ap').val()),
            i = parseInt($('#costo_instalacion').val()),
            m=$('#mensual'),
            c=$('#contado'),
            d_c= parseInt($('#duracion_contrato').val()),
            costoPrimerMes = 0.00,
            apmensual=0.00,
            c_p= $('#field_mens');

        if(p != '' && a!= '' && i != '' && (c.is(':checked') || m.is(':checked')))
        {
            if(c.is(':checked'))
            {
                costoPrimerMes = p+ a+ i;
                $('#t_acc').text(a);
                $('#t_tot').text('s/.'+costoPrimerMes);
                $('#t_ins').text(i);
                $('#t_men').text(p);
                $('#input_total').val(costoPrimerMes);
                $('#cuota_mes').text(moment($('#inicio_contrato').val(),'DD/MM/YYYY hh:mm:ss a').format('DD/MM/YYYY'));

            }else if (m.is(':checked'))
            {
                apmensual = a/(d_c*13);
                costoPrimerMes= i + p + apmensual;
                console.log(apmensual);
                console.log(costoPrimerMes);
                $('#t_acc').text(apmensual);
                $('#t_tot').text("s/."+costoPrimerMes);
                $('#t_ins').text(i);
                $('#t_men').text(p);
                $('#input_total').val(costoPrimerMes);
                $('#cuota_mes').text(moment($('#inicio_contrato').val(),'DD/MM/YYYY hh:mm:ss a').format('DD/MM/YYYY'));
            }


            c_p.css('display','block');
        }else{
            c_p.css('display','none');
        }
    });

    initialValues();

</script>
