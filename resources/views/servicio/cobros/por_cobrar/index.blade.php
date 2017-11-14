<input type="hidden" id="where_i_am" value="section_por_cobrar"/>
<div class="box box-primary">
    <div class="box-header">
        <div class="row col-md-5" style="margin-top: 6px">
            <h3 class="box-title">Mostrar cobros por rango de fechas</h3>
            <div class='input-group date'>
                <input type='text' class="form-control" id='picker_buscar'/>
                <span class="glyphicon glyphicon-calendar input-group-addon "></span>
            </div>
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
                        <option value="10" selected>10</option>
                        <option value="500">500</option>
                    </select>
                </div>
                <div class="row col-md-2">
                    <input class="form-control" type="text" placeholder="Buscar..." id="myInputTextField">
                </div>
            </div>
            <table id="por_cobrar" style="width: 100%" class="table-responsive table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Nº Cuota</th>
                    <th>Fecha Cuota</th>
                    <th>Costo</th>
                    <th>Estado</th>
                    <th class="no-sort"><i class="fa fa-cog"></i></th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function generateModal() {
        var data = oTable.column(0).data();
        //console.log(data);
        data.each(function (value, index) {
            html = "<div class=\"modal fade modal-slide-in-rights\"  aria-hidden=\"true\" role=\"dialog\" tabindex=\"-1\" id=\"modal-delete-" + value + "\" >";
            html += "<form action=\"servicio/cobros/realizar_corte\" method=\"get\">";
            html += "<div class=\"modal-dialog\">";
            html += "<div class=\"modal-content\">";
            html += " <div class=\"modal-header\">";
            html += "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">";
            html += "<span aria-hidden=\"true\">x</span>";
            html += "</button>";
            html += "<h4 class=\"modal-title\">Realizar corte del servicio</h4>";
            html += "</div>";
            html += "<div class=\"modal-body\">";
            html += "<p>Confirme si desea cortar el servicio</p>";
            html += "</div>";
            html += "<div class=\"modal-footer\">";
            html += "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>";
            html += "<button  type=\"button\" class=\"btn btn-primary\" onclick=\"eliminarRegistro(" + value + ")\">Confirmar</button>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "</form>";
            html += "</div>";
            $('body').append(html);
        });
    }
    // $.fn.dataTable.moment('DD/MM/YYYY HH:mm');
    function cargar_tabla_contratos() {
        oTable = $('#por_cobrar').DataTable({

            'responsive': true,
            "processing": true,
            "serverSide": true,
            bJQueryUI: true,
            //  "dom": "<'row'<'hided'f>>",
            //sDom: '<"form-control"f><"H"lf>t<"F"ip>',
            //sDom: '',
            'lengthChange': false,
            'searching': true,
            "language": {
                "url": '{!! asset(' / plugins / datatables / latino.json') !!}'
            },
            "ajax": {
                "url": "{{ route('datatables.cobros') }}",
                "type": "post"
            },
            "order": [
                [ 5, "desc" ]
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
                { data: null,
                    render: function (data, type, row) {
                        return "<a onclick='cargar_formulario(\"mostrar_detalles\"," + data.id + ")' class='btn btn-xs btn-success' data-toggle='tooltip' data-placement='top' title='Ver'>" +
                            "<i class='fa fa-eye'></i>" +
                            "</a>  " +
                            "<a onclick='cargar_formulario(\"form_notificar_cliente\"," + data.id + ")' class='btn btn-xs btn-primary' data-toggle='tooltip' data-placement='top' title='Notificar'>" +
                            "<i class='fa fa-edit'></i>" +
                            "</a>  " +
                            "<a onclick='cargar_formulario(\"form_cobrar_cuota\"," + data.id + ")' style='background-color:#FFCE44; color:white' class='btn btn-xs ' data-toggle='tooltip' data-placement='top' title='Cobrar'>" +
                            "<i class='fa fa-money'></i>" +
                            "</a>  " +
                            "<a onclick='showModalDelete(" + data.id + ")' class='btn btn-xs btn-danger' data-toggle='tooltip' data-placement='top' title='Cortar servicio'>" +
                            "<i class='fa fa-warning'></i>" +
                            "</a> "
                    }
                }


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
            ],
            "fnInitComplete": function () {
                generateModal();
            }


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

    cargar_tabla_contratos();
 // $('#picker_buscar').datetimepicker({
        //viewMode: "months",
        //format:'MM/YYYY'
       /* format: 'YYYY-MM',
        locale: 'zh-cn',


        useCurrent:true,
        defaultDate:"2017-01",
        minDate :new Date("2016-01"),
        allowInputToggle: false,
        sideBySide:true,
        viewMode:"months",
        widgetPositioning:{
            horizontal:  "auto",
            vertical: "auto"
        }*/

        /*showIcon:true,
        viewMode: 'months',
        format: 'MM/YYYY'


    }).on("dp.change", function (e) {
     var dateSearch = moment(e.date).format("MM/YYYY");
     $(this).data('DateTimePicker').hide();
        oTable
            .columns( 3 )
            .search(  dateSearch )
            .draw();
     console.log(dateSearch);
     });*/
    /*$('#picker_buscar').on('dp.hide', function(event){
        setTimeout(function(){
            $('#picker_buscar').data('DateTimePicker').viewMode('months');
        },1);
        alert('s');
    });
*/
    /*
     $('ul').on( 'click', 'a', function () {

     table
     .columns( 1 )
     .search(  $(this).text() )
     .draw();
     });
     */



    (function(){
        $('#picker_buscar').daterangepicker({
            autoUpdateInput: false,
            locale: {
                format: 'DD/MM/YYYY',
                "applyLabel": "Aplicar",
                "cancelLabel": "Cancelar",
                "fromLabel": "Desde",
                "toLabel": "a",
                "customRangeLabel": "Personalizado",
                "daysOfWeek": [
                    "Do",
                    "Lu",
                    "Ma",
                    "Mi",
                    "Ju",
                    "Vi",
                    "Sa"
                ],
                "monthNames": [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Setiembre",
                    "Octubre",
                    "Nomviembre",
                    "Diciembre"
                ]
            },

            startDate: moment(moment().format()).startOf('month').format('DD-MM-YYYY'),
            endDate: moment(moment().format()).endOf('month').format('DD-MM-YYYY'),

            ranges: {
                'Ultimos 7 días': [moment().subtract(6, 'days'), moment()],
                'Este mes': [moment().startOf('month'), moment().endOf('month')],
                'Mes anterior': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }



        }/*, function(start, end, label)
        {
            //alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var min  = start.format('YYYY-MM-DD');
                    var max  = end.format('YYYY-MM-DD');
                    var createdAt = data[3] || 0; // Our date column in the table

                    if  (
                        ( min == "" || max == "" )
                            ||
                            ( moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max) )
                        )
                    {
                        return true;
                    }
                    return false;
                }
            );
            table.draw();
        }*/);
    })();

    $('#picker_buscar').on('apply.daterangepicker', function(ev, picker) {
        alert('changed');
       /* $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var min = picker.startDate.format('DD-MM-YYYY');
                var max = picker.endDate.format('DD-MM-YYYY');
                var startDate = new Date(data[3]);
                if (min == null && max == null) { return true; }
                if (min == null && startDate <= max) { return true;}
                if(max == null && startDate >= min) {return true;}
                if (startDate <= max && startDate >= min) { return true; }
                return false;
            }
        );*/
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var min = $('#min-date').val();
                var max = $('#max-date').val();
                var createdAt = data[3] || 0; // Our date column in the table

                if (
                    (min == "" || max == "") ||
                        (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
                    ) {
                    return true;
                }
                return false;
            }
        );
        oTable.draw();
    })

</script>