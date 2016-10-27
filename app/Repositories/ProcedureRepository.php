<?php

namespace App\Repositories;

use App\Models\Procedure;
use InfyOm\Generator\Common\BaseRepository;

class ProcedureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Procedure::class;
    }
}
