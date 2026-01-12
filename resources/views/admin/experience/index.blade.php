<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Experience
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- HEADER --}}
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800">
                    Experience List
                </h3>

                <a href="{{ route('admin.experience.create') }}"
                   class="inline-flex items-center gap-2
                          px-4 py-2 rounded-lg
                          bg-indigo-600 text-white text-sm font-medium
                          hover:bg-indigo-700 transition">
                    + Add Experience
                </a>
            </div>

            {{-- TABLE --}}
            <div class="bg-white shadow-sm rounded-2xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Position
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Company / Project
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Location
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Period
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
                            @forelse ($experiences as $exp)
                                <tr class="hover:bg-gray-50 transition">

                                    {{-- TITLE --}}
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $exp->title }}
                                    </td>

                                    {{-- COMPANY --}}
                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $exp->company }}
                                    </td>

                                    {{-- LOCATION --}}
                                    <td class="px-6 py-4 text-gray-600 text-sm">
                                        {{ $exp->location ?? '—' }}
                                    </td>

                                    {{-- PERIOD --}}
                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $exp->period }}
                                    </td>

                                    {{-- STATUS --}}
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-3 py-1 rounded-full
                                            text-xs font-medium
                                            {{ $exp->is_active
                                                ? 'bg-green-100 text-green-700'
                                                : 'bg-gray-200 text-gray-600' }}">
                                            {{ $exp->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>

                                    {{-- ACTIONS --}}
                                    <td class="px-6 py-4 text-right">
                                        <div class="inline-flex items-center gap-3">
                                            <a href="{{ route('admin.experience.edit', $exp) }}"
                                               class="text-sm font-medium text-indigo-600 hover:underline">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="{{ route('admin.experience.destroy', $exp) }}"
                                                  onsubmit="return confirm('Delete this experience?')">
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
                                        No experience data.
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
