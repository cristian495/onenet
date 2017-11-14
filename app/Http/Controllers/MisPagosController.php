<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;

use sisonenet\DetallePago;
use sisonenet\Mensualidad;
use sisonenet\PagoMensualidad;
use sisonenet\ViewContrato;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\JsonResponse;

use sisonenet\Http\Requests\ComprobanteFormRequest;

use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use DB;

class MisPagosController extends Controller
{
    public  function index()
    {
        //$idusuario = Auth::user()->id;
        return view('consultas.mispagos.index');
    }

    public function getPagosHechos()
    {
        $comprobantes = DB::table('view_pagos')
            ->select('idpago_mensualidad',
                DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),
                'tipo_comprobante',
                'num_comprobante',
                DB::raw('SUM(costo) AS total'),
                DB::raw('TO_CHAR(fecha_hora_pagado,\'dd/mm/yyyy hh24:mi:ss\') AS fecha_hora_pagado'))
            ->where('idcliente','=',Auth::user()->idcliente)
            ->groupBy('idpago_mensualidad','nombre','apellido','tipo_comprobante','num_comprobante','fecha_hora_pagado')
            ->get();

        return Datatables::of($comprobantes)->make(true);
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


        return view("consultas.mispagos.show",["pago"=>$pago,"detalles"=>$detalle_pago]);
    }


}
