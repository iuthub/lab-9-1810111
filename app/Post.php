<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')->withTimestamps();
    }

    public function  posts()
    {
        return $this->belongsTo('App\Post', 'post_tag', 'tag_id', 'post_id')->withTimestamps();
    }
}