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
        $post = Post::all();
        // $post = Post::get();
        return view("posts.index", compact("post"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
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
        /////////////////////////   This is first way to insert data inside database    ////////////////////
            $post = new Post();     // take object from model
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();          // to save data in database
            if($post->save()):
                return view("posts.create");
            endif;
        */
        /////////////////////////   This is second way to insert data inside database    ////////////////////

        $inserted = Post::create([
            // "اسم التكست او الحقل في الداتابيز" => "اسم الحقل في الفورم"
            "title" => $request->my_title,
            "body" => $request->my_body
        ]);
        if($inserted):
            return view("posts.create");
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // findOrFail => this is function used because if user enter id is not found in database show error page is about ( Error 4040 )
        $post = Post::findOrFail($id);
        return view("posts.edit", compact("post"));
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
        $post = Post::findOrFail($id);
        // $post->column_name => in database
        // $request->input_name => in form

        /*
        /////////////////////////   This is first way to update data inside database    ////////////////////
        $post->title = $request->my_title;
        $post->body = $request->my_body;
        $post->save();
        */


        /////////////////////////   This is second way to update data inside database    ////////////////////

        $post->update([
            "title" => $request->my_title,
            "body" => $request->my_body
        ]);
        return redirect()->route("posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

    }
}
