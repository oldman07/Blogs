<h1>All Blogs</h1>

<a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>


@foreach ($blogs as $blog)
    <div>
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->author }}</p>
        <p>{{ $blog->text }}</p>
        <p>{{ $blog->created_at }}</p>
        <a href="{{ route('blogs.destroy', $blog->id) }}" class="btn btn-danger">Delete</a>
    </div>
@endforeach

