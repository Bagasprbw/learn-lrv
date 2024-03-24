<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::latest()->get();
        // $posts = Post::with(['author','category'])->latest()->get(); //mengambil data terbaru dari database
        return view('post',  [
            'judul' => "All Post",
            'posts' => $posts
        ]);
    }

    public function show(Post $post){
        return view('postt', [
            "post" => $post
            // $post adalah nama variable yang didapatkan di routenya (Route::get('/post/{post:slug}', [PostController::class, 'show']);)
        ]);
    }

    public function authorsPost(User $author){
        $judul =  "Post By Author : $author->name";
        $posts = $author->posts;
        // $posts = $author->posts->load('author','category');
        return view('post', compact("judul","posts"));
    }
}
