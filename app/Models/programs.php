<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class programs
 * @package App\Models
 * @version April 15, 2020, 6:04 pm +08
 *
 */
class programs extends Model
{
    public $table = 'programs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'id',
        'it',
        'engineering',
        'architecture',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'it' => 'integer',
        'engineering' => 'integer',
        'architecture' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'it' => 'required',
        'engineering' => 'required',
        'architecture' => 'required'
    ];

    
}
