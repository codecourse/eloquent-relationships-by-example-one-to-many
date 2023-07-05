<?php

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

Route::get('/', function () {
    $user = User::find(1);

    dd($user->posts);
});

Route::get('/create', function () {
    $user = User::find(1);

    $user->posts()->create([
        'body' => 'A second post'
    ]);
});

Route::get('/create/alt', function () {
    $user = User::find(1);

    $post = Post::make([
        'body' => 'A third post'
    ]);

    $user->posts()->save($post);
});
