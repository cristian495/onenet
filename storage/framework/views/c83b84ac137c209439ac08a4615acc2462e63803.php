<input type="hidden" id="where_i_am" value="section_consultas_pagos"/>
<div class="box box-primary">
    <div class="box-header">
        <div class="row col-md-3" style="margin-top: 6px">
            <h3 class="box-title">Mis pagos hecho</h3>
        </div>
    </div>

    <div class="box-body">
        <div class=" dataTables_wrapper form-inline dt-bootstrap">
            <div class="form-group col-md-12 col-sm-12" style="padding: 0;margin-bottom: 30px">
                <div class="row col-md-10">
                    <label for="">
                        cantidad de filas
                    </label>
                    <select class="form-control" name="" id="myInputSelectField">
                        <option value="5">5</option>
                        <option value="13" selected>10</option>
                        <option value="500">500</option>
                    </select>
                </div>
                <div class="row col-md-2">
                    <input class="form-control" type="text" placeholder="Buscar..." id="myInputTextField">
                </div>
            </div>
            <table id="mis_pagos" style="width: 100%" class="table-responsive table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Cliente</th>
                    <th>Tipo comprobante</th>
                    <th>Nº comprobante</th>
                    <th>Total</th>
                    <th>Fecha emision</th>
                    <th class="no-sort"><i class="fa fa-cog"></i></th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">


    function cargar_tabla_mispagos(){
        oTable = $('#mis_pagos').DataTable({

            'responsive': true,
            "processing": true,
            "serverSide": true,
            bJQueryUI:true,
            //  "dom": "<'row'<'hided'f>>",
            //sDom: '<"form-control"f><"H"lf>t<"F"ip>',
            //sDom: '',
            'lengthChange': false,
            'searching'   : true,
            "lengthMenu": 10,
            "language": {
                "url": '<?php echo asset('/plugins/datatables/latino.json'); ?>'
            } ,
            "ajax": {
                "url":"<?php echo e(route('datatables.pagos_hechos')); ?>",
                "type":"post"
            },
            "order": [[ 0, "desc" ]],
            "columns": [
                {data: 'idpago_mensualidad', name: 'idpago_mensualidad'},
                {data: 'nombre_apellido', name: 'nombre_apellido'},
                {data: 'tipo_comprobante', name: 'tipo_comprobante'},
                {data: 'num_comprobante', name: 'num_comprobante'},
                {data: 'total', name: 'total'},
                {data: 'fecha_hora_pagado', name: 'fecha_hora_pagado'},
                /*{"defaultContent": "<a   class='btn btn-xs btn-success' ><i class='fa fa-eye'></i></a>  " +
                 "<a class='btn btn-xs btn-primary' onclick='alert(\"EDITAR\")' ><i class='fa fa-edit'></i></a>  " +
                 "<a class='btn btn-xs btn-danger' onclick='alert(\"ELIMINAR\")'><i class='fa fa-close'></i></a>"}*/
                { data: null,
                    render: function ( data, type, row) {
                        return "<a onclick='cargar_formulario(\"mostrar_detalles\","+ data.idpago_mensualidad +")' class='btn btn-xs btn-success' >" +
                            "<i class='fa fa-eye'></i>" +
                            "</a>  "
                    }
                }
                /* { data: null,  render: function ( data, type, row ) {
                 return "<a href='<?php echo e(url('form_editar_contacto/')); ?>/"+ data.id +"' class='btn btn-xs btn-primary' >Editar</button>"  }
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

    cargar_tabla_mispagos();

</script>