<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit Project
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-2xl p-8">

                <form method="POST"
                      action="{{ route('admin.projects.update', $project) }}"
                      enctype="multipart/form-data"
                      class="space-y-8">
                    @csrf
                    @method('PUT')

                    {{-- TITLE --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Title
                        </label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title', $project->title) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Project title"
                            required
                        >
                    </div>

                    {{-- CATEGORY --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Category
                        </label>
                        <input
                            type="text"
                            name="category"
                            value="{{ old('category', $project->category) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Cloud / Web / Mobile"
                            required
                        >
                    </div>

                    {{-- BADGE COLOR --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Badge Color
                        </label>
                        <input
                            type="text"
                            name="badge_color"
                            value="{{ old('badge_color', $project->badge_color) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="indigo, emerald, amber"
                            required
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
                            placeholder="Describe the project..."
                            required>{{ old('description', $project->description) }}</textarea>
                    </div>

                    <div>
    <label class="block text-sm font-semibold mb-1">
        Project URL (optional)
    </label>
    <input type="url"
           name="project_url"
           value="{{ old('project_url', $project->project_url) }}"
           class="w-full rounded-lg border-gray-300">
</div>


                    {{-- TAGS --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Tags
                            <span class="text-xs font-normal text-gray-500">
                                (pisahkan dengan koma)
                            </span>
                        </label>
                        <input
                            type="text"
                            name="tags"
                            value="{{ old('tags', is_array($project->tags) ? implode(', ', $project->tags) : '') }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="laravel, aws, docker"
                        >
                    </div>

                    {{-- SORT ORDER --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Sort Order
                        </label>
                        <input
                            type="number"
                            name="sort_order"
                            value="{{ old('sort_order', $project->sort_order) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                        >
                    </div>

                    {{-- THUMBNAIL --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-2">
                            Thumbnail
                        </label>

                        <input
                            type="file"
                            name="thumbnail"
                            class="block w-full text-sm text-gray-700
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-lg file:border-0
                                   file:text-sm file:font-semibold
                                   file:bg-indigo-50 file:text-indigo-700
                                   hover:file:bg-indigo-100"
                        >

                        @if ($project->thumbnail)
                            <img
                                src="{{ asset('storage/' . $project->thumbnail) }}"
                                class="mt-4 w-40 rounded-xl shadow"
                            >
                        @endif
                    </div>

                    {{-- ACTION --}}
                    <div class="flex justify-end gap-3 pt-6 border-t">
                        <a href="{{ route('admin.projects.index') }}"
                           class="px-5 py-2.5 rounded-lg
                                  bg-gray-100 text-gray-700
                                  hover:bg-gray-200 transition">
                            Cancel
                        </a>

                        <button
                            class="px-6 py-2.5 rounded-lg
                                   bg-indigo-600 text-white font-medium
                                   hover:bg-indigo-700 transition">
                            Update Project
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
