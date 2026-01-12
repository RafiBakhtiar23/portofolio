<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit About Section
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- SUCCESS MESSAGE --}}
            @if (session('success'))
                <div class="p-4 rounded-lg bg-green-50 border border-green-200 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-sm rounded-2xl p-8">

                <form method="POST"
                      action="{{ route('admin.about.update') }}"
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
                            value="{{ old('title', $about->title) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="About section title"
                        >
                    </div>

                    {{-- INTRO --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Intro
                        </label>
                        <textarea
                            name="intro"
                            rows="3"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Short introduction">{{ old('intro', $about->intro) }}</textarea>
                    </div>

                    {{-- STORIES --}}
                    <div class="space-y-4">
                        <h3 class="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                            Stories
                        </h3>

                        <textarea name="story_1" rows="3"
                                  class="w-full rounded-lg border-gray-300
                                         text-gray-900 focus:border-indigo-500 focus:ring-indigo-500"
                                  placeholder="Story part 1">{{ old('story_1', $about->story_1) }}</textarea>

                        <textarea name="story_2" rows="3"
                                  class="w-full rounded-lg border-gray-300
                                         text-gray-900 focus:border-indigo-500 focus:ring-indigo-500"
                                  placeholder="Story part 2">{{ old('story_2', $about->story_2) }}</textarea>

                        <textarea name="story_3" rows="3"
                                  class="w-full rounded-lg border-gray-300
                                         text-gray-900 focus:border-indigo-500 focus:ring-indigo-500"
                                  placeholder="Story part 3">{{ old('story_3', $about->story_3) }}</textarea>
                    </div>

                    {{-- FOCUS TITLE --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Focus Section Title
                        </label>
                        <input
                            type="text"
                            name="focus_title"
                            value="{{ old('focus_title', $about->focus_title) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="What I Focus On"
                        >
                    </div>

                    {{-- FOCUS ITEMS (HYBRID: BARU + LAMA) --}}
                    @php
                        $focusItems = old(
                            'focus_items',
                            $about->focus_items && count($about->focus_items)
                                ? $about->focus_items
                                : array_filter([
                                    $about->focus_1 ?? null,
                                    $about->focus_2 ?? null,
                                    $about->focus_3 ?? null,
                                    $about->focus_4 ?? null,
                                ])
                        );
                    @endphp

                    <div class="space-y-4">
                        <label class="block text-sm font-semibold text-gray-800">
                            Focus Items
                        </label>

                        <div id="focus-wrapper" class="space-y-3">
                            @foreach ($focusItems as $focus)
                                <div class="flex gap-2">
                                    <input
                                        type="text"
                                        name="focus_items[]"
                                        value="{{ $focus }}"
                                        class="w-full rounded-lg border-gray-300
                                               text-gray-900
                                               focus:border-indigo-500 focus:ring-indigo-500"
                                    >

                                    <button type="button"
                                            onclick="this.parentElement.remove()"
                                            class="px-3 rounded-lg bg-red-100 text-red-600">
                                        ✕
                                    </button>
                                </div>
                            @endforeach
                        </div>

                        <button type="button"
                                onclick="addFocus()"
                                class="inline-flex items-center gap-2
                                       px-4 py-2 rounded-lg
                                       bg-gray-100 text-gray-700
                                       hover:bg-gray-200">
                            + Add Focus
                        </button>
                    </div>

                    {{-- META TAGS --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Meta Tags
                            <span class="text-xs font-normal text-gray-500">
                                (pisahkan dengan koma)
                            </span>
                        </label>

                        <input
                            type="text"
                            name="meta_tags"
                            value="{{ old('meta_tags', is_array($about->meta_tags) ? implode(', ', $about->meta_tags) : '') }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Laravel, MySQL, AWS, Nginx, Linux"
                        >
                    </div>

                    {{-- ACTION --}}
                    <div class="pt-6 border-t flex justify-end">
                        <button
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

    {{-- JS --}}
    <script>
        function addFocus() {
            const wrapper = document.getElementById('focus-wrapper');

            const div = document.createElement('div');
            div.className = 'flex gap-2';

            div.innerHTML = `
                <input type="text"
                       name="focus_items[]"
                       class="w-full rounded-lg border-gray-300
                              text-gray-900
                              focus:border-indigo-500 focus:ring-indigo-500">
                <button type="button"
                        onclick="this.parentElement.remove()"
                        class="px-3 rounded-lg bg-red-100 text-red-600">
                    ✕
                </button>
            `;

            wrapper.appendChild(div);
        }
    </script>

</x-app-layout>
