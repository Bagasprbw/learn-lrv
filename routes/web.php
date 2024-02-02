<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about', [
        "nama" => "bagas prabowo",
        "alamat" => "Solo",
        "photo" => "bagas.jpg"
    ]);
});

Route::get('post', function () {
    return view('post', [
        "itemotivasi" => Post::all()
    ]);
});

Route::get('post={slug}', function($slug){
    return view('postt', [
        "motivation" => Post::find($slug)
    ]);
});