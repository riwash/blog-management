<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blogList()
    {
        $blogs = Blog::paginate(50);
        return response()->json($blogs);
    }

    public function blog($id)
{
    try {
        $blog = Blog::findOrFail($id);

        return response()->json([
            'data' => $blog,
            'message' => 'Blog retrieved successfully',
        ], 200);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json([
            'message' => 'Blog not found',
        ], 404);
    } catch (\Throwable $t) {
        return response()->json([
            'message' => 'An error occurred while retrieving the blog',
            'error' => $t->getMessage(),
        ], 500);
    }
}
}
