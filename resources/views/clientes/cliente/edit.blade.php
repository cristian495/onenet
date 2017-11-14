<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar cliente: <b>{{ $cliente->nombre." ".$cliente->apellido}}</b></h3>
    </div>
</div>

<form  id="f_editar_cliente"  method="post"  action="editar_cliente" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}

    <fieldset class="scheduler-border">
    <legend class="scheduler-border">Formulario cliente</legend>
        <input type="hidden" name="idcliente" value="{{ $cliente->idcliente}}"/>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" required value="{{ $cliente->nombre}}" name="nombre" class="form-control" placeholder="Nombre..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" required value="{{ $cliente->apellido}}" name="apellido" class="form-control" placeholder="Apellido..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="number" required value="{{$cliente->dni}}" name="dni" class="form-control" placeholder="DNI..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Teléfono</label>
                    <input type="tel"  required value="{{$cliente->telefono}}" name="telefono" class="form-control" placeholder="Teléfono..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Email</label>
                    <input type="email" value="{{$cliente->email}}" name="email" class="form-control" placeholder="Email..." />

                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Dirección</label>
                    <input type="text" required value="{{$cliente->direccion}}" name="direccion" class="form-control" placeholder="Dirección..." />

                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Referencia de dirección</label>
                    <input type="text" value="{{$cliente->referencia_direccion}}" name="referencia_direccion" class="form-control" placeholder="Referencia de dirección..." />

                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="imagen">Imagen satelital</label>
                    <input type="file" name="imagen_satelital" class="form-control"/>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Datos de acceso</legend>
        <h4>Para editar datos de acceso ir a la sección: Acceso / clientes</h4>
    </fieldset>
    <div class="col-lg-11 col-sm-12 col-md-6 col-xs-12" >
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>
</form>
