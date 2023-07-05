<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostDestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}
