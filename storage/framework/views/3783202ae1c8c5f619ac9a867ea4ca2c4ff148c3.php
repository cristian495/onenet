
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Fecha de emision: <b><?php echo e($pago->fecha_hora_pagado); ?></b></h3>
</div>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Datos del cliente</legend>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre <span class="obligatorio ">*</span></label>

                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="hidden" value="<?php echo e($pago->nombre_apellido); ?>" id="idcliente" name="cliente"/>

                    <select disabled data-live-search="true"  id="search_cliente"
                            class="form-control  selects_comprobante search men_de_cliente">
                        <option id=""  selected value=""><?php echo e($pago->nombre_apellido); ?></option>
                    </select>
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-search"></span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="dni">DNI <span class="obligatorio ">*</span></label>
                <input type="text" readonly required value="<?php echo e($pago->dni); ?>"  class="form-control" id="contrato_dni"
                       placeholder="DNI..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Teléfono <span class="obligatorio ">*</span></label>
                <input type="tel" readonly required value="<?php echo e($pago->telefono); ?>"  class="form-control" id="contrato_telefono"
                       placeholder="Teléfono..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Dirección <span class="obligatorio ">*</span></label>
                <input type="text" readonly value="<?php echo e($pago->direccion); ?>"  class="form-control" id="contrato_direccion"
                       placeholder="Dirección..."/>

            </div>
        </div>
    </div>
</fieldset>




<fieldset id="field_mens" class="scheduler-border" >
    <legend class="scheduler-border">Detalles del pago</legend>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <label for="nombre" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Tipo de comprobante<span class="obligatorio ">*</span></label>
            <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                <select required  disabled id="" class="form-control">
                    <option value="factura" selected><?php echo e($pago->tipo_comprobante); ?></option>
                </select>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <label for="serie_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Serie de comprobante</label>
            <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                <input type="text" value="<?php echo e($pago->serie_comprobante); ?>" readonly name="serie_comprobante" class="form-control"/>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <label for="num_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Número de comprobante<span class="obligatorio ">*</span></label>
            <div class="form-group col-lg-4 col-sm-4 col-md-6 col-xs-6">
                <input type="text" value="<?php echo e($pago->num_comprobante); ?>"  readonly class="form-control"/>
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
                    <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>Mensualidad Nº <?php echo e($detalle->num_cuota); ?> - <?php echo e($detalle->fecha_pago); ?></td>
                            <td><?php echo e($detalle->costo); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                    <td>TOTAL</td>
                    <td id="comprobante_total"><?php echo e($pago->total_pago); ?></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</fieldset>