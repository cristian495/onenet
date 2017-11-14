<div class="row">
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Nueva Antena Emisora</h3>
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
<form  id="f_crear_antena_emisora"  method="post"  action="equipos/crear_antena_emisora" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="essid">ESSID</label>
                <input type="text" required value="{{old('essid')}}" name="essid" class="form-control" placeholder="ESSID..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required value="{{old('nombre')}}" name="nombre" class="form-control" placeholder="Nombre..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" required value="{{old('marca')}}" name="marca" class="form-control" placeholder="Marca..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" required value="{{old('modelo')}}" name="modelo" class="form-control" placeholder="Modelo..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text" required value="{{old('serie')}}" name="serie" class="form-control" placeholder="Serie..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="frecuencia">Frecuencia</label>
                <select name="frecuencia" id="" class="form-control" required="">
                    <option value="">::Escoger frecuencia</option>
                    <option value="2.4 Ghz">2.4 Ghz</option>
                    <option value="5 Ghz">5 Ghz</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="ip">IP</label>
                <input type="text" required value="{{old('ip')}}" name="ip" class="form-control" placeholder="IP..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="mac">MAC</label>
                <input type="text" required {{old('mac')}}" name="mac" class="form-control" placeholder="AA:BB:CC:DD:EE:FF"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" required {{old('usuario')}}" name="usuario" class="form-control" placeholder="Usuario..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="contrasenia">Constraseña</label>
                <input type="text" value="{{old('contrasenia')}}" name="contrasenia" class="form-control" placeholder="Contraseña..."/>
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
