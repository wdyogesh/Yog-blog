<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function post()
    {
        return view('posts.post');
    }

    public function AddPost(Request $request)
    {
        $this->validate($request,[
            'post_title' => 'required',
            'post_body'  => 'required',
        ]);
        $post = new Post;
        $post->post_title = $request->input('post_title');
        $post->post_body = $request->input('description');
        
        $post->slug = Str::slug($post->post_title = $request->input('post_title'), '_');
        $post->user_id = Auth::user()->id;

        $post->save();
        return redirect('/post')->with('response','Post added Successfully !!');
    }
}
