<?php

namespace sisonenet;

use Illuminate\Database\Eloquent\Model;

class DetallePago extends Model
{
    protected $table='detalle_pago';
    protected $primaryKey='iddetalle_pago';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'idpago_mensualidad',
        'idmensualidad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
