<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Data
 *
 * @property $id
 * @property $icon
 * @property $title
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Data extends Model
{
    
    static $rules = [
		'icon' => 'required',
		'title' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['icon','title','description'];



}
