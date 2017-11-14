<?php


namespace sisonenet\Http\Controllers;

use Illuminate\Http\Request;
use sisonenet\User;
use DB;



class PruebaController extends Controller
{
    public function prueba(){
        //return 'hola';
        $user = new User();
        $user->name = 'cristian';
        $user->email= 'cristian@gmail.com';
        $user->password = '123456789';

        $user->save();
    }
}
