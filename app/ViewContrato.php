<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class ViewContrato extends Model
{
    protected $table='view_contrato';
    protected $primaryKey='id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nombre_cliente',
        'apellido_cliente',
        'dni',
        'telefono',
        'direccion',
        'paquete',
        'precio_mensual',
        'megas_bajada',
        'megas_subida',
        'fecha_pago',
        'fecha_corte',
        'fecha_inicio_contrato',
        'duracion_contrato',
        'fecha_fin_contrato',
        'antena_essid',
        'antena_mac',
        'antena_ip',
        'marca_ap',
        'modelo_ap',
        'serie_ap',
        'marca_router',
        'modelo_router',
        'serie_router',
        'costo_instalacion',
        'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
