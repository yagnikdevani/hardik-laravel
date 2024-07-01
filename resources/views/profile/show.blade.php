@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Profile</h1>

        <h2>Posts</h2>
        <div class="mt-4">
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->body }}</p>
                        <p class="text-muted">Posted on {{ $post->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
