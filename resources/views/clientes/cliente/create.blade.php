<div class="row">
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Nuevo Cliente</h3>
</div>
</div>

<form  id="f_crear_cliente"  method="post"  action="crear_cliente" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}


        <fieldset class="scheduler-border">
        <legend class="scheduler-border">Formulario cliente</legend>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="nombre">Nombre <span class="obligatorio">*</span></label>
                    <input type="text" id="nombre" required value="" name="nombre" class="form-control" placeholder="Nombre..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="apellido">Apellido<span class="obligatorio">*</span></label>
                    <input type="text" id="apellido" required value="" name="apellido" class="form-control" placeholder="Apellido..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="dni">DNI<span class="obligatorio">*</span></label>
                    <input type="number" id="dni" required value="" name="dni" class="form-control" placeholder="DNI..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Teléfono<span class="obligatorio">*</span></label>
                    <input type="tel"  required value="" name="telefono" class="form-control" placeholder="Teléfono..."/>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Email</label>
                    <input type="email"value="" name="email" class="form-control" placeholder="Email..." />

                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Dirección<span class="obligatorio">*</span></label>
                    <input type="text" value="" name="direccion" class="form-control" placeholder="Dirección..." />

                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Referencia de dirección</label>
                    <input type="text" value="" name="referencia_direccion" class="form-control" placeholder="Referencia de dirección..." />

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
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                    <div class="form-group">
                        <label for="precio">Usuario<span class="obligatorio">*</span></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="text" required value="" name="nombre_de_usuario" id="name_user" class="form-control" placeholder="Usuario..." />
                            <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-user"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                    <div class="form-group">
                        <label for="precio">Contraseña<span class="obligatorio">*</span></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="text" required value="" name="clave" id="pass_user" class="form-control" placeholder="Contraseña..." />
                            <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-lock"></span></div>
                        </div>
                    </div>
                </div>

            </div>
        </fieldset>
         <div class="row">


            <div class="col-lg-11 col-sm-12 col-md-6 col-xs-12" >
                <div id="msj" class="msj"></div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </div>
         </div>

</form>

<script>


    $(document).on('change','#nombre,#apellido,#dni',function(){
        var nombre = $('#nombre'),
            apellido = $('#apellido'),
            dni = $('#dni'),
            name_user = $('#name_user'),
            pass_user = $('#pass_user'),
            new_name,
            new_pass;

        if(nombre.val() != "" && apellido.val() && dni.val() != "" ){
            new_name = dni.val();
            new_pass = dni.val();

            name_user.val($.trim(new_name));
            pass_user.val($.trim(new_pass));
        }
    })
</script>