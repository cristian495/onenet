<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;
use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use DB;

class MisMensualidadesController extends Controller
{
    public function index()
    {
        return view('consultas.mensualidades.index');
    }

    public function getmensualidades(){
        $cobrosPend= DB::table('view_cobros_pendientes')
            ->select('idmensualidad',
                'num_cuota',
                DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),
                DB::raw('TO_CHAR(fecha_pago,\'dd/mm/yyyy\' ) AS fecha_pago'),
                'costo',
                'estado',
                'color_estado')
            ->where('idcliente','=',Auth::user()->idcliente)
            ->get();
        //$clientes = Cliente::select(['idcliente','nombre','apellido','dni','direccion'])->where('estado','=','1')->get();

        return Datatables::of($cobrosPend)->make(true);
    }
}
