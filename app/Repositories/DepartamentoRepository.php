<?php

namespace App\Repositories;

use App\Models\Departamento;
use App\Repositories\BaseRepository;

/**
 * Class DepartamentoRepository
 * @package App\Repositories
 * @version May 28, 2022, 8:10 pm UTC
*/

class DepartamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_departamento'
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
        return Departamento::class;
    }
}
