<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;


use sisonenet\Contrato;
use sisonenet\DetallePago;
use sisonenet\Mensualidad;
use sisonenet\AntenaEmisora;
use sisonenet\PagoMensualidad;
use sisonenet\ViewContrato;
use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisonenet\Http\Requests\ContratoFormRequest;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use DB;




class ContratoController extends Controller
{

    
    public function index(){
        return view('servicio.contratos.index');
    }
   public function getContratos()
    {
        $contratos = DB::table('view_contrato')
            ->select('id',DB::raw('CONCAT(nombre_cliente,\' \',apellido_cliente) AS nombre_apellido'),
                    'telefono',
                    DB::raw('CONCAT(precio_mensual,\' soles\') AS precio_mensual'),
                    DB::raw('CONCAT(megas_bajada,\' Megas\') AS megas'),
                    DB::raw('CONCAT(fecha_pago,\' de cada mes \') AS fecha_pago'),
                    'estado')
                     //DB::raw('DATE_FORMAT(fecha_inicio_contrato,\'%d/%m/%Y %h:%i %p\' ) AS fecha_inicio_contrato'),
                     //DB::raw('TO_CHAR(fecha_inicio_contrato,\'dd/mm/yyyy hh24:mi:ss\' ) AS fecha_inicio_contrato'),
//                     'duracion_contrato',
                     //DB::raw('DATE_FORMAT(fecha_fin_contrato,\'%d/%m/%Y %h:%i %p\') AS fecha_fin_contrato'))
                     //DB::raw('TO_CHAR(fecha_fin_contrato,\'dd/mm/yyyy hh24:mi:ss\') AS fecha_fin_contrato'))
            ->get();
        //$clientes = Cliente::select(['idcliente','nombre','apellido','dni','direccion'])->where('estado','=','1')->get();

        return Datatables::of($contratos)->make(true);
    }

    public function create(){
        $clientes =  DB::table('cliente')
                    ->select('idcliente',
                             DB::raw('CONCAT(nombre,apellido) AS nombre_apellido'),
                             'dni',
                             'telefono',
                             'direccion')
                    ->where('estado','=','true')
                    ->get();

        $antenas_emisoras = DB::table('antena_emisora')
                          ->select('idantena_emisora',
                                   'essid',
                                   'mac',
                                   'ip')
                          ->where('estado','=','true')
                          ->get();

        $paquetes = DB::table('paquete')
                    ->select('idpaquete',
                             'nombre',
                             'precio_mensual',
                             'megas_bajada',
                             'megas_subida')
                    ->where('estado','=','true')
                    ->get();


        return view('servicio.contratos.create',['clientes'=>$clientes,'antenas_emisoras'=>$antenas_emisoras,'paquetes'=>$paquetes]);
    }





   /* private  function generarMensualidades($idcontrato, Carbon $start_date, Carbon $end_date)
    {
        $mensualidad = new Mensualidad();

        $dates = [];

        for($date = $start_date; $date->lte($end_date); $date->addMonth()) {
            $mensualidad->idcontrato = $idcontrato;
            $mensualidad->fecha_pago = $date->format('Y-m-d');
            $mensualidad->estado = 'pendiente';
            $mensualidad->color_estado = 'verde';

            $mensualidad->save();
            //$dates[] = $date->format('Y-m-d');
        }

        //return $dates;
    }*/


