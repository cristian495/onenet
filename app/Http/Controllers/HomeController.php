<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace sisonenet\Http\Controllers;

use sisonenet\Http\Requests;
use Illuminate\Http\Request;
use sisonenet\Cliente;
use Illuminate\Support\Facades\Auth;
use DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $cliente = DB::table('cliente')
                        ->select('nombre','apellido')
                        ->where('idcliente','=',Auth::user()->idcliente)
                        ->first();
        $ID = Auth::user()->idcliente;
        session(['cliente_session' => $cliente]);

        return view('adminlte::home');
    }
}