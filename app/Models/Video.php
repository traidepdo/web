<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'youtube_link',
        'description',
        'thumbnail',
        'category_id'
    ];
    // Quan hệ với danh mục
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Quan hệ với bình luận
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Quan hệ với lượt thích
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Quan hệ với lượt xem
    public function views()
    {
        return $this->hasMany(VideoView::class);
    }
}
