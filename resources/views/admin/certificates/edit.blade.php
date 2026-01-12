<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Edit Certificate
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow-sm p-8 space-y-12">

                <!-- FORM -->
                <form
                    method="POST"
                    action="{{ route('admin.certificates.update', $certificate) }}"
                    enctype="multipart/form-data"
                    class="space-y-10">

                    @csrf
                    @method('PUT')

                    <!-- ================= BASIC INFO ================= -->
                    <div class="space-y-6">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Certificate Information
                        </h3>

                        <!-- TITLE -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Certificate Title
                            </label>
                            <input
                                type="text"
                                name="title"
                                value="{{ old('title', $certificate->title) }}"
                                required
                                class="w-full rounded-lg border-gray-300
                                       focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- ISSUER -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Issuing Organization
                            </label>
                            <input
                                type="text"
                                name="issuer"
                                value="{{ old('issuer', $certificate->issuer) }}"
                                required
                                class="w-full rounded-lg border-gray-300
                                       focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- YEAR -->
                        <div class="max-w-xs">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Year
                            </label>
                            <input
                                type="number"
                                name="year"
                                value="{{ old('year', $certificate->year) }}"
                                class="w-full rounded-lg border-gray-300
                                       focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                    </div>

                    <!-- ================= DESCRIPTION ================= -->
                    <div class="space-y-3">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Description
                        </h3>
                        <textarea
                            name="description"
                            rows="5"
                            class="w-full rounded-lg border-gray-300
                                   focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $certificate->description) }}</textarea>
                    </div>

                    <!-- ================= CREDENTIAL URL ================= -->
                    <div class="space-y-3">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Credential Link
                        </h3>
                        <input
                            type="url"
                            name="credential_url"
                            value="{{ old('credential_url', $certificate->credential_url) }}"
                            class="w-full rounded-lg border-gray-300
                                   focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- ================= IMAGE ================= -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Certificate Image
                        </h3>

                        @if ($certificate->image)
                            <div>
                                <p class="text-sm text-gray-500 mb-2">Current Image:</p>
                                <img
                                    src="{{ asset('storage/' . $certificate->image) }}"
                                    alt="Certificate Image"
                                    class="w-56 rounded-xl border">
                            </div>
                        @endif

                        <input
                            type="file"
                            name="image"
                            accept="image/*"
                            class="block w-full text-sm text-gray-600
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-lg file:border-0
                                   file:bg-gray-100 file:text-gray-700
                                   hover:file:bg-gray-200">
                    </div>

                    <!-- ================= ACTIONS ================= -->
                    <div class="pt-6 flex items-center justify-between">
                        <a
                            href="{{ route('admin.certificates.index') }}"
                            class="text-sm text-gray-500 hover:text-gray-700">
                            ← Back to Certificates
                        </a>

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2
                                   px-6 py-2.5 rounded-lg
                                   bg-indigo-600 text-white
                                   text-sm font-medium
                                   hover:bg-indigo-700 transition">
                            Save Changes
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
