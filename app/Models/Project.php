<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Project.php
class Project extends Model
{
protected $fillable = [
    'title',
    'category',
    'badge_color',
    'description',
    'project_url',
    'thumbnail',
    'images',
    'tags',
    'sort_order',
    'is_active',
];

protected $casts = [
    'images' => 'array',
    'tags' => 'array',
    'is_active' => 'boolean',
];

}
