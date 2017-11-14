<?php

namespace sisonenet\Http\Controllers;

use sisonenet\Http\Requests\UsuarioFormRequest;
use sisonenet\User;
use sisonenet\Cliente;
use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Input;
use DB;

class UsuarioController extends Controller
{
    public function index(){
        return view('acceso.clientes.index');
    }

    public function getUsuarios()
    {

        $users_clients = DB::table('cliente as c')
            ->join('users as u','c.idcliente','=','u.idcliente')
            ->select('id',DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),'u.email','u.name')
            ->where('u.tipo_usuario','=','0')
            ->get();
        return Datatables::of($users_clients)->make(true);
    }

    public function edit($id){
        $user_client = DB::table('users as u')
            ->join('cliente as c','u.idcliente','=','c.idcliente')
            ->select(
                DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),
                'dni',
                'telefono',
                'direccion',
                'name',
                'u.email',
                'u.idcliente')
            ->where('u.id','=',$id)
            ->first();

        //$user_client= DB::table('users')->where('id','=',$id)->first();
        return view("acceso.clientes.edit",["user_client"=>$user_client]);
    }

    public  function update(UsuarioFormRequest $request){
        $data = $request->all();
        $idcliente= $data['iduser'];

        $user= User::findOrFail($idcliente);
        $user->name = $data['nombre_de_usuario'];
        $user->email = $data['email_de_usuario'];
        $user->password= $data['clave'];

        if($user->update())
        {
            return view("mensajes.msj_correcto")->with("msj","Usuario editado correctamente");
        }else
        {
            return view("mensajes.msj_rechazado")->with("msj","Error al editar");
        }
    }

    public function delete($id){
        $user_client = DB::table('users as u')
            ->join('cliente as c','u.idcliente','=','c.idcliente')
            ->select(
                'u.id',
                DB::raw(
                    'CONCAT(nombre,\' \',apellido) AS nombre_apellido'))
            ->where('u.id','=',$id)
            ->first();

        return view('acceso.clientes.delete',["user_client"=>$user_client ]);
    }

    public function destroy($id){
        $user= User::findOrFail($id);
        if($user->delete())
        {
            return 'eliminado';
        }else{
            return 'error al eliminar';
        }
    }
}
