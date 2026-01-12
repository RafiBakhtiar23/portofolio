<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Add New Certificate
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow-sm p-8 space-y-12">

                <!-- FORM -->
                <form
                    method="POST"
                    action="{{ route('admin.certificates.store') }}"
                    enctype="multipart/form-data"
                    class="space-y-10">

                    @csrf

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
                                value="{{ old('title') }}"
                                required
                                placeholder="AWS Certified Solutions Architect – Associate"
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
                                value="{{ old('issuer') }}"
                                required
                                placeholder="Amazon Web Services (AWS)"
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
                                value="{{ old('year') }}"
                                placeholder="2024"
                                class="w-full rounded-lg border-gray-300
                                       focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                    </div>

                    <!-- ================= DESCRIPTION ================= -->
                    <div class="space-y-3">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Description
                        </h3>
                        <p class="text-sm text-gray-500">
                            Explain what this certification validates and what competencies it represents.
                        </p>
                        <textarea
                            name="description"
                            rows="5"
                            placeholder="Example: Validates knowledge of designing distributed systems on AWS, including compute, storage, networking, security, and best practices."
                            class="w-full rounded-lg border-gray-300
                                   focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
                    </div>

                    <!-- ================= CREDENTIAL URL ================= -->
                    <div class="space-y-3">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Credential Link
                        </h3>
                        <input
                            type="url"
                            name="credential_url"
                            value="{{ old('credential_url') }}"
                            placeholder="https://www.credly.com/badges/..."
                            class="w-full rounded-lg border-gray-300
                                   focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- ================= IMAGE ================= -->
                    <div class="space-y-3">
                        <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                            Certificate Image (Optional)
                        </h3>
                        <p class="text-sm text-gray-500">
                            Upload the official certificate image or badge (max 1MB).
                        </p>
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
                            Save Certificate
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
