<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    protected $fillable = [
        'content',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}