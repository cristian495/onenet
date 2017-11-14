<form  id="f_crear_comprobante" method="post" action="servicio/cobros/crear_comprobante" class="formentrada" enctype="multipart/form-data">
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
                                class="form-control  selects_comprobante search men_de_cliente">
                            <option id="" value="">: : Seleccionar cliente</option>
                            @foreach($clientes as $cliente)

                            <option value="{{ $cliente->idcliente}}">{{$cliente->nombre_apellido.' - contrato nº ' .$cliente->id}}</option>
                            <option value="{{$cliente->id}}" id="{{$cliente->idcliente}}" style="display: none"></option>

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

                    </tbody>
                    <tfoot>
                        <tr>
                            <td>TOTAL</td>
                            <td id="comprobante_total">0</td>
                            <input type="hidden" name="total" id="total_pago"/>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </fieldset>







    <div class="row">
        <div id="msj" class="col-lg-12 col-sm-12 col-md-6 col-xs-12"></div>
        <div class="col-lg-12 col-sm-12 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
</form>
<script>
    $('.selects_comprobante').selectpicker();
</script>
