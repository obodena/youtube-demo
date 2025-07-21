<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\controllers\usercontroller;



Route::get('/', function () {
    $posts = Post::all();
    return view('home' , ['posts' => $posts]);
});
Route::post('/register',[usercontroller::class,'register']);
Route::post('/logout',[usercontroller::class,'logout']);
Route::post('/login',[usercontroller::class,'login']);

Route::post('/create-post',[postController::class,'createPost']);

