<?php

namespace sisonenet\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //'/equipos/crear_antena_emisora',
       // '/equipos/editar_antena_emisora'
        '/listado_paquetes',
        'servicio/crear_contrato',
        '/servicio/listado_contratos',
        '/servicio/cobros/listado_porCobrar',
        '/servicio/cobros/listado_comprobantes',
        'acceso/usuarios/listado_usuarios_adminis',
        'acceso/usuarios/listado_usuarios_clientes',
        'consultas/pagos_hechos/listado_pagos_hechos',
        'consultas/mensualidades/listado_mensualidades'


    ];
}
