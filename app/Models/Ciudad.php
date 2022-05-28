<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ciudad
 * @package App\Models
 * @version May 28, 2022, 8:09 pm UTC
 *
 * @property string $nombre_ciudad
 */
class Ciudad extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ciudads';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_ciudad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_ciudad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_ciudad' => 'required'
    ];

    
}
