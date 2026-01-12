<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-900 leading-tight">
                Certificates
            </h2>

            <a
                href="{{ route('admin.certificates.create') }}"
                class="inline-flex items-center gap-2
                       px-4 py-2 rounded-lg
                       bg-indigo-600 text-white text-sm font-medium
                       hover:bg-indigo-700 transition">
                + Add Certificate
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

                @if ($certificates->isEmpty())
                    <div class="p-14 text-center text-gray-500">
                        No certificates added yet.
                    </div>
                @else

                <div class="divide-y">

                    @foreach ($certificates as $cert)

                    <div
                        class="p-6 flex flex-col sm:flex-row
                               sm:items-start sm:justify-between
                               gap-6">

                        <!-- ================= LEFT ================= -->
                        <div class="flex gap-6 max-w-4xl">

                            <!-- IMAGE (CERTIFICATE-FRIENDLY) -->
                            @if ($cert->image)
                                <img
                                    src="{{ asset('storage/' . $cert->image) }}"
                                    alt="{{ $cert->title }}"
                                    class="w-28 h-20
                                           object-contain
                                           bg-gray-50
                                           border
                                           rounded-lg
                                           p-1
                                           shrink-0">
                            @else
                                <div
                                    class="w-28 h-20
                                           rounded-lg
                                           border
                                           bg-gray-50
                                           flex items-center justify-center
                                           text-xs text-gray-400
                                           shrink-0">
                                    No Image
                                </div>
                            @endif

                            <!-- INFO -->
                            <div class="space-y-2">

                                <h3 class="text-base font-semibold text-gray-900 leading-snug">
                                    {{ $cert->title }}
                                </h3>

                                <p class="text-sm text-gray-500">
                                    {{ $cert->issuer }}
                                    @if ($cert->year)
                                        · {{ $cert->year }}
                                    @endif
                                </p>

                                @if ($cert->description)
                                <p class="text-sm text-gray-600 leading-relaxed line-clamp-2">
                                    {{ $cert->description }}
                                </p>
                                @endif

                                @if ($cert->credential_url)
                                <a
                                    href="{{ $cert->credential_url }}"
                                    target="_blank"
                                    class="inline-block text-xs text-indigo-600 hover:underline">
                                    View credential →
                                </a>
                                @endif

                            </div>

                        </div>

                        <!-- ================= RIGHT ================= -->
                        <div class="flex items-center gap-6 shrink-0 pt-1">

                            <a
                                href="{{ route('admin.certificates.edit', $cert) }}"
                                class="text-sm font-medium text-indigo-600 hover:underline">
                                Edit
                            </a>

                            <form
                                method="POST"
                                action="{{ route('admin.certificates.destroy', $cert) }}"
                                onsubmit="return confirm('Delete this certificate?')">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-sm font-medium text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>

                    @endforeach

                </div>

                @endif

            </div>

        </div>
    </div>
</x-app-layout>
