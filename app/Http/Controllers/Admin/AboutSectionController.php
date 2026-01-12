<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    /**
     * Show edit form
     */
    public function edit()
    {
        $about = AboutSection::first();

        // Optional safety: kalau belum ada record
        if (!$about) {
            $about = AboutSection::create([
                'title'        => '',
                'intro'        => '',
                'story_1'      => '',
                'story_2'      => '',
                'story_3'      => '',
                'focus_title'  => '',
                'focus_items'  => [],
                'meta_tags'    => [],
            ]);
        }

        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update about section
     */
    public function update(Request $request)
    {
        /* =====================================================
           VALIDATION
        ===================================================== */
        $request->validate([
            'title'        => 'required|string|max:255',
            'intro'        => 'required|string',

            'story_1'      => 'required|string',
            'story_2'      => 'required|string',
            'story_3'      => 'required|string',

            'focus_title'  => 'required|string|max:255',
            'focus_items'  => 'required|array|min:1',
            'focus_items.*'=> 'required|string|max:255',

            // meta tags optional
            'meta_tags'    => 'nullable|string',
        ]);

        $about = AboutSection::first();

        /* =====================================================
           BASE DATA (EXCEPT meta_tags)
        ===================================================== */
        $data = $request->except(['meta_tags']);

        /* =====================================================
           🔥 FIX WAJIB: META TAGS (INI YANG KAMU TANYA)
        ===================================================== */
        $data['meta_tags'] = $request->meta_tags
            ? array_map('trim', explode(',', $request->meta_tags))
            : [];

        /* =====================================================
           UPDATE
        ===================================================== */
        $about->update($data);

        return back()->with('success', 'About section updated successfully.');
    }
}
