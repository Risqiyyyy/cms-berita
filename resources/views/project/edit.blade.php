@extends('layouts.vertical', ['title' => 'Post Edit', 'sub_title' => 'Post', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
@section('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
<style>
    .dropzone {
        position: relative;
        overflow: hidden;
    }
    .dropzone img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; 
    }
</style>
@section('content')
<form action="{{ route('list.update', $post->id) }}" method="POST" enctype="multipart/form-data" id="contentForm" class="grid lg:grid-cols-4 gap-6">
    @csrf
    @method('PUT')

    <div class="col-span-1 flex flex-col gap-6">
        <label for="">Image</label>
        <div class="text-gray-700" id="imageDropzone">
            <div class="fallback">
                <input name="images[]" type="file" multiple="multiple">
            </div>
        </div>

        <div class="card p-6">
            <div class="flex flex-col gap-3">
                <div class="">
                    <label for="select-label-category" class="mb-2 block">Category</label>
                    <select id="select-label-category" name="category_id" class="form-select" required>
                        <option value="">Select</option>
                        @foreach ($categori as $category)
                            <option value="{{ $category->id }}" {{ $post->kategori_id == $category->id ? 'selected' : '' }}>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <label for="select-label-subcategory" class="mb-2 block">Subcategory</label>
                    <select id="select-label-subcategory" name="subcategory_id" class="form-select" {{ $post->sub_category_id ? '' : 'disabled' }}>
                        <option value="">Select Subcategory</option>
                        <!-- Subcategories will be populated via JavaScript -->
                    </select>
                    @error('subcategory_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card p-6">
            <div class="flex flex-col gap-3">
                <div class="">
                    <label for="tags" class="mb-2 block">Tags</label>
                    @foreach ($tags as $tag)
                        <div class="flex items-center">
                            <input type="checkbox" id="tag-{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}" class="form-checkbox" {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'checked' : '' }}>
                            <label for="tag-{{ $tag->id }}" class="ml-2">{{ $tag->nama_tags }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Content Information Section -->
    <div class="lg:col-span-3 space-y-6">
        <div class="card p-6">
            <div class="flex justify-between items-center mb-4">
                <p class="card-title">Update Detail Content</p>
                <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                    <i class="mgc_transfer_line"></i>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="">
                    <label for="title" class="mb-2 block">Title</label>
                    <input type="text" id="title" name="title" class="form-input" placeholder="Enter Title" value="{{ old('title', $post->title) }}" aria-describedby="input-helper-text">
                </div>

                <div class="card">
                    <div class="p-6">
                        <label for="editor-content" class="mb-2 block">Content</label>
                        <input type="hidden" id="editor-content" name="content" value="{{ old('content', $post->content) }}">
                        <div id="snow-editor" style="height: 300px;"></div>
                    </div>
                </div>

                <div class="">
                    <label for="status" class="mb-2 block">Status <span class="text-red-500">*</span></label>
                    <div class="flex gap-x-6">
                        <div class="flex">
                            <input type="radio" name="status" value="private" class="form-radio" id="private" {{ old('status', $post->status) == 'private' ? 'checked' : '' }}>
                            <label for="private" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Private</label>
                        </div>
                        
                        <div class="flex">
                            <input type="radio" name="status" value="schedule" class="form-radio" id="schedule" {{ old('status', $post->status) == 'schedule' ? 'checked' : '' }}>
                            <label for="schedule" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Schedule</label>
                        </div>
                        
                        <div class="flex">
                            <input type="radio" name="status" value="public" class="form-radio" id="public" {{ old('status', $post->status) == 'public' ? 'checked' : '' }}>
                            <label for="public" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Public</label>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-3">
                    <div class="">
                        <label for="start-date" class="mb-2 block">Start Date</label>
                        <input type="date" id="start-date" name="start_date" class="form-input" value="{{ old('start_date', $post->start_date) }}">
                    </div>
                    <div class="">
                        <label for="start-time" class="mb-2 block">Start Time</label>
                        <input type="time" id="start-time" name="start_time" class="form-input" value="{{ old('start_time', $post->start_time) }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Section -->
        <div class="card p-6">
            <div class="flex justify-between items-center mb-4">
                <p class="card-title">SEO</p>
            </div>

            <div class="flex flex-col gap-3">
                <div class="">
                    <label for="keyword" class="mb-2 block">Keyword</label>
                    <input type="text" id="keyword" name="keyword" class="form-input" value="{{ old('keyword', $post->keyword) }}" aria-describedby="input-helper-text">
                </div>

                <div class="">
                    <label for="description" class="mb-2 block">Description</label>
                    <input type="text" id="description" name="description" class="form-input" value="{{ old('description', $post->description) }}" aria-describedby="input-helper-text">
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button Section -->
    <div class="lg:col-span-4 mt-5">
        <div class="flex justify-start gap-3">
            <a href="{{ route('list.create') }}" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none">
                Cancel
            </a>
            <button type="submit" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-600 focus:outline-none">
                Save
            </button>
        </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('select-label-category');
    const subcategorySelect = document.getElementById('select-label-subcategory');

    categorySelect.addEventListener('change', function() {
        const categoryId = this.value;

        subcategorySelect.innerHTML = '<option selected>Loading...</option>';
        subcategorySelect.disabled = true;

        if (categoryId) {
            fetch(`/get-subcategories/${categoryId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok: ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    subcategorySelect.innerHTML = '<option selected>Select a subcategory</option>';
                    if (data.length > 0) {
                        data.forEach(subcategory => {
                            const option = document.createElement('option');
                            option.value = subcategory.id;
                            option.textContent = subcategory.nama_sub_kategori;
                            subcategorySelect.appendChild(option);
                        });
                        subcategorySelect.disabled = false;
                    } else {
                        subcategorySelect.innerHTML = '<option selected>No subcategories found</option>';
                    }
                })
                .catch(error => {
                    subcategorySelect.innerHTML = '<option selected>No subcategories found</option>';
                });
        } else {
            subcategorySelect.innerHTML = '<option selected>Select a category first</option>';
        }
    });
});
</script>
@endsection

@section('script')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var quill = new Quill('#snow-editor', {
            theme: 'snow'
        });

        var existingContent = document.getElementById('editor-content').value;
        quill.root.innerHTML = existingContent;

        document.getElementById('contentForm').addEventListener('submit', function() {
            var editorContent = quill.root.innerHTML;
            document.getElementById('editor-content').value = editorContent;
        });
    });
</script>
@endsection
