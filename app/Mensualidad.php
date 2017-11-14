<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected $table='mensualidad';
    protected $primaryKey='idmensualidad';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'idcontrato',
        'num_cuota',
        'costo',
        'fecha_pago',
        'estado',
        'color_estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
