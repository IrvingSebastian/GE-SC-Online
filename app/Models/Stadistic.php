<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stadistic
 *
 * @property $id
 * @property $rank
 * @property $title
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Stadistic extends Model
{
    
    static $rules = [
		'rank' => 'required',
		'title' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rank','title'];



}
