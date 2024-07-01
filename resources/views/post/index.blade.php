@extends('layouts.app')

@section('content')
<style>
.fixed-size-image {
    width: 100px;
    height: 100px;
    object-fit: cover; 
}
</style>
    <div class="page-content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>

        <div class="mt-4">
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->body }}</p>
                        @if ($post->image_path)
                            <img src="{{ asset($post->image_path) }}" alt="Post Image" class="img-fluid fixed-size-image">
                        @endif
                        <p class="text-muted">Posted by {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</p>

                        <livewire:post-likes :post="$post">
                        {{-- @livewire('post-likes', ['post' => $post]) --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
