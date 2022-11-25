<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Work
 *
 * @property $id
 * @property $name
 * @property $photo
 * @property $year
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Work extends Model
{
    
    static $rules = [
		'name' => 'required',
		'photo' => 'required',
		'year' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','photo','year'];



}
