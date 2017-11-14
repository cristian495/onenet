<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar usuario <strong> <?php echo e($user_client->name); ?></strong></h3>
    </div>
</div>
<div id="msj" class="msj"></div>
<form  id="f_editar_user_client"  method="post"  action="acceso/usuarios/editar_user_client" class="formentrada" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>


    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Datos del cliente</legend>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre <span class="obligatorio ">*</span></label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" readonly class="form-control" value="<?php echo e($user_client->nombre_apellido); ?>"/>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-user"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="dni">DNI <span class="obligatorio ">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" readonly required value="<?php echo e($user_client->dni); ?>"  class="form-control" />
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-address-card"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="precio">Teléfono <span class="obligatorio ">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" readonly class="form-control" value="<?php echo e($user_client->telefono); ?>"/>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-phone"></span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="precio">Dirección <span class="obligatorio ">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" readonly value="<?php echo e($user_client->direccion); ?>"  class="form-control"/>
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-map-marker"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Datos de acceso</legend>
        <div class="row">
            <input type="hidden" value="<?php echo e($user_client->idcliente); ?>" name="iduser"/>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Usuario<span class="obligatorio">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" required value="<?php echo e($user_client->name); ?>" name="nombre_de_usuario" id="name_user" class="form-control" placeholder="Usuario..." />
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-user"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Email <span class="obligatorio">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text"  value="<?php echo e($user_client->email); ?>" name="email_de_usuario" id="email_user" class="form-control" placeholder="ejemplo@gmail.com..." />
                        <div style="cursor: pointer" class="input-group-addon"><span class="fa fa-envelope"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="precio">Nueva contraseña<span class="obligatorio">*</span></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" value="" name="clave" id="pass_user" class="form-control" placeholder="Contraseña..." />
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
            </div>
        </div>
    </div>

</form>

<script>


</script>