<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table='paquete';
    protected $primaryKey='idpaquete';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nombre', 'megas_subida', 'megas_bajada','precio_mensual', 'observacion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
