
 @extends('layouts.user')

@section('main-section')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white rounded shadow p-4">
            <h1 class="text-3xl font-bold mb-4">Add a Blog</h1>
            <form action="{{ route('blogs.store') }}" method="post" id="create-blog-form">
                @csrf
                <!-- Add your form fields here -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm border-gray-300" required>
                </div>

                <div class="mb-4">
                    <label for="author" class="block text-gray-700 font-bold mb-2">Author</label>
                    <input type="text" name="author" id="author" class="form-input rounded-md shadow-sm border-gray-300" required>
                </div>

                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-bold mb-2">Text</label>
                    {{-- <textarea name="text" id="textarea" class="form-input rounded-md shadow-sm border-gray-300" required></textarea> --}}
                    <textarea name="text"  class="form-control tinymce-editor"></textarea>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create Blog
                    </button>
                </div>
            </form>

    </div>

@endsection
