<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection; // 🔥 INI YANG KURANG

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'title' => 'About Me',
            'intro' => 'I’m a Cloud & Backend Engineer focused on designing scalable, maintainable systems with a strong emphasis on clean architecture, performance, and long-term reliability.',

            'story_1' => 'I specialize in backend development and cloud deployment, working primarily with Laravel, relational databases, and Linux-based server environments.',
            'story_2' => 'My approach prioritizes system clarity and sustainability — building solutions that are easy to maintain, scale, and evolve as requirements grow.',
            'story_3' => 'I enjoy translating complex technical challenges into structured, production-ready implementations rather than quick fixes or short-term hacks.',

            'focus_title' => 'Professional Focus',
            'focus_1' => 'Backend system architecture & API design',
            'focus_2' => 'Cloud deployment & server configuration',
            'focus_3' => 'Secure, maintainable web applications',
            'focus_4' => 'Performance optimization & scalability',

            'meta_tags' => [
    'Laravel',
    'MySQL',
    'AWS',
    'Nginx',
    'Linux',
],


        ]);

    }
}
