<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'title',
        'company',
        'location',
        'period',
        'description',
        'highlights',
        'tech_stack',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'highlights' => 'array',
        'tech_stack' => 'array',
        'is_active'  => 'boolean',
    ];
}