    public function store(ContratoFormRequest $request){
     //   try {
            $num_cuotas=0;
            $costoPrimerMes = 0;
            $demasMeses = 0;
            $data = $request->all();
        //    DB::beginTransaction();

            $contrato= new Contrato();

            $contrato->idcliente= $data['cliente'];
            $contrato->idpaquete= $data['idpaquete'];
            $contrato->idantena_emisora= $data['idantena_emisora'];
            $fechaInicio = Carbon::createFromFormat('d/m/Y H:i:s a', $data['fecha_inicio_contrato'])->format('Y-m-d H:i:s');
            $num_cuotas=(intval($data['duracion_contrato'])*13);
            $contrato->fecha_inicio_contrato= $fechaInicio;
            $contrato->duracion_contrato= $data['duracion_contrato'];
            $contrato->fecha_fin_contrato=Carbon::createFromFormat('d/m/Y H:i:s a', $data['fecha_fin_contrato'])->format('Y-m-d H:i:s');// Carbon::parse(strtotime($data['fecha_fin_contrato']))->format('Y-m-d');//date('Y-d-m', strtotime($data['fecha_fin_contrato']));
            $contrato->fecha_pago_servicio= $data['fecha_pago_servicio'];
            $contrato->fecha_corte= $data['fecha_corte'];
            $contrato->costo_ap= $data['costo_ap'];
            $contrato->tipo_pago_ap= $data['tipo_pago_ap'];
            $contrato->costo_instalacion= $data['costo_instalacion'];

            $costo_instalacion  = $data['costo_instalacion'];
            $costo_mensualidad  = $data['costo_paquete'];
            $costo_ap           = $data['costo_ap'];

            //$tipo_pago_ap       = $data['tipo_pago_ap'];

            if($data['tipo_pago_ap'] == 'contado')
            {
                $costoPrimerMes = floatval($costo_instalacion) + floatval($costo_ap) + floatval($costo_mensualidad);
                $demasMeses = $costo_mensualidad;

            }elseif ($data['tipo_pago_ap'] == 'mensual')
            {

                $apmensual = floatval($costo_ap)/$num_cuotas;
                $costoPrimerMes= floatval($costo_instalacion) + floatval($costo_mensualidad)+ $apmensual;
                $demasMeses = floatval($costo_mensualidad)+$apmensual;
            }

            $contrato->marca_ap= $data['marca_ap'];
            $contrato->modelo_ap= $data['modelo_ap'];
            $contrato->serie_ap= $data['serie_ap'];
            $contrato->marca_router= $data['marca_router'];
            $contrato->modelo_router= $data['modelo_router'];
            $contrato->serie_router= $data['serie_router'];

            $contrato->save();

            $idcontrato = $contrato->idcontrato;
            $cFechaInicio = Carbon::createFromFormat('d/m/Y H:i:s a',$data['fecha_inicio_contrato']);
            $cFechaFin= Carbon::createFromFormat('d/m/Y H:i:s a',$data['fecha_fin_contrato']);



            $cont = 1;

            for($date = $cFechaInicio; $cont <= $date->lte($cFechaFin); $date->addMonthsNoOverflow(1))
            {

                $mensualidad = new Mensualidad();

                $mensualidad->idcontrato = $idcontrato;
                $mensualidad->num_cuota = $cont;

                if($cont == 1)
                {
                    $mensualidad->costo= $costoPrimerMes;
                }else
                {
                    $mensualidad->costo= $demasMeses;
                }

                $mensualidad->fecha_pago = $date->toDateString();
                $mensualidad->estado = 'pendiente';
                $mensualidad->color_estado = 'amarillo';


                $mensualidad->save();

                if($cont == 1)  $idmensualidadprimera = $mensualidad->idmensualidad;

                $cont = $cont +1;
            }

            /*
             * PAGO DE LA PRIMERA MENSUALIDAD
             */

            $pagoMensualidad = new PagoMensualidad();
            $pagoMensualidad->idcliente  = $data['cliente'];
            $pagoMensualidad->fecha_hora_pagado = Carbon::createFromFormat('d/m/Y H:i:s a', $data['fecha_inicio_contrato'])->format('Y-m-d H:i:s');
            $pagoMensualidad->tipo_comprobante = $data['tipo_comprobante'];
            $pagoMensualidad->serie_comprobante = $data['serie_comprobante'];
            $pagoMensualidad->num_comprobante = $data['num_comprobante'];
            $pagoMensualidad->costo_mensualidad= $costoPrimerMes;
            $pagoMensualidad->total_pago= $costoPrimerMes;
            $pagoMensualidad->estado= 'pagado';

            $pagoMensualidad->save();

            $idpagomensualidad = $pagoMensualidad->idpago_mensualidad;


            /*
             *  ACTUALIZACION A PAGADO DE LA PRIMERA MENSUALIDAD
             */

            Mensualidad::where('idcontrato', '=', $idcontrato)
                ->where('idmensualidad','=',$idmensualidadprimera)
                ->where('num_cuota','=','1')
                ->update([
                    'estado' => 'pagado',
                    'color_estado' => 'verde'
                ]);

            /*
             *  DETALLE DEL PRIMER PAGO DE MENSUALIDAD
             */

            $detallePago = new DetallePago();
            $detallePago->idpago_mensualidad = $idpagomensualidad ;
            $detallePago->idmensualidad = $idmensualidadprimera;

            $detallePago->save();

       //     DB::commit();
            return view("mensajes.msj_correcto")->with("msj","Contrato creado correctamente");


       // }catch (\Exception $e) {
       //     DB::rollback();
        //    return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");
      //  }
    }




















