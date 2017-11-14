<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Antena Emisora: <strong>{{$antena_emisora->essid}}</strong></h3>
    </div>
</div>
<div id="msj" class="msj"></div>
<form  id="f_editar_antena_emisora"  method="post"  action="equipos/editar_antena_emisora" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="idantena_emisora" value="{{$antena_emisora->idantena_emisora}}"/>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="essid">ESSID</label>
                <input type="text" required value="{{$antena_emisora->essid}}" name="essid" class="form-control" placeholder="ESSID..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required value="{{$antena_emisora->nombre}}" name="nombre" class="form-control" placeholder="Nombre..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" required value="{{$antena_emisora->marca}}" name="marca" class="form-control" placeholder="Marca..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" required value="{{$antena_emisora->modelo}}" name="modelo" class="form-control" placeholder="Modelo..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text" required value="{{$antena_emisora->serie}}" name="serie" class="form-control" placeholder="Serie..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="frecuencia">Frecuencia</label>
                <select name="frecuencia" id="" class="form-control" required="">

                    <option value="">::Escoger frecuencia</option>
                    @if($antena_emisora->frecuencia = '2.4 Ghz')
                    <option value="2.4 Ghz" selected>2.4 Ghz</option>
                    @endif
                    @if($antena_emisora->frecuencia = '5 Ghz')
                    <option selected value="5 Ghz">5 Ghz</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="ip">IP</label>
                <input type="text" required value="{{$antena_emisora->ip}}" name="ip" class="form-control" placeholder="IP..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="mac">MAC</label>
                <input type="text" required value="{{$antena_emisora->mac}}" name="mac" class="form-control" placeholder="AA:BB:CC:DD:EE:FF"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" required value="{{$antena_emisora->usuario}}" name="usuario" class="form-control" placeholder="Usuario..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="contrasenia">Constraseña</label>
                <input type="text" value="{{$antena_emisora->contrasenia}}" name="contrasenia" class="form-control" placeholder="Contraseña..."/>
            </div>
        </div>
<!--        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >-->
<!--            <div class="form-group">-->
<!--                <label for="imagen">Imagen</label>-->
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
