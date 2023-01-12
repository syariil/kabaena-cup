<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        return view('admin.post.post');
    }

    public function post(Request $request)
    {
        $request -> validate([
            'title' => 'required|min:4',
            'post' => "required|min:50"
        ]);

        if(Auth::user()->username === 'sya_riil')
        {
            $writer = 'Muhammad Syahril';
        } elseif(Auth::user()->username === 'ayub'){
            $writer = 'Ayub Mubarak';
        } else{
            $writer = 'Resky D';
        }

        $get_half = strrpos(substr($request->post, 0, floor(strlen($request->post) / 8)), ' ') + 1;
        $short_post = substr($request->post, 0, $get_half);

        Post::create([
            'writer' => $writer,
            'title' => $request->title,
            'short_post' => $short_post,
            'post' => $request->post
        ]);

        return redirect()->route('admin.index')->with('success', 'post done');
    }
}
