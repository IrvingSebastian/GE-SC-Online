<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Info
 *
 * @property $id
 * @property $title
 * @property $content
 * @property $date
 * @property $photo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Info extends Model
{
    
    static $rules = [
		'title' => 'required',
		'content' => 'required',
		'date' => 'required',
		'photo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','date','photo'];



}
