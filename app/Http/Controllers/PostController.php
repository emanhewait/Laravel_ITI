<?php

namespace App\Http\Controllers;

use App\models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::simplePaginate();

        return view('/posts/Posts', ['posts' => $posts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
        ]);
        post::create(['Title' => $request->Title, 'Description' => $request->Description, 'user_id' => Auth::user()->id]);
        return redirect()->route('showPosts');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = post::where('id', $id)->first();
        return view('/posts/showbyid')->with('posts', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update($id)
    {
        $post = Post::find($id);
        return view('posts.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, string $id)
    {
        $post = post::find($id);
        $post->update($request->except(['_method', '_token']));
        return redirect()->route('showPosts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect()->route('showPosts');
    }
}
