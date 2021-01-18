<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class scores
 * @package App\Models
 * @version April 15, 2020, 6:04 pm +08
 *
 */
class scores extends Model
{

    public static $laracombee = ['id' => 'int', 'it' => 'int', 'chemistry' => 'int', 'physics' => 'int', 'math' => 'int', 'arts' => 'int'];

    public $table = 'scores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'id',
        'it',
        'chemistry',
        'physics',
        'math',
        'arts'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'it' => 'integer',
        'chemistry' => 'integer',
        'physics' => 'integer',
        'math' => 'integer',
        'arts' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'it' => 'required',
        'chemistry' => 'required',
        'physics' => 'required',
        'math' => 'required',
        'arts' => 'required',
    ];

    
}
