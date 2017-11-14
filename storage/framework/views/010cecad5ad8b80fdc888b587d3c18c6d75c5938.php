<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="<?php echo e(url (mix('/js/app.js'))); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ('/js/plugins.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ('/js/scripts.js')); ?>" type="text/javascript"></script>

<script type="text/javascript">
  /*  function cargar_tabla_antenas(){
//    <div class="pagination">
//            <ul class="pagination">
//            <li class="disabled"><span>«</span></li>
//        <li class="active"><span>1</span></li>
//            <li><a href="http://localhost:8000/almacen/articulo?page=2">2</a></li>
//            <li><a href="http://localhost:8000/almacen/articulo?page=2" rel="next">»</a></li>
//        </ul>
//        </div>
        //$.fn.dataTable.ext.classes.sPageButton = 'pagination hidden-xs pull-right';
        oTable = $('#antenas').DataTable({


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
                "url": '<?php echo asset('/plugins/datatables/latino.json'); ?>'
            } ,
            "ajax": "<?php echo e(route('datatables.antenas')); ?>",
            "columns": [
                {data: 'idantena_emisora', name: 'idantena_emisora'},
                {data: 'nombre', name: 'nombre'},
                {data: 'mac', name: 'mac'},
                {data: 'ip', name: 'ip'}
            ]
        });

        $('#myInputTextField').keyup(function(){
            oTable.search($(this).val()).draw() ;
            //oTable.fnFilter($(this).val());
        });
        $('#myInputSelectField').on('change',function(){
            // oTable.search($(this).val()).draw() ;
            oTable.page.len($(this).val()).draw() ;
        })
    }
    cargar_tabla_antenas();*/

</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->