<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit Experience
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow-sm p-8 space-y-10">

                <form method="POST"
                      action="{{ route('admin.experience.update', $experience) }}"
                      class="space-y-8">
                    @csrf
                    @method('PUT')

                    {{-- ================= POSITION INFO ================= --}}
                    <div class="space-y-6">
                        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Position Information
                        </h3>

                        {{-- TITLE --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Title
                            </label>
                            <input
                                name="title"
                                value="{{ old('title', $experience->title) }}"
                                class="w-full rounded-xl border-gray-300
                                       text-gray-900 placeholder:text-gray-400
                                       bg-white focus:bg-white
                                       focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Web & Cloud Developer">
                        </div>

                        {{-- COMPANY --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Company / Project
                            </label>
                            <input
                                name="company"
                                value="{{ old('company', $experience->company) }}"
                                class="w-full rounded-xl border-gray-300
                                       text-gray-900 placeholder:text-gray-400
                                       bg-white focus:bg-white
                                       focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Self-Directed Project · Remote">
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            {{-- LOCATION --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Work Type / Location
                                </label>
                                <input
                                    name="location"
                                    value="{{ old('location', $experience->location) }}"
                                    class="w-full rounded-xl border-gray-300
                                           text-gray-900 placeholder:text-gray-400
                                           bg-white focus:bg-white
                                           focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Remote · Cimahi, Jawa Barat">
                            </div>

                            {{-- PERIOD --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Period
                                </label>
                                <input
                                    name="period"
                                    value="{{ old('period', $experience->period) }}"
                                    class="w-full rounded-xl border-gray-300
                                           text-gray-900 placeholder:text-gray-400
                                           bg-white focus:bg-white
                                           focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="August 2023 — Present">
                            </div>
                        </div>
                    </div>

                    {{-- ================= DESCRIPTION ================= --}}
                    <div class="space-y-4">
                        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Description
                        </h3>

                        <textarea
                            name="description"
                            rows="4"
                            class="w-full rounded-xl border-gray-300
                                   text-gray-900 placeholder:text-gray-400
                                   bg-white focus:bg-white
                                   focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Brief explanation of your role and impact...">{{ old('description', $experience->description) }}</textarea>
                    </div>

                    {{-- ================= HIGHLIGHTS ================= --}}
                    <div class="space-y-4">
                        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Highlights
                        </h3>

                        <p class="text-sm text-gray-500">
                            Each highlight appears as a bullet point on the public site.
                        </p>

                        <div id="highlights-wrapper" class="space-y-3">
                            @forelse ($experience->highlights ?? [] as $h)
                                <input
                                    name="highlights[]"
                                    value="{{ $h }}"
                                    class="w-full rounded-xl border-gray-300
                                           text-gray-900 placeholder:text-gray-400
                                           bg-white focus:bg-white
                                           focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Highlight detail">
                            @empty
                                <input
                                    name="highlights[]"
                                    class="w-full rounded-xl border-gray-300
                                           text-gray-900 placeholder:text-gray-400
                                           bg-white focus:bg-white
                                           focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Add first highlight">
                            @endforelse
                        </div>

                        <button
                            type="button"
                            onclick="addHighlight()"
                            class="inline-flex items-center gap-2
                                   text-sm font-medium text-indigo-600 hover:underline">
                            + Add Highlight
                        </button>
                    </div>

                    {{-- ================= TECH STACK ================= --}}
                    <div class="space-y-4">
                        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Tech Stack
                        </h3>

                        <input
                            name="tech_stack"
                            value="{{ old('tech_stack', implode(', ', $experience->tech_stack ?? [])) }}"
                            class="w-full rounded-xl border-gray-300
                                   text-gray-900 placeholder:text-gray-400
                                   bg-white focus:bg-white
                                   focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Laravel, PHP, MySQL, AWS EC2">

                        <p class="text-xs text-gray-500">
                            Separate technologies with commas.
                        </p>
                    </div>

                    {{-- ================= SORT & STATUS ================= --}}
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Sort Order
                            </label>
                            <input
                                type="number"
                                name="sort_order"
                                value="{{ old('sort_order', $experience->sort_order) }}"
                                class="w-full rounded-xl border-gray-300
                                       text-gray-900 bg-white
                                       focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <div class="flex items-end">
                            <label class="inline-flex items-center gap-2 text-sm text-gray-700">
                                <input type="checkbox"
                                       name="is_active"
                                       value="1"
                                       {{ $experience->is_active ? 'checked' : '' }}
                                       class="rounded border-gray-300
                                              text-indigo-600 focus:ring-indigo-500">
                                Active (visible on public site)
                            </label>
                        </div>
                    </div>

                    {{-- ================= ACTION ================= --}}
                    <div class="pt-6 border-t flex justify-end gap-4">
                        <a href="{{ route('admin.experience.index') }}"
                           class="px-5 py-2 rounded-xl text-sm font-medium
                                  bg-gray-100 text-gray-700 hover:bg-gray-200">
                            Cancel
                        </a>

                        <button
                            class="px-6 py-2.5 rounded-xl
                                   bg-indigo-600 text-white text-sm font-medium
                                   hover:bg-indigo-700 transition">
                            Update Experience
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- ================= SCRIPT ================= --}}
    <script>
        function addHighlight() {
            const wrap = document.getElementById('highlights-wrapper');
            const input = document.createElement('input');
            input.name = 'highlights[]';
            input.placeholder = 'Another highlight...';
            input.className =
                'w-full rounded-xl border-gray-300 text-gray-900 placeholder:text-gray-400 bg-white focus:bg-white focus:ring-indigo-500 focus:border-indigo-500';
            wrap.appendChild(input);
        }
    </script>
</x-app-layout>
