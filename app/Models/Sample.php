<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'is_public',
    ];

    public static $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:65535',
        'is_public' => 'required|boolean',
    ];
}
