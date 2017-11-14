<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table='contrato';
    protected $primaryKey='idcontrato';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'idcliente',
        'idpaquete',
        'idantena_emisora',
        'fecha_inicio_contrato',
        'duracion_contrato',
        'fecha_fin_contrato',
        'fecha_pago_servicio',
        'fecha_corte',
        'costo_instalacion',
        'costo_ap',
        'tipo_pago_ap',
        'marca_ap',
        'modelo_ap',
        'serie_ap',
        'marca_router',
        'modelo_router',
        'serie_router',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
