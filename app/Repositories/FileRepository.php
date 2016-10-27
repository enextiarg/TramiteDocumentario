<?php

namespace App\Repositories;

use App\Models\File;
use InfyOm\Generator\Common\BaseRepository;

class FileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'procedure_id',
        'file_number',
        'document_number',
        'subject',
        'received_date',
        'folio',
        'customer_id',
        'file_status',
        'document_type_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return File::class;
    }
}
