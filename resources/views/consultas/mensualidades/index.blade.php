<input type="hidden" id="where_i_am" value="section_por_cobrar"/>
<div class="box box-primary">
    <div class="box-header">
        <div class="row col-md-3" style="margin-top: 6px">
            <h3 class="box-title">Listado de mensualidades</h3
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <!--            <div class="form-group">-->
            <!--                <label for="buscar_fecha">Buscar en el mes de</label>-->
            <!--                <div class='input-group' id="picker_buscar">-->
            <!--                    <input type='text' class="form-control"/>-->
            <!--                    <span class="input-group-addon">-->
            <!--                        <span class="fa fa-calendar"></span>-->
            <!--                    </span>-->
            <!--                </div>-->
            <!--            </div>-->


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
                        <option value="13" selected>13</option>
                        <option value="500">500</option>
                    </select>
                </div>
                <div class="row col-md-2">
                    <input class="form-control" type="text" placeholder="Buscar..." id="myInputTextField">
                </div>
            </div>
            <table id="mensualidades" style="width: 100%" class="table-responsive table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Nº Cuota</th>
                    <th>Fecha Cuota</th>
                    <th>Costo</th>
                    <th>Estado</th>
                   <!-- <th class="no-sort"><i class="fa fa-cog"></i></th>-->
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function cargar_tabla_mensualidades() {
        oTable = $('#mensualidades').DataTable({

            'responsive': true,
            "processing": true,
            "serverSide": true,
            bJQueryUI: true,
            //  "dom": "<'row'<'hided'f>>",
            //sDom: '<"form-control"f><"H"lf>t<"F"ip>',
            //sDom: '',
            'lengthChange': false,
            'searching': true,
            "lengthMenu": [13],
            "language": {
                "url": '{!! asset(' / plugins / datatables / latino.json') !!}'
            },
            "ajax": {
                "url": "{{ route('datatables.mensualidades') }}",
                "type": "post"
            },
            "order": [
                [ 2, "asc" ]
            ],
            "columns": [
                {data: 'idmensualidad', name: 'idmensualidad'},
                {data: 'nombre_apellido', name: 'nombre_apellido'},
                {data: 'num_cuota', name: 'num_cuota'},
                {data: 'fecha_pago', name: 'fecha_pago',
                    render: function (data) {

                        return '<span style="display:none;">' + data.replace(/[/]/g, "") + '</span><span>' + data + '</span>';
                    }},
                {data: 'costo', name: 'costo'},
                {data: 'estado', name: 'estado',
                    render: function (data, type, row, meta) {

                        if (data === "pendiente") {
                            return '<span class="label label-warning">' + data + '</span>'
                        } else if (data === "anulado") {
                            return '<span class="label label-default">' + data + '</span>'
                        } else if (data === "vencido") {
                            return '<span class="label label-danger">' + data + '</span>'
                        } else if (data === "pagado") {
                            return '<span class="label label-success">' + data + '</span>'
                        }
                        // return (data==="pendiente") ? '<span class="text-yellow">'+data+'</span>' : (data === "anulado") ? '<span class="text-muted">'+data+'</span>' : '' ;

                    }
                },
                /*{"defaultContent": "<a   class='btn btn-xs btn-success' ><i class='fa fa-eye'></i></a>  " +
                 "<a class='btn btn-xs btn-primary' onclick='alert(\"EDITAR\")' ><i class='fa fa-edit'></i></a>  " +
                 "<a class='btn btn-xs btn-danger' onclick='alert(\"ELIMINAR\")'><i class='fa fa-close'></i></a>"}*/
                /*{ data: null,
                    render: function (data, type, row) {
                        return "<a onclick='cargar_formulario(\"mostrar_detalles\"," + data.id + ")' class='btn btn-xs btn-success' data-toggle='tooltip' data-placement='top' title='Ver'>" +
                            "<i class='fa fa-eye'></i>"
                    }
                }
*/

            ],
            "columnDefs": [
                {
                    "targets": "no-sort",
                    "orderable": false,
                    "searchable": false
                }
                /* {
                 "targets": 'no-sort',
                 "orderable": false,
                 "searchable":false
                 }*/
            ]
        });


        $('#myInputTextField').keyup(function () {
            oTable.search($(this).val()).draw();
            //oTable.fnFilter($(this).val());
        });
        $('#myInputSelectField').on('change', function () {
            // oTable.search($(this).val()).draw() ;
            oTable.page.len($(this).val()).draw();
        });


    }

    cargar_tabla_mensualidades();

</script>