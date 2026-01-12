<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit Home Section
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- SUCCESS MESSAGE --}}
            @if (session('success'))
                <div class="p-4 rounded-lg bg-green-50 border border-green-200 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-sm rounded-2xl p-8">

                <form method="POST"
                      action="{{ route('admin.home.update') }}"
                      enctype="multipart/form-data"
                      class="space-y-8">
                    @csrf
                    @method('PUT')

                    {{-- PROFILE IMAGE --}}
{{-- PROFILE IMAGE --}}
<div>
    <label class="block text-sm font-semibold text-gray-800 mb-2">
        Profile Image
    </label>

    @if ($home->profile_image)
        <div class="mb-4">
            <img
                src="{{ asset('storage/' . $home->profile_image) }}"
                class="w-40 h-40 object-cover rounded-xl shadow mb-3"
            >

            {{-- DELETE IMAGE --}}
            <label class="inline-flex items-center gap-2 text-sm text-red-600">
                <input
                    type="checkbox"
                    name="remove_profile_image"
                    value="1"
                    class="rounded border-gray-300 text-red-600 focus:ring-red-500"
                >
                Remove profile image
            </label>
        </div>
    @endif

    <input
        type="file"
        name="profile_image"
        accept="image/*"
        class="block w-full text-sm text-gray-700
               file:mr-4 file:py-2 file:px-4
               file:rounded-lg file:border-0
               file:text-sm file:font-semibold
               file:bg-indigo-50 file:text-indigo-700
               hover:file:bg-indigo-100"
    >
</div>


                    {{-- ROLE TEXT --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Role Text
                        </label>
                        <input
                            type="text"
                            name="role_text"
                            value="{{ old('role_text', $home->role_text) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Cloud Engineer / Backend Developer"
                        >
                    </div>

                    {{-- HEADLINE LINE 1 --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Headline Line 1
                        </label>
                        <input
                            type="text"
                            name="headline_line_1"
                            value="{{ old('headline_line_1', $home->headline_line_1) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Hi, I’m Rafi Bakhtiar"
                        >
                    </div>

                    {{-- HEADLINE LINE 2 --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Headline Line 2
                        </label>
                        <input
                            type="text"
                            name="headline_line_2"
                            value="{{ old('headline_line_2', $home->headline_line_2) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Building scalable cloud solutions"
                        >
                    </div>

                    {{-- DESCRIPTION --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Description
                        </label>
                        <textarea
                            name="description"
                            rows="4"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Short introduction for the hero section"
                        >{{ old('description', $home->description) }}</textarea>
                    </div>

                    {{-- ACTION --}}
                    <div class="pt-6 border-t flex justify-end">
                        <button
                            type="submit"
                            class="px-6 py-2.5 rounded-lg
                                   bg-indigo-600 text-white font-medium
                                   hover:bg-indigo-700 transition">
                            Save Changes
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
