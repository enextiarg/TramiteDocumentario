<?php

namespace App\Repositories;

use App\Models\ReportType;
use InfyOm\Generator\Common\BaseRepository;

class ReportTypeRepository extends BaseRepository
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
        return ReportType::class;
    }
}
