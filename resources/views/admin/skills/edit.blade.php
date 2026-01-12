<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit Skill
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-2xl p-8">

                <form method="POST"
                      action="{{ route('admin.skills.update', $skill) }}"
                      class="space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- CATEGORY --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Category
                        </label>
                        <select
                            name="skill_category_id"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900
                                   focus:border-indigo-500 focus:ring-indigo-500">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    @selected($skill->skill_category_id == $cat->id)>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- NAME --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $skill->name) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Laravel, Docker, AWS"
                        >
                    </div>

                    {{-- LEVEL --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Level
                        </label>
                        <input
                            type="text"
                            name="level"
                            value="{{ old('level', $skill->level) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Beginner / Intermediate / Advanced"
                        >
                    </div>

                    {{-- VALUE --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Value (%)
                        </label>
                        <input
                            type="number"
                            name="value"
                            min="0"
                            max="100"
                            value="{{ old('value', $skill->value) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900
                                   focus:border-indigo-500 focus:ring-indigo-500"
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
                            value="{{ old('sort_order', $skill->sort_order) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900
                                   focus:border-indigo-500 focus:ring-indigo-500"
                        >
                    </div>

                    {{-- ACTION --}}
                    <div class="pt-6 border-t flex justify-end gap-3">
                        <a href="{{ route('admin.skills.index') }}"
                           class="px-5 py-2.5 rounded-lg
                                  bg-gray-100 text-gray-700
                                  hover:bg-gray-200 transition">
                            Cancel
                        </a>

                        <button
                            class="px-6 py-2.5 rounded-lg
                                   bg-indigo-600 text-white font-medium
                                   hover:bg-indigo-700 transition">
                            Update Skill
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
