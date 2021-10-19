<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function data(){
    $p = Post::all();
    return view('tampil_post', compact('p'));
    }
}
