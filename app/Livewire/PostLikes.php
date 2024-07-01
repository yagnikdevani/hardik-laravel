<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Livewire\Component;

class PostLikes extends Component
{
    public $post;
    public $likeCount;
    public $hasLiked;
    protected $listeners = ['postLiked' => 'refreshLikeStatus'];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->likeCount = $post->likers()->count();
        $this->hasLiked = Auth::user()->hasLiked($post);
    }

    public function like()
    {
        Auth::user()->like($this->post);
        $this->refreshLikeStatus();
    }

    public function unlike()
    {
        Auth::user()->unlike($this->post);
        $this->refreshLikeStatus();
    }

    public function refreshLikeStatus()
    {
        $this->likeCount = $this->post->likers()->count();
        $this->hasLiked = Auth::user()->hasLiked($this->post);
    }
    public function fetchLikers()
    {
        $this->likers = $this->post->likers()->get();
    }
    public function render()
    {
        return view('livewire.post-likes');
    }
}
