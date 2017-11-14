<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class PagoMensualidad extends Model
{
    protected $table='pago_mensualidad';
    protected $primaryKey='idpago_mensualidad';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'idcliente',
        'fecha_hora_pagado',
        'tipo_comprobante',
        'serie_comprobante',
        'num_comprobante',
        'mora',
        'costo_mensualidad',
        'total_pago',
        'estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
