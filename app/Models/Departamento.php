<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Departamento
 * @package App\Models
 * @version May 28, 2022, 8:10 pm UTC
 *
 * @property string $nombre_departamento
 */
class Departamento extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'departamentos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_departamento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_departamento' => 'required'
    ];

    
}
