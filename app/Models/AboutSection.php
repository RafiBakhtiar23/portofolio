<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/AboutSection.php
class AboutSection extends Model
{
protected $fillable = [
    'title',
    'intro',
    'story_1',
    'story_2',
    'story_3',
    'focus_title',
    'focus_items', // 🔥 WAJIB
    'meta_tags',
];

protected $casts = [
    'focus_items' => 'array',
    'meta_tags'   => 'array',
];
}

