
<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Antena Emisora: <b>{{$antena_emisora->essid}}</b></h3>
    </div>
</div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="essid">ESSID</label>
                <input type="text"  readonly value="{{$antena_emisora->essid}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->nombre}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->marca}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->modelo}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->serie}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="frecuencia">Frecuencia</label>
                <select disabled name="frecuencia" id="" class="form-control" required="">
                    @if($antena_emisora->frecuencia = '2.4 Ghz')
                    <option  value="2.4 Ghz" selected>2.4 Ghz</option>
                    @endif

                    @if($antena_emisora->frecuencia = '5 Ghz')
                    <option value="5 Ghz" selected>5 Ghz</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="ip">IP</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->ip}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="mac">MAC</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->mac}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->usuario}}"class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
            <div class="form-group">
                <label for="contrasenia">Constraseña</label>
                <input type="text"  readonly="true" value="{{$antena_emisora->contrasenia}}"class="form-control"/>
            </div>
        </div>
<!--        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >-->
<!--            <div class="form-group">-->
<!--                <label for="imagen">Imagen</label>-->
<!--                <img src="{{ 'imagen' }}" alt=""/>-->
<!--            </div>-->
<!--        </div>-->
    </div>