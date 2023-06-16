@extends('layouts.user')

@section('main-section')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4">All Blogs</h1>
        <a href="{{ route('blogs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Blog
        </a>
        <div class="mt-4">
            @foreach ($blogs as $blog)
                <div class="bg-white rounded shadow p-4 mb-4">
                    <h2 class="text-xl font-bold mb-2">{{ $blog->title }}</h2>
                    <p class="text-gray-700 text-base mb-2">{{ $blog->author }}</p>
                    <p class="text-gray-700 text-base mb-2 ">{!! $blog->text !!}</p>
                    <p class="text-gray-500 text-sm">{{ $blog->created_at }}</p>
                    <div class="mt-2">
                        <a href="{{ route('blogs.edit', $blog->id) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
