<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'channel_id',
        'total_replies',
        'title',
        'body',
        'slug'
    ];

    // relación con usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relación con channel
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    // relación con reply
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

}
