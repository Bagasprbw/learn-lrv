<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "bagas prabowo",
        "alamat" => "Solo",
        "photo" => "bagas.jpg"
    ]);
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [ 
        'judul' => "All Category",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('post', [
        'judul' => "Post By Category : $category->name",
        'posts' => $category->posts
        // 'posts' => $category->posts->load('author','category')
    ]);
});

// Route::get('/authors/{author:username}',function(User $author){
//     return view('post', [
//         'posts' => $author->posts
//     ]);
// });
Route::get('/authors/{author:username}', [PostController::class, 'authorsPost']);