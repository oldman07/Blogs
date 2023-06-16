 {{-- @extends('layouts.user')

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
                    <textarea name="text" id="text" class="form-input rounded-md shadow-sm border-gray-300" required></textarea>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create Blog
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection --}}





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
            {{-- <script>
                tinymce.init({
                  selector: 'textarea#textarea',
                  plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                  tinycomments_mode: 'embedded',
                  tinycomments_author: 'Author name',
                  mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                  ]
                });
              </script> --}}
        </div>
    </div>

@endsection
{{-- @extends('layouts.user')

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
                    <textarea name="text" id="text" class="form-input rounded-md shadow-sm border-gray-300" required></textarea>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create Blog
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#text',
            plugins: 'link image code',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | code'
        });

        // Add an event listener to the form's submit event
        document.getElementById('create-blog-form').addEventListener('submit', function (event) {
            // Update the textarea value with the TinyMCE editor's content
            document.getElementById('text').value = tinymce.get('text').getContent();
        });
    </script>
@show --}}
