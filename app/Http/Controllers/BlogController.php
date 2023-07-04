<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'title' => 'required',
            'author' => 'required',
            'text' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->route('blogs.create')
                ->withErrors($validator)
                ->withInput($request->only($rules));
        }

        // Store the blog post
        $blog = new Blog;
        $blog->title = $request->get('title');
        $blog->author = $request->get('author');
        $blog->text = $request->get('text');
        $blog->save();

        // Redirect to the blog list or a specific page, e.g., the first blog
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // Validation rules
        $rules = [
            'title' => 'required',
            'author' => 'required',
            'text' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->route('blogs.edit', $blog)
                ->withErrors($validator)
                ->withInput($request->only($rules));
        }

        // Update the blog post
        $blog->title = $request->get('title');
        $blog->author = $request->get('author');
        $blog->text = $request->get('text');
        $blog->save();

        // Redirect to the blog list or a specific page, e.g., the first blog
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
