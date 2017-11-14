<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Cliente: <b>{{$cliente->nombre.' '.$cliente->apellido}}</b></h3>
    </div>
</div>

<fieldset class="scheduler-border">
    <legend class="scheduler-border">Formulario cliente</legend>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required readonly="true" value="{{ $cliente->nombre}}" name="nombre" class="form-control" placeholder="Nombre..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" required readonly="true" value="{{ $cliente->apellido}}" name="apellido" class="form-control" placeholder="Apellido..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="number" required readonly="true" value="{{$cliente->dni}}" name="dni" class="form-control" placeholder="DNI..."/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Teléfono</label>
                <input type="tel"  required readonly="true" value="{{$cliente->telefono}}" name="telefono" class="form-control" placeholder="Teléfono..."/>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Dirección</label>
                <input type="text" readonly="true" required value="{{$cliente->direccion}}" name="direccion" class="form-control" placeholder="Dirección..." />

            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Referencia de dirección</label>
                <input type="text" readonly="true" value="{{$cliente->referencia_direccion}}" name="referencia_direccion" class="form-control" placeholder="Referencia de dirección..." />

            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
            <label for="imagen" style="display: block;text-align: center;font-size: 20px"><b>Imagen satelital de vivienda</b></label>
            <div class="form-group">
                <img  src="{{ asset('/imagenes/clientes/'.$cliente->imagen_satelital) }}" height="500px" width="600px" alt="{{$cliente->imagen_satelital}}" />
            </div>
        </div>
    </div>
</fieldset>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Datos de acceso</legend>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Usuario<span class="obligatorio">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text"  readonly value="{{$cliente->name}}" class="form-control" />
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-user"></span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="precio">Email <span class="obligatorio">*</span></label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text"  readonly value="{{$cliente->email}}"  class="form-control"/>
                    <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-envelope"></span></div>
                </div>
            </div>
        </div>
    </div>
</fieldset>