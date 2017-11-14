<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;
use sisonenet\AntenaEmisora;

use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisonenet\Http\Requests\AntenaEmisoraRequest;

use Yajra\Datatables\Facades\Datatables;

use DB;
class AntenaEmisoraController extends Controller
{
    public function index(){
        return view('equipos.antena_emisora.index');
    }
    public function getTasks()
    {
        $tasks = AntenaEmisora::select(['idantena_emisora','nombre','mac','ip'])->where('estado','=','true');

        return Datatables::of($tasks)

            ->make(true);
    }

    public function create(){
        return view('equipos.antena_emisora.create');
    }

    public function store(AntenaEmisoraRequest $request){
        $data = $request->all();
        //var_dump($data);

        $antenaEmisora = new AntenaEmisora();
        $antenaEmisora->essid= $data['essid'];
        $antenaEmisora->nombre= $data['nombre'];
        $antenaEmisora->marca= $data['marca'];
        $antenaEmisora->modelo= $data['modelo'];
        $antenaEmisora->serie= $data['serie'];
        $antenaEmisora->frecuencia= $data['frecuencia'];
        $antenaEmisora->ip= $data['ip'];
        $antenaEmisora->mac= $data['mac'];
        $antenaEmisora->usuario= $data['usuario'];
        $antenaEmisora->contrasenia= $data['contrasenia'];
       // $antenaEmisora->imagen= $data['imagen'];
        //$antenaEmisora->estado= 'Activo';

        if(Input::hasFile('imagen'))
        {
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/antenasEmisoras/',$file->getClientOriginalName());

            $antenaEmisora->imagen=$file->getClientOriginalName();
        }

        $resul = $antenaEmisora->save();

        if($resul)
        {
            return view("mensajes.msj_correcto")->with("msj","Antena Emisora creada correctamente");
        }
        else
        {
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");
        }
    }

    public function show($id){
        /*
         $venta = DB::table('venta as v')
            ->join('persona as p', 'v.idcliente', '=', 'p.idpersona')
            ->join('detalle_venta as dv', 'v.idventa', '=', 'dv.idventa')
            ->select('v.idventa', 'v.fecha_hora', 'p.nombre', 'v.tipo_comprobante', 'v.serie_comprobante', 'v.num_comprobante', 'v.impuesto', 'v.estado','v.total_venta')
            ->where('v.idventa', '=', $id)
            ->groupBy('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante','v.serie_comprobante','v.num_comprobante','v.impuesto','v.estado','v.total_venta')
            ->first();

        $detalles = DB::table('detalle_venta as d')
            ->join('articulo as a', 'd.idarticulo', '=', 'a.idarticulo')
            ->select('a.nombre as articulo', 'd.cantidad', 'd.descuento','d.precio_venta')
            ->where('d.idventa', '=', $id)
            ->get();

        return view("ventas.venta.show",["venta"=>$venta,"detalles"=>$detalles]);
          */
        $antena_emisora = DB::table('antena_emisora')->where('idantena_emisora','=',$id)->first();
        return view("equipos.antena_emisora.show",["antena_emisora"=>$antena_emisora]);

    }

    public function edit($id){
        $antena_emisora = DB::table('antena_emisora')->where('idantena_emisora','=',$id)->first();
        return view("equipos.antena_emisora.edit",["antena_emisora"=>$antena_emisora]);
    }

    public  function update(AntenaEmisoraRequest $request){
        $data = $request->all();
        $idAntenaEmisora = $data['idantena_emisora'];

        $antenaEmisora = AntenaEmisora::findOrFail($idAntenaEmisora);
        $antenaEmisora ->essid= $data['essid'];
        $antenaEmisora ->nombre= $data['nombre'];
        $antenaEmisora ->marca= $data['marca'];
        $antenaEmisora ->modelo= $data['modelo'];
        $antenaEmisora ->serie= $data['serie'];
        $antenaEmisora ->frecuencia= $data['frecuencia'];
        $antenaEmisora ->ip= $data['ip'];
        $antenaEmisora ->mac = $data['mac'];
        $antenaEmisora ->usuario = $data['usuario'];
        $antenaEmisora ->contrasenia = $data['contrasenia'];


        /*if(Input::hasFile('imagen'))
        {
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
            $articulo->imagen=$file->getClientOriginalName();
        }
*/
        if($antenaEmisora->update())
        {
            return view("mensajes.msj_correcto")->with("msj","Antena emisora editada correctamente");
        }else
        {
            return view("mensajes.msj_rechazado")->with("msj","Error al editar");
        }
    }

    public function search_antena($id)
    {
        $antena = DB::table('antena_emisora')
            ->select('idantena_emisora','mac','ip')
            ->where('idantena_emisora','=',$id)
            ->where('estado','=','true')
            ->first();
        return response()->json($antena);
        //return response()->json(["nombre"=>'cristian']);
    }



    public function delete($id){
        $antena= DB::table('antena_emisora')
            ->select('idantena_emisora','essid')
            ->where('idantena_emisora','=',$id)
            ->first();

        return view('equipos.antena_emisora.delete',["antena"=>$antena]);
    }


    public function destroy($id){
        $antena = AntenaEmisora::findOrFail($id);
        $antena->estado = false;


        if($antena->update())
        {
            return 'afdsaf';
        }else{
            return 'error al eliminar';
        }
    }
}
