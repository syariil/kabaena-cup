<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $new = DB::table('posts')->latest()->limit(4)->get();
        $other = DB::table('posts')->where('id', '<=',6)->orderBy('id', 'desc')->limit(6)->get();


        return view('home', ['new' => $new, 'other' => $other]);
    }

    public function post(Post $post)
    {
        $other = DB::table('posts')->where('id', '<=',6)->orderBy('id', 'desc')->limit(6)->get();
        return view('post', ['post' => $post, 'other' => $other]);
    }
}
