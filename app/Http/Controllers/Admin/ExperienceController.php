<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('sort_order')->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'company'    => 'required|string|max:255',
            'location'   => 'nullable|string|max:255',
            'period'     => 'required|string|max:100',
            'description'=> 'nullable|string',
            'highlights' => 'nullable|array',
            'tech_stack' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        Experience::create([
            'title'       => $request->title,
            'company'     => $request->company,
            'location'    => $request->location,
            'period'      => $request->period,
            'description' => $request->description,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => true,
            'highlights'  => $request->highlights ?? [],
            'tech_stack'  => $request->tech_stack
                ? array_map('trim', explode(',', $request->tech_stack))
                : [],
        ]);

        return redirect()->route('admin.experience.index');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $experience->update([
            'title'       => $request->title,
            'company'     => $request->company,
            'location'    => $request->location,
            'period'      => $request->period,
            'description' => $request->description,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => $request->boolean('is_active'),
            'highlights'  => $request->highlights ?? [],
            'tech_stack'  => $request->tech_stack
                ? array_map('trim', explode(',', $request->tech_stack))
                : [],
        ]);

        return redirect()->route('admin.experience.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back();
    }
}
