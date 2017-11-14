
<form action="clientes/eliminar_cliente" method="get">
    <div class="modal-dialog">
        <div class="modal-content" id="modal_content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Eliminar Cliente - {{$cliente -> nombre . ' ' . $cliente->apellido}}</h4>
            </div>
            <div class="modal-body">
                <p>Confirme si desea eliminar la antena emisora</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button  type="button" class="btn btn-primary" onclick="eliminarRegistro( {{ $cliente->idcliente}} )">Confirmar</button>
            </div>
        </div>
    </div>
</form>
