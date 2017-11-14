<?php

namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;

use sisonenet\Cliente;
use sisonenet\User;
use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisonenet\Http\Requests\ClienteFormRequest;
use Yajra\Datatables\Facades\Datatables;
use DB;

use Illuminate\Support\Facades\Auth;


class ClienteController extends Controller
{
    public function index(){
        return view('clientes.cliente.index');
    }
    public function getClientes()
    {

        $clientes = DB::table('cliente')
                    ->select('idcliente',DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),'dni','direccion')
            ->where('estado','=',true)->get();
        //$clientes = Cliente::select(['idcliente','nombre','apellido','dni','direccion'])->where('estado','=','1')->get();

        return Datatables::of($clientes)->make(true);
    }

    public function create(){
        return view('clientes.cliente.create');
    }

    public function store(ClienteFormRequest $request){
        $data = $request->all();
        //var_dump($data);

        $cliente= new Cliente();
        $cliente->nombre= $data['nombre'];
        $cliente->apellido= $data['apellido'];
        $cliente->dni= $data['dni'];
        $cliente->telefono= $data['telefono'];
        $cliente->direccion= $data['direccion'];


        if(Input::hasFile('imagen_satelital'))
        {
            $file=Input::file('imagen_satelital');
            $file->move(public_path().'/imagenes/clientes/',$file->getClientOriginalName());

            $cliente->imagen_satelital=$file->getClientOriginalName();
        }

        $cliente->referencia_direccion= $data['referencia_direccion'];

//        $cliente->imagen_satelital= $data['imagen_satelital'];



        $resul = $cliente->save();

        $idcliente = $cliente->idcliente;

        $user = new User();
        $user->idcliente = $idcliente;
        $user->name = $data['nombre_de_usuario'];
        $user->email= $data['email'];
        $user->password = bcrypt($data['clave']);
        $user->tipo_usuario= '0';
        $user->save();

        if($resul)
        {
            return view("mensajes.msj_correcto")->with("msj","Cliente creado correctamente");
            /*$user = Auth::User();
            return $user;*/
        }
        else
        {
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");
        }
    }


    public function search_cliente($id)
    {
        $cliente = DB::table('cliente')
            ->select('idcliente','dni','telefono','direccion')
            ->where('idcliente','=',$id)
            ->where('estado','=',true)
            ->first();
        return response()->json($cliente);
        //return response()->json(["nombre"=>'cristian']);
    }


    public function show($id){
        //$cliente= DB::table('cliente')->where('idcliente','=',$id)->first();
        $cliente= DB::table('cliente as c')
            ->join('users as u','u.idcliente','=','c.idcliente')
            ->where('c.idcliente','=',$id)
            ->first();

        return view("clientes.cliente.show",["cliente"=>$cliente]);
    }

    public function edit($id){
        $cliente= DB::table('cliente as c')
            ->join('users as u','u.idcliente','=','c.idcliente')
            ->where('c.idcliente','=',$id)
            ->first();

        return view("clientes.cliente.edit",["cliente"=>$cliente]);
    }

    public  function update(ClienteFormRequest $request){
        $data = $request->all();
        $idcliente= $data['idcliente'];

        $cliente= Cliente::findOrFail($idcliente);
        $cliente->nombre= $data['nombre'];
        $cliente->apellido= $data['apellido'];
        $cliente->dni= $data['dni'];
        $cliente->telefono= $data['telefono'];
        $cliente->direccion= $data['direccion'];

        if(Input::hasFile('imagen_satelital'))
        {
            $file=Input::file('imagen_satelital');
            $file->move(public_path().'/imagenes/clientes',$file->getClientOriginalName());
            $cliente->imagen_satelital=$file->getClientOriginalName();
        }

        $cliente->referencia_direccion= $data['referencia_direccion'];


        if($cliente->update())
        {
            return view("mensajes.msj_correcto")->with("msj","Cliente editado correctamente");
        }else
        {
            return view("mensajes.msj_rechazado")->with("msj","Error al editar");
        }
    }


    public function delete($id){
        $cliente= DB::table('cliente')
            ->select('idcliente','nombre','apellido')
            ->where('idcliente','=',$id)
            ->first();

        return view('clientes.cliente.delete',["cliente"=>$cliente]);
    }


    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->estado = false;

        $user = User::where('idcliente','=',$id)->firstOrFail();

        if($cliente->update() && $user->delete())
        {
            return 'afdsaf';
        }else{
            return 'error al eliminar';
        }
    }
}
