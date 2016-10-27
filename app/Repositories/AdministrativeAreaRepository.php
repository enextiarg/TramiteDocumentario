<?php

namespace App\Repositories;

use App\Models\AdministrativeArea;
use InfyOm\Generator\Common\BaseRepository;

class AdministrativeAreaRepository extends BaseRepository
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
        return AdministrativeArea::class;
    }
}
