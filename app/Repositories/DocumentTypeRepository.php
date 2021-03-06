<?php

namespace App\Repositories;

use App\Models\DocumentType;
use InfyOm\Generator\Common\BaseRepository;

class DocumentTypeRepository extends BaseRepository
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
        return DocumentType::class;
    }
}
