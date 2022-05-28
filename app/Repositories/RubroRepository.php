<?php

namespace App\Repositories;

use App\Models\Rubro;
use App\Repositories\BaseRepository;

/**
 * Class RubroRepository
 * @package App\Repositories
 * @version May 28, 2022, 8:07 pm UTC
*/

class RubroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_rubro'
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
        return Rubro::class;
    }
}
