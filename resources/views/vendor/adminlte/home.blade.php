@extends('adminlte::layouts.app')

@section('htmlheader_title')

@if(Auth::user()->tipo_usuario == 1)
    {{ "Administracion de equipos y servicios" }}
@elseif(Auth::user()->tipo_usuario == 0 )
    {{"Bienvenido " . session('cliente_session')->nombre . ' ' . session('cliente_session')->apellido}}

@endif

@endsection
@section('contentheader_description')
{{ "" }}
@endsection

@section('main-content')

<!--	<div class="container-fluid spark-screen">-->
<!--		<div class="row">-->
<!--			<div class="col-md-8 col-md-offset-2">-->
<!---->
<!--				<!-- Default box -->
<!--				<div class="box">-->
<!--					<div class="box-header with-border">-->
<!--						<h3 class="box-title">Home</h3>-->
<!---->
<!--						<div class="box-tools pull-right">-->
<!--							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">-->
<!--								<i class="fa fa-minus"></i></button>-->
<!--							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">-->
<!--								<i class="fa fa-times"></i></button>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="box-body">-->
<!--						Logeado!. Empieza a crear tu increible aplicación!-->
<!--					</div>-->
<!--					<!-- /.box-body -->
<!--				</div>-->
<!--				<!-- /.box -->
<!---->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

<!--<div class="box box-primary">-->
<!--    <div class="box-header">-->
<!--        <h3 class="box-title">Listado de Antenas Emisoras</h3>-->
<!--    </div>-->
<!--    <div class="box-body">-->
<!--        <div  class=" dataTables_wrapper form-inline dt-bootstrap">-->
<!--            <div class="form-group col-md-12 col-sm-12" style="padding: 0;margin-bottom: 30px">-->
<!--                <div class="row col-md-10">-->
<!--                    <label for="">-->
<!--                        cantidad de filas-->
<!--                    </label>-->
<!--                    <select class="form-control" name="" id="myInputSelectField">-->
<!--                        <option value=""></option>-->
<!--                        <option value="1">1</option>-->
<!--                        <option value="2">2</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--                <div class="row col-md-2">-->
<!--                    <input class="form-control" type="text" placeholder="Buscar..." id="myInputTextField">-->
<!--                </div>-->
<!--            </div>-->
<!--            <table id="antenas" class="table-responsive table table-hover table-bordered">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th>Id</th>-->
<!--                    <th>nombre</th>-->
<!--                    <th>mac</th>-->
<!--                    <th>ip</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

@endsection
