<div id="msj" class="msj"></div>
<form  id="f_crear_user_admin"  method="post"  action="acceso/usuarios/crear_user_admin" class="formentrada" enctype="multipart/form-data">
    {{ csrf_field() }}



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
                        <label for="precio">Email <span class="obligatorio">*</span></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="text" required value="" name="email_de_usuario" id="email_user" class="form-control" placeholder="ejemplo@gmail.com..." />
                            <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-envelope"></span></div>
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
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </div>
         </div>

</form>

<script>


</script>