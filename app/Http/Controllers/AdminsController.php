<?php

namespace sisonenet\Http\Controllers;

use sisonenet\Http\Requests\AdminFormRequest;
use sisonenet\User;
use sisonenet\Cliente;
use sisonenet\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Input;
use DB;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index(){
        return view('acceso.administradores.index');
    }

    public function getUsuarios()
    {
        $users_admins = DB::table('users')
                    ->select('id','name','email')
                    ->where('tipo_usuario','=','1')
                    ->get();
        /*$users_admins = DB::table('cliente as c')
            ->join('users as u','c.idcliente','=','u.idcliente')
            ->select('id',DB::raw('CONCAT(nombre,\' \',apellido) AS nombre_apellido'),'name','password')
            ->get();*/
        return Datatables::of($users_admins)->make(true);
    }

    public function create(){
        return view('acceso.administradores.create');
    }

    public function store(AdminFormRequest $request){
        $data = $request->all();
        $user= new User();
        $user->name = $data['nombre_de_usuario'];
        $user->email= $data['email_de_usuario'];
        $user->password= bcrypt($data['clave']);
        $user->tipo_usuario= '1';


        if($user->save())
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

    public function edit($id){
        $user_admin= DB::table('users')->where('id','=',$id)->first();
        return view("acceso.administradores.edit",["user_admin"=>$user_admin]);
    }

    public  function update(AdminFormRequest $request){
        $data = $request->all();
        $idadmin= $data['iduser'];

        $user= User::findOrFail($idadmin);
        $user->name = $data['nombre_de_usuario'];
        $user->email = $data['email_de_usuario'];
        $user->password= $data['clave'];

        if($user->update())
        {
            return view("mensajes.msj_correcto")->with("msj","Cliente editado correctamente");
        }else
        {
            return view("mensajes.msj_rechazado")->with("msj","Error al editar");
        }
    }

    public function delete($id){
        $user_admin = DB::table('users')
            ->select('id','name')
            ->where('id','=',$id)
            ->first();

        return view('acceso.administradores.delete',["user_admin"=>$user_admin ]);
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
