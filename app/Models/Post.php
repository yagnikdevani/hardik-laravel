<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelLike\Traits\Likeable;

class Post extends Model
{
    use HasFactory, Likeable;

    protected $fillable = [
        'title', 
        'body', 
        'user_id',
        'image_path',   
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getImagePathAttribute($value){
        return Storage::disk('public')->url($value);
    }
}

