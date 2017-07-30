<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
         'title','body',
    ];
    protected $casts = [
    'title'=> 'string',
    'body'=> 'text',
    ];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
