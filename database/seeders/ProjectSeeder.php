<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Cloud Portfolio Deployment',
            'category' => 'Cloud',
            'badge_color' => 'indigo',
            'description' => 'Production-ready Laravel deployment with secure configuration, SSL, and performance tuning on AWS EC2.',
            'project_url' => 'https://your-domain.com',

            // 🔥 MULTI IMAGE (MAX 5)
            // path ini nanti ngarah ke storage/app/public/projects/*
            'images' => [
                'projects/cloud-1.jpg',
                'projects/cloud-2.jpg',
            ],

            'tags' => [
                'AWS',
                'Nginx',
                'Laravel',
            ],

            'is_active' => true,
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Inventory Management System',
            'category' => 'Web Application',
            'badge_color' => 'emerald',
            'description' => 'Role-based inventory system with reporting, audit-ready data flow, and clean UI.',
            'project_url' => 'https://inventory.your-domain.com',

            'images' => [
                'projects/inventory-1.jpg',
            ],

            'tags' => [
                'Laravel',
                'MySQL',
                'Tailwind',
            ],

            'is_active' => true,
            'sort_order' => 2,
        ]);

        Project::create([
            'title' => '2D Platformer Game',
            'category' => 'Game Development',
            'badge_color' => 'pink',
            'description' => 'Polished 2D platformer game with smooth controls, refined animations, and progression mechanics.',
            'project_url' => null, // belum ada link → AMAN

            'images' => [
                'projects/game-1.jpg',
                'projects/game-2.jpg',
                'projects/game-3.jpg',
            ],

            'tags' => [
                'Phaser',
                'JavaScript',
            ],

            'is_active' => true,
            'sort_order' => 3,
        ]);
    }
}
