<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class File
 * @package App\Models
 * @version October 27, 2016, 7:56 am UTC
 */
class File extends Model
{
    use SoftDeletes;

    public $table = 'files';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'procedure_id' => 'integer',
        'file_number' => 'string',
        'document_number' => 'string',
        'subject' => 'string',
        'folio' => 'integer',
        'customer_id' => 'integer',
        'file_status' => 'boolean',
        'document_type_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_number' => 'required',
        'document_number' => 'max:50',
        'customer_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function procedure()
    {
        return $this->belongsTo(\App\Models\Procedure::class, 'procedure_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function documentType()
    {
        return $this->belongsTo(\App\Models\DocumentType::class, 'document_type_id', 'id');
    }
}
