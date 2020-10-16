<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ListTagPostsController;
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

Route::get('/post-blog', [PostController::class,'index']);
Route::post('/post-blog', [PostController::class,'store']);
Route::get('/',[ListTagPostsController::class,'list']);
Route::get('/tag/{tag_id}',[ListTagPostsController::class,'showPost'])->name('showPostList');
Route::get('/post/{post_id}',[PostController::class,'show'])->name('showPostName');

