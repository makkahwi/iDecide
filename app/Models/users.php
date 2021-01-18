<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class users
 * @package App\Models
 * @version April 15, 2020, 6:04 pm +08
 *
 */
class users extends Model
{
    public static $laracombee = ['id' => 'int', 'name' => 'string'];

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'id',
        'name',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'name' => 'required',
        'email' => 'required'
    ];

    
}
