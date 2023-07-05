<?php

use App\Http\Controllers\PostDestroyController;
use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostStoreController;
use App\Models\Post;
use App\Models\User;
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

Route::get('/posts', PostIndexController::class);
Route::post('/posts', PostStoreController::class);
Route::delete('/posts/{post}', PostDestroyController::class);

// Route::get('/', function () {
//     $user = User::find(1);

//     // dd($user->posts->count());

//     foreach($user->posts as $post) {
//         dump($post);
//     }
// });

// Route::get('/create', function () {
//     $user = User::find(1);

//     $user->posts()->create([
//         'body' => 'A second post'
//     ]);
// });

// Route::get('/create/alt', function () {
//     $user = User::find(1);

//     $post = Post::make([
//         'body' => 'A third post'
//     ]);

//     $user->posts()->save($post);
// });

// Route::get('/posts', function () {
//     $user = User::find(1);

//     return view('posts.index', [
//         'posts' => $user->latestPosts,
//     ]);
// });

// Route::get('/delete/{post}', function (Post $post) {
//     $user = User::find(1);

//     // $post->delete();

//     // $userPost = $user->posts()->where('id', $post->id)->first();
//     // $userPost->delete();
//     $user->posts()->find($post)->first()?->delete();
// });

// Route::get('/update/{post}', function (Post $post) {
//     $user = User::find(1);

//     // authorize

//     $user->posts()->find($post)->first()->update([
//         'body' => 'Another new body'
//     ]);

//     // $post->update([
//     //     'body' => 'A new body'
//     // ]);
// });
