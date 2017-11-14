/**
 * Created by PhpStorm.
 * User: CRISTIAN
 * Date: 15/10/17
 * Time: 10:15 PM
 */

<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Ver mensualidad N°: <b>{{$mensualidad->idmensualidad.' - '.$mensualidad->nombre_apellido}}</b></h3>
        <h5 >Estado: <span> <b>{{$mensualidad->estado }}</b></span></h5>
    </div>
</div>

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
        <label for="serie_comprobante" class="col-lg-2 col-sm-2 col-md-6 col-xs-6" style="color: #03639D; font-weight: bold">Serie de comprobante<span class="obligatorio ">*</span></label>
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
</div>