<div class="row">
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Nuevo Paquete de internet</h3>
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
</div>
<div id="msj" class="msj"></div>
<form  id="f_crear_paquete"  method="post"  action="crear_paquete" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required value="{{old('nombre')}}" name="nombre" class="form-control" placeholder="Nombre para el paquete..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="marca">Megas de descarga</label>
                <input type="number" step="any" required value="{{old('megas_bajada')}}" name="megas_bajada" class="form-control" placeholder="Megas de descarga..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Megas de subida</label>
                <input type="number" step="any" required value="{{old('megas_subida')}}" name="megas_subida" class="form-control" placeholder="Megas de subida..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="any" required value="{{old('precio')}}" name="precio_mensual" class="form-control" placeholder="Precio..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Descripción</label>
                <textarea style="max-width: 100%;max-height: 100px " value="{{old('observacion')}}" name="observacion" class="form-control" placeholder="Descripcion del paquete...">

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
