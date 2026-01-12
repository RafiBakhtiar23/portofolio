<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
        protected $fillable = [
        'role_text',
        'headline_line_1',
        'headline_line_2',
        'description',
        'profile_image',
    ];
}
