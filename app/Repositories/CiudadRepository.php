<?php

namespace App\Repositories;

use App\Models\Ciudad;
use App\Repositories\BaseRepository;

/**
 * Class CiudadRepository
 * @package App\Repositories
 * @version May 28, 2022, 8:09 pm UTC
*/

class CiudadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_ciudad'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ciudad::class;
    }
}
