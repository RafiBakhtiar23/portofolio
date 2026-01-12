<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeSection;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        HomeSection::create([
            'role_text' => 'Cloud & Backend Engineer',
            'headline_line_1' => 'Building Reliable',
            'headline_line_2' => 'Scalable Systems',
            'description' => 'I design and deploy backend systems and cloud infrastructure focused on performance, security, and long-term maintainability.',
            'profile_image' => null,
        ]);
    }
}
