<input type="hidden" id="where_i_am" value="section_contrato"/>
<div class="box box-primary">
    <div class="box-header">
        <div class="row col-md-3" style="margin-top: 6px">
            <h3 class="box-title">Listado de Contratos</h3>
        </div>
        <div class="row col-md-4">
            <div class="margin-top-2 btn btn-success" onclick="cargar_formulario('form_nuevo_contrato')">
                <span class="fa fa-plus"></span>
                Nuevo
            </div>
        </div>
    </div>
    <div class="box-body">
        <div  class=" dataTables_wrapper form-inline dt-bootstrap">
            <div class="form-group col-md-12 col-sm-12" style="padding: 0;margin-bottom: 30px">
                <div class="row col-md-10">
                    <label for="">
                        cantidad de filas
                    </label>
                    <select class="form-control" name="" id="myInputSelectField">
                        <option value="5">5</option>
                        <option value="10" >10</option>
                        <option value="25"selected>25</option>
                    </select>
                </div>
                <div class="row col-md-2">
                    <input class="form-control" type="text" placeholder="Buscar..." id="myInputTextField">
                </div>
            </div>
            <table id="contratos" style="width: 100%" class="table-responsive table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Cliente</th>
                    <th>Telefono</th>
                    <th>Pago Mensual</th>
                    <th>Megas</th>
                    <th>Fecha de pago</th>
                    <th>Estado</th>
<!--                    <th>Inicio contrato</th>-->
<!--                    <th>Duracion Contrato</th>-->
<!--                    <th>Fin contrato</th>-->
                    <th class="no-sort"><i class="fa fa-cog"></i></th>

                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div  id="modal_delete" class="modal fade modal-slide-in-rights"  aria-hidden="true" role="dialog" tabindex="-1" >

</div>


<script type="text/javascript">
//    function generateModal(){
//        var  data = oTable.column(0).data();
//        //console.log(data);
//        data.each(function(value,index){
//            html= "<div class=\"modal fade modal-slide-in-rights\"  aria-hidden=\"true\" role=\"dialog\" tabindex=\"-1\" id=\"modal-delete-"+value+"\" >";
//                html+= "<form action=\"servicio/eliminar_contrato\" method=\"get\">";
//                    html+= "<div class=\"modal-dialog\">";
//                        html+="<div class=\"modal-content\">";
////                            html+=" <div class=\"modal-header\">";
////                                html+="<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">";
////                                html+="<span aria-hidden=\"true\">x</span>";
////                                html+="</button>";
////                                html+="<h4 class=\"modal-title\">Anular contrato</h4>";
////                            html+="</div>";
////                            html+="<div class=\"modal-body\">";
////                                html+="<p>Confirme si desea anular el contrato</p>";
////                            html+="</div>";
////                            html+="<div class=\"modal-footer\">";
////                                html+="<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>";
////                                html+="<button  type=\"button\" class=\"btn btn-primary\" onclick=\"eliminarRegistro("+value+")\">Confirmar</button>";
////                            html+="</div>";
//                        html+="</div>";
//                    html+="</div>";
//                html+="</form>";
//            html+="</div>";
//            $('body').append(html);
//        });
//    }
    function cargar_tabla_contratos(){
            oTable = $('#contratos').DataTable({

            'responsive': true,
            "processing": true,
            "serverSide": true,
            bJQueryUI:true,
            //  "dom": "<'row'<'hided'f>>",
            //sDom: '<"form-control"f><"H"lf>t<"F"ip>',
            //sDom: '',
                "pageLength": 25,
            'lengthChange': false,
            'searching'   : true,
            "language": {
                "url": '{!! asset('/plugins/datatables/latino.json') !!}'
            } ,
            "ajax": {
                "url":"{{ route('datatables.contratos') }}",
                "type":"post"
            },
            "order": [[ 0, "desc" ]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'nombre_apellido', name: 'nombre_apellido'},
                {data: 'telefono', name: 'telefono'},
                {data: 'precio_mensual', name: 'precio_mensual'},
                {data: 'megas', name: 'megas'},
                {data: 'fecha_pago', name: 'fecha_pago'},
                //{data: 'estado', name: 'estado'},
                {data: 'estado', render:function(data,type,row){
                    return  (data) ? 'activo' : 'anulado'
                }},
                //{data: 'fecha_inicio_contrato', name: 'fecha_inicio_contrato'},
//                {data: 'duracion_contrato', name: 'duracion_contrato'},
                //{data: 'fecha_fin_contrato', name: 'fecha_fin_contrato'},
                /*{"defaultContent": "<a   class='btn btn-xs btn-success' ><i class='fa fa-eye'></i></a>  " +
                    "<a class='btn btn-xs btn-primary' onclick='alert(\"EDITAR\")' ><i class='fa fa-edit'></i></a>  " +
                    "<a class='btn btn-xs btn-danger' onclick='alert(\"ELIMINAR\")'><i class='fa fa-close'></i></a>"}*/
                { data: null,
                  render: function ( data, type, row) {
                    return "<a onclick='cargar_formulario(\"mostrar_detalles\","+ data.id +")' class='btn btn-xs btn-success' data-toggle='tooltip' data-placement='top' title='Ver'>" +
                                "<i class='fa fa-eye'></i>" +
                           "</a>  " +
                           "<a onclick='cargar_formulario(\"form_editar_contrato\","+ data.id+")' class='btn btn-xs btn-primary' data-toggle='tooltip' data-placement='top' title='Editar'>" +
                                "<i class='fa fa-edit'></i>" +
                           "</a>  " +
                           "<a onclick='showModalDelete("+ data.id+")' class='btn btn-xs btn-danger' data-toggle='tooltip' data-placement='top' title='Anular'>" +
                                "<i class='fa fa-close'></i>" +
                           "</a> " +
                            "<a href='servicio/pdf_contrato' target='_blank' class='btn btn-xs btn-warning' data-toggle='tooltip' data-placement='top' title='Imprimir contrato'>" +
                                "<i class='fa fa-print'></i>" +
                            "</a> "
                  }
                }


            ],
            "columnDefs": [
                {
                    "targets":"no-sort",
                    "orderable": false,
                    "searchable":false
                }
               /* {
                    "targets": 'no-sort',
                    "orderable": false,
                    "searchable":false
                }*/
            ],
            "fnInitComplete":function(){
              // generateModal();
            }


        });



        $('#myInputTextField').keyup(function(){
            oTable.search($(this).val()).draw() ;
            //oTable.fnFilter($(this).val());
        });
        $('#myInputSelectField').on('change',function(){
            // oTable.search($(this).val()).draw() ;
            oTable.page.len($(this).val()).draw() ;
        });


    }

    cargar_tabla_contratos();

</script>