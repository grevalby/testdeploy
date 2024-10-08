<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\DetailPostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //return response()->json(['data' => $posts]);
        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new DetailPostResource($post);
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }
 
    public function edit(Post $post)
    {
        //
    }

 
    public function update(Request $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
