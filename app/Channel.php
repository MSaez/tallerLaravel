<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }


}
