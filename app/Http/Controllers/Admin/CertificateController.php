<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::orderByDesc('year')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'          => 'required|string|max:255',
            'issuer'         => 'required|string|max:255',
            'year'           => 'nullable|digits:4',
            'description'    => 'nullable|string',
            'credential_url' => 'nullable|url',
            'image'          => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('certificates', 'public');
        }

        Certificate::create($data);

        return redirect()
            ->route('admin.certificates.index')
            ->with('success', 'Certificate added successfully.');
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $data = $request->validate([
            'title'          => 'required|string|max:255',
            'issuer'         => 'required|string|max:255',
            'year'           => 'nullable|digits:4',
            'description'    => 'nullable|string',
            'credential_url' => 'nullable|url',
            'image'          => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ]);

        if ($request->hasFile('image')) {
            if ($certificate->image) {
                Storage::disk('public')->delete($certificate->image);
            }

            $data['image'] = $request->file('image')
                ->store('certificates', 'public');
        }

        $certificate->update($data);

        return redirect()
            ->route('admin.certificates.index')
            ->with('success', 'Certificate updated successfully.');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image) {
            Storage::disk('public')->delete($certificate->image);
        }

        $certificate->delete();

        return back()->with('success', 'Certificate deleted.');
    }
}
