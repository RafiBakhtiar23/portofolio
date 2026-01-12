<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillCategoryController extends Controller
{
    public function index()
    {
        $categories = SkillCategory::orderBy('sort_order')->get();
        return view('admin.skill-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.skill-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'sort_order' => 'nullable|integer'
        ]);

        SkillCategory::create($request->all());

        return redirect()
            ->route('admin.skill-categories.index')
            ->with('success', 'Category berhasil ditambahkan');
    }

    public function edit(SkillCategory $skill_category)
    {
        return view('admin.skill-categories.edit', [
            'category' => $skill_category
        ]);
    }

    public function update(Request $request, SkillCategory $skill_category)
    {
        $request->validate([
            'name' => 'required|string',
            'sort_order' => 'nullable|integer'
        ]);

        $skill_category->update($request->all());

        return redirect()
            ->route('admin.skill-categories.index')
            ->with('success', 'Category berhasil diupdate');
    }

    public function destroy(SkillCategory $skill_category)
    {
        $skill_category->delete();

        return back()->with('success', 'Category dihapus');
    }
}
