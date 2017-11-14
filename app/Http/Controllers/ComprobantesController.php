<?php

namespace sisonenet\Http\Controllers;

use sisonenet\DetallePago;
use sisonenet\Mensualidad;
use sisonenet\PagoMensualidad;
use sisonenet\ViewContrato;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use sisonenet\Http\Requests\ComprobanteFormRequest;

use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use DB;

//use Illuminate\Support\Facades\Input;

class ComprobantesController extends Controller
{

    public function index(){
        return view('servicio.cobros.comprobantes.index');
    }

    public function getComprobantes()
    {
        $comprobantes = DB::table('view_pagos')
            ->select('idpago_mensualidad',
                DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),
                'tipo_comprobante',
                'num_comprobante',
                DB::raw('SUM(costo) AS total'),
                DB::raw('TO_CHAR(fecha_hora_pagado,\'dd/mm/yyyy hh24:mi:ss\') AS fecha_hora_pagado'))
            ->groupBy('idpago_mensualidad','nombre','apellido','tipo_comprobante','num_comprobante','fecha_hora_pagado')
            ->get();

        return Datatables::of($comprobantes)->make(true);
    }

    /*MUESTRA TODOS LOS CLIENTES ACTIVOS Y SUS CONTRATOS TAMBIEN ACTIVOS PARA EFECTUAR EL PAGO
    DE ALGUNA MENSUALIDAD*/
    public function create(){
        $clientes =  DB::table('view_contrato')
            ->select('id',
                'idcliente',
                DB::raw('CONCAT(nombre_cliente,\' \',apellido_cliente) AS nombre_apellido'))
            ->where('estado','=',true)
            ->where('estado_cliente','=',true)
            ->get();
        return view('servicio.cobros.comprobantes.create',['clientes'=>$clientes]);
    }

    public function store(ComprobanteFormRequest $request){
        $data = $request->all();

        /*REGISTRANDO EL PAGO*/
        $pago_mensualidad = new PagoMensualidad();
        $pago_mensualidad->idcliente = $data['cliente'];
        $pago_mensualidad->fecha_hora_pagado=$carbon = new Carbon();
        $pago_mensualidad->tipo_comprobante=$data['tipo_comprobante'];
        $pago_mensualidad->serie_comprobante=$data['serie_comprobante'];
        $pago_mensualidad->num_comprobante=$data['num_comprobante'];
        $pago_mensualidad->mora='0.00';
        $pago_mensualidad->costo_mensualidad='0.00';
        $pago_mensualidad->total_pago = $data['total'];
        $pago_mensualidad->estado='pagado';


        $pago_mensualidad->save();

        $idpago_mensualidad = $pago_mensualidad->idpago_mensualidad;

        for($i=0; $i<count($data['mensualidades']); $i++){


            /*ACTUALIZAR MENSUALIDADES COMO PAGADAS*/
            Mensualidad::where('idmensualidad','=',$data['mensualidades'][$i])
                ->update([
                    'estado' => 'pagado',
                    'color_estado' => 'verde'
                ]);


            /*REGISTRO DEL DETALLE DEL PAGO*/

            $detalle_pago = new DetallePago();
            $detalle_pago->idpago_mensualidad = $idpago_mensualidad;
            $detalle_pago->idmensualidad = $data['mensualidades'][$i];
            $detalle_pago->save();

        }


        return $data['mensualidades'][0];
    }

    public function show($id){

        $pago = DB::table('pago_mensualidad as pm')
            ->join('cliente as c','pm.idcliente','=','c.idcliente')
            //->join('detalle_pago as dp','pm.idpago_mensualidad')
            ->select('pm.idpago_mensualidad',
                DB::raw('TO_CHAR(pm.fecha_hora_pagado,\'dd/mm/yyyy hh12:mi:ss\') AS fecha_hora_pagado'),
                DB::raw('CONCAT(c.nombre,\' \',c.apellido) AS nombre_apellido'),
                'c.dni',
                'c.telefono',
                'c.direccion',
                'pm.tipo_comprobante',
                'pm.serie_comprobante',
                'pm.num_comprobante',
                'pm.total_pago')
            ->where('idpago_mensualidad','=',$id)
            ->first();

      /*  $detalles = DB::table('detalle_venta as d')
            ->join('articulo as a', 'd.idarticulo', '=', 'a.idarticulo')
            ->select('a.nombre as articulo', 'd.cantidad', 'd.descuento','d.precio_venta')
            ->where('d.idventa', '=', $id)
            ->get();*/

        $detalle_pago =DB::table('detalle_pago as d')
            ->join('mensualidad as m', 'd.idmensualidad','=','m.idmensualidad')
            ->select('m.num_cuota',
                'm.costo',
                DB::raw('TO_CHAR(m.fecha_pago,\'dd/mm/yyyy\') AS fecha_pago'),
                DB::raw('SUM(m.costo) AS total')
                )
            ->where('d.idpago_mensualidad','=',$id)
            ->groupBy('m.num_cuota','m.costo','fecha_pago')
            ->get();


        return view("servicio.cobros.comprobantes.show",["pago"=>$pago,"detalles"=>$detalle_pago]);
    }
}
