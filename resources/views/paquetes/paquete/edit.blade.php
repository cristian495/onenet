<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar paquete: <b>{{ $paquete->nombre}}</b></h3>
    </div>
</div>
<div id="msj" class="msj"></div>
<form  id="f_editar_paquete"  method="post"  action="editar_paquete" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="idpaquete" value="{{ $paquete->idpaquete }}"/>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required value="{{ $paquete->nombre}}" name="nombre" class="form-control" placeholder="Nombre para el paquete..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="marca">Megas de descarga</label>
                <input type="number" step="any" required value="{{$paquete->megas_bajada}}" name="megas_bajada" class="form-control" placeholder="Megas de descarga..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Megas de subida</label>
                <input type="number" step="any" required value="{{$paquete->megas_subida}}" name="megas_subida" class="form-control" placeholder="Megas de subida..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="any" required value="{{$paquete->precio_mensual}}" name="precio_mensual" class="form-control" placeholder="Precio..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Descripción</label>
                <textarea style="max-width: 100%;max-height: 100px "  name="observacion" class="form-control" placeholder="Descripcion del paquete...">{{$paquete->observacion}}
                </textarea>

            </div>
        </div>

<!--        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >-->
<!--            <div class="form-group">-->
<!--                <label for="imagen">Banner</label>-->
<!--                <input type="file" name="imagen" class="form-control"/>-->
<!--            </div>-->
<!--        </div>-->
        <div class="col-lg-11 col-sm-12 col-md-6 col-xs-12" >
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>

</form>
