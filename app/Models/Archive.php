<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archive
 * @package App\Models
 * @version October 27, 2016, 8:03 am UTC
 */
class Archive extends Model
{
    use SoftDeletes;

    public $table = 'archives';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'file_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'file_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function file()
    {
        return $this->belongsTo(\App\Models\File::class, 'file_id', 'id');
    }
}
