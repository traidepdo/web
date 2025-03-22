<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoView extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_id',
        'user_id',
        'ip_address'
    ];

    // Quan hệ với video
    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    // Quan hệ với người dùng (nếu có)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
