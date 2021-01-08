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
        'title', 'content', 'is_public', 'header_image',
    ];

    public static $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:65535',
        'is_public' => 'required|boolean',
        'header_image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
    ];
}
