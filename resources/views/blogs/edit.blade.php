@extends('layouts.user')

@section('main-section')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" class="bg-white rounded shadow p-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm border-gray-300" value="{{ $blog->title }}">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-bold mb-2">Author</label>
                <input type="text" name="author" id="author" class="form-input rounded-md shadow-sm border-gray-300" value="{{ $blog->author }}">
            </div>

            <div class="mb-4">
                <label for="text" class="block text-gray-700 font-bold mb-2">Text</label>
                <textarea name="text" id="text" class="form-input rounded-md shadow-sm border-gray-300">{{ $blog->text }}</textarea>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
