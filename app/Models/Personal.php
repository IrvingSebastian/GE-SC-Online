<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personal
 *
 * @property $id
 * @property $photo
 * @property $name
 * @property $status
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personal extends Model
{
    
    static $rules = [
		'photo' => 'required',
		'name' => 'required',
		'status' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['photo','name','status','email'];



}
