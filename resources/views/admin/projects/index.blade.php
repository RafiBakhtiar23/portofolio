<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Projects
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- CARD --}}
            <div class="bg-white shadow-sm rounded-xl overflow-hidden">

                {{-- HEADER --}}
                <div class="flex justify-between items-center px-6 py-4 border-b">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Projects List
                        </h3>
                        <p class="text-sm text-gray-500">
                            Manage your portfolio projects
                        </p>
                    </div>

                    <a href="{{ route('admin.projects.create') }}"
                       class="inline-flex items-center gap-2 px-4 py-2
                              bg-indigo-600 text-white text-sm font-medium
                              rounded-lg hover:bg-indigo-700 transition">
                        + Add Project
                    </a>
                </div>

                {{-- TABLE --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-100">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    #
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Title
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Category
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse ($projects as $index => $project)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $index + 1 }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="font-medium text-gray-800">
                                            {{ $project->title }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $project->category }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-3 py-1 rounded-full
                                            text-xs font-medium
                                            {{ $project->is_active
                                                ? 'bg-green-100 text-green-700'
                                                : 'bg-gray-200 text-gray-600' }}">
                                            {{ $project->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="inline-flex items-center gap-3">
                                            <a href="{{ route('admin.projects.edit', $project) }}"
                                               class="text-sm font-medium text-indigo-600 hover:underline">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="{{ route('admin.projects.destroy', $project) }}"
                                                  onsubmit="return confirm('Delete this project?')">
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
                                    <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                        No projects found.
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
