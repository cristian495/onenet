
<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Contrato N°: <b>{{$contrato->id.' - '.$contrato->nombre_apellido}}</b></h3>
        <h5 >Estado del contrato: <span style="color: {{$contrato->estado ? 'green' : 'red'}}"> {{$contrato->estado ? 'activo' : 'anulado'}}</span></h5>
    </div>
    <div>

    </div>
</div>

<form id="f_editar_contrato" method="post" action="servicio/editar_contrato" class="formentrada" enctype="multipart/form-data">
{{ csrf_field() }}

<input type="hidden" name="idcontrato" value="{{$contrato->id}}"/>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Datos del cliente</legend>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre <span class="obligatorio ">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="hidden" value="{{$contrato->idcliente}}" id="idcliente" name="cliente"/>
                    <input type="text" readonly class="form-control" value="{{ $contrato->nombre_apellido}}"/>
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-user"></span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="dni">DNI <span class="obligatorio ">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" readonly required value="{{$contrato->dni}}"  class="form-control" />
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-address-card"></span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Teléfono <span class="obligatorio ">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" readonly class="form-control" value="{{ $contrato->telefono }}"/>
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-phone"></span></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Dirección <span class="obligatorio ">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" readonly value="{{ $contrato->direccion }}"  class="form-control"/>
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-map-marker"></span></div>
                </div>
            </div>
        </div>
    </div>
</fieldset>





<fieldset class="scheduler-border">
    <legend class="scheduler-border">Datos del servicio</legend>
    <div class="row">


        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <input type="hidden" id="idpaquete" name="idpaquete" value="{{$contrato->idpaquete}}"/>
                <label for="nombre">Paquete <span class="obligatorio ">*</span></label>
                <input type="text" readonly value="{{$contrato->paquete}}" class="form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Costo del paquete <span class="obligatorio ">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div style="cursor: pointer" class="input-group-addon">S/.</div>
                    <input readonly type="text" value="{{$contrato->precio_mensual}}" class="form-control" id="costo_paquete"/>
                    <div style="cursor: pointer" class="input-group-addon">Nuevos Soles</div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="mbdesc">Mbps de descarga <span class="obligatorio ">*</span></label>
                <input type="text" readonly required value="{{$contrato->megas_bajada}}" class="form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="mbsub">Mbps de subida <span class="obligatorio ">*</span></label>
                <input type="text" readonly required value="{{$contrato->megas_subida}}" class="form-control"/>
            </div>
        </div>







        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="inicio_contrato">Fecha inicio Contrato <span class="obligatorio ">*</span></label>
                <input  type="text" name="fecha_inicio_contrato" readonly class="form-control" value="{{$contrato->fecha_inicio_contrato}}"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="duracion_contrato">Duración del contrato <span class="obligatorio ">*</span></label>
                <input type="text" readonly class="form-control" name="duracion_contrato" value="{{$contrato->duracion_contrato}}"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fin_contrato">Fin del contrato <span class="obligatorio ">*</span></label>
                <input  type="text" name="fecha_fin_contrato" readonly class="form-control" value="{{$contrato->fecha_fin_contrato}}"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha_pago">Fecha de pago <span class="obligatorio ">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="cont_fecha_desc">
                        <input  readonly type="text" name="fecha_pago_servicio" value="{{$contrato->fecha_pago}}" class="form-control" id="fecha_pago"/><span class="desc">De cada mes</span>
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
                        <input  readonly type="text" name="fecha_corte" value="{{$contrato->fecha_corte}}" class="form-control" /><span class="desc">De cada mes</span>
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
                <input type="hidden" value="{{$contrato->idantena_emisora}}" name="idantena_emisora" id="idantena"/>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-search"></span></div>
                    <select data-live-search="true" id="search_antena"
                            class="torre search selects_contrato form-control" >
                        <option value="">: : Seleccionar antena</option>
                        @foreach($antenas_emisoras as $antena_emisora)

                        <option {{ ($contrato->antena_essid == $antena_emisora->essid) ? 'selected' : '' }} value="{{ $antena_emisora->idantena_emisora}}">{{ $antena_emisora->essid}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="mac_antena">MAC <span class="obligatorio ">*</span></label>
                <input type="text" readonly required value="{{$contrato->antena_mac}}" placeholder class="torre form-control" id="mac_antena"
                       placeholder="MAC..."/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="ip_antena">IP <span class="obligatorio ">*</span></label>
                <input type="text" readonly required value="{{$contrato->antena_mac}}"  id="ip_antena" class="torre form-control" placeholder="IP..."/>
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
                <input type="text"  value="{{$contrato->marca_ap}}" name="marca_ap" class="ap form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text"   value="{{$contrato->modelo_ap}}" name="modelo_ap" class="ap form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">Serie</label>
                <input type="text"   value="{{$contrato->serie_ap}}" name="serie_ap" class="ap form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">MAC</label>
                <input type="text"   value="" name="" class="ap form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">IP</label>
                <input type="text"   value="" name="" class="ap form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">Usuario</label>
                <input type="text"   value="" name="" class="ap form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">Contraseña</label>
                <input type="text"   value="" name="" class="ap form-control"/>
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
                <input type="text"   value="{{$contrato->marca_router}}" name="marca_router" class="router form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text"   value="{{$contrato->marca_router}}" name="modelo_router" class="router form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">Serie</label>
                <input type="text"   value="{{$contrato->serie_ap}}" name="serie_router" class="router form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">MAC</label>
                <input type="text"   value="" name="" class="router form-control"/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">IP</label>
                <input type="text"   value="" name="" class="router form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">Usuario</label>
                <input type="text"   value="" name="" class="router form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="marca">Contraseña</label>
                <input type="text"   value="" name="" class="router form-control"/>
            </div>
        </div>
        <div style="margin-top: 3em" class=" col-lg-12 col-sm-8 col-md-8 col-xs-12">
            <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                <label for=""><b>Costo de Instalación</b><span class="obligatorio">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div style="cursor: pointer" class="input-group-addon">S/.</div>
                    <input type="text" readonly value="{{$contrato->costo_instalacion}}" required="" name="costo_instalacion" id="costo_instalacion" class="form-control"/>
                    <div style="cursor: pointer" class="input-group-addon">Nuevos Soles</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                <label for=""><b>Costo del Access Point</b><span class="obligatorio">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div style="cursor: pointer" class="input-group-addon">S/.</div>
                    <input type="text" readonly value="{{$contrato->costo_ap}}" required="" name="costo_ap" id="costo_ap" class="form-control"/>
                    <div style="cursor: pointer" class="input-group-addon">Nuevos Soles</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                <label for=""><b>Tipo de pago del AP</b><span class="obligatorio">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <label class="radio-inline">
                        <input disabled {{ ($contrato->tipo_pago_ap == 'contado' ? 'checked' : '')}} required name="tipo_pago_ap" type="radio" id="tipo_pago" value="contado" /> Al contado
                    </label>
                    <label class="radio-inline">
                        <input disabled {{ ($contrato->tipo_pago_ap == 'mensual' ? 'checked' : '')}} required name="tipo_pago_ap" type="radio" id="tipo_pago" value="mensual" /> Mensualmente
                    </label>
                </div>
            </div>
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
</script>