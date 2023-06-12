<h1>All Blogs</h1>

<a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>


@foreach ($blogs as $blog)
    <div>
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->author }}</p>
        <p>{{ $blog->text }}</p>
        <p>{{ $blog->created_at }}</p>
        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
        <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endforeach

