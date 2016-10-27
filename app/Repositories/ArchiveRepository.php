<?php

namespace App\Repositories;

use App\Models\Archive;
use InfyOm\Generator\Common\BaseRepository;

class ArchiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'file_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Archive::class;
    }
}
