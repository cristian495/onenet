<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;

use sisonenet\Paquete;
use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisonenet\Http\Requests\PaqueteFormRequest;
use Yajra\Datatables\Facades\Datatables;
use DB;

class PaqueteController extends Controller
{
    public function index(){
        return view('paquetes.paquete.index');
        /*if (DB::connection('pgsql')->getDatabaseName())
        {
            return 'Connected to the DB: ' . DB::connection('pgsql')->getDatabaseName();
        }*/
    }
    public function getPaquetes()
    {
        $paquetes = Paquete::select(['idpaquete','nombre','precio_mensual','megas_subida','megas_bajada'])->where('estado','=','true')->get();

        return Datatables::of($paquetes)->make(true);
    }

    public function create(){
        return view('paquetes.paquete.create');
    }

    public function store(PaqueteFormRequest $request){
        $data = $request->all();
        //var_dump($data);

        $paquete = new Paquete();
        $paquete->nombre= $data['nombre'];
        $paquete->megas_subida= $data['megas_subida'];
        $paquete->megas_bajada= $data['megas_bajada'];
        $paquete->precio_mensual= $data['precio_mensual'];
        $paquete->observacion= $data['observacion'];



        $resul = $paquete->save();

        if($resul)
        {
            return view("mensajes.msj_correcto")->with("msj","Paquete de internet creado correctamente");
        }
        else
        {
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");
        }
    }

    public function show($id){
        $paquete= DB::table('paquete')->where('idpaquete','=',$id)->first();
        return view("paquetes.paquete.show",["paquete"=>$paquete]);
    }

    public function edit($id){
        $paquete= DB::table('paquete')->where('idpaquete','=',$id)->first();
        return view("paquetes.paquete.edit",["paquete"=>$paquete]);
    }

    public  function update(PaqueteFormRequest $request){
        $data = $request->all();
        $idpaquete= $data['idpaquete'];

        $paquete= Paquete::findOrFail($idpaquete);
        $paquete->nombre= $data['nombre'];
        $paquete->megas_subida= $data['megas_subida'];
        $paquete->megas_bajada= $data['megas_bajada'];
        $paquete->precio_mensual= $data['precio_mensual'];
        $paquete->observacion= $data['observacion'];


        /*if(Input::hasFile('imagen'))
        {
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
            $articulo->imagen=$file->getClientOriginalName();
        }
*/
        if($paquete->update())
        {
            return view("mensajes.msj_correcto")->with("msj","Paquete de internet editado correctamente");
        }else
        {
            return view("mensajes.msj_rechazado")->with("msj","Error al editar");
        }
    }

    public function search_paquete($id)
    {
        $paquete = DB::table('paquete')
            ->select('idpaquete','precio_mensual','megas_bajada','megas_subida')
            ->where('idpaquete','=',$id)
            //->where('estado','=','true')
            ->first();
        return response()->json($paquete);
        //return response()->json(["nombre"=>'cristian']);
    }

    public function delete($id){
        $paquete= DB::table('paquete')
            ->select('idpaquete','nombre')
            ->where('idpaquete','=',$id)
            ->first();

        return view('paquetes.paquete.delete',["paquete"=>$paquete]);
    }


    public function destroy($id){
        $antena = Paquete::findOrFail($id);
        $antena->estado = false;


        if($antena->update())
        {
            return 'afdsaf';
        }else{
            return 'error al eliminar';
        }
    }
}
