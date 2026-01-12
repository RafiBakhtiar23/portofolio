<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use App\Models\AboutSection;
use App\Models\Project;
use App\Models\SkillCategory;
use App\Models\Experience;
use App\Models\Certificate;

class HomeController extends Controller
{
    public function index()
    {
        $home  = HomeSection::first();
        $about = AboutSection::first();

        // PROJECTS
        $projects = Project::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // SKILLS
        $skillCategories = SkillCategory::with(['skills' => function ($q) {
                $q->orderBy('sort_order');
            }])
            ->orderBy('sort_order')
            ->get();

        // EXPERIENCE
        $experienceItems = Experience::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // CERTIFICATES (CURATED FOR HOMEPAGE)
        $certificates = Certificate::query()
            ->orderByDesc('year')
            ->orderByDesc('created_at')
            ->limit(50)
            ->get();

        return view('public.home', compact(
            'home',
            'about',
            'projects',
            'skillCategories',
            'experienceItems',
            'certificates'
        ));
    }
}
