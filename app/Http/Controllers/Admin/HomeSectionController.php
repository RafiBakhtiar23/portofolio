<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSectionController extends Controller
{
    public function edit()
    {
        $home = HomeSection::first();

        return view('admin.home.edit', compact('home'));
    }

public function update(Request $request)
{
    $request->validate([
        'role_text' => 'required|string|max:255',
        'headline_line_1' => 'required|string|max:255',
        'headline_line_2' => 'required|string|max:255',
        'description' => 'required|string',
        'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $home = HomeSection::first();

    // ===============================
    // REMOVE PROFILE IMAGE
    // ===============================
    if ($request->filled('remove_profile_image')) {
        if ($home->profile_image && Storage::disk('public')->exists($home->profile_image)) {
            Storage::disk('public')->delete($home->profile_image);
        }

        $home->profile_image = null;
    }

    // ===============================
    // UPLOAD NEW IMAGE (OVERRIDE)
    // ===============================
    if ($request->hasFile('profile_image')) {

        if ($home->profile_image && Storage::disk('public')->exists($home->profile_image)) {
            Storage::disk('public')->delete($home->profile_image);
        }

        $home->profile_image = $request
            ->file('profile_image')
            ->store('home', 'public');
    }

    // ===============================
    // UPDATE TEXT CONTENT
    // ===============================
    $home->update([
        'role_text'       => $request->role_text,
        'headline_line_1' => $request->headline_line_1,
        'headline_line_2' => $request->headline_line_2,
        'description'     => $request->description,
    ]);

    return back()->with('success', 'Home section updated successfully.');
}

}
