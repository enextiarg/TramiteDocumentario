<?php

namespace App\Repositories;

use App\Models\Report;
use InfyOm\Generator\Common\BaseRepository;

class ReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'report_type_id',
        'report_date',
        'user_id',
        'file_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Report::class;
    }
}
