
<form action="servicio/eliminar_contrato" method="get">
    <div class="modal-dialog">
        <div class="modal-content" id="modal_content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Anular contrato - {{$contrato->id}}</h4>
            </div>
            <div class="modal-body">
                <p>Confirme si desea anular el contrato</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button  type="button" class="btn btn-primary" onclick="eliminarRegistro({{$contrato->id}})">Confirmar</button>
            </div>
        </div>
    </div>
</form>
