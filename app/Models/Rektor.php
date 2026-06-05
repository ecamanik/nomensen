<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rektor extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}