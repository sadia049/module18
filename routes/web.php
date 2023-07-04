<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\insertController;
use App\Http\Controllers\postController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert',[insertController::class,'insertData']);
Route::get('/insertpost',[insertController::class,'insertPost']);
Route::get('/getpost',[insertController::class,'getPost']);
Route::get('/retrieve/{id}',[Post::class,'retrieveDatafromCategory']);
Route::get('/posts/{id}/delete',[postController::class,'deletePost']);
Route::get('/posts/softdelete',[Post::class,'getsoftdelete']);
Route::get('/categories/{id}/posts',[postController::class,'getsoftdelete']);
Route::get('/postdata',[postController::class,'getAllData']);
Route::get('/categories/{id}/posts',[categoryController::class,'getData']);
Route::get('/latestpost/{id}',[Category::class,'latestPost']);
Route::get('/latestWithCtg',[categoryController::class,'latestPostwithCtg']);

//Route::get('/livetest',[postController::class,'store']);