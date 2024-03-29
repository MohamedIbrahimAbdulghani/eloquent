<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // $post = Post::get();
        return view("posts/index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          
        /*
        ///  this is first way to insert data inside database
            $post = new Post();
            $post->title = $request->title;
            $post->body = $request->body;
            if($post->save()):
                return view("posts/create");
            endif;
        */

        /// this is second way to insert data in database
        Post::create([
            "title"=>$request->title,
            "body"=>$request->body
        ]);
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $post = Post::onlyTrashed()->get();
        return view("posts/show_delete", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("posts/edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $post = Post::findOrFail($id);
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();


        Post::findOrFail($id)->update([
            "title"=>$request->title,
            "body"=>$request->body,
        ]);
        return redirect()->route("posts.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Post::findOrFail($id)->truncate();    // if you want all item from database and return id from 0
        Post::findOrFail($id)->delete();
        return redirect()->route("posts.index");
    }

    // this function to restore the deleted data from database
    public function restore($id) {
        Post::onlyTrashed()->where("id", $id)->restore();
        return redirect()->back();
    }

    // this function to delete data from database forever
    public function forceDelete($id) {
        Post::onlyTrashed()->where("id", $id)->forceDelete();
        return redirect()->back();
    }
}
