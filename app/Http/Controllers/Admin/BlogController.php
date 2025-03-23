<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;

class BlogController extends Controller
{
    // List all blogs with pagination
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    // Show create form
    public function create()
    {
        $blog = '';
        return view('admin.blogs.create',compact('blog'));
    }

    // Store new blog post
    public function store(BlogRequest $request)
    {
        Blog::create($request->validated());

        return redirect(route('blog.index'))->with('success', 'Blog created successfully.');
    }

    // Show edit form
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // Update existing blog post
    public function update(BlogRequest $request, Blog $blog)
    {

        $blog->update($request->validated());

        return redirect(route('blog.index'))->with('success', 'Blog updated successfully.');
    }

    // Delete blog post
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route('blog.index'))->with('success', 'Blog deleted successfully.');
    }
}
