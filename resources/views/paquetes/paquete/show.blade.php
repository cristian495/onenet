<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Paquete de internet: <b>{{$paquete->nombre}}</b></h3>
    </div>
</div>

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required readonly="true" value="{{$paquete->nombre}}" name="nombre" class="form-control" placeholder="Nombre para el paquete..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="marca">Megas de descarga</label>
                <input type="number" step="any" readonly="true" required value="{{$paquete->megas_bajada}}" name="megas_bajada" class="form-control" placeholder="Megas de descarga..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Megas de subida</label>
                <input type="number" step="any" readonly="true"  required value="{{$paquete->megas_subida}}" name="megas_subida" class="form-control" placeholder="Megas de subida..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" readonly="true" step="any" required value="{{$paquete->precio_mensual}}" name="precio_mensual" class="form-control" placeholder="Precio..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Descripción</label>
                <textarea id="observacion" readonly="true" style="max-width: 100%;max-height: 100px "  name="observacion" class="form-control" placeholder="Descripcion del paquete...">{{$paquete->observacion}}
                </textarea>

            </div>
        </div>
    </div>