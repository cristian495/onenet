
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Fecha de emision: <b>{{$pago->fecha_hora_pagado}}</b></h3>
</div>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Datos del cliente</legend>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre <span class="obligatorio ">*</span></label>

                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="hidden" value="{{$pago->nombre_apellido}}" id="idcliente" name="cliente"/>

                    <select disabled data-live-search="true"  id="search_cliente"
                            class="form-control  selects_comprobante search men_de_cliente">
                        <option id=""  selected value="">{{$pago->nombre_apellido}}</option>
                    </select>
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-search"></span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="dni">DNI <span class="obligatorio ">*</span></label>
                <input type="text" readonly required value="{{$pago->dni}}"  class="form-control" id="contrato_dni"
                       placeholder="DNI..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Teléfono <span class="obligatorio ">*</span></label>
                <input type="tel" readonly required value="{{$pago->telefono}}"  class="form-control" id="contrato_telefono"
                       placeholder="Teléfono..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Dirección <span class="obligatorio ">*</span></label>
                <input type="text" readonly value="{{$pago->direccion}}"  class="form-control" id="contrato_direccion"
                       placeholder="Dirección..."/>

            </div>
        </div>
    </div>
</fieldset>


<fieldset class="scheduler-border" >
    <legend class="scheduler-border">Mensualidades por pagar</legend>
    <div  id="contenido_men">

    </div>
</fieldset>


<fieldset id="field_mens" class="scheduler-border" >
    <legend class="scheduler-border">Detalles del pago</legend>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <label for="nombre" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Tipo de comprobante<span class="obligatorio ">*</span></label>
            <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                <select required  disabled id="" class="form-control">
                    <option value="factura" selected>{{$pago->tipo_comprobante}}</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <label for="serie_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Serie de comprobante</label>
            <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                <input type="text" value="{{$pago->serie_comprobante}}" readonly name="serie_comprobante" class="form-control"/>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <label for="num_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Número de comprobante<span class="obligatorio ">*</span></label>
            <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                <input type="text" value="{{$pago->num_comprobante}}"  readonly class="form-control"/>
            </div>
        </div>
        <!--            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">-->
        <!--                <label for="num_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">% Mora por mensualidad<span class="obligatorio "></span></label>-->
        <!--                <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">-->
        <!--                    <input type="number" name="mora" class="form-control"  min="0" max="5"/>-->
        <!--                </div>-->
        <!--            </div>-->
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover ">
                <thead style="background-color:#03639D;color: white">
                <th >Concepto</th>
                <th >Precio</th>
                </thead>

                <tbody id="comprobante_table">
                    @foreach($detalles as $detalle)
                        <tr>
                            <td>Mensualidad Nº {{$detalle->num_cuota}} - {{$detalle->fecha_pago}}</td>
                            <td>{{$detalle->costo}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td>TOTAL</td>
                    <td id="comprobante_total">{{$pago->total_pago}}</td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</fieldset>