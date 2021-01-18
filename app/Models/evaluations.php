<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class evaluations
 * @package App\Models
 * @version April 15, 2020, 6:04 pm +08
 *
 */
class evaluations extends Model
{
    public static $laracombee = ['id' => 'int', 'recommendation' => 'int'];
    
    public $table = 'evaluations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'id',
        'outlook',
        'functionality',
        'recommendation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'outlook' => 'integer',
        'functionality' => 'integer',
        'recommendation' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'outlook' => 'required',
        'functionality' => 'required',
        'recommendation' => 'required',
    ];

    
}