    /*SHOW**/
    public function show($id){
        $contrato = DB::table('view_contrato')
                    ->select('id',
                             DB::raw('CONCAT(nombre_cliente,\' \',apellido_cliente) AS nombre_apellido'),
                             'dni',
                             'telefono',
                             'direccion',
                             'paquete',
                             'precio_mensual',
                             'megas_bajada',
                             'megas_subida',
                             'fecha_pago',
                             'fecha_corte',
                             //DB::raw('DATE_FORMAT(fecha_inicio_contrato,"%d/%m/%Y") AS fecha_inicio_contrato'),
                             DB::raw('TO_CHAR(fecha_inicio_contrato,\'dd/mm/yyyy hh24:mi:ss\') AS fecha_inicio_contrato'),
                             'duracion_contrato',
                             DB::raw('TO_CHAR(fecha_fin_contrato,\'dd/mm/yyyy hh24:mi:ss\') AS fecha_fin_contrato'),
                             'antena_essid',
                             'antena_mac',
                             'antena_ip',
                             'marca_ap',
                             'modelo_ap',
                             'serie_ap',
                             'marca_router',
                             'modelo_router',
                             'serie_router',
                             'costo_instalacion',
                             'costo_ap',
                             'tipo_pago_ap',
                             'estado')
                    ->where('id','=',$id)
                    ->first();


        return view("servicio.contratos.show",["contrato"=>$contrato]);
    }


    public function edit($id){
        $contrato = DB::table('view_contrato')
            ->select('id',
                DB::raw('CONCAT(nombre_cliente,\' \',apellido_cliente) AS nombre_apellido'),
                'idcliente',
                'dni',
                'telefono',
                'direccion',
                'idpaquete',
                'paquete',
                'precio_mensual',
                'megas_bajada',
                'megas_subida',
                'fecha_pago',
                'fecha_corte',
                DB::raw('TO_CHAR(fecha_inicio_contrato,\'dd/mm/yyyy hh24:mi:ss\') AS fecha_inicio_contrato'),
                'duracion_contrato',
                DB::raw('TO_CHAR(fecha_fin_contrato,\' dd/mm/yyyy hh24:mi:ss \') AS fecha_fin_contrato'),
                'idantena_emisora',
                'antena_essid',
                'antena_mac',
                'antena_ip',
                'marca_ap',
                'modelo_ap',
                'serie_ap',
                'marca_router',
                'modelo_router',
                'serie_router',
                'costo_instalacion',
                'costo_ap',
                'tipo_pago_ap',
                'estado')
            ->where('id','=',$id)
            ->first();

        $antenas_emisoras= DB::table('antena_emisora')->select('idantena_emisora','essid')->get();

        return view("servicio.contratos.edit",["contrato"=>$contrato,'antenas_emisoras'=>$antenas_emisoras]);
    }


    public function update(ContratoFormRequest $request){
        $data = $request->all();
        $idcontrato = $data['idcontrato'];

        $contrato= Contrato::findOrFail($idcontrato);
        $contrato->costo_instalacion = $data['costo_instalacion'];
        $contrato->marca_ap = $data['marca_ap'];
        $contrato->modelo_ap = $data['modelo_ap'];
        $contrato->serie_ap = $data['serie_ap'];
        $contrato->marca_router = $data['marca_router'];
        $contrato->modelo_router = $data['modelo_router'];
        $contrato->serie_router = $data['serie_router'];

        if($contrato->update()){
            return view("mensajes.msj_correcto")->with("msj","Contrato editado correctamente");
        }else{
            return view("mensajes.msj_rechazado")->with("msj","huuubo un error vuelva a intentarlo");
        }
    }


    public function delete($id){
        $contrato = DB::table('view_contrato')
            ->select('id')
            ->where('id','=',$id)
            ->first();

        return view('servicio.contratos.delete',["contrato"=>$contrato]);
    }


    public function destroy($id){
        $paquete = Contrato::findOrFail($id);
        $paquete->estado = '0';

        $idcontrato = $id;

        Mensualidad::where('idcontrato', '=', $idcontrato)
            ->update([
                'estado' => 'anulado',
                'color_estado' => 'rojo'
            ]);


        if($paquete->update())
        {
            return 'afdsaf';
        }else{
            return 'error al eliminar';
        }
    }


    public function generar_pdf(){
        $vistaurl = "servicio.contratos.contrato";
        $view = \View::make($vistaurl,compact('data','date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);
        return $pdf -> stream("contrato");
    }


    public function search_cli_contrato($id)
    {
        $clientes_contrato = DB::table('view_contrato')
            ->select('id',
                     'idcliente',
                     'dni',
                     'telefono',
                     'direccion')
            ->where('idcliente','=',$id)
            ->where('estado','=',true)
            ->first();
        return response()->json($clientes_contrato);
        //return response()->json(["nombre"=>'cristian']);
    }
}