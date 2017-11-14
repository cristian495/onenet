<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class ViewPagos extends Model
{
    protected $table='view_pagos';
    protected $primaryKey='idpago_mensualidad';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'telefono',
        'direccion',
        'fecha_hora_pagado',
        'tipo_comprobante',
        'serie_comprobante',
        'num_comprobante',
        'costo_mensualidad',
        'num_cuota',
        'costo',
        'fecha_pago',
    ];

}
