<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * List projects
     */
    public function index()
    {
        $projects = Project::orderBy('sort_order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store new project
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'category'     => 'required|string|max:100',
            'badge_color'  => 'required|string|max:50',
            'description'  => 'required|string',
            'project_url'  => 'nullable|url',

            // thumbnail wajib
            'thumbnail'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',

            // gallery optional (max 5)
            'images'       => 'nullable|array|max:5',
            'images.*'     => 'image|mimes:jpg,jpeg,png,webp|max:2048',

            'tags'         => 'nullable|string',
            'sort_order'   => 'nullable|integer',
        ]);

        /* =========================
           Thumbnail
        ========================= */
        $thumbnailPath = $request->file('thumbnail')
            ->store('projects', 'public');

        /* =========================
           Tags
        ========================= */
        $tags = $request->tags
            ? array_map('trim', explode(',', $request->tags))
            : [];

        /* =========================
           Gallery Images
        ========================= */
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                if (count($images) >= 5) break;
                $images[] = $file->store('projects', 'public');
            }
        }

        /* =========================
           Save Project
        ========================= */
        Project::create([
            'title'       => $request->title,
            'category'    => $request->category,
            'badge_color' => $request->badge_color,
            'description' => $request->description,
            'project_url' => $request->project_url,
            'thumbnail'   => $thumbnailPath,
            'images'      => $images,
            'tags'        => $tags,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => true,
        ]);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project added successfully.');
    }

    /**
     * Show edit form
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update project
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'category'     => 'required|string|max:100',
            'badge_color'  => 'required|string|max:50',
            'description'  => 'required|string',
            'project_url'  => 'nullable|url',

            // thumbnail optional saat edit
            'thumbnail'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // gallery optional
            'images'       => 'nullable|array|max:5',
            'images.*'     => 'image|mimes:jpg,jpeg,png,webp|max:2048',

            'tags'         => 'nullable|string',
            'sort_order'   => 'nullable|integer',
        ]);

        /* =========================
           Base Data
        ========================= */
        $data = [
            'title'       => $request->title,
            'category'    => $request->category,
            'badge_color' => $request->badge_color,
            'description' => $request->description,
            'project_url' => $request->project_url,
            'sort_order'  => $request->sort_order ?? 0,
            'tags'        => $request->tags
                ? array_map('trim', explode(',', $request->tags))
                : [],
        ];

        /* =========================
           Update Thumbnail
        ========================= */
        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail && Storage::disk('public')->exists($project->thumbnail)) {
                Storage::disk('public')->delete($project->thumbnail);
            }

            $data['thumbnail'] = $request->file('thumbnail')
                ->store('projects', 'public');
        }

        /* =========================
           Append Gallery Images
        ========================= */
        $images = $project->images ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                if (count($images) >= 5) break;
                $images[] = $file->store('projects', 'public');
            }
        }

        $data['images'] = $images;

        $project->update($data);

        return back()->with('success', 'Project updated successfully.');
    }

    /**
     * Delete project
     */
    public function destroy(Project $project)
    {
        // delete thumbnail
        if ($project->thumbnail && Storage::disk('public')->exists($project->thumbnail)) {
            Storage::disk('public')->delete($project->thumbnail);
        }

        // delete gallery images
        if (is_array($project->images)) {
            foreach ($project->images as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        $project->delete();

        return back()->with('success', 'Project deleted successfully.');
    }
}
