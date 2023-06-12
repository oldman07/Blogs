<div class="container">
    <h1>Add a Blog</h1>
    <form action="{{ route('blogs.store') }}" method="post">
        @csrf
        <!-- Add your form fields here -->
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="author">Author</label>
        <input type="text" name="author" id="author" required>

        <label for="text">Text</label>
        <textarea name="text" id="text" required></textarea>

        <button type="submit">Create Blog</button>
    </form>
</div>

