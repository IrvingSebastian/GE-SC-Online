<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentary
 *
 * @property $id
 * @property $name
 * @property $message
 * @property $email
 * @property $affair
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comentary extends Model
{
    
    static $rules = [
		'name' => 'required',
		'message' => 'required',
		'email' => 'required',
		'affair' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','message','email','affair'];



}
