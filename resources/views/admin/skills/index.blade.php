<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Skills
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- HEADER ACTION --}}
<div class="flex justify-between items-center">
    <h3 class="text-lg font-semibold text-gray-800">
        Skills List
    </h3>

    <div class="flex items-center gap-3">
        <a href="{{ route('admin.skill-categories.index') }}"
           class="inline-flex items-center gap-2
                  px-4 py-2 rounded-lg
                  bg-indigo-300 text-gray-700 text-sm font-medium
                  hover:bg-gray-200 transition">
            + Skill Categories
        </a>

        <a href="{{ route('admin.skills.create') }}"
           class="inline-flex items-center gap-2
                  px-4 py-2 rounded-lg
                  bg-indigo-600 text-white text-sm font-medium
                  hover:bg-indigo-700 transition">
            + Add Skill
        </a>
    </div>
</div>

            {{-- TABLE CARD --}}
            <div class="bg-white shadow-sm rounded-2xl overflow-hidden">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Category
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Level
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Value
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
                            @forelse ($skills as $skill)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $skill->category->name }}
                                    </td>

                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $skill->name }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $skill->level }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-3 py-1
                                                     rounded-full text-xs font-medium
                                                     bg-indigo-50 text-indigo-700">
                                            {{ $skill->value }}%
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $skill->sort_order }}
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="inline-flex items-center gap-3">
                                            <a href="{{ route('admin.skills.edit', $skill) }}"
                                               class="text-sm font-medium text-indigo-600 hover:underline">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="{{ route('admin.skills.destroy', $skill) }}"
                                                  onsubmit="return confirm('Delete this skill?')">
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
                                    <td colspan="6"
                                        class="px-6 py-10 text-center text-gray-500">
                                        No skills found.
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
