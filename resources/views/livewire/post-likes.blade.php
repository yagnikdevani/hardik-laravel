<div>
    <div class="mt-3">
        @if ($hasLiked)
            <button wire:click="unlike" class="btn btn-sm btn-danger">
                <i class="fas fa-heart"></i> Liked
            </button>
        @else
            <button wire:click="like" class="btn btn-sm btn-outline-danger">
                <i class="fas fa-heart"></i> Like
            </button>
        @endif
        <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#likesModal-{{ $post->id }}">
            <i class="fas fa-eye"></i> <span class="like-count">{{ $likeCount }}</span>
        </button>
    </div>

    <!-- Modal for displaying user names who liked the post -->
    <div wire:ignore.self class="modal fade" id="likesModal-{{ $post->id }}" tabindex="-1" aria-labelledby="likesModalLabel-{{ $post->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="likesModalLabel-{{ $post->id }}">Likes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        @foreach ($post->likers as $user)
                            <li class="list-group-item">{{ $user->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
