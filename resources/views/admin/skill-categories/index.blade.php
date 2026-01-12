<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Skill Categories
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- HEADER ACTION --}}
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800">
                    Categories List
                </h3>

                <a href="{{ route('admin.skill-categories.create') }}"
                   class="inline-flex items-center gap-2
                          px-4 py-2 rounded-lg
                          bg-indigo-600 text-white text-sm font-medium
                          hover:bg-indigo-700 transition">
                    + Add Category
                </a>
            </div>

            {{-- TABLE CARD --}}
            <div class="bg-white shadow-sm rounded-2xl overflow-hidden">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Order
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse ($categories as $cat)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $cat->name }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $cat->sort_order }}
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="inline-flex items-center gap-3">
                                            <a href="{{ route('admin.skill-categories.edit', $cat) }}"
                                               class="text-sm font-medium text-indigo-600 hover:underline">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="{{ route('admin.skill-categories.destroy', $cat) }}"
                                                  onsubmit="return confirm('Delete this category?')">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="text-sm font-medium text-red-600 hover:underline">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3"
                                        class="px-6 py-10 text-center text-gray-500">
                                        No categories found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
