<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;


use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use DB;

class PendientesController extends Controller
{
    public function index()
    {
        return view('servicio.cobros.por_cobrar.index');
    }

    public function getPorCobrar(){
        $cobrosPend= DB::table('view_cobros_pendientes')
            ->select('idmensualidad',
                'num_cuota',
                DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),
                DB::raw('TO_CHAR(fecha_pago,\'dd/mm/yyyy\' ) AS fecha_pago'),
                'costo',
                'estado',
                'color_estado')
            ->get();
        //$clientes = Cliente::select(['idcliente','nombre','apellido','dni','direccion'])->where('estado','=','1')->get();

        return Datatables::of($cobrosPend)->make(true);
    }


    public function search_men_cliente($id,$idcont)
    {
        $mensualidades = DB::table('view_cobros_pendientes')
            ->select('idmensualidad',
                     'num_cuota',
                     DB::raw('TO_CHAR(fecha_pago,\'dd/mm/yyyy\' ) AS fecha_pago'),
                     'costo')
            ->where('idcliente','=',$id)
            ->where('idcontrato','=',$idcont)
            ->where('estado','=','pendiente')
            ->get();

        if(count($mensualidades)>0){
            return response()->json([$mensualidades]);
        }else{
            return response()->json('No existen mensualidades por pagar',500);
        }
        //return response()->json(["nombre"=>'cristian']);
    }
}
