<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Add New Project
    </h2>
</x-slot>

<div class="max-w-4xl mx-auto py-10">

    {{-- ERROR MESSAGE --}}
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.projects.store') }}"
          enctype="multipart/form-data"
          class="space-y-6">

        @csrf

        {{-- TITLE --}}
        <div>
            <label class="block mb-1 font-medium">Project Title</label>
            <input type="text"
                   name="title"
                   class="w-full rounded border-gray-300"
                   placeholder="Cloud Portfolio Deployment"
                   value="{{ old('title') }}">
        </div>

        {{-- CATEGORY --}}
        <div>
            <label class="block mb-1 font-medium">Category</label>
            <input type="text"
                   name="category"
                   class="w-full rounded border-gray-300"
                   placeholder="Cloud / Web / Game"
                   value="{{ old('category') }}">
        </div>

        {{-- BADGE COLOR --}}
        <div>
            <label class="block mb-1 font-medium">Badge Color</label>
            <input type="text"
                   name="badge_color"
                   class="w-full rounded border-gray-300"
                   placeholder="indigo, emerald, pink"
                   value="{{ old('badge_color', 'indigo') }}">
        </div>

        {{-- DESCRIPTION --}}
        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description"
                      rows="4"
                      class="w-full rounded border-gray-300"
                      placeholder="Project description">{{ old('description') }}</textarea>
        </div>

        {{-- PROJECT URL --}}
        <div>
            <label class="block mb-1 font-medium">Project URL (optional)</label>
            <input type="url"
                   name="project_url"
                   class="w-full rounded border-gray-300"
                   placeholder="https://example.com"
                   value="{{ old('project_url') }}">
        </div>

        {{-- THUMBNAIL --}}
{{-- THUMBNAIL --}}
<div>
    <label class="block mb-2 font-medium">
        Thumbnail <span class="text-red-500">*</span>
    </label>

    <div class="aspect-[4/5] w-64 rounded-xl border-2 border-dashed
                border-gray-300 flex items-center justify-center
                overflow-hidden bg-gray-50">

        <img id="thumbnail-preview"
             class="hidden w-full h-full object-cover">

        <span id="thumbnail-placeholder"
              class="text-sm text-gray-400">
            4:5 Thumbnail
        </span>
    </div>

    <input type="file"
           name="thumbnail"
           accept="image/*"
           class="mt-3"
           onchange="previewThumbnail(event)">
</div>



{{-- GALLERY --}}
<div>
    <label class="block mb-2 font-medium">
        Gallery Images <span class="text-gray-400">(max 5)</span>
    </label>

    <input type="file"
           name="images[]"
           multiple
           accept="image/*"
           class="mb-3"
           onchange="previewGallery(event)">

    <div id="gallery-preview"
         class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    </div>

    <p class="text-xs text-gray-500 mt-2">
        Preview ratio 16:9 · otomatis rapi
    </p>
</div>


        {{-- TAGS --}}
        <div>
            <label class="block mb-1 font-medium">
                Tags (comma separated)
            </label>
            <input type="text"
                   name="tags"
                   class="w-full rounded border-gray-300"
                   placeholder="Laravel, AWS, Game"
                   value="{{ old('tags') }}">
        </div>

        {{-- SORT ORDER --}}
        <div>
            <label class="block mb-1 font-medium">
                Sort Order
            </label>
            <input type="number"
                   name="sort_order"
                   class="w-full rounded border-gray-300"
                   value="{{ old('sort_order', 0) }}">
        </div>

        {{-- SUBMIT --}}
        <div class="flex items-center gap-3 pt-4"></div>
        <button type="submit"
                class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
            Save Project
        </button>
            <a href="{{ route('admin.projects.index') }}"
       class="px-6 py-2 rounded border border-gray-300
              text-gray-700 hover:bg-gray-100 transition">
        Cancel
    </a>
    </div>

    </form>
</div>

<script>
function previewThumbnail(e) {
    const img = document.getElementById('thumbnail-preview');
    const placeholder = document.getElementById('thumbnail-placeholder');

    img.src = URL.createObjectURL(e.target.files[0]);
    img.classList.remove('hidden');
    placeholder.classList.add('hidden');
}
</script>


<script>
function previewGallery(e) {
    const preview = document.getElementById('gallery-preview');
    preview.innerHTML = '';

    const files = Array.from(e.target.files).slice(0, 5);

    files.forEach(file => {
        const reader = new FileReader();
        reader.onload = event => {
            const wrapper = document.createElement('div');
            wrapper.className =
                'aspect-video rounded-xl overflow-hidden bg-gray-100 shadow';

            const img = document.createElement('img');
            img.src = event.target.result;
            img.className = 'w-full h-full object-cover';

            wrapper.appendChild(img);
            preview.appendChild(wrapper);
        };
        reader.readAsDataURL(file);
    });
}
</script>

</script>
</x-app-layout>
