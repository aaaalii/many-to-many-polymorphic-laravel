<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::with('tags')->get();

        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = Post::create([
        //     'title' => 'title 03',
        //     'description' => 'description post 3'
        // ]);

        // $post->tags()->create([
        //     'tag_name' => '#post1'
        // ]);

        //---------------------------------------------------

        $post = Post::findOrFail(4);

        $post->tags()->attach(3);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
