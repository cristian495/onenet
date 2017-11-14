<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class AntenaEmisora extends Model
{
    protected $table='antena_emisora';
    protected $primaryKey='idantena_emisora';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'essid', 'nombre', 'marca','modelo', 'serie', 'frecuencia', 'ip', 'mac', 'usuario', 'contraseña'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
