<?php

use Illuminate\Database\Seeder;
use sisonenet\AntenaEmisora;

class AntenaEmisoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('antena_emisora')->insert(array(
            'essid' => 'desdelaravel',
            'nombre' => 'desdelaravel',
            'marca' => 'desdelaravel',
            'modelo' => 'desdelaravel',
            'erie' => 'desdelaravel',
            'frecuencia' => 'desdelaravel',
            'ip' => 'desdelaravel',
            'mac' => 'desdelaravel',
            'usuario' => 'desdelaravel',
            'contrasenia' => 'desdelaravel'
        ));
    }
}
