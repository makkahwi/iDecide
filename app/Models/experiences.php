<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class experiences
 * @package App\Models
 * @version April 15, 2020, 6:04 pm +08
 *
 */
class experiences extends Model
{
    public static $laracombee = ['id' => 'int', 'design' => 'int', 'web' => 'int',
    'coding' => 'int', 'networks' => 'int', 'hacking' => 'int', 'drawing' => 'int',
    'sketching' => 'int', 'planing' => 'int', 'internal' => 'int', 'robots' => 'int',
    'chemicals' => 'int'];
    
    public $table = 'experiences';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'id',
        'design',
        'web',
        'coding',
        'networks',
        'hacking',
        'drawing',
        'sketching',
        'planing',
        'internal',
        'robots',
        'chemicals',
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'design' => 'integer',
        'web' => 'integer',
        'coding' => 'integer',
        'networks' => 'integer',
        'hacking' => 'integer',
        'drawing' => 'integer',
        'sketching' => 'integer',
        'planing' => 'integer',
        'internal' => 'integer',
        'robots' => 'integer',
        'chemicals' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'design' => 'required',
        'web' => 'required',
        'coding' => 'required',
        'networks' => 'required',
        'hacking' => 'required',
        'drawing' => 'required',
        'sketching' => 'required',
        'planing' => 'required',
        'internal' => 'required',
        'robots' => 'required',
        'chemicals' => 'required',
    ];

    
}
