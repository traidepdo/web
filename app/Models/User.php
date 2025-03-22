<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Quan hệ với Video
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    // Quan hệ với Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Quan hệ với Like
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Quan hệ với VideoView
    public function views()
    {
        return $this->hasMany(VideoView::class);
    }
}
