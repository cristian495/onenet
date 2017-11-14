
<form action="acceso/usuarios/eliminar_useradmin"  method="get">
    <div class="modal-dialog">
        <div class="modal-content" id="modal_content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Eliminar usuario - {{$user_admin->name}}</h4>
            </div>
            <div class="modal-body">
                <p>Confirme si desea eliminar el usuario</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button  type="button" class="btn btn-primary" onclick="eliminarRegistro({{$user_admin->id}})">Confirmar</button>
            </div>
        </div>
    </div>
</form>
