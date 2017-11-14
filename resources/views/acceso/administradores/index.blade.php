<input type="hidden" id="where_i_am" value="section_usuarios_admin"/>
<div class="box box-primary">
    <div class="box-header">
        <div class="row col-md-3" style="margin-top: 6px">
            <h3 class="box-title">Listado usuarios administradores</h3>

        </div>
        <div class="row col-md-4">
            <div class="margin-top-2 btn btn-success" onclick="cargar_formulario('form_newadmin')">
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
                        <option value="10">10</option>
                        <option value="25">25</option>
                    </select>
                </div>
                <div class="row col-md-2">
                    <input class="form-control" type="text" placeholder="Buscar..." id="myInputTextField">
                </div>
            </div>
            <table id="usuarios_admin" style="width: 100%" class="table-responsive table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Email</th>
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

    function cargar_tabla_usuarios_admin(){
            oTable = $('#usuarios_admin').DataTable({

            'responsive': true,
            "processing": true,
            "serverSide": true,
            bJQueryUI:true,
            //  "dom": "<'row'<'hided'f>>",
            //sDom: '<"form-control"f><"H"lf>t<"F"ip>',
            //sDom: '',
            'lengthChange': false,
            'searching'   : true,
            "language": {
                "url": '{!! asset('/plugins/datatables/latino.json') !!}'
            } ,
            "ajax": {
                "url":"{{ route('datatables.usuarios_admin') }}",
                "type":"post"
            },
            "order": [[ 0, "desc" ]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name',render:function(data,type,row){
                    return '<span class="fa fa-user"></span> '+data;
                }},
                {data: 'email', name: 'email'},
                /*{"defaultContent": "<a   class='btn btn-xs btn-success' ><i class='fa fa-eye'></i></a>  " +
                    "<a class='btn btn-xs btn-primary' onclick='alert(\"EDITAR\")' ><i class='fa fa-edit'></i></a>  " +
                    "<a class='btn btn-xs btn-danger' onclick='alert(\"ELIMINAR\")'><i class='fa fa-close'></i></a>"}*/
                { data: null,
                  render: function ( data, type, row) {
                    return"<a onclick='cargar_formulario(\"form_editar_useradmin\","+ data.id +")' class='btn btn-xs btn-primary' >" +
                                "<i class='fa fa-edit'></i>" +
                           "</a>  " +
                           "<a onclick='showModalDelete("+ data.id+")' class='btn btn-xs btn-danger' >" +
                                "<i class='fa fa-close'></i>" +
                           "</a> "
                  }
                }
               /* { data: null,  render: function ( data, type, row ) {
                    return "<a href='{{ url('form_editar_contacto/') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Editar</button>"  }
                },*/


            ],
            "columnDefs": [ {
                "targets": 'no-sort',
                "orderable": false,
                "searchable":false
            }]


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

    cargar_tabla_usuarios_admin();

</script>