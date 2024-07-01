<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function like(Post $post)
    {
        Auth::user()->like($post);

        return response()->json(['message' => 'Post liked successfully.']);
    }

    public function unlike(Post $post)
    {
        Auth::user()->unlike($post);

        return response()->json(['message' => 'Post unliked successfully.']);
    }
    public function getLikes(Post $post)
    {
        try {
            $likers = $post->likers()->get();
            return response()->json(['users' => $likers]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
