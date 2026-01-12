<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit Skill Category
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-2xl p-8">

                <form method="POST"
                      action="{{ route('admin.skill-categories.update', $category) }}"
                      class="space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- NAME --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-1">
                            Category Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $category->name) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900 placeholder-gray-400
                                   focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Frontend, Backend, DevOps"
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
                            value="{{ old('sort_order', $category->sort_order) }}"
                            class="w-full rounded-lg border-gray-300
                                   text-gray-900
                                   focus:border-indigo-500 focus:ring-indigo-500"
                        >
                    </div>

                    {{-- ACTION --}}
                    <div class="pt-6 border-t flex justify-end gap-3">
                        <a href="{{ route('admin.skill-categories.index') }}"
                           class="px-5 py-2.5 rounded-lg
                                  bg-gray-100 text-gray-700
                                  hover:bg-gray-200 transition">
                            Cancel
                        </a>

                        <button
                            class="px-6 py-2.5 rounded-lg
                                   bg-indigo-600 text-white font-medium
                                   hover:bg-indigo-700 transition">
                            Update Category
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
