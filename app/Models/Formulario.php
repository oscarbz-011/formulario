<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Formulario
 * @package App\Models
 * @version May 21, 2022, 10:49 pm UTC
 *
 * @property string $forma_de_pago
 * @property string $metodo_envio
 * @property string $tecnologia_venta_producto
 * @property string $publicidad_de_producto
 * @property string $fue_util_para_el_negocio
 * @property string $noto_aumento_de_ventas
 * @property string $siguio_utlizando
 */
class Formulario extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'formularios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'forma_de_pago',
        'metodo_envio',
        'tecnologia_venta_producto',
        'publicidad_de_producto',
        'fue_util_para_el_negocio',
        'noto_aumento_de_ventas',
        'siguio_utlizando'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'forma_de_pago' => 'string',
        'metodo_envio' => 'string',
        'tecnologia_venta_producto' => 'string',
        'publicidad_de_producto' => 'string',
        'fue_util_para_el_negocio' => 'string',
        'noto_aumento_de_ventas' => 'string',
        'siguio_utlizando' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'forma_de_pago' => 'required',
        'metodo_envio' => 'required',
        'tecnologia_venta_producto' => 'required',
        'publicidad_de_producto' => 'required',
        'fue_util_para_el_negocio' => 'required',
        'noto_aumento_de_ventas' => 'required',
        'siguio_utlizando' => 'required'
    ];

    
}
